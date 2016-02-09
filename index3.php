<?php

$classes = array(
	23 => array(
		'Ira', 
		'Alexander',
		'Oleg',
	),
	31 => array(
		'Max',
		'Ivan',
		'Alex',
	),
);

$products = array(
	1235 => array(
		'title' => 'Холодильник',
		'price' => 899.00,
		'description' => 'Хороший холодильник'
	),
	2569 => array(
		'title' => 'Телевизор',
		'price' => 1599.00,
		'description' => 'Хороший телевизор'
	),
	321 => array(
		'title' => 'Термос',
		'price' => 789.00,
		'description' => 'Хороший термос'
	),
);


foreach($products as $product){
	?>
	<b><?php echo $product['title']; ?></b> <br>
	Цена: $<?=$product['price']?><br>
	<?php
}


