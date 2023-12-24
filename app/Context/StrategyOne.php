<?php

namespace App\Context;

class StrategyOne implements Strategy {
    private $data;

    public function __construct( array $data)
    {
        $this->data = $data;
        return $this;
    }

    public function execute()
    { 
    foreach($this->data as $d)
        {
            foreach ($d as $k => $v) 
            {
                echo "{$k} : {$v} <br />";  
            }
        }
    }
}