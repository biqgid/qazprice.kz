<?php 

require '../bootstrap.php';
require '../php/mail.php';

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
					<div class="col-md-8">
						<img src="../img/sort.png">
					</div>
					<div class="col-md-4">
						<h2>Металлопрокат в Алматы</h2>
						<h3>Цены на металлопрокат в Алматы</h3>
						<b>Поставщики металлопроката, металлобазы в Алматы</b>
					</div>
					
				</div>
			</div>
			<hr>
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<h3>Прайс лист на Металлопрокат в Алматы</h3>
						<ul class="production">
							<li>Производство</li>
							<li><a>Россия</a></li>
							<li><a>Казахстан</a></li>
						</ul>		
						<div class="services" style="visibility: visible;">
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
					<div class="col-md-4">
						<b>Мой заказ</b>
						<button>Добавить позицию</button>
						<br>						
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