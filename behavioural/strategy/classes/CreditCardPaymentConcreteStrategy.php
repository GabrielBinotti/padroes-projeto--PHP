<?php

namespace behavioural\strategy\classes;

use behavioural\strategy\interfaces\PaymentStrategy;

class CreditCarPaymentConcreteStrategy implements PaymentStrategy
{
    private $cardNumber;
    private $cvv;
    private $expiryDate;

    public function __construct($cardNumber, $cvv, $expiryDate)
    {
        $this->cardNumber = $cardNumber;
        $this->cvv = $cvv;
        $this->expiryDate = $expiryDate;
    }

    public function pay($amount)
    {
        // Processamento do pagamento via cartão de crédito
        echo "Paying " . $amount . " using Credit Card with number " . $this->cardNumber . "\n";
    }
}
