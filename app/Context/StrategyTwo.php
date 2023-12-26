<?php

namespace App\Context;

class StrategyTwo implements Strategy {
    private $data;
    private $string;

    public function execute(object $data)
    {
                $this->data = $data;
    
            foreach ($this->data as $k => $v) 
            {
                $k = mb_strtolower(implode(' ', $words = preg_split('/(?=[A-Z])/', $k, 2)));
                $this->string .= "|{$k}|{$v}| \n";
            }
        $this->string .= "_______\n";
        return ["name"=>"StrategyTwo.txt","string"=>$this->string];
    }
}