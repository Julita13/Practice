<?php 
require __DIR__ . "/../autoload/autoloader.php";

$status = 1;
$message = "Congratulations, we have all required products!";

try{

    if(isset($_POST["check"]) && ($_POST["check"])){
        // echo $_POST["check"] . "<br>";
        $inventoryObject = new src\Inventory();
        // $inventoryObject->check("1:3,2:2,14:2");
        $inventoryObject->check($_POST["check"]);
        // echo "Congratulations, we have all required products!";
    } else {
        throw new src\InventoryException("Please submit your answer before proceeding further");
    }
}catch (src\InventoryException $e){
    $status = 0;
    $message = $e->getMessage();
    // echo $e->getMessage();
    src\Inventory::writeToLog($e->getMessage());
    
}

header("Location: inventory_form.php?status=$status&&message=$message");
//Negalima echointi ir redirectinti, kad veiktų headeris
