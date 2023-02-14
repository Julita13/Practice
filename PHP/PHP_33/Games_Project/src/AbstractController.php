<?php

namespace App;

use App\Services\JsonDatabase;
use App\Services\File;

abstract class AbstractController{ 
    public string $databasePath;
    public JsonDatabase $database;

    public function __construct()
    {
        $file = new File($this->databasePath);
        $this->database = new JsonDatabase($file);
        //dd($this->database->getRecords());
    }
    
    public abstract function index();

}