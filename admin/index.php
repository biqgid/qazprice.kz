<?php
require "auth.php";
require "config/show_product.php";
?>

<!DOCTYPE html>
<html>

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta http-equiv="content-language" content="ru-ru">
		<title>Admin</title>

		<link rel="stylesheet" href="css/admin_page.css">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="js/script.js"></script>
	</head>

	<body>
		<script src="../алматы/металлопрокат/blocks/nav/jquery-1.11.2.min.js"></script> 
			<style>
				.topnav{
					padding: 10px;
					margin-bottom: 25px;
					box-shadow: 0.8rem 0.8rem 1.4rem #c8d0e7, -0.2rem -0.2rem 1.8rem #fff;
				}
				.topnavsort {
					position: relative;
					overflow: hidden;
					width: 100%;
					white-space: nowrap;
				}
				.topnavsort span {
					vertical-align: middle;
					display: inline;
					margin-left: -4px;
				}
				.topnavsort span {
					display: inline-block;
					background-color: #e4ebf5;
					box-shadow: 0.3rem 0.3rem 0.6rem #c8d0e7, -0.2rem -0.2rem 0.5rem #ffffff94;
					border-radius: 3px;
					padding: 10px 8px;
					text-align: left;
					border: 0;
					cursor: pointer;
					margin: 5px;
				}
			</style>
			<script>
				$(function () {
					$(window).load(function () {
						var $gal = $(".topnavsort"),
							galW = $gal.outerWidth(true),
							galSW = $gal[0].scrollWidth,
							wDiff = galSW / galW - 1, // widths difference ratio
							mPadd = 60, // mousemove Padding
							damp = 20, // Mmusemove response softness
							mX = 0, // real mouse position
							mX2 = 0, // modified mouse position
							posX = 0,
							mmAA = galW - mPadd * 2, // the mousemove available area
							mmAAr = galW / mmAA; // get available mousemove didderence ratio
						$gal.mousemove(function (e) {
							mX = e.pageX - $(this).parent().offset().left - this.offsetLeft;
							mX2 = Math.min(Math.max(0, mX - mPadd), mmAA) * mmAAr;
						});
						setInterval(function () {
							posX += (mX2 - posX) / damp; // zeno's paradox equation "catching delay"	
							$gal.scrollLeft(posX * wDiff);
						}, 10);
					});
				});
			</script>
<div class="topnav">
						<div class="topnavsort">
							<span><a href="#armatura">Арматура</a></span>
							<span><a href="#balka">Балка</a></span>
							<span><a href="#krug">Круг</a></span>
							<span><a href="#kvadrat">Квадрат</a></span>
							<span><a href="#list">Листы</a></span>
							<span><a href="#shar">Мелющие тела</a></span>
							<span><a href="#polosa">Полоса</a></span>
							<span><a href="#provoloka">Проволока</a></span>
							<span><a href="#truba">Трубы</a></span>
							<span><a href="#ugolok">Уголок</a></span>
							<span><a href="#shveller">Швеллер</a></span>
							<span><a href="#shestigrannik">Шестигранник</a></span>
						</div>
					</div>
		<div id="content">
			<table id="position-product" parent-table="armatura">
				<caption id="armatura">АРМАТУРА АIII Россия</caption>
				<tr>
					<th rowspan="2" class="first">Диаметр, мм</th>
					<th rowspan="2">Вес 1 пм, кг.</th>
					<th rowspan="2">Длина, м.</th>
					<th colspan="2">Стоимость, тенге</th>
					<th rowspan="2">Производство</th>
					<th rowspan="2">Вес 1 штуки</th>
				</tr>
				<tr>
					<th class="first">метр</td>
				<th class="first">тонна</td>
			</tr>
		<?php foreach($categories as $categori) : ?>

		<?php
		foreach($categori->ownArmaturaList as $product) : 
		?>
		<tr data-id="<?php echo $product->id ?>" class="product_tr" id="product_tr">
			<td class="update" data-name="diameter"><?php echo $product->diameter ?></td>
			<td class="update" data-name="weight"><?php echo $product->weight ?></td>
			<td class="update" data-name="length"><?php echo $product->length ?></td>
			<td class="update" data-name="price_meter"><?php echo $product->price_meter ?></td>
			<td class="update" data-name="price_tonn"><?php echo $product->price_tonn ?></td>
			<td class="update" data-name="production"><?php echo $product->production ?></td>
			<td class="update" data-name="weight_piece"><?php echo $product->weight_piece ?></td>
		</tr>
		<?php endforeach; ?>
		<?php endforeach; ?>
		</table>

	<table id="position-product" parent-table="armaturakz">
		<caption>АРМАТУРА АIII KZ</caption>
		<tr>
			<th rowspan="2" class="first">Диаметр, мм</th>
			<th rowspan="2">Вес 1 пм, кг.</th>
			<th rowspan="2">Длина, м.</th>
			<th colspan="2">Стоимость, тенге</th>
			<th rowspan="2">Производство</th>
			<th rowspan="2">Вес 1 штуки</th>
		</tr>
		<tr>
			<th class="first">метр</td>
		<th class="first">тонна</td>
	</tr>
