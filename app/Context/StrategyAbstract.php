<?php
	namespace App\Context;
	abstract class StrategyAbstract
	{
		 private $string;
	    protected function createString(object $data, string $symbol): string
	    {
	        foreach ($data as $k => $v) 
	        {
	        	switch($symbol)
	        	{
	        		case ":":
	        		$this->string .= "{$k} - {$v} \n";
	        		break;
	        		case "|":
	        		$k = mb_strtolower(implode(' ', $words = preg_split('/(?=[A-Z])/', $k, 2)));
	                $this->string .= "|{$k}|{$v}| \n";
	        		break;
	        	} 
	        	$this->string .= "_______\n";	
	        }
	        return $this->string;
	    }
	}