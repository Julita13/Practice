<?php 
require __DIR__ . "/../autoload/autoloader.php";

try{
    //Ar json failas egzistuoja? 
    // $filePath = __DIR__ . "/../database/inventory.json";
        // if(file_exists($filePath)){
        //     $inventoryData = json_decode(file_get_contents($filePath), true);
            // dump($inventoryData);
            $inventoryObject = new src\Inventory();
            $inventoryObject->check("1:3,2:2,14:2");
        echo "Congratulations, we have all required products!";
    }
catch (src\InventoryException $e){
    echo $e->getMessage();
    src\Inventory::writeToLog($e->getMessage());
}

