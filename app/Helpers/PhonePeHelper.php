<?php
header('Content-Type: text/html; charset=utf-8');
if(!function_exists('getPhonePePaymentUrl')){
    function getPhonePePaymentUrl($peurl, $key, $keyindex, $data) {
        $data_json = json_encode($data);
        $data_base64 = base64_encode($data_json);
        $data_sha256 = hash('sha256', ($data_base64."/pg/v1/pay".$key));
        $data_xvalue = $data_sha256."###".$keyindex;

        $post_data = array();

        $data_req1 = array(
            "request" => $data_base64
        );
        $headers = [
            "Content-Type" => "application/json",
            "X-VERIFY" => $data_xvalue,
            "accept" => "application/json"
        ];

        $response = commanCurlCall($peurl, 'POST', $data_req1, $headers);
        return json_decode(json_encode($response['response'] ?? null));
    }
}
