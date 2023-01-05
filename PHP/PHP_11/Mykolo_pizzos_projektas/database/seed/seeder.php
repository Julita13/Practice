<?php 
require_once __DIR__ .  "/../../functions.php";
require_once __DIR__ .  "/data.php";

arrayToJsonFile($pizzas, __DIR__ . "/../../database/pizzas.json");