<?php
include_once(__DIR__ . "/helpers.php");
function getPets(string $file): array {
    $petsData = file_get_contents($file);
    $decodedData = json_decode($petsData, true);
    return $decodedData;
};

// var_dump(getPets(__DIR__ . "/pets.json"));

function createRecord($post) {
    $data = file_get_contents(__DIR__ . "/pets.json");
    $dataArr = json_decode($data, true);
    $index = array_column($dataArr, "id");
    $index = max($index) + 1;
    if(isset($post)){
        $post['id'] = $index;
        $dataArr[] = $post;
    };
    $dataToJson = json_encode($dataArr);
    file_put_contents(__DIR__. "/pets.json", $dataToJson);
}

function updatePet($pet) {
    $pets = getPets(__DIR__ . "/pets.json");
    // dd($pet);
    foreach($pets as $key => $petItem) {
        if($petItem['id'] == $pet['id']) {
            $pets[$key] = $pet;
        }
    }
    file_put_contents(__DIR__ . "/pets.json", json_encode($pets));
}
