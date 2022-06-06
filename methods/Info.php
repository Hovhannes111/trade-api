<?php

require_once 'Methods.php';

class Info extends Methods
{
    public function index()
    {
        $res = $this->apiRequest->setRequest(array(
            'method' => 'info', 
        ));
        return $res;
    }
}
