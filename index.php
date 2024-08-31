<?php

require_once "./account.php";

// Testing
$userOne = new Account("Ahmed Abdifatah", 101);

// User Transactions
$userOne->deposit(1235);
$userOne->deposit(2333);
$userOne->withdraw(450);

$userOne->getAllTransactions();

$userOne = new Account("Abdirahman Mohamed", 102);