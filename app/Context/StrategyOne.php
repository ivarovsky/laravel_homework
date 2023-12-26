<?php

namespace App\Context;

class StrategyOne implements Strategy {
    private $data;
    private $string;

    public function execute(object $data)
    {
                $this->data = $data;
    
            foreach ($this->data as $k => $v) 
            {
                $this->string .= "{$k} - {$v} \n";  
            }
        $this->string .= "_______\n";

        return ["name"=>"StrategyOne.txt","string"=>$this->string];

    }
}