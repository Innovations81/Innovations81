<?php
namespace App\Http\Traits;
use Plivo\RestClient;
use Plivo\Exceptions\PlivoRestException;

trait SendSmsTrait {

    public function sendsms($to,$message) {
      $data = [];
      $status = false;
      $msg = '';
      try {
        $client = new RestClient(env("PLIVO_AUTH_ID"),env("PLIVO_AUTH_TOKEN"));
        try {
          $response = $client->messages->create(
             [
              "src" => env("PLIVO_SOURCE_NUMBER"),
              "dst" => $to,
              "text" => $message,
              "url"=> "",
            ]
          );

          if(isset($response) && $response != null){
             if($response->statusCode =="202"){
                $status = true;
                $msg =  $response->message;
              }else{
                $status = false;
                $msg =  $response->message;
              }
          }

        }
        catch(PlivoRestException $ex) {
          $status = false;
          $msg = $ex->getMessage();
        }
      }
      catch(PlivoRestException $ex) {
          $status = false;
          $msg = $ex->getMessage();
      }
      return json_encode(['status' => $status , 'message' => $msg]);
    }
}

?>
