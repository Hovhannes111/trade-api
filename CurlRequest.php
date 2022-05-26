<?php 

class CurlRequest
{
    /**
     * @link
     */
    private $apiUrl = "https://payeer.com/api/trade/";

    private function curlRequest($post = '', $sign = '',$req = array())
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->apiUrl . $req['method']);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, false);
        //curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Content-Type: application/json",
            "API-ID: ".$this->arParams['id'],
            "API-SIGN: ".$sign
        ));

        $response = curl_exec($ch);
        curl_close($ch);

        return $response;
    }

    public function getCurlRequest($post = '', $sign = '', $arr = [])
    {
        return $this->curlRequest($post, $sign, $arr);
    }
}