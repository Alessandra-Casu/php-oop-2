<?php
include_once __DIR__ . '/Product.php';
include_once __DIR__ . '/../traits/Shipping.php';

class Toy extends Product {
	use Shipping;

	public function __construct(
		int $id,
		string $name,
		string $description,
		int $price, // il prezzo in centesimi
		Category $category,
		string $image,
		protected string $material,
		protected string $color,
		int $weight,
	) {
		parent::__construct($id, $name, $description, $price, $category, $image);
		$this->setWeight($weight);
	}

	public function printCard() {
		$type = get_class($this);
		// ritorna il codice html della card da mostrare in pagina
		return "
			<div class=\"col\">
				<div class=\"card h-100\">
					<img src=\"{$this->image}\" class=\"card-img-top\" alt=\"{$this->name}\">
					<div class=\"card-body\">
						<h5 class=\"card-title\">{$this->name}</h5>
						<p class=\"card-text\">{$this->description}</p>
					</div>
					<ul class=\"list-group list-group-flush\">
						<li class=\"list-group-item\">Type: {$type}</li>
						<li class=\"list-group-item\">Peso: {$this->weight}</li>
						<li class=\"list-group-item\">Category: {$this->category->getName()}</li>
						<li class=\"list-group-item\">Materiale: {$this->material}</li>
						<li class=\"list-group-item\">Colore: {$this->color}</li>
						<li class=\"list-group-item\">Prezzo: {$this->getFormattedPrice()}</li>
					</ul>
					<div class=\"card-body\">
						<a href=\"#\" class=\"card-link\">Details</a>
					</div>
				</div>
			</div>
		";
	}
}