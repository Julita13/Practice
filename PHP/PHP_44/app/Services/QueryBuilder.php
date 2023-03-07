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