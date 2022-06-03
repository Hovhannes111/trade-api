<?php

require('Methods.php');

class OrderStatus extends Methods
{
    public function index($req = array())
    {
        $res = $this->apiRequest->setRequest(array(
            'method' => 'order_status',
            'post' => $req,
        ));

        return $res['order'];
    }
}