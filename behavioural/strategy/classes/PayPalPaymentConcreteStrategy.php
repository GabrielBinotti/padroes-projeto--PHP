<?php

namespace behavioural\strategy\classes;

use behavioural\strategy\interfaces\PaymentStrategy;

class PayPalPaymenteConcreteStrategy implements PaymentStrategy
{

    private $email;
    private $password;

    public function __construct($email, $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    public function pay($amount)
    {
        echo "Paying " . $amount . " using PayPal for user " . $this->email . "\n";
    }
}