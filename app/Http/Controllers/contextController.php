<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Context\Context;
use App\Context\Strategy;
use App\Context\StrategyOne;
use App\Context\StrategyTwo;






class contextController extends Controller
{
    public function main()
    {
 
    	$data = [
				    [
				        'brandName' => 'Ford',
				        'model' => 'Mustang',
				        'modelDetails' => 'GT rest 2',
				        'modelYear' => 2014,
				        'productionYear' => 2013,
				        'color' => 'Oxford White'
				    ],
				    [
				        'brandName' => 'BMW',
				        'model' => '520i',
				        'modelDetails' => 'rest',
				        'modelYear' => 2001,
				        'productionYear' => 2001,
				        'color' => 'Green'
				    ]
	];
		
		$StrategyOne = new StrategyOne($data);
		$ContextOneExecute = new Context($StrategyOne);
		$ContextOneExecute->processContext();
		echo "<hr />";
		$StrategyTwo = new StrategyTwo($data);
		$ContextTwoExecute = new Context($StrategyTwo);
		$ContextTwoExecute->processContext();
    }
}
