<?php 
declare(strict_types=1);
include_once __DIR__ . "/helpers.php";

class InventoryException extends \Exception {}

class Inventory
{

    public function __construct(public array $inventoryData)
    {
    }

    public function check(string $input)
    {
        $input = explode(",", $input);
        // print_r($input);

        foreach ($input as $item) {
            // print_r($item . " "); //kiekvienas item yra string sudarytas iš ID ir kiekio
            $newItem = explode(":", $item);
            // print_r($newItem);
            $id = $newItem[0];
            $quantity = $newItem[1];
            $product = [];

            foreach ($this->inventoryData as $inventoryItem) {
                if ($inventoryItem["product_id"] == $id) {
                    $product = $inventoryItem;
                    break;
                }
            }
            // print_r($product);
            if (!$product) {
                throw new \InventoryException("The product with such \"{$id}\" does not exist");
            }

            // print_r($product["quantity"]);
            if ($product["quantity"] < $quantity) {
                throw new \InventoryException("The rest of product with ID number \"{$id}\" is only {$product['quantity']}");
            }
        }
    }
    public static function writeToLog(string $textToBeWrittenToFile)
    {
        $logPath = __DIR__ . "/log.txt";
        $existingText = "";
        if (file_exists($logPath)) {
            $existingText = file_get_contents($logPath);
        }

        date_default_timezone_set('EET');
        $date = date('Y-m-d H:i:s');
        // echo "\n" . $date;

        $existingText .= $date . " " . $textToBeWrittenToFile . "\n";
        file_put_contents($logPath, $existingText);
    }
}

try{
    //Ar json failas egzistuoja? 
    $filePath = __DIR__ . "/inventory.json";
        if(file_exists($filePath)){
            $inventoryData = json_decode(file_get_contents($filePath), true);
            // dump($inventoryData);
            $inventoryObject = new Inventory($inventoryData);
            $inventoryObject->check("1:3,2:2,4:28");
        echo "Congratulations, we have all required products!";
    }
}catch (\InventoryException $e){
    echo $e->getMessage();
    Inventory::writeToLog($e->getMessage());
}




