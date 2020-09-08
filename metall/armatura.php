<?php 

require '../bootstrap.php';
require '../php/mail.php';

//------------------------------------------------
$go = 'Арматура в Алматы';
if(isset($_GET['go'])){
	if($_GET['go'] == 'a3'){$go = 'Арматура А3';}
}
$hgo = 'Прайс лист на арматуру в Алматы';
if(isset($_GET['hgo'])){
	if($_GET['hgo'] == 'a4'){$hgo = 'Прайс лист';}
}
//https://qazprice.kz/metall/armatura?go=a3&hgo=a4
//------------------------------------------------
?>

<!doctype html>
<html lang="ru_RU">
	<html>
		<head>
			<meta charset="utf-8">
			<meta content="width=device-width, initial-scale=1.0" name="viewport">
			<title>Арматура в Алматы</title>

			<meta name="description" content="">
			<meta name="abstract" content="">
			<meta name="keywords" content="">

			<meta name="yandex-verification" content="" />
			<meta name="google-site-verification" content="" />

			<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

			<link rel="preload" href="../bootstrap.css" as="style" onload="this.rel='stylesheet'">

			<script src="../blocks/ppcalc/calkulator-zayavka/ppcalc.js"></script>
			<script src="../blocks/ppcalc/calkulator-zayavka/vue.js"></script>

			<script src="../library/jquery.min.js"></script>
			<script src="../library/bootstrap.min.js"></script>

		</head>
		<body>
			<header>
				<div class="label-place"></div> 
				<div id="navigation" class="navigation-bar">
					<? require './header.php'; ?>
				</div>
			</header>
			<? require '../blocks/nav/nav.php'; ?>
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<img src="../img/armatura-frames/frame_13.png">
					</div>
					<div class="col-md-7">
						<h2><?php echo $go; ?></h2>
						<h3>Цены на арматуру в Алматы</h3>
						<b>Купить арматуру, цена за метр арматуры, цена за тонну арматуры.</b>
					</div>

				</div>
			</div>
			<hr>
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<? require '../blocks/ppcalc/calkulator-zayavka/armatura-a3.php'; ?>
						<br>

					</div>	
					<div class="col-md-7">
						<h3><?php echo $hgo; ?></h3>

						<div class="services" style="visibility: visible;">
							<ul class="production">
								<li>Производство</li>
								<li><a>Россия</a></li>
								<li><a>Казахстан</a></li>
							</ul>
							<div>
								<a rel="nofollow">Арматура А3</a>
								<span class="length">Длина прута</span>
								<span class="ves-m">Вес метра</span>
								<span class="price-meter">Цена метра</span>
								<span class="price-tonn">Цена тонны</span>
								<span class="cart"><img src="../img/cart.svg" alt=""></span>
							</div>
							<?php foreach($armatura as $product) : ?>
							<div weight="<?php echo $product->weight ?>" pr_price="<?php echo $product->price_tonn ?>" pr_length="<?php echo $product->length ?>">
								<a rel="nofollow"><?php echo $product->diameter ?></a>
								<span class="length"><?php echo $product->length ?></span>
								<span class="ves-m"><?php echo $product->weight ?></span>
								<span class="price-meter"><?php echo $product->price_meter ?></span>
								<span class="price-tonn"><?php echo $product->price_tonn ?></span>
								<span class="cart"><img src="../img/cart.svg" alt=""></span>
							</div>
							<?php endforeach; ?>
						</div>
						<p></p>
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