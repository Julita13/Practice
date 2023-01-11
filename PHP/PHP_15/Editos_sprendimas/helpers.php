<?php 

function dump(...$variables):void {
    foreach ($variables as $item) {
        echo "<pre>" . print_r($item, true) . "</pre>";
    }
};

function dd(...$variables):void {
    dump(...$variables);
    die;
}

// dump(['Labas', 'Krabas'], 123, 321, 'Viso gero');
// dd(['Labas', 'Krabas'], 123, 321, 'Viso gero');