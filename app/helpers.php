<?php

use Illuminate\Support\Facades\Redis;
use GuzzleHttp\Psr7;
use GuzzleHttp\Client;

function getUid($user_id)
{
    return uniqid() . '-' . time() . rand(1000, 100000) .  '-' . base64_encode($user_id);
}

function get_current_exposure_from_redis($user_id)
{
    $redis_key_for_exposure = "current_exposure_$user_id";
    $current_exposure = Redis::get($redis_key_for_exposure);
    if(!empty($current_exposure) && $current_exposure!=NULL)
    {
        $current_exposure = json_decode($current_exposure,true);
    }
    else
    {
        $current_exposure = [];
    }
    return $current_exposure;
}

?>
