<?php 
require_once 'CurlRequest.php';

class ApiRequest
{
    private $arParams = array();
    private $arError = array();
    private $curlRequest;


    public function __construct($params = array())
    {
        $this->arParams = $params;
        $this->curlRequest = new CurlRequest;
    }

    private function Request($req = array())
    {
        $msec = round(microtime(true) * 1000);
        $req['post']['ts'] = $msec;

        $post = json_encode($req['post']);
        $sign = hash_hmac('sha256', $req['method'].$post, $this->arParams['key']);
        
        $response = $this->curlRequest->getCurlRequest($post, $sign, $req);

        $arResponse = json_decode($response, true);

        if ($arResponse['success'] !== true)
        {
            $this->arError = $arResponse['error'];
            // throw new Exception($arResponse['error']['code']);
        }

        return $arResponse;
    }

    public function GetError()
    {
        return $this->arError;
    }

    public function setRequest($arr = [])
    {
        return $this->Request($arr);
    }
}