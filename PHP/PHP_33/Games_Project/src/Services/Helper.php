<?php

namespace App\Services;

class Helper
{
    public function dump($value)
    {
        echo "<pre>" . print_r($value, true) . "</pre>";
    }

    public function dd(...$value)
    {
        $this->dump(...$value);
        exit();
    }
}
