<?php 
class BankAccount{
    private $accountNumber;
    private $ownerName;
    private $balance;

    public function __construct(string $accountOwnerName,int $accountNumber,int $accountBalance)
    {
        $this->ownerName = $accountOwnerName;
        $this->accountNumber = $accountNumber;
        $this->balance = $accountBalance;

    }

    public function deposit($depositAmount){
        $this->balance += $depositAmount;
    }
    public function withdraw($withdrawAmount){
        $this->balance -= $withdrawAmount;
    }
    private function getBalance(){
        
    }
    public function displayAccountInfo(){
        echo "Account Owner's Name: ".$this->ownerName.PHP_EOL;
        echo "Account Number: ".$this->accountNumber.PHP_EOL;
        echo "Balance: ".$this->balance.PHP_EOL;
        echo "::::::::::::::::::::::::::::::::::".PHP_EOL;
    }
}

$bankAccount1 = new BankAccount("Abdus Sukkur", 5002345, 300);
$bankAccount2 = new BankAccount("Akkas Ali", 4002345, 1300);
$bankAccount1->displayAccountInfo();
$bankAccount1->deposit(20000);
$bankAccount1->withdraw(500);
$bankAccount1->displayAccountInfo();

$bankAccount2->displayAccountInfo();
$bankAccount2->withdraw(500);
$bankAccount2->displayAccountInfo();