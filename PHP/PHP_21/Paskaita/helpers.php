<?php
function dump(...$item): void {
    foreach($item as $var) {
        echo "<pre>" . print_r($var, true) . "</pre>";
    }
}

//dump(['Labas', 'Krabas'], 123, 321, 'Viso gero');

//dumpinant visada bus supakuota i masyva

function dd(...$item): void{
    dump(...$item);
    die;
}

//dd(['Labas', 'Krabas'], 123, 321, 'Viso gero');

?>