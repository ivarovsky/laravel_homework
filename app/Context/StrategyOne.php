<?php

namespace App\Context;



class StrategyOne extends StrategyAbstract implements Strategy {
    private $data;
    private $string;

    public function execute(object $data)
    {
       $this->string = parent::createString($data,":");
       return ["name"=>"StrategyOne.txt","string"=>$this->string];
    }
}