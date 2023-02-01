<?php

declare(strict_types=1);
//Exception (išlyga) - tai specialus objektas, kuriame apibūdinama įvykusi klaida ar netinkamas kodo elgesys. 
//PHP Exception, kaip ir visus objektus, apibrėžia "Exception" klasė. 

//"Exception" yra "metami" (throw) ir "gaudomi" (catch).

// Nesugauti "Exception'ai sugeneruos php klaidą: 
//"PHP klaida Fatal error: Uncaught Exception"

//Sugavus "Exception" kodas nesustos ir bus galima atlikti norimus veiksmus, pvz.: išsiųsti pranešimą, parodyti klaidą, įrašyti į logą ir kitus. 

//Final - tai reiškia, kad metodo negalėsime perrašyti, jei jis bus paveldėtas iš tėvinės klasės. 


//Try bloke metama, catch bloke gaudoma. 
try{
    throw new \Exception("Labas vakaras!");
    //Catch gaudo bendro nurodyto tipo išlygą. 
    //Catch skliaustuose aprašomas typehint ir kintamasis, kuris gaus išlygos objektą. Kintamasis gali vadintis bet kaip.
}catch(\Exception $e){
    //sugavus, galima atlikti kažkokius veiksmus ir nelaužyt kodo
    print_r($e->getMessage());
}
echo "\n";
// class Exception implements Throwable {
//     /* Properties */
//     protected string $message = "";
//     private string $string = "";
//     protected int $code;
//     protected string $file = "";
//     protected int $line;
//     private array $trace = [];
//     private ?Throwable $previous = null;
//     /* Methods */
//     public function __construct(string $message = "", int $code = 0, ?Throwable $previous = null){
//     }
  
//     final public function getMessage(): string{}
//     final public  function getPrevious(): ?Throwable{}
//     final public function  getCode(): int{}
//     final public function  getFile(): string{}
//     final public  function getLine(): int{}
//     final public  function getTrace(): array{}
//     final public  function getTraceAsString(): string{}
//     public function  __toString(): string{}
//     private  function __clone(): void{}
// }


//Sukuriam savo Exception klasė, kuri paveldi ir bendros Exception klasės.
class ValidationException extends \Exception {

}
class AmountValidator{
    public function validate(int $amount):void {
        if($amount < 0) {
            throw new \ValidationException("Amount must be positive");
        }
    }
}

$amountValidator = new AmountValidator();
// $amountValidator->validate(-1); // tokiu būdu kodas toliau neveiks, nes exception'ą išmetėm, bet nepagavom

try{
    $amountValidator->validate(-1);
    echo "Toliau try";
    //Catch skliaustuose esančios klasės pavadinimas turi sutapti su metamos išlygos (Exception'o) klase arba būti jos tėvine klase
}catch(\RuntimeException $e){
    echo $e->getMessage() . PHP_EOL;
}catch(\Exception $e){
    print_r($e);
    echo $e->getMessage() . PHP_EOL;
}

echo "Toliau";