<?php foreach($categories as $categori) : ?>

<?php
foreach($categori->ownArmaturakzList as $product) : 
?>
<tr data-id="<?php echo $product->id ?>" class="product_tr" id="product_tr">
	<td class="update" data-name="diameter"><?php echo $product->diameter ?></td>
	<td class="update" data-name="weight"><?php echo $product->weight ?></td>
	<td class="update" data-name="length"><?php echo $product->length ?></td>
	<td class="update" data-name="price_meter"><?php echo $product->price_meter ?></td>
	<td class="update" data-name="price_tonn"><?php echo $product->price_tonn ?></td>
	<td class="update" data-name="production"><?php echo $product->production ?></td>
	<td class="update" data-name="weight_piece"><?php echo $product->weight_piece ?></td>
</tr>
<?php endforeach; ?>
<?php endforeach; ?>
</table>


<table id="position-product" parent-table="katanka">
	<caption>КАТАНКА ГОСТ 5282-94</caption>
	<tr>
		<th rowspan="2" class="first">Диаметр, мм</th>
		<th rowspan="2">Вес 1 пм, кг.</th>
		<th rowspan="2">Длина, м.</th>
		<th colspan="2">Стоимость, тенге</th>
		<th rowspan="2">Производство</th>
		<th rowspan="2">Вес 1 штуки</th>
	</tr>
	<tr>
		<th class="first">метр</td>
	<th class="first">тонна</td>
</tr>
<?php foreach($categories as $categori) : ?>
<?php
foreach($categori->ownKatankaList as $product) : 
?>
<tr data-id="<?php echo $product->id ?>" class="product_tr" id="product_tr">
	<td class="update" data-name="diameter"><?php echo $product->diameter ?></td>
	<td class="update" data-name="weight"><?php echo $product->weight ?></td>
	<td class="update" data-name="length"><?php echo $product->length ?></td>
	<td class="update" data-name="price_meter"><?php echo $product->price_meter ?></td>
	<td class="update" data-name="price_tonn"><?php echo $product->price_tonn ?></td>
	<td class="update" data-name="production"><?php echo $product->production ?></td>
	<td class="update" data-name="weight_piece"><?php echo $product->weight_piece ?></td>
</tr>
<?php endforeach; ?>
<?php endforeach; ?>
</table>


<table id="position-product" parent-table="krug">
	<caption>КРУГ</caption>
	<tr>
		<th rowspan="2" class="first">Диаметр, мм</th>
		<th rowspan="2">Вес 1 пм, кг.</th>
		<th rowspan="2">Длина, м.</th>
		<th colspan="2">Стоимость, тенге</th>
		<th rowspan="2">Производство</th>
		<th rowspan="2">Вес 1 штуки</th>
	</tr>
	<tr>
		<th class="first">метр</td>
	<th class="first">тонна</td>
</tr>
<?php foreach($categories as $categori) : ?>
<?php
foreach($categori->ownKrugList as $product) : 
?>
<tr data-id="<?php echo $product->id ?>" class="product_tr" id="product_tr">
	<td class="update" data-name="diameter"><?php echo $product->diameter ?></td>
	<td class="update" data-name="weight"><?php echo $product->weight ?></td>
	<td class="update" data-name="length"><?php echo $product->length ?></td>
	<td class="update" data-name="price_meter"><?php echo $product->price_meter ?></td>
	<td class="update" data-name="price_tonn"><?php echo $product->price_tonn ?></td>
	<td class="update" data-name="production"><?php echo $product->production ?></td>
	<td class="update" data-name="weight_piece"><?php echo $product->weight_piece ?></td>
</tr>
<?php endforeach; ?>
<?php endforeach; ?>
</table>



<table id="position-product" parent-table="kvadrat">
	<caption>КВАДРАТ </caption>
	<tr>
		<th rowspan="2" class="first">Диаметр, мм</th>
		<th rowspan="2">Вес 1 пм, кг.</th>
		<th rowspan="2">Длина, м.</th>
		<th colspan="2">Стоимость, тенге</th>
		<th rowspan="2">Производство</th>
		<th rowspan="2">Вес 1 штуки</th>
	</tr>
	<tr>
		<th class="first">метр</td>
	<th class="first">тонна</td>
</tr>
<?php foreach($categories as $categori) : ?>
<?php
foreach($categori->ownKvadratList as $product) :
?>
<tr data-id="<?php echo $product->id ?>" class="product_tr" id="product_tr">
	<td class="update" data-name="diameter"><?php echo $product->diameter ?></td>
	<td class="update" data-name="weight"><?php echo $product->weight ?></td>
	<td class="update" data-name="length"><?php echo $product->length ?></td>
	<td class="update" data-name="price_meter"><?php echo $product->price_meter ?></td>
	<td class="update" data-name="price_tonn"><?php echo $product->price_tonn ?></td>
	<td class="update" data-name="production"><?php echo $product->production ?></td>
	<td class="update" data-name="weight_piece"><?php echo $product->weight_piece ?></td>
