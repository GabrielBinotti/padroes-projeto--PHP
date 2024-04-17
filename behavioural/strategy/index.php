<?php

use behavioural\strategy\classes\CreditCarPaymentConcreteStrategy;
use behavioural\strategy\classes\PaymentContext;
use behavioural\strategy\classes\PayPalPaymenteConcreteStrategy;

require_once "../../vendor/autoload.php";


$payment = new PaymentContext(new PayPalPaymenteConcreteStrategy('gabriel@hotmail.com', '123456789'));
$payment->executePayment(100);

$payment->setStrategy(new CreditCarPaymentConcreteStrategy(1254458,457,'12/24'));
$payment->executePayment(54211);
