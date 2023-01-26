<?php 
declare(strict_types=1);
include_once __DIR__ . "/helpers.php";

class User {
    public string $name;
    public string $surname;
    public static $instatiatedTimes = 0;
    public int $number = 0; 

    public function __construct(){
        // priklauso šablonui, todėl visiems objektams bus vienodos vertės. 
        self::$instatiatedTimes++;
        //Priklauso kiekvienam objektui, kaip atskira vertė
        $this->number = self::$instatiatedTimes;
    }
}

$user = new User();
$user->name = "Julita";
$user->surname = "Mažuolytė-Mečkovska";

echo User::$instatiatedTimes;

dump($user->name);
dump($user);



$user2 = new User();
$user2->name = "Mykolas";
$user2->surname = "Norkus";

dump($user2);

echo User::$instatiatedTimes;


$user3 = new User();
$user3->name = "Monika";
$user3->surname = "Monikauskienė";

dump($user3);

echo User::$instatiatedTimes;
echo User::$instatiatedTimes;
echo User::$instatiatedTimes;

//Gausim dinamines vertes, visi turi savo skirtingas vertes. 
echo $user->number;
echo $user2->number;
echo $user3->number;