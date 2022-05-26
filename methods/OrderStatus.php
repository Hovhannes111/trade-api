<?php
include('Methods.php');

class OrderStatus extends Methods
{
    public function OrderStatus($req = array())
    {
        $res = $this->apiRequest->setRequest(array(
            'method' => 'order_status',
            'post' => $req,
        ));

        return $res['order'];
    }
}