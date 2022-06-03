<?php

require('requests/ApiRequest.php');

class Methods
{
    public $apiRequest;

    public function __construct()
    {
        $this->apiRequest = new ApiRequest();
    }

}