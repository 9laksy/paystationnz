<?php

namespace Laks\Paystation;

class Transaction {

    public $transactionId;
    public $merchantSession;
    public $merchantReference;
    public $digitalOrderUrl;
    public $amount;

    public $hasError;
    public $errorCode;
    public $errorMessage;
    public $lookupErrorCode;

    public $digitalOrderTime;
    public $paymentRequestTime;

    public $transactionTime;
    public $testMode;
    public $cardNo;
    public $cardExp;
    public $token;
    public $cardType;
    public $requestIp;
    public $timeout;
    public $paystationId;
    public $gatewayId;

    public function __construct() {}
}
