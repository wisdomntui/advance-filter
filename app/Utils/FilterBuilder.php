<?php

namespace App\Utils;
use App\Utils\Filter;

class FilterBuilder{
    protected $query;
    protected $filters;

    /**
     * Constructor
     * 
     * @param $query
     * @param array $filters
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
        foreach($this->filters as $name => $value){
            (new Filter($this->query))->handle($name, $value);
        }

        // Return modified query
        return $this->query;
    }
}