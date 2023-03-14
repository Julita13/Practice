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

    /**
     * Attributes that can be inserted
     * 
     * @var array
     */
    protected array $fillable;

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

    public function fillableFromArray(array $attributes){
        //                         title => titanic             title=>0
        return array_intersect_key($attributes, array_flip($this->fillable));
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
        return (new static)->{$method}(...$parameters);
    }

    public function __call($method, $parameters){

        $fluent = (new Fluent(new QueryBuilder()))->setModel($this);
        return $fluent->{$method}(...$parameters);
    }
}


?>