</tr>
<?php endforeach; ?>
<?php endforeach; ?>
</table>

<table id="position-product" parent-table="shestigrannik">
		<caption>Шестигранник</caption>
		<tr>
			<th rowspan="2" class="first">Диаметр, мм</th>
			<th rowspan="2">Вес 1 пм, кг.</th>
			<th rowspan="2">Длина, м.</th>
			<th colspan="2">Стоимость, тенге</th>
			<th rowspan="2">Производство</th>
			<th rowspan="2">Вес 1 штуки</th>
		</tr>
		<tr>
			<th class="first">метр</td>
		<th class="first">тонна</td>
	</tr>
<?php foreach($categories as $categori) : ?>

<?php
foreach($categori->ownShestigrannikList as $product) : 
?>
<tr data-id="<?php echo $product->id ?>" class="product_tr" id="product_tr">
	<td class="update" data-name="diameter"><?php echo $product->diameter ?></td>
	<td class="update" data-name="weight"><?php echo $product->weight ?></td>
	<td class="update" data-name="length"><?php echo $product->length ?></td>
	<td class="update" data-name="price_meter"><?php echo $product->price_meter ?></td>
	<td class="update" data-name="price_tonn"><?php echo $product->price_tonn ?></td>
	<td class="update" data-name="production"><?php echo $product->production ?></td>
	<td class="update" data-name="weight_piece"><?php echo $product->weight_piece ?></td>
</tr>
<?php endforeach; ?>
<?php endforeach; ?>
</table>

<table id="position-product" parent-table="listhk">
	<caption>СТАЛЬ ЛИСТОВАЯ  Х/К  ГОСТ 19904-90</caption>
	<tr>
		<th rowspan="2" class="first">Толщина, мм</th>
		<th rowspan="2">Вес за ед.кг.</th>
		<th rowspan="2">Размер,м</th>
		<th colspan="2">Стоимость, тенге</th>
		<th rowspan="2">Производство</th>
		<th rowspan="2">Примечание</th>
	</tr>
	<tr>
		<th class="first">лист</td>
	<th class="first">тонна</td>
</tr>
<?php foreach($categories as $categori) : ?>
<?php
foreach($categori->ownListhkList as $product) : 
?>
<tr data-id="<?php echo $product->id ?>" class="product_tr" id="product_tr">
	<td class="update" data-name="diameter"><?php echo $product->diameter ?></td>
	<td class="update" data-name="weight"><?php echo $product->weight ?></td>
	<td class="update" data-name="length"><?php echo $product->length ?></td>
	<td class="update" data-name="price_meter"><?php echo $product->price_meter ?></td>
	<td class="update" data-name="price_tonn"><?php echo $product->price_tonn ?></td>
	<td class="update" data-name="production"><?php echo $product->production ?></td>
	<td class="update" data-name="weight_piece"><?php echo $product->weight_piece ?></td>
</tr>
<?php endforeach; ?>
<?php endforeach; ?>
</table>



<table id="position-product" parent-table="listgk">
	<caption>СТАЛЬ ЛИСТОВАЯ  Г/К  ГОСТ 19903-74</caption>
	<tr>
		<th rowspan="2" class="first">Толщина, мм</th>
		<th rowspan="2">Вес за ед.кг.</th>
		<th rowspan="2">Размер,м</th>
		<th colspan="2">Стоимость, тенге</th>
		<th rowspan="2">Производство</th>
		<th rowspan="2">Примечание</th>
	</tr>
	<tr>
		<th class="first">лист</td>
	<th class="first">тонна</td>
</tr>
<?php foreach($categories as $categori) : ?>
<?php
foreach($categori->ownListgkList as $product) : 
?>
<tr data-id="<?php echo $product->id ?>" class="product_tr" id="product_tr">
	<td class="update" data-name="diameter"><?php echo $product->diameter ?></td>
	<td class="update" data-name="weight"><?php echo $product->weight ?></td>
	<td class="update" data-name="length"><?php echo $product->length ?></td>
	<td class="update" data-name="price_meter"><?php echo $product->price_meter ?></td>
	<td class="update" data-name="price_tonn"><?php echo $product->price_tonn ?></td>
	<td class="update" data-name="production"><?php echo $product->production ?></td>
	<td class="update" data-name="weight_piece"><?php echo $product->weight_piece ?></td>
</tr>
<?php endforeach; ?>
<?php endforeach; ?>
</table>


<table id="position-product" parent-table="listpvl">
	<caption>СТАЛЬ ЛИСТОВАЯ  ПВЛ</caption>
	<tr>
		<th rowspan="2" class="first">Толщина, мм</th>
		<th rowspan="2">Вес за ед.кг.</th>
		<th rowspan="2">Рабочая ширина</th>
		<th colspan="2">Стоимость, тенге</th>
		<th rowspan="2">Производство</th>
		<th rowspan="2">Примечание</th>
	</tr>
	<tr>
		<th class="first">лист</td>
	<th class="first">тонна</td>
