<?php
include_once(__DIR__ . "/dump.php");
function getPets(): array{
    $petsArr = file_get_contents(__DIR__ . "/pets.json");
    $jsonDecode = json_decode($petsArr, true);
    return $jsonDecode;
}
function getPet($id): array {
    $petsArr = getPets();
    foreach($petsArr as $item){
        if($item['id'] == $id){
            return $item;
        }
    }
    return [];
}
function createRecord($post)
{
    $data = file_get_contents(__DIR__ . "/pets.json");
    $dataArr = json_decode($data, true);
    $index = array_column($dataArr, 'id');
    $index = max($index) + 1;

    if(isset($post)){
        $post['id'] = $index; 
        $dataArr[] = $post;
    }

    $dataToJson = json_encode($dataArr);
    file_put_contents(__DIR__ . "/pets.json", $dataToJson);
    
}
function updatePet($pet){
    $data = file_get_contents(__DIR__ . "/pets.json");
    $dataArr = json_decode($data, true);
    foreach($dataArr as $key =>$petitem){
        if($petitem['id'] == $pet['id']){
            $dataArr[$key] = $pet;
        }
    }
    file_put_contents(__DIR__ . "/pets.json", json_encode($dataArr));
}




?>