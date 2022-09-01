<?php

namespace App\Utilities;

class FilterBuilder{
    protected $query;
    protected $filters;

    /**
     * Constructor
     * 
     */
    public function __constructor($query, $filters){
        $this->query = $query;
        $this->filters = $filters;
    }
}