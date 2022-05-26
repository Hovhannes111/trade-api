<?php
include('Methods.php');

class MyOrders extends Methods
{
    public function MyOrders($req = array())
    {
        $res = $this->apiRequest->setRequest(array(
            'method' => 'my_orders',
            'post' => $req,
        ));

        return $res['items'];
    }
}