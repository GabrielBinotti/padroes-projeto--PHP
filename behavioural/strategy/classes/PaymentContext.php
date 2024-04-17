<?php

namespace behavioural\strategy\classes;

use behavioural\strategy\interfaces\PaymentStrategy;

class PaymentContext
{
    private $paymentStrategy;

    public function __construct(PaymentStrategy $strategy)
    {
        $this->paymentStrategy = $strategy;
    }

    public function setStrategy(PaymentStrategy $strategy) {
        $this->paymentStrategy = $strategy;
    }

    public function executePayment($amount)
    {
        $this->paymentStrategy->pay($amount);
    }
}
