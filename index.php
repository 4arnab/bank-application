<?php

require_once "./account.php";

// Testing
$userOne = new Account("Ahmed Abdifatah", 101);

// User Transactions
$userOne->deposit('da');
// $userOne->deposit(2333);
// $userOne->withdraw(450);

// $userOne->getAllTransactions();
// echo json_encode($userOne->transactions);

$userOne = new Account("Abdirahman Mohamed", 102);