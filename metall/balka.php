<?php 

require './sort.php';
require './php/mail.php';

?>
<!doctype html>
<html lang="ru_RU">
	<html>
		<head>
			<meta charset="utf-8">
			<meta content="width=device-width, initial-scale=1.0" name="viewport">
			<title>Арматура</title>

			<meta name="description" content="">
			<meta name="abstract" content="">
			<meta name="keywords" content="">

			<meta name="yandex-verification" content="" />
			<meta name="google-site-verification" content="" />

			<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

			<link rel="preload" href="../css/calc.css" as="style" onload="this.rel='stylesheet'">
			<link rel="preload" href="../css/jqcart.css" as="style" onload="this.rel='stylesheet'">
			<link rel="preload" href="bootstrap.css" as="style" onload="this.rel='stylesheet'">
			
		
			<script src="blocks/ppcalc/calkulator-zayavka/ppcalc.js"></script>
			<script src="blocks/ppcalc/calkulator-zayavka/vue.js"></script>

			<script src="../library/jquery.min.js"></script>
			<script src="../library/bootstrap.min.js"></script>

		</head>
		<body>
			<header>
				<div class="label-place"></div> 
				<div id="navigation" class="navigation-bar">
							<? require 'header/header.php'; ?>
					
				</div>
				<? require 'blocks/nav/nav.php'; ?>
			</header>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>Арматура в Алматы</h1>
						<h2>Цены на арматуру</h2>
					</div>
				</div>
			</div>
			<hr>
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<b>Металлобазы в Алматы</b>
						<button>А-Сталь</button>
						<button>Шариф металл</button>
						<button>Мечел</button>
					</div>
					<div class="col-md-6">
						<h3>Цены на арматуру в Алматы</h3>
						<ul class="production">
							<li>Производство</li>
							<li>Россия</li>
							<li>Казахстан</li>
						</ul>		
						<div class="services" style="visibility: visible;">
							<div class="flex-style">
                        <p>Размет</p>
                        <p>Длина</p>
                        <p>вес метра</p>
                        <p>цена метра</p>
                        <p>цена тонны</p>
                    </div>
                    <?php foreach($balka as $product) : ?>
                        <div weight="<?php echo $product->weight ?>" pr_price="<?php echo $product->price_tonn ?>" pr_length="<?php echo $product->length ?>">
                            <a rel="nofollow"><?php echo $product->diameter ?></a>
                            <span class="length"><?php echo $product->length ?></span>
                            <span class="ves-m"><?php echo $product->weight ?></span>
                            <span class="price-meter"><?php echo $product->price_meter ?></span>
                            <span class="price-tonn"><?php echo $product->price_tonn ?></span>
                        </div>
                    <?php endforeach; ?>
						</div>
					</div>
					<div class="col-md-3">
						<b>Калькулятор металлопроката</b>
						
						
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