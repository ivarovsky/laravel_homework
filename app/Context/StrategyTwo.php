<?php

namespace App\Context;

class StrategyTwo extends StrategyAbstract  implements Strategy {
    private $data;
    private $string;

    public function execute(object $data)
    {
        $this->string = parent::createString($data,"|");
        return ["name"=>"StrategyTwo.txt","string"=>$this->string];
    }
}