<?php

namespace App\Services;

use App\Services\Connection;

class QueryBuilder
{
    /**
     * The database connection instance.
     * 
     * @var \PDO|null
     */
    protected ?\PDO $connection;

    /**
     * Table to query from
     * 
     * @var string
     */
    protected string $from;

    /**
     * 
     * SQL statement
     * 
     * @var string
     */
    private string $statement;

    /**
     * @var array
     */
    private array $data = []; 

    private array $bindings = [
        'where' => [],
    ];


    /**
     * Create QueryBuilder instance.
     * 
     */
    public function __construct()
    {
        $this->boot();
    }

    private function boot()
    {
        $this->setConnection();
    }

    private function setConnection()
    {
        $this->connection = (new Connection())->getConnection();
    }

    public function from(string $table)
    {
        $this->from = $table;
    }

    public function runSelect()
    {
        $this->compileSelect();
        return $this->executeStatement();
    }

    public function where(string $column, string $operator, mixed $value): self{
        $this->data[$column] = $value;
        $this->addBindings('where', 
        [
            'column' => $column,
            'operator' => $operator
        ]
        );
        return $this;
    }

    /**
     * Compile Select sql to statement property
     * 
     * @return [type]
     */
    public function compileSelect($columns = '*'):self{
        $wheres = $this->bindings['where'];
        $condition = ''; 
        $word = 'WHERE '; 

        if($wheres){
            foreach($wheres as $where){
                $condition .= "{$word}{$where['column']} {$where['operator']} :{$where['column']}";
                $word = " AND ";
            }
        }
        
        $this->statement = "SELECT $columns  FROM `{$this->from}` {$condition}";
        // dd($this->statement);
        return $this;
    }

    public function insert(array $data){
        $this->data = $data;
        $columns = $placeholders = '';
        $count = count($data);

        foreach(array_keys($data) as $key => $column){
            $columns .= "`$column`";
            $placeholders .= ":$column";

            if($key < $count - 1){
                $columns .= ",";
                $placeholders .= ",";
            }
        }

        // dd($columns, $placeholders);
        // dd($this->data);
        $this->statement = "INSERT INTO `{$this->from}` ($columns) VALUES($placeholders)";
        $this->executeStatement();
        
        return $this->connection->lastInsertId();
    }

    public function update(array $data, int $id): bool{
        $this->data = $data;
        $placeholders = '';
        $count = count($data);

        foreach(array_keys($data) as $key => $column){
            $placeholders .= "`$column` = :$column";

            if($key < $count - 1){
                $placeholders .= ",";
            }
        }

        $this->data['id']  = $id;
        // dd($this->data);
        $this->statement = "UPDATE `{$this->from}` SET {$placeholders} WHERE id=:id";
        // dd($this->statement);
        return is_array($this->executeStatement()) ? true : false;

    }

    public function executeStatement(){
        $stmt = $this->connection->prepare($this->statement);
        $stmt->execute($this->data);
        return $stmt->fetchAll();
    }

    /**
     * 
     * Add values to bindings array
     * @param string $key
     * @param mixed $value
     * 
     * @return self
     */
    public function addBindings(string $key, mixed $value):self {
        $this->bindings[$key][] = $value;
        return $this;
    }
}





?>