<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use GuzzleHttp\Client;
use App\Models\Game;
use GuzzleHttp\Psr7;
use App\Models\GameTransaction;

class DownloadRoundDetail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    private $user_id;
    private $round_id;
    private $transaction_id;
    public $tries = 1;
    public $client ;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($user_id, $round_id, $transaction_id)
    {
        $this->user_id = $user_id;
        $this->round_id = $round_id;
        $this->transaction_id= $transaction_id;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {

        \Log::info('IN DOWNLOAD EZUGI ROUND DETAILS Function');
        $transaction_placed_at = GameTransaction::where('round_id',$this->round_id)->orderBy('id','asc')->pluck('placed_at')->first();
        $request_new = [
            "DataSet" => "per_round_report",
            'APIID' =>  env('EZUGI_API_ID'),
            'APIUser' => env('EZUGI_API_USER'),
            'OperatorID' =>  intval(env('OPERATOR_ID')),
            'UID' => $this->user_id,
            'Format' => 'json',
            'RoundID' => $this->round_id,
            'StartTime'=> $transaction_placed_at,
            'EndTime'=> date('Y-m-d H:i:s',strtotime("$transaction_placed_at + 15 minute")),
        ];
        $tokenhash =hash('sha256', env('EZUGI_API_APIACCESS').http_build_query($request_new));
        $this->client = new \GuzzleHttp\Client();
        $request_new['RequestToken'] = $tokenhash;
        \Log::info('ROUND-DETAILS REQUEST'.json_encode($request_new));
        $response = $this->saveRoundDetail($request_new);
    }

    public function saveRoundDetail($request_new,$count=0){ 
        try 
        {
            $response = $this->client->request('POST', env('EZUGI_BO_API_ENDPOINT'), [
                'form_params' =>  $request_new
            ]);
            $status = $response->getStatusCode();
            $ezugi_round_details = $response->getBody();

            $decoded_json = json_decode($ezugi_round_details,true);

            if(isset($decoded_json['data']) && !empty($decoded_json['data']))
            {
                \Log::info('ROUND-DETAILS RESPONSE'.$ezugi_round_details);
                $data = [];
                $data['ezugi_round_details'] = $ezugi_round_details;
                if(!empty($ezugi_round_details)){
                    $data['ezugi_round_details_downloaded'] = 1;
                }
                GameTransaction::where('round_id',$this->round_id)->update($data);
                \Log::info("======Ezugi round details not found updated======");
            }
            else{
                \Log::info("======Ezugi round details not found======".$ezugi_round_details);
            }
            return true;
        } 
        catch (Exception $e) 
        {
            $count++;
            if($count > 8){
                return false;
            }else{
                $this->saveRoundDetail($request_new,$our_hash,$count);
            } 
            \Log::error('ERROR IN DOWNLOAD EZUGI ROUND DETAILS'.$e->getMessage());
        }
    }
}

?>