</tr>
<?php foreach($categories as $categori) : ?>
<?php
foreach($categori->ownListpvlList as $product) : 
?>
<tr data-id="<?php echo $product->id ?>" class="product_tr" id="product_tr">
	<td class="update" data-name="diameter"><?php echo $product->diameter ?></td>
	<td class="update" data-name="weight"><?php echo $product->weight ?></td>
	<td class="update" data-name="length"><?php echo $product->length ?></td>
	<td class="update" data-name="price_meter"><?php echo $product->price_meter ?></td>
	<td class="update" data-name="price_tonn"><?php echo $product->price_tonn ?></td>
	<td class="update" data-name="production"><?php echo $product->production ?></td>
	<td class="update" data-name="weight_piece"><?php echo $product->weight_piece ?></td>
</tr>
<?php endforeach; ?>
<?php endforeach; ?>
</table>


<table id="position-product" parent-table="ugolokkz">
	<caption>СТАЛЬ УГЛОВАЯ</caption>
	<tr>
		<th rowspan="2" class="first">Размер, мм</th>
		<th rowspan="2">Вес 1 пм, кг.</th>
		<th rowspan="2">Длина,м</th>
		<th colspan="2">Стоимость, тенге</th>
		<th rowspan="2">Производство</th>
		<th rowspan="2">Вес 1 штуки</th>
	</tr>
	<tr>
		<th class="first">метр</td>
	<th class="first">тонна</td>
</tr>
<?php foreach($categories as $categori) : ?>
<?php
foreach($categori->ownUgolokkzList as $product) : 
?>
<tr data-id="<?php echo $product->id ?>" class="product_tr" id="product_tr">
	<td class="update" data-name="diameter"><?php echo $product->diameter ?></td>
	<td class="update" data-name="weight"><?php echo $product->weight ?></td>
	<td class="update" data-name="length"><?php echo $product->length ?></td>
	<td class="update" data-name="price_meter"><?php echo $product->price_meter ?></td>
	<td class="update" data-name="price_tonn"><?php echo $product->price_tonn ?></td>
	<td class="update" data-name="production"><?php echo $product->production ?></td>
	<td class="update" data-name="weight_piece"><?php echo $product->weight_piece ?></td>
</tr>
<?php endforeach; ?>
<?php endforeach; ?>
</table>
<table id="position-product" parent-table="ugolokru">
	<caption>СТАЛЬ УГЛОВАЯ  ГОСТ 8509-72</caption>
	<tr>
		<th rowspan="2" class="first">Размер, мм</th>
		<th rowspan="2">Вес 1 пм, кг.</th>
		<th rowspan="2">Длина,м</th>
		<th colspan="2">Стоимость, тенге</th>
		<th rowspan="2">Производство</th>
		<th rowspan="2">Вес 1 штуки</th>
	</tr>
	<tr>
		<th class="first">метр</td>
	<th class="first">тонна</td>
</tr>
<?php foreach($categories as $categori) : ?>
<?php
foreach($categori->ownUgolokruList as $product) : 
?>
<tr data-id="<?php echo $product->id ?>" class="product_tr" id="product_tr">
	<td class="update" data-name="diameter"><?php echo $product->diameter ?></td>
	<td class="update" data-name="weight"><?php echo $product->weight ?></td>
	<td class="update" data-name="length"><?php echo $product->length ?></td>
	<td class="update" data-name="price_meter"><?php echo $product->price_meter ?></td>
	<td class="update" data-name="price_tonn"><?php echo $product->price_tonn ?></td>
	<td class="update" data-name="production"><?php echo $product->production ?></td>
	<td class="update" data-name="weight_piece"><?php echo $product->weight_piece ?></td>
</tr>
<?php endforeach; ?>
<?php endforeach; ?>
</table>



<table id="position-product" parent-table="shveller">
	<caption>ШВЕЛЛЕР  ГОСТ 8240-97</caption>
	<tr>
		<th rowspan="2" class="first">Размер, мм</th>
		<th rowspan="2">Вес 1 пм, кг.</th>
		<th rowspan="2">Длина,м</th>
		<th colspan="2">Стоимость, тенге</th>
		<th rowspan="2">Производство</th>
		<th rowspan="2">Вес 1 штуки</th>
	</tr>
	<tr>
		<th class="first">метр</td>
	<th class="first">тонна</td>
</tr>
<?php foreach($categories as $categori) : ?>
<?php
foreach($categori->ownShvellerList as $product) : 
?>
<tr data-id="<?php echo $product->id ?>" class="product_tr" id="product_tr">
	<td class="update" data-name="diameter"><?php echo $product->diameter ?></td>
	<td class="update" data-name="weight"><?php echo $product->weight ?></td>
	<td class="update" data-name="length"><?php echo $product->length ?></td>
	<td class="update" data-name="price_meter"><?php echo $product->price_meter ?></td>
	<td class="update" data-name="price_tonn"><?php echo $product->price_tonn ?></td>
	<td class="update" data-name="production"><?php echo $product->production ?></td>
	<td class="update" data-name="weight_piece"><?php echo $product->weight_piece ?></td>
</tr>
<?php endforeach; ?>
<?php endforeach; ?>
</table>


