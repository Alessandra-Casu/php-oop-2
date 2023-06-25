<?php

$categories = [
	new Category(1, 'Cats', 'I gatti fanno miao'),
	new Category(2, 'Dogs', 'I cani fanno bau'),
];

// try {
	$arrProducts = [
		new Food(1, 'Croccantini', 'Spezza la fame del tuo animale con gusto', 1000, $categories[0], 'percorso immagine', '2023-08-30', 300),
		new Toy(1, 'Palla', 'Un classico evergreen', 500, $categories[1], 'percorso immagine', 'plastica', 'rosso', 200),
		new Shelter(1, 'Cuccetta', 'La pricavacy del tuo animale è la nostra priorità', 5550, $categories[0], 'percorso immagine', 500, 700, 600, 5000),
		new Toy(1, 'Pollo squiccante', 'Dallo al tuo cane e non avrai più un momento di pace', 700, $categories[1], 'percorso immagine', 'plastica', 'rosso', 300),
		new Shelter(1, 'Suite per animali', 'Più spazio per animali esigenti', 1000, $categories[1], 'percorso immagine', 500, 700, 600, 10000),
		new Food(1, 'Bocconcini', 'Bocconcini con carne di prima qualità', 1000, $categories[0], 'percorso immagine', '2023-08-30', 300),
		new Food(1, 'Osso', 'Osso goloso', 1000, $categories[1], 'percorso immagine', '2023-08-30', 300),
	];
// } catch (Exception $e) {
// 	die ('Il peso non puo\' essere minore o uguale a 0');
// }