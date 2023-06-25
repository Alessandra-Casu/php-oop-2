<?php

class Category {
	public function __construct(
		protected int $id,
		protected string $name,
		protected string $description,
	) {}

	public function getName() {
		return $this->name;
	}
}