<?php
include_once(__DIR__ . "/app.php");
include_once __DIR__ . "/helpers.php";

if($_SERVER['REQUEST_METHOD'] !== 'POST'){
    http_response_code("405");
    echo "<h1>Method Not Allowed</h1>";
    exit();
}

// function writeToJson(): void {
//     $POST = $_POST;
//     if (isset($_POST)) {
//         $userData = json_encode($POST);
//         dump($userData);
//         $jsonPath = __DIR__ . "/users.json";
//         file_put_contents($jsonPath, $userData,);
// } 
// }

// writeToJson(); 

(function (): void {
    $data = $_POST;

    $errors = validateData($data); 
    
    if($errors){
        $url = "add_user_form.php";
        setErrorMessages($errors);

    }  else {
        setSuccessMessage();
        // $_SESSION['authenticated'] = 1;
        // $url = "add_user.php";
        $jsonPath = __DIR__ . "/users.json";
        $jsonData = file_get_contents($jsonPath);
        $decodedData = json_decode($jsonData, true);
        $decodedData[] = $_POST;
        $encodeData = json_encode($decodedData);
        file_put_contents($jsonPath, $encodeData);
        $url = "add_user_form.php";
    }
    header("Location: $url");
})();

function validateData($data) : array { 
    $message = [];
    foreach($data as $key => $value) {
        if(!$value){ //if false
            $message[$key] = "Neužpildytas laukelis {$key}";
        }
    } return $message;  
}

?>
