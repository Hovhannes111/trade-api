<?php

require_once 'Methods.php';

class Orders extends Methods
{
    public function index($pair = 'BTC_USDT')
    {
        $res = $this->apiRequest->setRequest(array(
            'method' => 'orders',
            'post' => array(
                'pair' => $pair,
            ),
        ));

        return $res['pairs'] ?? [];
    }

    public function OrderCreate($req = array())
    {
        $res = $this->apiRequest->setRequest(array(
            'method' => 'order_create',
            'post' => $req,
        ));

        return $res ?? [];
    }

    public function MyOrders($req = array())
    {
        $res = $this->apiRequest->setRequest(array(
            'method' => 'my_orders',
            'post' => $req,
        ));

        return $res['items'] ?? [];
    }

    public function OrderStatus($req = array())
    {
        $res = $this->apiRequest->setRequest(array(
            'method' => 'order_status',
            'post' => $req,
        ));

        return $res['order'] ?? [];
    }
}