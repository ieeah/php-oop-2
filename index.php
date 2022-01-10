<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>Caprette Tibetane PHP Shop</title>
</head>

<body>
	<?php
	include __DIR__ . './classes/classes.php';
	include __DIR__ . './data/data.php';
	?>

	<?php $logged_user = $user2; ?>

	<header>
		<button>log out</button>
		<div class="user_name">
			<?php echo $logged_user->user_name; ?>
			<?php echo ($logged_user->premium) ? '<span class="premium_user">premium</span>' : '' ?>
		</div>
	</header>
	<div class="container">
		<h1>Caprette Tibetane PHP Shop</h1>
		<div class="products">
			<div class="premium">
				<h5>Prodotti premium</h5>
				<div class="premium_display">
					<?php foreach ($premium_products as $product) : ?>
						<div class="product">
							<h6 class="product_title">
								<?php echo $product->title; ?>
							</h6>
							<img src="<?php echo $product->img; ?>" alt="">
							<div class="details">
								<div class="brand">
									<?php echo $product->brand; ?>
								</div>
								<div class="price">
									Full Price: <?php echo $product->price; ?> €
								</div>
								<div class="discount">
									<?php echo ($logged_user->premium) ? $logged_user->getDiscount() . '% off for being a premium user! from more than a year' : '' ?>
								</div>
								<div class="final_price">
									Final Price: <?php echo $logged_user->getFinalPrice($product->price); ?> €
								</div>
								<div class="stock">
									<?php
									echo ($product->stock > 0) ? '<span class="green">available!</span>' : '<span class="red">Out of stock</span>';
									?>
								</div>
							</div>
						</div>
					<?php endforeach ?>
				</div>
			</div>
			<div class="regular">
				<h5>Altri prodotti</h5>
				<div class="display">
					<?php foreach ($products as $product) : ?>
						<div class="product">
							<h6 class="product_title">
								<?php echo $product->title; ?>
							</h6>
							<img src="<?php echo $product->img; ?>" alt="">
							<div class="details">
								<div class="price">
									<?php echo $product->price; ?> €
								</div>
								<div class="discount">
									<?php echo ($logged_user->premium) ? $logged_user->getDiscount() . '% off for being a premium user! from more than a year' : '' ?>
								</div>
								<div class="final_price">
									Final Price: <?php echo $logged_user->getFinalPrice($product->price); ?> €
								</div>
								<div class="stock">
									<?php
									echo ($product->stock > 0) ? '<span class="green">available!</span>' : '<span class="red">Out of stock</span>';
									?>
								</div>
							</div>
						</div>
					<?php endforeach ?>
				</div>
			</div>

		</div>
	</div>

	<?php var_dump($premium_products) ?>
</body>

</html>