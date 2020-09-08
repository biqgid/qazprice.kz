<?php 

require '../bootstrap.php';
require '../php/mail.php';

//------------------------------------------------
require '../ads/ads-google/balka/0.php';
//------------------------------------------------
?>

<!doctype html>
<html lang="ru_RU">
	<html>
		<head>
			<meta charset="utf-8">
			<meta content="width=device-width, initial-scale=1.0" name="viewport">
			<title>Балка двутавровая в Алматы</title>

			<meta name="description" content="">
			<meta name="abstract" content="">
			<meta name="keywords" content="">

			<? require '../verification.php'; ?>
			<? require '../analytics.php'; ?>

			<link rel="shortcut icon" type="image/x-icon" href="../favicon/favicon.ico">

			<link rel="preload" href="../bootstrap.css" as="style" onload="this.rel='stylesheet'">

			
			<script src="../blocks/ppcalc/calkulator-zayavka/vue.js"></script>

			<script src="../library/jquery.min.js"></script>
			<script src="../library/bootstrap.min.js"></script>

		</head>
		<body>
			<header>
				<div class="label-place"></div> 
				<div id="navigation" class="navigation-bar">
					<? require '../header.php'; ?>
				</div>
			</header>
			<? require '../blocks/nav/nav.php'; ?>
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<? require '../blocks/ppcalc/calkulator-zayavka/balka.php'; ?>
						    <h1><?php echo $h1; ?></h1>
							
							<h3><?php echo $h3; ?></h3>
							<p><?php echo $p; ?></p>
						<b>Доставка двутавров и металлопроката в любую точку Казахстана</b>
						<p>Двутавровая балка Н образного профиля</p>
					</div>
					<div class="col-md-7">
						<img src="../img/balka-frames/балка.png">
						<h2><?php echo $h2; ?></h2>
						<div class="services" style="visibility: visible;">
							<ul class="production">
								<li>Производство</li>
								<li>Россия</li>
							</ul>
							
							<?php foreach($balka as $product) : ?>
							<p class="pp">Балка двутавровая</p>
							<div weight="<?php echo $product->weight ?>" pr_price="<?php echo $product->price_tonn ?>" pr_length="<?php echo $product->length ?>">
								<a rel="nofollow"><?php echo $product->diameter ?><p class="dd">Размер</p></a>
								<span class="length"><?php echo $product->length ?><p class="dd">Длина</p></span>
								<span class="ves-m"><?php echo $product->weight ?><p class="dd">Вес метра</p></span>
								<span class="price-meter"><?php echo $product->price_meter ?><p class="dd">Цена метра</p></span>
								<span class="price-tonn"><?php echo $product->price_tonn ?><p class="dd">Цена тонны</p></span>
								<!--span class="cart"><img src="../img/cart.svg" alt=""></span-->
							</div>
							<?php endforeach; ?>
						</div>
						<p></p>
					</div>

				</div>
			</div>
			<hr>
			<footer>
			</footer>
			<script src="../js/calculator.js"></script>
			<script src="../js/jqcart.js"></script>
			<script src="../js/my-script.js"></script>
		</body>
	</html>