<?php 

namespace App\Services;
use App\Services\Connection;

class QueryBuilder {
    protected ?\PDO $connection = null;
    public function __construct(private Model $model)
    {
        $this->boot();
    }
    private function boot(){
        $this->setConnection();
    }

    private function setConnection(){
        $this->connection = (new Connection())->getConnection();
    }

    public function get(){
            $stmt = $this->connection->prepare("SELECT * FROM `{$this->model->table}`");
            $stmt->execute();
            $result = $stmt->fetchAll();
            return $result;
    }
}




?>