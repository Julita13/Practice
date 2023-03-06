<?php 
require_once __DIR__ . "/../vendor/autoload.php";

use App\Controllers\HomeController;
use App\Services\View;

$home = new HomeController();
$result = $home->index();

if($result instanceof View){
    echo $result->render();
}

?>