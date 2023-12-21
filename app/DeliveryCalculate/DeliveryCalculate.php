<?php
namespace App\DeliveryCalculate;
class DeliveryCalculate
{
	protected $delivery_price=0;
	protected $weight=0;
	protected $Vweight=0;
	protected $user_price=0;
	protected $price_per_kg=50;
	protected $price_per_sm3=50;
	protected $calculated_by;
	public function setWeight($weight)
		{
			$this->weight = $weight;
			return $this;
		}
	public function setVweight($Vweight)
		{
			$this->Vweight = $Vweight;
			return $this;
		}
	public function setUserPrice($user_price)
		{
			$this->user_price = $user_price;
			return $this;
		}
		public function getWeight() {return $this->weight;}
		public function getVweight(){return $this->Vweight;}
		public function getUserPrice(){return $this->user_price;}
		public function getDeliveryPrice(){return $this->delivery_price;}
		public function getDeliveryCalculatedBy(){return $this->calculated_by;}
		public function calculateDelivery()
		{			
			if($this->weight > 0)
				{
					$this->delivery_price = $this->weight*$this->price_per_kg;
					$this->calculated_by = "Weight";
				}
			if($this->Vweight > 0)
				{
					$delivery_price_vWeight = $this->Vweight*$this->price_per_sm3;
					if($delivery_price_vWeight > $this->delivery_price) {$this->delivery_price = $delivery_price_vWeight;$this->calculated_by = "Volumetric weight";}
				}
			if($this->user_price > 0 && $this->user_price > $this->delivery_price) 
				{
					$this->delivery_price = $this->user_price; 
					$this->calculated_by = "User Price";
				}
			return $this;
		}
}