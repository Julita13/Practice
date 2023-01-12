<?php

include_once(__DIR__ . "/helpers.php");

processData();

function processData(): void 
{
    $data = $_POST;
    $oldData = json_encode($data); //grazinami suvesti duomenys. kad liktu inputuose
    $status = 1;
    $message = "Viskas ok";

    $errors = validateData($data); //validacija skirta patikrinti ar ivesti teisingi duomeys
    
    if($errors){
        $status = 0;
        $message = json_encode($errors);
    }  

    header("Location: pet.php?status=$status&message=$message&old_data=$oldData");
}


function validateData($data) : array { //siuo atveju valdydacijos f-ja tikrina ar laukeliai(input) uzpildyti
    $message = [];
    foreach($data as $key => $value) {
        if(!$value){ //if false
            $message[$key] = "Neužpildytas laukelis {$key}";
        }
    } return $message;
}