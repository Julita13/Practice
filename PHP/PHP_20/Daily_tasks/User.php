<?php
include_once __DIR__ . "/helpers.php";
//Klasės apibrėžimas
class User 
{
    //Savybės. Matomumas - public. Public prieinamas tiek klasės viduje, tiek išorėje. 
    public string $firstName;
    public string $lastName;
    public string $password;
    public string $address; 

    //Metodai

    public function getFirstName(): string {
        return $this->firstName;
    }
    public function getLastName(): string {
        return $this->lastName;
    }
    public function getFullName(): string {
        return "{$this->firstName} {$this->lastName}";
    }
    public function getInitialsName(): string {
        $result = ""; 
        $result.= $this->firstName[0] . ". " . $this->lastName;
        return $result;
        // return substr($this->firstName, 0, 1) . "." . $this->lastName;
    }
}

$julita = new User();
$julita -> firstName = "Julita";
$julita -> lastName = "Mečkovska";
$julita -> password = "Password";
$julita -> address = "Vilnius";

//kviečiame metodus
dump($julita -> getFirstName());
dump($julita -> getLastName());
dump($julita -> getFullName());
dump($julita -> getInitialsName());
//Public metodus ir savybes galima kviesti už klasės ribų.
dump($julita -> firstName); 
