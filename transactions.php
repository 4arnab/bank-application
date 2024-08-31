<?php
class Transaction
{
    public function __construct(public int $Reference,public float $Amount,public $Date){
        $this->Amount= $Amount;
        $this->Reference = $Reference;
        $this->Date = $Date;
    }
}