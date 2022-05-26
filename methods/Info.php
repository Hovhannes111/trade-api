<?php
include('Methods.php');

class Info extends Methods
{
    public function info()
    {
        $res = $this->apiRequest->setRequest(array(
            'method' => 'info', 
        ));
        return $res;
    }
}

$x = new Info();
echo "<pre>";
print_r($x->info());