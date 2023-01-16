<?php
include_once(__DIR__ . "/dump.php");
include_once(__DIR__ . "/pet_functions.php");
$post = $_POST;
function processData(): void{
    $post = $_POST;
    $oldData = json_encode($post);
    $status = 1;
    $message = 'Viskas OK';
    $validateData = validateData($post);
    $params = ''; 
    if($validateData){
        $status = 0;
        $validateData = json_encode(validateData($post));
        $message = $validateData;
        $url = "update_pet_form.php";
        $params .= "id={$post['id']}";
    }else{
        updatePet($post);
        $url = "index.php";
    }
    $params .= "&status=$status&message=$message&old_data=$oldData";
    header("Location: $url?$params");
}
function validateData($post):array
{
    $message = [];
    foreach($post as $key => $value){
    if(!$value){
        $message[$key] = "Įveskite gyvūno: $key.";
    }
}
    return $message;
}
processData();