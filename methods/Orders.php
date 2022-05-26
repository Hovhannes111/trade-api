<?php
include('Methods.php');

class Orders extends Methods
{
    public function Orders($pair = 'BTC_USDT')
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