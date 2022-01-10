<?php

$user1 = new user('Antonio Capone', true);
$user2 = new user('Ajeje Brazorf', false);
$user3 = new premium('Gino Cerutti', false, true, 25, true, 482);
$user4 = new premium('Flavio Briatore', false, true, 25, true, 600);
$user5 = new user('Quechua Sturududdu', true)

?>

<?php

$products = [
	$prod1 = new product('12345678', 'bicicletta', 1189, 200, false, './data/imgs/bike.jpg'),
	$prod4 = new product('456789123', 'borraccia', 12, 45, false, './data/imgs/bottle.jpg'),
];

$premium_products = [
	$prod2 = new abbigliamento('234567891', 'maglia nera', 29, 76, true, './data/imgs/shirt.jpg', 'M', 'black', 'supermegabrandone'),
	$prod3 = new tecnologia('345678912', 'smartphone', 599, 0, true, './data/imgs/smartphone.jpg', '100W/h', true, 'HUaomi'),
];


?>