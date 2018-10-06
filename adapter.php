<?php


interface Adapter
{
    public function sent();
}

class BraintreeAdapter implements Adapter
{

    public function sent()
    {
        print ('send data to braintree');
        // TODO: Implement sent() method.
    }
}

class PayflowAdapter implements Adapter
{
    public function sent()
    {
        echo('send data tp payflow');
        // TODO: Implement sent() method.
    }
}

class Payment
{
    protected $payment;

    public function __construct($payment = null)
    {
        $this->payment = $payment;
    }

    public function doPayment()
    {
        if (!$this->payment) {

           $do = new BraintreeAdapter();
           $do->sent();
           return;
        }

        $do = new PayflowAdapter();
        $do->sent();
        return;

    }
}

$test = new Payment('visa');
$test->doPayment();