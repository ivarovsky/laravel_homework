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
 
    	$carObject1 = (object) [
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
	],

	[ 
				        'brandName' => 'Daewoo',
				        'model' => 'anos',
				        'modelDetails' => 'Найкраща в світі машина',
				        'modelYear' => 2001,
				        'productionYear' => 2009,
				        'color' => 'Green'
	],
	[ 
				        'brandName' => 'Машина',
				        'model' => 'Бош',
				        'modelDetails' => 'Хватай в руки і #бош',
				        'modelYear' => 0001,
				        'productionYear' => 3001,
				        'color' => 'Black'
	]
];
	
		$StrategyOne = new StrategyOne();
		$ContextOneExecute = new Context($StrategyOne);
		var_dump($ContextOneExecute->processContext($carObject1));
		echo "<hr />";
		
		$StrategyTwo = new StrategyTwo();
		$ContextTwoExecute = new Context($StrategyTwo);
		var_dump($ContextTwoExecute->processContext($carObject1));
    	
    }
}
