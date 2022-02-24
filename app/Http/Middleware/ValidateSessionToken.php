<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\SessionUuid;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class ValidateSessionToken
{
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
        $end_time = $date->format('Y-m-d H:i:s');

        $session_uid = SessionUuid::where('uuid', $request->input('token'))->where('expires_at', '>=', $end_time)->first();
        $timestamp = round(microtime(true) * 1000);
       // $session_uid = SessionUuid::where('uuid', $request->input('token'))->first();
        if (empty($session_uid)) {
            return response()->json([
                'operatorId' =>  intval(env('OPERATOR_ID')),
                'roundId' => intval($request->input('roundId')),
                'uid' => $request->input('uid'),
                'token' => $request->input('token'),
                'transactionId' => $request->input('transactionId'),
                'currency' => $request->input('currency'),
                'errorCode' => 6,
                'balance'=>0.0,
                'errorDescription' => 'Token not found',
                'operatorId' =>  intval(env('OPERATOR_ID')),
                'timestamp' => "$timestamp"
            ], 200);
        }
        $uid  = $request->input('uid');
        $user_id = $session_uid->user_id;
         $timestamp = round(microtime(true) * 1000);
        if ($uid !=  $user_id) {
            return response()->json([
                'operatorId' =>  intval(env('OPERATOR_ID')),
                'roundId' => intval($request->input('roundId')),
                'uid' => $request->input('uid'),
                'token' => $request->input('token'),
                'transactionId' => $request->input('transactionId'),
                'currency' => $request->input('currency'),
                'errorCode' => 7,
                'balance'=>0.0,
                'errorDescription' => 'User not found.',
                'timestamp' => "$timestamp"
            ], 200);
        }


        $session_id = $session_uid->id;
        $request->merge(compact('user_id'));
        $request->merge(compact('session_id'));
        \Log::info("ValidateUuid Session Token=======".round(microtime(true) * 1000)."=======".json_encode($request->all()));
        return $next($request);
    }
}
