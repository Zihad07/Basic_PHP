<?php

class Fund {
    private $fund;

    function __construct($initialFund = 0)
    {
        $this->fund = $initialFund;
    }

    public function addFund($money)
    {
        $this -> fund += $money;
    }

    public function deductFund($money){
        $this -> fund -= $money;
    }

    public function getTotal(){
        echo "Total fund is {$this->fund}\n";
    }
}


// ---------------------------------------------



$ourFund = new Fund(100);

// it can't access ,because it private property
$ourFund->fund = 88;

$ourFund->getTotal();
$ourFund->addFund(200);
$ourFund->getTotal();
$ourFund->deductFund(100);
$ourFund->getTotal();

