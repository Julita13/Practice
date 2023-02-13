<?php

namespace App\Services;

class JsonDatabase
{
    public function __construct(public string $filePath)
    {
    }

    public function getAll(): array
    {
        return json_decode(file_get_contents($this->filePath), true);
    }
}
