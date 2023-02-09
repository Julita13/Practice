<?php 
//AutoLoadinamas failas, funkcijos pasiekiamos bet kur projekte.
use App\Services\Template;

if(!function_exists("view")){
    function view(string $path, array $data = []):void{
        $template = new Template($path, $data);
        $template->render();
    }
}