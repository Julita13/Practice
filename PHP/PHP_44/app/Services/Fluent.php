<?php

// Our little 

namespace App\Services;

use App\Services\QueryBuilder;
use App\Services\Model;

class Fluent
{
    /**
     * The base query builder instance.
     * 
     * @var QueryBuilder
     */
    protected QueryBuilder $builder;

    /**
     * The model being queried.
     * 
     * @var Model
     */
    protected Model $model;


    /**
     * Create a new Fluent instance.
     *  
     * @param QueryBuilder $builder
     */
    public function __construct(QueryBuilder $builder)
    {
        $this->builder = $builder;
    }

    /**
     * Set model instance
     * Set from in builder
     * 
     * @param Model $model
     * 
     * @return [type]
     */
    public function setModel(Model $model):self
    {
        $this->model = $model;
        $this->builder->from($model->getTable());
        
        return $this;
    }

    /**
     * Get all models with attributes
     * 
     * @return array
     */
    public function get():array
    {
        $models = [];
        $modelName = get_class($this->model);
        
        foreach($this->builder->runSelect() as $attribute){
          $models[] = (new $modelName())->setAttributes($attribute);
        }
        return $models;
    }

    public function where(string $column, string $operator, mixed $value) {
        $this->builder->where(...func_get_args());
        return $this;
    }

    public function find(int $id) {
        return $this->builder->where('id', '=', $id)->runSelect();
    }
}


?>