<?php

namespace src\Services;

class Helper{
    public function dump(...$item): void {
        foreach($item as $var) {
            echo "<pre>" . print_r($var, true) . "</pre>";
        }
    }
    public function dd(...$item): void{
        dump(...$item);
        die;
    }
}
