<?php
function dump(...$item): void{
    foreach($item as $var){
       echo "<pre>".print_r($var, true)."</pre>";
    }
}
function dd(...$item): void{
    dump(...$item);
    die;
}

?>