<?php

use Illuminate\Support\Facades\Log;

if(!function_exists('getlyrapaymenturl')){
    function getlyrapaymenturl($peurl, $data){
        $headers = [
          "Content-Type" => "application/json",
          'Authorization' => 'Basic ' . base64_encode(config('constant.LYRA_SHOP_ID').":".config('constant.LYRA_API_KEY')),
          "accept" => "application/json"
        ];

        $response = commanCurlCall($peurl, 'POST', $data, $headers);
        return json_decode(json_encode($response['response'] ?? null));
    }
}
