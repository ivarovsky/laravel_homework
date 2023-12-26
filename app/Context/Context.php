<?php

namespace App\Context;

class Context 
{
    private $strategy;

    public function __construct(Strategy $strategy) {
        $this->strategy = $strategy;
    }

    public function processContext($data) 
    {
    	foreach ($data as $d) 
    	{
    	var_dump($this->strategy->execute((object) $d));
    	}
    }
}