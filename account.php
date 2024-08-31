<?php

require_once './transactions.php';
class Account{
    // Props -> AccountNumber, AccountName, Balance
    public int $accountNumber;
    public string $accountName = "";
    public float $balance = 0;

    // Transactions
    public array $transactions = [];

    public function __construct($name, $accountNumber){
        $this->accountName = $name;
        $this->accountNumber = $accountNumber;
    }
    // Methods -> Deposit, Withdraw,

    public function deposit($amount):string{
        if($amount <= 0) return "Please enter valid amount atleast $1";

        $this->balance+= $amount;

        // Transaction
        $transaction = new Transaction(count($this->transactions )+1, $amount, date("Y-m-d H:i:s"));
        array_push($this->transactions, $transaction);
        return "Success";
    }

    public function withdraw($amount):string{
        if($amount > $this->balance) return "Not enough balace";
        $this->balance -= $amount;

        // Transaction
        $transaction = new Transaction(count($this->transactions )+1, $amount, date("Y-m-d H:i:s"));
        array_push($this->transactions, $transaction);
        
        return "Success";
    }

     public function getAllTransactions(){
        if(empty($this->transactions)){
            return;
        }

        foreach($this->transactions as $key =>$transaction){
            echo json_encode($transaction);
        }
    }
}