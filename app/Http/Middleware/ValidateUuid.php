<?php

namespace App\Http\Middleware;

use Closure;
use App\Http\Traits\ResponseHandler;
use App\Models\TempUuid;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class ValidateUuid
{
    use ResponseHandler;
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $date = new \DateTime;
        $date->modify('-30 seconds');
        $start_time = $date->format('Y-m-d H:i:s');
        $date = new \DateTime;
        $end_time = $date->format('Y-m-d H:i:s');
        $temp_id = TempUuid::where('uuid', $request->input('token'))->whereBetween('created_at', [$start_time, $end_time])->first();
        \Log::info("ValidateUuid BACK end temp_id==============================".$temp_id );
        if (empty($temp_id)) {
           \Log::info("VALIDATE UUID FAILED=====================".round(microtime(true) * 1000));
            $timestamp = round(microtime(true) * 1000);
            return response()->json([
                'errorCode' => 6,
                'errorDescription' => 'Token not found',
                'operatorId' =>  intval(env('OPERATOR_ID')),
                'timestamp' => "$timestamp",
                'roundId' => intval($request->input('roundId')),
                'uid' => $request->input('uid'),
                'token' => $request->input('token'),
                'transactionId' => $request->input('transactionId'),
                'currency' => $request->input('currency'),
                'balance'=>0.0,                
            ], 200);
        }

        $user_id = $temp_id->user_id;
        $ip_address = $temp_id->ip_address;
        $credits = $temp_id->credits;
        
        $request->merge(compact('ip_address'));
        $request->merge(compact('user_id'));
        $request->merge(compact('credits'));
        $temp_id->delete();
        \Log::info("ValidateUuid BACK end=======".round(microtime(true) * 1000)."=======".json_encode($request->all()));
        return $next($request);
    }
}
