<?php

require('Methods.php');

class MyOrders extends Methods
{
    public function index($req = array())
    {
        $res = $this->apiRequest->setRequest(array(
            'method' => 'my_orders',
            'post' => $req,
        ));

        return $res['items'];
    }
}