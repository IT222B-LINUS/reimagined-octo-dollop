<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
include 'Class.php';
// include 'fileClass.php';

//create account
$account1 = new Account("222222");
$account2 = new Account("111111");
$account3 = new Account("333333");
$account4 = new Account("444444");


//create bank acount object
$savingAccount = new SavingAccount(0,0.5);
$checkingAccount = new CheckingAccount(0,200);
$savingAccount1 = new SavingAccount(0,0.5);
$checkingAccount1 = new CheckingAccount(0,200);

//create Customer
$customer1 = new Customer("JOHN ROOSEVELT",28,"004");
$customer2 = new Customer("CHRIS DOE",29,"003");

$customer1->openAccount($account1,$savingAccount);
$customer1->openAccount($account2,$checkingAccount );

$customer2->openAccount($account3,$savingAccount1);
$customer2->openAccount($account4,$checkingAccount1);

// Create Bank
$bank = new Bank();

$bank->addCustomer($customer1);
$bank->addCustomer($customer2);

//verify customer
echo $bank->verifyCustomer($customer1);
echo "<br>";

//verify customer
echo $bank->verifyCustomer($customer2);
echo "<br>";


// process transaction

$bank->processTransaction($customer1->getAccounts()[0]['bankAccount'], 2000); //deposit
$bank->processTransaction($customer1->getAccounts()[1]['bankAccount'], 500); //deposit


$bank->processTransaction($customer2->getAccounts()[0]['bankAccount'], 2000); //deposit
$bank->processTransaction($customer2->getAccounts()[1]['bankAccount'], 200); //deposit
$savingAccount->addInterest();

echo "Interest: ".$savingAccount->getInterest() . '<br>';
echo "<hr>";

echo "Closing Account". $account1->getAccountNumber(). "<br>";
$customer1->closeAccount($account1);

//display
foreach($bank->getCustomer() as $customer){
    echo
    "Customer Name:" . $customer->getName(). "<br>".
    "Customer ID:" . $customer->getId(). "<br>".
    "Customer Age:" . $customer->getAge(). "<br>";

    foreach($customer->getAccounts() as $account){
        echo "<br>Account ID: " . $account['account']->getAccountNumber(). "<br>";
        echo "Balance: PHP " .$account['bankAccount']->getBal(). "<br>";
    }
    echo "<br> <hr>";    
}





?>
    
</body>
</html>