<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DeliveryCalculate\DeliveryCalculate;
	

class SenyaController extends Controller
{

    public function main()
    {
		    $delivery = new DeliveryCalculate;
		 	$delivery->setWeight(15)->setVweight(30)->calculateDelivery();
		 	var_dump($delivery);
    		echo "<br /><hr />";
    		$delivery->setWeight(5)->setVweight(600)->calculateDelivery();
		 	var_dump($delivery);
    }


}
