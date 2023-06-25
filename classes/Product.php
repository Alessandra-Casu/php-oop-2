<?php

class Product {
	public function __construct(
		protected int $id,
		protected string $name,
		protected string $description,
		protected int $price, // il prezzo in centesimi
		protected Category $category,
		protected string $image,
	)
	{}

	public function printCard() {
		// ritorna il codice html della card da mostrare in pagina
		return 'sono la card di ' . $this->name . '<br>';
	}

	public function getFormattedPrice() {
		return $this->price / 100 . ' €';
	}
}