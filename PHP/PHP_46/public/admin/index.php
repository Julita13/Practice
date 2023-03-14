<?php 
require_once __DIR__ . "/../../vendor/autoload.php";

use App\Controllers\Admin\AdminHomeController;
use App\Services\View;

$adminHome = new AdminHomeController();
$result = $adminHome->index();

if($result instanceof View){
    echo $result->render();
}

?>