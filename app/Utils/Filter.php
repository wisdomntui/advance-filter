<?php 

namespace App\Utilities;

class Filter{
    protected $query;


    /**
     * Constructor
     * 
     * @param $query
     */
    public function __construct($query){
        $this->query = $query;
    }
}