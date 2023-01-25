<?php
declare(strict_types=1);
include_once __DIR__ . "/helpers.php";

class BankAccount
{
    protected int $balance;

    public function __construct(int $balance = 0)
    {
        if ($balance < 0) {
            $this->balance = 0;
            die('Balance cannot be less than 0');
        }
        $this->balance = $balance;
    }

    public function getBalance(): int
    {
        return $this->balance;
    }

    public function spend(int $amount): void
    {
        if ($amount > $this->balance) {
            die('Cannot spend more than you have');
        }

        if ($amount <= 0) {
            die('Can only spend a positive amount');
        }

        $this->balance = $this->balance - $amount;
    }

    public function deposit(int $amount): void
    {
        $amount = $this->applyFees($amount);

        if ($amount > 0) {
            $this->balance = $this->balance + $amount;
        }
    }

    protected function applyFees(int $amount): int
    {
        return (int) round($amount - $amount * 0.01);
    }
}

// $account = new BankAccount(1000);
// $account->deposit(1000);
// echo $account->getBalance();

class StudentAccount extends BankAccount{

    public function deposit(int $amount): void
    {
        if ($amount > 0) {
            $this->balance = $this->balance + $amount;
        }
    }
}

// $julitaAccount = new StudentAccount(1000);
// $julitaAccount->deposit(1000);
// $julitaAccount->spend(400);
// echo $julitaAccount->getBalance();

class ChildAccount extends BankAccount {
    public function spend(int $amount): void
    {
        if ($amount > $this->balance ) {
            die('Cannot spend more than 10 euros');
        }

        if ($amount <= 0) {
            die('Can only spend a positive amount');
        }
        if($amount > 10) {
            die("Mama neleidžia išleisti daugiau nei 10 eurų");
        }

        $this->balance = $this->balance - $amount;
    }
}

// $childAccount = new ChildAccount(1000);
// $childAccount->spend(11);
// echo $childAccount->getBalance();

class CreditAccount extends BankAccount{
    public function __construct(int $deposit, public int $maxCreditAmount)
    {
        parent::__construct($deposit);
    }

    public function spend(int $amount): void
    {
        if ($amount > ($this->balance + $this->maxCreditAmount)) {
            die('Cannot spend more than you have');
        }

        if ($amount <= 0) {
            die('Can only spend a positive amount');
        }

        $this->balance = $this->balance - $amount;
    }

}


$creditAccount = new CreditAccount(1000, 200);
// echo $creditAccount->getBalance();
$creditAccount->spend(1110);
echo $creditAccount->getBalance();
// print_r($creditAccount->getBalance());

/*
Sukurkite išvestines klases, kurios paveldėtų klasę BankAccount:
- klasė StudentAccount - Ši klasė turi netaikyti jokių mokesčių depozitams.
- klasė ChildAccount - Ši klasė neturi leisti per vieną kartą išleisti daugiau nei 10eur.
- klasė CreditAccount - Ši klasė turi leisti balansui nukristi iki -X sumos ($maxCreditAmount).
T.y. balansas gali buti neigiamas. $maxCreditAmount yra teigiama integer tipo reikšmė.
Jeigu $maxCreditAmount yra 100, tai reiškia, kad balansas negali kristi žemiau -100.
Ši suma ($maxCreditAmount) turi būti paduodama per konstruktorių.
Pavyzdys:
$account = new CreditAccount(1000, 100);

- klasė SavingsAccount. Ši klasė turi suteikti galimybę padidinti sąskaitos balansą tam tikru procentu.
T.y. - ji gali turėti public metodą 'addInterest', kurį iškvietus su X procentu (pvz.: 0.05), balansas padidėtų tuo procentu
Įsivaizduokite, kad šis metodas būtų kviečiamas kas metus ir sąskaita tokiu būdu augtų.
Prie balanso pridedamas palūkanas verskite į int tipą.
Pavyzdys:
$account = new SavingsAccount(1000);
$account->addInterest(0.05);
- BudgetingAccount. Šis sąskaitos tipas turi leisti nustatyti sumą, kuri keliaus į atskirą biudzetą nuo kiekvieno depozito.
Pvz.: klientas taupo automobiliui. Klientas nusprendžia, kad 10% nuo kiekvieno depozito keliaus i automobilio pirkimo
biudžetą. (procentas paduodamas per konstruktorių).
Įprastiniai banko depozito mokesčiai nėra taikomi tai daliai, kuri keliauja į taupymo biudžetą.
Pridėkite metodą getBudget(), kuris parodytų, kiek šiuo metu yra sukaupta taupymo biudzetui.
*/