<table id="position-product" parent-table="shvellerrelieved">
	<caption>ШВЕЛЛЕР ОБЛЕГЧЕННЫЙ </caption>
	<tr>
		<th rowspan="2" class="first">Размер, мм</th>
		<th rowspan="2">Вес 1 пм, кг.</th>
		<th rowspan="2">Длина,м</th>
		<th colspan="2">Стоимость, тенге</th>
		<th rowspan="2">Производство</th>
		<th rowspan="2">Вес 1 штуки</th>
	</tr>
	<tr>
		<th class="first">метр</td>
	<th class="first">тонна</td>
</tr>
<?php foreach($categories as $categori) : ?>
<?php
foreach($categori->ownShvellerrelievedList as $product) : 
?>
<tr data-id="<?php echo $product->id ?>" class="product_tr" id="product_tr">
	<td class="update" data-name="diameter"><?php echo $product->diameter ?></td>
	<td class="update" data-name="weight"><?php echo $product->weight ?></td>
	<td class="update" data-name="length"><?php echo $product->length ?></td>
	<td class="update" data-name="price_meter"><?php echo $product->price_meter ?></td>
	<td class="update" data-name="price_tonn"><?php echo $product->price_tonn ?></td>
	<td class="update" data-name="production"><?php echo $product->production ?></td>
	<td class="update" data-name="weight_piece"><?php echo $product->weight_piece ?></td>
</tr>
<?php endforeach; ?>
<?php endforeach; ?>
</table>


<table id="position-product" parent-table="balka">
	<caption id="balka">БАЛКА  ГОСТ 8239-89</caption>
	<tr>
		<th rowspan="2" class="first">Размер, мм</th>
		<th rowspan="2">Вес 1 пм, кг.</th>
		<th rowspan="2">Длина,м</th>
		<th colspan="2">Стоимость, тенге</th>
		<th rowspan="2">Производство</th>
		<th rowspan="2">Вес 1 штуки</th>
	</tr>
	<tr>
		<th class="first">метр</td>
	<th class="first">тонна</td>
</tr>
<?php foreach($categories as $categori) : ?>
<?php
foreach($categori->ownBalkaList as $product) : 
?>
<tr data-id="<?php echo $product->id ?>" class="product_tr" id="product_tr">
	<td class="update" data-name="diameter"><?php echo $product->diameter ?></td>
	<td class="update" data-name="weight"><?php echo $product->weight ?></td>
	<td class="update" data-name="length"><?php echo $product->length ?></td>
	<td class="update" data-name="price_meter"><?php echo $product->price_meter ?></td>
	<td class="update" data-name="price_tonn"><?php echo $product->price_tonn ?></td>
	<td class="update" data-name="production"><?php echo $product->production ?></td>
	<td class="update" data-name="weight_piece"><?php echo $product->weight_piece ?></td>
</tr>
<?php endforeach; ?>
<?php endforeach; ?>
</table>


<table id="position-product" parent-table="trubaelectric">
	<caption>ТРУБА ЭЛЕКТРОСВАРНАЯ  ГОСТ 10704-91, 10705-80</caption>
	<tr>
		<th rowspan="2" class="first">Размер, мм</th>
		<th rowspan="2">Вес 1 пм, кг.</th>
		<th rowspan="2">Длина,м</th>
		<th colspan="2">Стоимость, тенге</th>
		<th rowspan="2">Производство</th>
		<th rowspan="2">Вес 1 штуки</th>
	</tr>
	<tr>
		<th class="first">метр</td>
	<th class="first">тонна</td>
</tr>
<?php foreach($categories as $categori) : ?>
<?php
foreach($categori->ownTrubaelectricList as $product) : 
?>
<tr data-id="<?php echo $product->id ?>" class="product_tr" id="product_tr">
	<td class="update" data-name="diameter"><?php echo $product->diameter ?></td>
	<td class="update" data-name="weight"><?php echo $product->weight ?></td>
	<td class="update" data-name="length"><?php echo $product->length ?></td>
	<td class="update" data-name="price_meter"><?php echo $product->price_meter ?></td>
	<td class="update" data-name="price_tonn"><?php echo $product->price_tonn ?></td>
	<td class="update" data-name="production"><?php echo $product->production ?></td>
	<td class="update" data-name="weight_piece"><?php echo $product->weight_piece ?></td>
</tr>
<?php endforeach; ?>
<?php endforeach; ?>
</table>


<table id="position-product" parent-table="trubagaz">
	<caption>ТРУБА ВОДОГАЗОПРОВОДНАЯ ГОСТ 3262-75</caption>
	<tr>
		<th rowspan="2" class="first">Размер, мм</th>
		<th rowspan="2">Вес 1 пм, кг.</th>
		<th rowspan="2">Длина,м</th>
		<th colspan="2">Стоимость, тенге</th>
		<th rowspan="2">Производство</th>
		<th rowspan="2">Вес 1 штуки</th>
	</tr>
	<tr>
		<th class="first">метр</td>
	<th class="first">тонна</td>
