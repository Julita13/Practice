<?php

namespace App\Services;
use App\Services\QueryBuilder;
abstract class Model {
    public function __construct()
    {
        $this->boot();
    }
    private function boot(){
    }

    public static function __callStatic($method, $parameters) {
        $model = new static;
        $queryBuilder = new QueryBuilder($model);
        return $queryBuilder->{$method}(...$parameters);
        // dd($method, $parameters);
    }
}




?>