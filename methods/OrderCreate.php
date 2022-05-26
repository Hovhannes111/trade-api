<?php
include('Methods.php');

class OrderCreate extends Methods
{
    public function OrderCreate($req = array())
    {
        $res = $this->apiRequest->setRequest(array(
            'method' => 'order_create',
            'post' => $req,
        ));

        return $res;
    }
}