</tr>
<?php foreach($categories as $categori) : ?>
<?php
foreach($categori->ownTrubagazList as $product) : 
?>
<tr data-id="<?php echo $product->id ?>" class="product_tr" id="product_tr">
	<td class="update" data-name="diameter"><?php echo $product->diameter ?></td>
	<td class="update" data-name="weight"><?php echo $product->weight ?></td>
	<td class="update" data-name="length"><?php echo $product->length ?></td>
	<td class="update" data-name="price_meter"><?php echo $product->price_meter ?></td>
	<td class="update" data-name="price_tonn"><?php echo $product->price_tonn ?></td>
	<td class="update" data-name="production"><?php echo $product->production ?></td>
	<td class="update" data-name="weight_piece"><?php echo $product->weight_piece ?></td>
</tr>
<?php endforeach; ?>
<?php endforeach; ?>
</table>


<table id="position-product" parent-table="polosa">
	<caption>ПОЛОСА</caption>
	<tr>
		<th rowspan="2" class="first">Размер, мм</th>
		<th rowspan="2">Вес 1 пм, кг.</th>
		<th rowspan="2">Длина,м</th>
		<th colspan="2">Стоимость, тенге</th>
		<th rowspan="2">Производство</th>
		<th rowspan="2">Пимечание</th>
	</tr>
	<tr>
		<th class="first">метр</td>
	<th class="first">тонна</td>
</tr>
<?php foreach($categories as $categori) : ?>
<?php
foreach($categori->ownPolosaList as $product) : 
?>
<tr data-id="<?php echo $product->id ?>" class="product_tr" id="product_tr">
	<td class="update" data-name="diameter"><?php echo $product->diameter ?></td>
	<td class="update" data-name="weight"><?php echo $product->weight ?></td>
	<td class="update" data-name="length"><?php echo $product->length ?></td>
	<td class="update" data-name="price_meter"><?php echo $product->price_meter ?></td>
	<td class="update" data-name="price_tonn"><?php echo $product->price_tonn ?></td>
	<td class="update" data-name="production"><?php echo $product->production ?></td>
	<td class="update" data-name="weight_piece"><?php echo $product->weight_piece ?></td>
</tr>
<?php endforeach; ?>
<?php endforeach; ?>
</table>


<table id="position-product" parent-table="electrodi">
	<caption>ЭЛЕКТРОДЫ СВАРОЧНЫЕ</caption>
	<tr>
		<th rowspan="2" class="first">Марка электродов</th>
		<th rowspan="2">Диаметр, мм</th>
		<th rowspan="2">Вес пачки, кг</th>
		<th colspan="2">Стоимость, тенге</th>
		<th rowspan="2">Производство</th>
		<th rowspan="2">Пимечание</th>
	</tr>
	<tr>
		<th class="first">пачка</td>
	<th class="first">тонна</td>
</tr>
<?php foreach($categories as $categori) : ?>
<?php
foreach($categori->ownElectrodiList as $product) : 
?>
<tr data-id="<?php echo $product->id ?>" class="product_tr" id="product_tr">
	<td class="update" data-name="diameter"><?php echo $product->diameter ?></td>
	<td class="update" data-name="weight"><?php echo $product->weight ?></td>
	<td class="update" data-name="length"><?php echo $product->length ?></td>
	<td class="update" data-name="price_meter"><?php echo $product->price_meter ?></td>
	<td class="update" data-name="price_tonn"><?php echo $product->price_tonn ?></td>
	<td class="update" data-name="production"><?php echo $product->production ?></td>
	<td class="update" data-name="weight_piece"><?php echo $product->weight_piece ?></td>
</tr>
<?php endforeach; ?>
<?php endforeach; ?>
</table>


<table id="position-product" parent-table="brus">
	<caption>БРУС ДЕРЕВЯННЫЙ</caption>
	<tr>
		<th rowspan="2" class="first">Размер, мм</th>
		<th rowspan="2"></th>
		<th rowspan="2">Длина,м</th>
		<th colspan="2">Стоимость, тенге</th>
		<th rowspan="2">Производство</th>
		<th rowspan="2">Пимечание</th>
	</tr>
	<tr>
		<th class="first">метр</td>
	<th class="first">1м/куб</td>
</tr>
<?php foreach($categories as $categori) : ?>
<?php
foreach($categori->ownBrusList as $product) : 
?>
<tr data-id="<?php echo $product->id ?>" class="product_tr" id="product_tr">
	<td class="update" data-name="diameter"><?php echo $product->diameter ?></td>
	<td class="update" data-name="weight"><?php echo $product->weight ?></td>
	<td class="update" data-name="length"><?php echo $product->length ?></td>
	<td class="update" data-name="price_meter"><?php echo $product->price_meter ?></td>
	<td class="update" data-name="price_tonn"><?php echo $product->price_tonn ?></td>
	<td class="update" data-name="production"><?php echo $product->production ?></td>
	<td class="update" data-name="weight_piece"><?php echo $product->weight_piece ?></td>
</tr>
<?php endforeach; ?>
<?php endforeach; ?>
</table>


