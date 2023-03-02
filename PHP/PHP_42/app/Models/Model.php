<?php

require_once __DIR__ . "/../Services/Connection.php";
abstract class Model {

    protected ?\PDO $connection = null;
    public function __construct()
    {
        $this->boot();
    }
    private function boot(){
        $this->setConnection();
    }

    private function setConnection(){
        $this->connection = (new Connection())->getConnection();
    }
}




?>