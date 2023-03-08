<?php

namespace App\Services;

use App\Services\QueryBuilder;
use App\Services\Fluent;

abstract class Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected string $table;

    /**
     * The data attributes of the model
     * 
     * @var array
     */
    protected array $attributes; 

    public function __construct()
    {
        $this->boot();
    }

    private function boot()
    {
    }

    public function getTable()
    {
        return $this->table;
    }

    /**
     * 
     *
     * @param array $attributes
     * 
     * @return self
     */
    public function setAttributes(array $attributes): self{
        $this->attributes = $attributes;
        return $this;
    }

    /**
     * 
     * Get specific model attribute
     * 
     * @param string $value
     * 
     * @return mixed
     */
    public function __get(string $value): mixed{
        return $this->attributes[$value] ?? null;
    }

    public static function __callStatic($method, $parameters)
    {
        $model = new static();
        $fluent = (new Fluent(new QueryBuilder()))->setModel($model);

        return $fluent->{$method}(...$parameters);
    }
}


?>