<table id="position-product" parent-table="trubaprofil">
	<caption>ТРУБА ПРОФИЛЬНАЯ ГОСТ 8639-82</caption>
	<tr>
		<th rowspan="2" class="first">Размер, мм</th>
		<th rowspan="2">Вес 1 пм, кг.</th>
		<th rowspan="2">Длина,м</th>
		<th colspan="2">Стоимость, тенге</th>
		<th rowspan="2">Производство</th>
		<th rowspan="2">Пимечание</th>
	</tr>
	<tr>
		<th class="first">метр</td>
	<th class="first">тонна</td>
</tr>
<?php foreach($categories as $categori) : ?>
<?php
foreach($categori->ownTrubaprofilList as $product) : 
?>
<tr data-id="<?php echo $product->id ?>" class="product_tr" id="product_tr">
	<td class="update" data-name="diameter"><?php echo $product->diameter ?></td>
	<td class="update" data-name="weight"><?php echo $product->weight ?></td>
	<td class="update" data-name="length"><?php echo $product->length ?></td>
	<td class="update" data-name="price_meter"><?php echo $product->price_meter ?></td>
	<td class="update" data-name="price_tonn"><?php echo $product->price_tonn ?></td>
	<td class="update" data-name="production"><?php echo $product->production ?></td>
	<td class="update" data-name="weight_piece"><?php echo $product->weight_piece ?></td>
</tr>
<?php endforeach; ?>
<?php endforeach; ?>
</table>


<table id="position-product" parent-table="rulongk">
	<caption>РУЛОН Г/К</caption>
	<tr>
		<th rowspan="2" class="first">Размер, мм</th>
		<th rowspan="2">Вес</th>
		<th colspan="2">Стоимость, тенге</th>
		<th rowspan="2">Производство</th>
		<th rowspan="2">Примечание</th>
	</tr>
	<tr>
		<th class="first">метр</td>
	<th class="first">тонна</td>
</tr>
<?php foreach($categories as $categori) : ?>
<?php
foreach($categori->ownRulongkList as $product) : 
?>
<tr data-id="<?php echo $product->id ?>" class="product_tr" id="product_tr">
	<td class="update" data-name="diameter"><?php echo $product->diameter ?></td>
	<td class="update" data-name="weight"><?php echo $product->weight ?></td>
	<td class="update" data-name="length"><?php echo $product->length ?></td>
	<td class="update" data-name="price_meter"><?php echo $product->price_meter ?></td>
	<td class="update" data-name="price_tonn"><?php echo $product->price_tonn ?></td>
	<td class="update" data-name="production"><?php echo $product->production ?></td>
	<td class="update" data-name="weight_piece"><?php echo $product->weight_piece ?></td>
</tr>
<?php endforeach; ?>
<?php endforeach; ?>
</table>


<table id="position-product" parent-table="provolka">
	<caption>ПРОВОЛОКА</caption>
	<tr>
		<th rowspan="2" class="first">Размер, мм</th>
		<th rowspan="2">Вес бухты, тн.</th>
		<th rowspan="2">Длина,м</th>
		<th colspan="2">Стоимость, тенге</th>
		<th rowspan="2">Производство</th>
		<th rowspan="2">Пимечание</th>
	</tr>
	<tr>
		<th class="first">бухта</td>
	<th class="first">тонна</td>
</tr>
<?php foreach($categories as $categori) : ?>
<?php
foreach($categori->ownProvolkaList as $product) : 
?>
<tr data-id="<?php echo $product->id ?>" class="product_tr" id="product_tr">
	<td class="update" data-name="diameter"><?php echo $product->diameter ?></td>
	<td class="update" data-name="weight"><?php echo $product->weight ?></td>
	<td class="update" data-name="length"><?php echo $product->length ?></td>
	<td class="update" data-name="price_meter"><?php echo $product->price_meter ?></td>
	<td class="update" data-name="price_tonn"><?php echo $product->price_tonn ?></td>
	<td class="update" data-name="production"><?php echo $product->production ?></td>
	<td class="update" data-name="weight_piece"><?php echo $product->weight_piece ?></td>
</tr>
<?php endforeach; ?>
<?php endforeach; ?>
</table>



<table id="position-product" parent-table="provolkadrawn">
	<caption>ПРОВОЛОКА ТЯНУТАЯ</caption>
	<tr>
		<th rowspan="2" class="first">Размер, мм</th>
		<th rowspan="2">Вес 1 пм, кг</th>
		<th rowspan="2">Длина,м</th>
		<th colspan="2">Стоимость, тенге</th>
		<th rowspan="2">Производство</th>
		<th rowspan="2">Пимечание</th>
	</tr>
	<tr>
		<th class="first">метр</td>
	<th class="first">тонна</td>
</tr>
<?php foreach($categories as $categori) : ?>
<?php
foreach($categori->ownProvolkadrawnList as $product) : 
?>
<tr data-id="<?php echo $product->id ?>" class="product_tr" id="product_tr">
	<td class="update" data-name="diameter"><?php echo $product->diameter ?></td>
	<td class="update" data-name="weight"><?php echo $product->weight ?></td>
	<td class="update" data-name="length"><?php echo $product->length ?></td>
	<td class="update" data-name="price_meter"><?php echo $product->price_meter ?></td>
	<td class="update" data-name="price_tonn"><?php echo $product->price_tonn ?></td>
	<td class="update" data-name="production"><?php echo $product->production ?></td>
	<td class="update" data-name="weight_piece"><?php echo $product->weight_piece ?></td>
