<?php 

require '../bootstrap.php';
require '../php/mail.php';

//------------------------------------------------
require '../ads/ads-google/ugolok/0.php';
require '../ads/ads-google/ugolok/1.php';
require '../ads/ads-google/ugolok/2.php';
require '../ads/ads-google/ugolok/3.php';
require '../ads/ads-google/ugolok/4.php';
//------------------------------------------------
?>

<!doctype html>
<html lang="ru_RU">
	<html>
		<head>
			<meta charset="utf-8">
			<meta content="width=device-width, initial-scale=1.0" name="viewport">
			<title>Уголок в Алматы</title>

			<meta name="description" content="">
			<meta name="abstract" content="">
			<meta name="keywords" content="">

			<meta name="yandex-verification" content="" />
			<meta name="google-site-verification" content="" />

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
						<? require '../blocks/ppcalc/calkulator-zayavka/ugolok.php'; ?>
						<hr>
						<div class="text">
							<h1><?php echo $h1; ?></h1>
							<h2><?php echo $h2; ?></h2>
							<h3><?php echo $h3; ?></h3>
							<p><?php echo $p; ?></p>
						</div>
					</div>
					<div class="col-md-7">
						<div class="img">
							<img src="../img/уголок.png">
						</div>
						<div class="services" style="visibility: visible;">
							<ul class="production">
								<li>Производство</li>
								<li><a>Россия</a></li>
								<li><a>Казахстан</a></li>
							</ul>
							<?php foreach($ugolokkz as $product) : ?>
							<p class="pp">Уголок</p>
							<div weight="<?php echo $product->weight ?>" pr_price="<?php echo $product->price_tonn ?>" pr_length="<?php echo $product->length ?>">
								<a rel="nofollow"><?php echo $product->diameter ?><br><p class="dd">Диаметр</p></a>
								<span class="length"><?php echo $product->length ?><br><p class="dd">Длина</p></span>
								<span class="ves-m"><?php echo $product->weight ?><br><p class="dd">Вес метра</p></span>
								<span class="price-meter"><?php echo $product->price_meter ?><br><p class="dd">Цена за метр</p></span>
								<span class="price-tonn"><?php echo $product->price_tonn ?><br><p class="dd">Цена за тонну</p></span>
								<!--span class="cart"><img src="../img/cart.svg" alt=""></span-->
							</div>
							<?php endforeach; ?>
						</div>
						<p></p>
					</div>
				</div>
			</div>
			<hr>
			<div class="container">
				<div class="row">
					<div class="col-md-5">


					</div>	
					<div class="col-md-7">

					</div>

				</div>
			</div>
			<footer>
			</footer>
			<script src="../js/calculator.js"></script>
			<script src="../js/jqcart.js"></script>
			<script src="../js/my-script.js"></script>
		</body>
	</html>