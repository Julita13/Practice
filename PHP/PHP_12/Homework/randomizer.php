<?php 
//Funkcija, kuri atsitiktinai išrenka userį:
function randomUser() {
    $users = [
        'Virgis',
        'Algis',
        'Laura',
        'Matas',
        'Toma',
        'Rasa',
        'Liudas',
        'Edmis'
    ];
    $key = array_rand($users);
    return $users[$key];
};

$result = randomUser();
header("Location: lucky_user.php?name=$result");

?>