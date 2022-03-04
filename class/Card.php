<?php
class CreditCard
{
    public $cvv;
    public $number;
    public $balance;
    public $expiration;

    public function __construct($number, $cvv, $expiration, $balance = 0)
    {
        $this->expiration = $expiration;
        $this->balance = $balance;
        $this->number = $number;
        $this->cvv = $cvv;
    }
}
