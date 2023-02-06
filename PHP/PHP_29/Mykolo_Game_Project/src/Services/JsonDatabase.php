<?php

namespace src\Services;

class JsonDatabase
{
    public function  __construct(public string $filePath)
    {}

    public function getAll()
    {
        if (!file_exists($this->filePath)) {
            throw new \Exception('No file');
        }

        $jsonData = file_get_contents($this->filePath);
       
        return json_decode($jsonData, true);
    }
}