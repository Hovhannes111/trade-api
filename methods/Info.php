<?php

require('Methods.php');

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

$x = new Info();
echo "<pre>";