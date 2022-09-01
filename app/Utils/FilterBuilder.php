<?php

namespace App\Utilities;

class FilterBuilder{
    protected $query;
    protected $filters;

    /**
     * Constructor
     * 
     * @return void
     */
    public function __constructor($query, $filters){
        $this->query = $query;
        $this->filters = $filters;
    }

    /**
     * This method loops through the array of filter parameters to set/build the query
     * 
     * @return $query
     */
    public function apply(){
        
    }
}