<?php

require('Methods.php');

class OrderCreate extends Methods
{
    public function index($req = array())
    {
        $res = $this->apiRequest->setRequest(array(
            'method' => 'order_create',
            'post' => $req,
        ));

        return $res;
    }
}