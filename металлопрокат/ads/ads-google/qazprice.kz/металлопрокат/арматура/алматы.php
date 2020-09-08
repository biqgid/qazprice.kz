<?php 

require '../bootstrap.php';
require '../php/mail.php';

//------------------------------------------------
require '../ads/ads-google/armatura/0.php';
require '../ads/ads-google/armatura/1.php';
require '../ads/ads-google/armatura/2.php';
require '../ads/ads-google/armatura/3.php';
require '../ads/ads-google/armatura/4.php';
require '../ads/ads-google/armatura/5.php';
require '../ads/ads-google/armatura/6.php';
?>

<!doctype html>
<html lang="ru_RU">
	<html>
		<head>
			<meta charset="utf-8">
			<meta content="width=device-width, initial-scale=1.0" name="viewport">
			<title>Арматура в Алматы, цена на арматуру в Алматы, арматура прайс лист, арматура Алматы цена за метр, цена за тонну, арматура а3, арматура а500с, арматура 35гс</title>

			<meta name="description" content="Арматура в Алматы, цена на арматуру в Алматы, арматура прайс лист, арматура Алматы цена за метр, цена за тонну, арматура а3, арматура а500с, арматура 35гс">
			<meta name="abstract" content="Арматура в Алматы, цена на арматуру в Алматы, арматура прайс лист, арматура Алматы цена за метр, цена за тонну, арматура а3, арматура а500с, арматура 35гс">
			<meta name="keywords" content="Арматура в Алматы, цена на арматуру в Алматы, арматура прайс лист, арматура Алматы цена за метр, цена за тонну, арматура а3, арматура а500с, арматура 35гс">
			
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
						<? require '../blocks/ppcalc/calkulator-zayavka/armatura.php'; ?>

						<div class="text">
							<h1><?php echo $h1; ?></h1>
							<h3><?php echo $h3; ?></h3>
							<p><?php echo $p; ?></p>
							<b>Доставка ароматуры и металлопроката в любую точку Казахстана</b>
							<p>Строительная арматура периодического профиля (рифленая)</p>
						</div>
					</div>
					<div class="col-md-7">
						<div class="img">
							<img src="../img/armatura-frames/арматура-а3.png">
						</div>
						<h2><?php echo $h2; ?></h2>
						<div class="services" style="visibility: visible;">
							<ul class="production">
								<li>Производство</li>
								<li>Россия</li>
								<li>Казахстан</li>
							</ul>
							<?php foreach($armatura as $product) : ?>
							<p class="pp">Арматура А3</p>
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
						
					</div>
				</div>
			</div>
			<hr>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<strong>На нашем сайте Вы можете купить арматуру, узнать цену за метр арматуры, узнать цену за тонну арматуры.</strong>
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