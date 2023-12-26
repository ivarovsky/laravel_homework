<?php

namespace App\Context;

class Context 
{
    private $strategy;
    private $string;
    public function __construct(Strategy $strategy) {
        $this->strategy = $strategy;
    }

    public function processContext($data) 
    {
    	foreach ($data as $d) 
    	{
			$this->string = $this->strategy->execute((object) $d);
    	}
    	return $this->string;
    }
}