<?php

namespace src\Services;

class Helper
{
    public function dump($value)
    {
        echo '<pre>' . print_r($value, true) . "</pre>";
    }

    public function dd($value)
    {
        dump($value);
        exit();
    }
}