</tr>
<?php endforeach; ?>
<?php endforeach; ?>
</table>


<table id="position-product" parent-table="setka">
	<caption>СЕТКА КЛАДОЧНАЯ ГОСТ 23279-83</caption>
	<tr>
		<th rowspan="2" class="first">Диаметр, мм</th>
		<th rowspan="2">Вес за ед.кг</th>
		<th rowspan="2">Длина,м</th>
		<th colspan="2">Стоимость, тенге</th>
		<th rowspan="2">Стоимость за тонну</th>
		<th rowspan="2">Пимечание</th>
	</tr>
	<tr>
		<th class="first">розница</td>
	<th class="first">опт</td>
</tr>
<?php foreach($categories as $categori) : ?>
<?php
foreach($categori->ownSetkaList as $product) : 
?>
<tr data-id="<?php echo $product->id ?>" class="product_tr" id="product_tr">
	<td class="update" data-name="diameter"><?php echo $product->diameter ?></td>
	<td class="update" data-name="weight"><?php echo $product->weight ?></td>
	<td class="update" data-name="length"><?php echo $product->length ?></td>
	<td class="update" data-name="price_meter"><?php echo $product->price_meter ?></td>
	<td class="update" data-name="price_tonn"><?php echo $product->price_tonn ?></td>
	<td class="update" data-name="production"><?php echo $product->production ?></td>
	<td class="update" data-name="weight_piece"><?php echo $product->weight_piece ?></td>
</tr>
<?php endforeach; ?>
<?php endforeach; ?>
</table>

<table id="position-product" parent-table="profnastil">
	<caption>ПРОФНАСТИЛ ПОД РАЗМЕР, НА ЗАКАЗ</caption>
	<tr>
		<th rowspan="2" class="first">Размер, мм</th>
		<th rowspan="2">Вес 1 п.м.</th>
		<th rowspan="2">Рабочая ширина, мм</th>
		<th colspan="3">Стоимость, тенге</th>
		<th rowspan="2">Пимечание</th>
	</tr>
	<tr>
		<th class="first">за 1 п.м.</td>
	<th class="first">за 1 кв.м.</td>
<th class="first">тонна</td>
</tr>
<?php foreach($categories as $categori) : ?>
<?php
foreach($categori->ownProfnastilList as $product) : 
?>
<tr data-id="<?php echo $product->id ?>" class="product_tr" id="product_tr">
	<td class="update" data-name="diameter"><?php echo $product->diameter ?></td>
	<td class="update" data-name="weight"><?php echo $product->weight ?></td>
	<td class="update" data-name="length"><?php echo $product->length ?></td>
	<td class="update" data-name="price_meter"><?php echo $product->price_meter ?></td>
	<td class="update" data-name="price_tonn"><?php echo $product->price_tonn ?></td>
	<td class="update" data-name="production"><?php echo $product->production ?></td>
	<td class="update" data-name="weight_piece"><?php echo $product->weight_piece ?></td>
</tr>
<?php endforeach; ?>
<?php endforeach; ?>
</table>

</div>
<div id="myModal1" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title">Создать продукт</h4>
			</div>
			<form role="form" id="product">
				<div class="modal-body">
					<div class="col-md-6">
						<div class="form-group">
							<label for="email">Название / Диаметр</label>
							<input name="diameter" type="text"  class="form-control" required />
						</div>

						<div class="form-group">
							<label for="weight">Вес</label>	  
							<input name="weight" type="text" class="form-control" placeholder="0.64" required /> 
						</div>

						<div class="form-group">
							<label for="length">Длина</label>
							<input name="length" type="text"  class="form-control" placeholder="11.75" required />
						</div>

						<div class="form-group">
							<label for="price_meter">Стоимость метра</label>
							<input name="price_meter" type="text"  class="form-control" placeholder="83"/>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="price_tonn">Стоимость тонны</label>	  
							<input name="price_tonn" type="text" class="form-control" placeholder="215000" required /> 
						</div>

						<div class="form-group">
							<label for="production">Производитель</label>	  
							<input name="production" type="text" class="form-control" placeholder="Казахстан..."/> 
						</div>

						<div class="form-group">
							<label for="weight_piece">Примечание</label>	  
							<input name="weight_piece" type="text" class="form-control"/> 
						</div>

						<div class="form-group">
							<label for="weight_piece">Родительская категория</label>
							<select class="form-control" required name="product_id">
								<option>Выбрать...</option>
								<?php foreach($categories as $categori) : ?>
								<option value="<?php echo $categori->id; ?>" table-name="<?php echo $categori->name; ?>"><?php echo $categori->description; ?></option>
								<?php endforeach; ?>
							</select>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
					<button class="btn btn-primary" id="send-data" name="submit">Сохранить</button>
				</div>
			</form>
		</div>
	</div>
</div>

</body>
</html>
