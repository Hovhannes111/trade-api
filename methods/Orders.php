<?php

require('Methods.php');

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

        return $res['pairs'];
    }
}