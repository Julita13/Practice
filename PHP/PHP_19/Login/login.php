<?php
include_once(__DIR__ . "/app.php");
if($_SERVER['REQUEST_METHOD'] !== 'POST'){
    http_response_code("405");
    echo "<h1>Method Not Allowed</h1>";
    exit();
}


(function (): void {
    $data = $_POST;

    $errors = validateData($data); //validacija skirta patikrinti ar ivesti teisingi duomeys
    
    if($errors){
        $url = "login_form.php";
        setErrorMessages($errors);

    }  else {
        setSuccessMessage();
        $_SESSION['authenticated'] = 1;
        $url = "admin_page.php";
    }
    header("Location: $url");
})();

function validateData($data) : array { //siuo atveju valdydacijos f-ja tikrina ar laukeliai(input) uzpildyti
    $message = [];
    foreach($data as $key => $value) {
        if(!$value){ //if false
            $message[$key] = "Neužpildytas laukelis {$key}";
        }
    } return $message;  
}
?>