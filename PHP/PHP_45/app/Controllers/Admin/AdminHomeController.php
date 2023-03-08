<?php

namespace App\Controllers\Admin;

use App\Services\View;

class AdminHomeController
{
    public function index(): View
    { 
        return view('admin/admin_home')->setDocumentPath('admin/admin_document.php');
    }
}


?>