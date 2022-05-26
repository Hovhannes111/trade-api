<?php
include('Methods.php');

class Account extends Methods
{

    public function Account()
    {
        $res = $this->apiRequest->setRequest(array(
            'method' => 'account',
        ));
        
        return $res['balances'];
    }
}