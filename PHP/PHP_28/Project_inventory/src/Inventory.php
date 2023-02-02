<?php

namespace src;

use src\InventoryException;
class Inventory
{
    public const INVENTORY_PATH = __DIR__ . "/../database/inventory.json";
    public function __construct(public array $inventoryData = [])
    {
        if(!$this->inventoryData){
            $this->getInventory();
        }
    }

    public function getInventory(){
        if(file_exists(self::INVENTORY_PATH)){
            $this->inventoryData = json_decode(file_get_contents(self::INVENTORY_PATH), true);
        } else {
            throw new InventoryException("The file you are searching does not exist");
        }
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
                throw new InventoryException("The product with such id \"{$id}\" does not exist");
            }

            // print_r($product["quantity"]);
            if ($product["quantity"] < $quantity) {
                throw new InventoryException("The rest of product with ID number \"{$id}\" is only {$product['quantity']}");
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






