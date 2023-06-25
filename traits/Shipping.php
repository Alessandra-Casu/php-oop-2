<?php

trait Shipping {
	protected int $weight; // peso in grammi

	public function getShippingPrice() {
		return $this->weight * 0.1; // formula inventata per calcolare il prezzo di spedizione
	}

	public function getWeight()
	{
		// return $this->weight / 1000 . ' kg';
		return $this->weight;
	}

	public function setWeight($weight)
	{
		if ($weight > 0) {
			$this->weight = $weight;
		} else {
			throw new Exception('Peso <= 0');
		}
		return $this;
	}
}