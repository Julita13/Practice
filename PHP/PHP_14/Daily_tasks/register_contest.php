<?php 

function processData():void {
    $status = 1;
    $message = "Viskas ok";
    header("Location: pet.php?status=$status&message=$message");
}
;

processData();