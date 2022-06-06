<?php

require_once 'Methods.php';

class Account extends Methods
{

    public function index()
    {
        $res = $this->apiRequest->setRequest(array(
            'method' => 'account',
        ));
        
        return $res['balances'] ?? [];
    }
}