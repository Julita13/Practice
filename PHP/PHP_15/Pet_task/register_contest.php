<?php 
include_once(__DIR__."/helpers.php");

//modifikuota 8 eilutė, 
function processData():void {
    $data = $_POST;

   $oldData = json_encode($data);

    $status = 1;
    $message = "Viskas ok";
    $validatedData = validateData($data);
    if($validatedData){
        $status = 0;
        $message = json_encode($validatedData);
    }
    // if(!$data['name']) {
    //     $status = 0;
    //     $message = "Įveskite gyvūno vardą";
    // };
    header("Location: pet.php?status=$status&message=$message&old_Data=$oldData");
};

processData();

function validateData($data): array {
    $message = [];
    foreach ($data as $key => $value) {
        if (!$value) {
            $message[$key] = "Neužpildytas laukelis $key";
        } 
    }
    return $message;
};



