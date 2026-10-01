<?php
    use Illuminate\Support\Facades\Log;

    if(!function_exists('getCashfreePaymentUrl')){
        function getCashfreePaymentUrl($csurl, $data){
            $cust_data = array(
                "customer_id" => $data['customer_id'],
                "customer_phone" => $data['customer_phone'],
                "customer_name" => $data['customer_name'],
                "customer_email" => $data['customer_email']
            );

            $return_data = array(
                "return_url" => $data['returnUrl']
            );

            $data_req1 = array(
                "order_id" => $data['order_id'],
                "order_amount" => $data['order_amount'],
                "order_currency" => "INR",
                "customer_details" => $cust_data,
                "order_meta" => $return_data,
                "order_note" => $data['order_note']
            );
            $headers = array(
                "accept" => "application/json",
                "Content-Type" => "application/json",
                "x-api-version" => "2022-09-01",
                "x-client-id" => config('constant.CASHFREE_APP_ID'),
                "x-client-secret" => config('constant.CASHFREE_SECRET_KEY')
            );

            $response = commanCurlCall($csurl, 'POST', $data_req1, $headers);
            return $response['response'] ?? null;
        }
    }

    if(!function_exists('getOrderData')){
        function getOrderData($csurl){
            $headers = array(
                "accept" => "application/json",
                "x-api-version" => "2022-09-01",
                "x-client-id" => config('constant.CASHFREE_APP_ID'),
                "x-client-secret" => config('constant.CASHFREE_SECRET_KEY')
            );

            $response = commanCurlCall($csurl, 'POST', [], $headers);
            return $response['response'] ?? null;
        }
    }
