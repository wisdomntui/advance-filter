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

    /**
     * This method adds each filter value and name to an eloquent where clause
     * 
     * @param string $name
     * @param string $value
     * 
     * @return void
     */
    public function handle($name, $value){
        $this->query->where($name, $value);
    }
}