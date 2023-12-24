<?php

namespace App\Context;

class Context 
{
    private $strategy;

    public function __construct(Strategy $strategy) {
        $this->strategy = $strategy;
    }

    public function processContext() 
    {
        $this->strategy->execute();
    }
}