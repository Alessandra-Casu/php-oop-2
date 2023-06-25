<?php
include_once __DIR__ . '/classes/Food.php';
include_once __DIR__ . '/classes/Category.php';
include_once __DIR__ . '/classes/Toy.php';
include_once __DIR__ . '/classes/Shelter.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pet Shop</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous" defer></script>
</head>
<body>
	<div class="container">
	<h1 class="text-center">Bool Pet Shop</h1><?php
		try {
			include_once __DIR__ . '/db.php'; ?>
			<div class="row row-cols-3 g-3"><?php
				foreach ($arrProducts as $objProduct) {
					echo $objProduct->printCard();
				} ?>
			</div><?
		} catch (Exception $e) { ?>
			<h2>C'è qualche problema con il peso, da qualche parte è stato settato minore o uguale a 0!!!!!</h2><?php
		} ?>
	</div>
</body>
</html>