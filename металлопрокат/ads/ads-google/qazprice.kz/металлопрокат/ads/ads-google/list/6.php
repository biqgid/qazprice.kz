<?php 
//------------------------------------------------
if(isset($_GET['h1'])){
	if($_GET['h1'] == 'listoc'){$h1 = 'Оцинковка лист в Алматы';}//-ЗАПРОС "listoc"
}
//------------------------------------------------
if(isset($_GET['h2'])){//-на запрос "listoc"
	if($_GET['h2'] == 'listoc'){$h2 = 'Прайс лист с ценами';}
}
//------------------------------------------------
if(isset($_GET['h3'])){//-на запрос "listoc"
	if($_GET['h3'] == 'listoc'){$h3 = 'Узнать цены на оцинкованные листы в Алматы';}
}
//------------------------------------------------
if(isset($_GET['p'])){//-на запрос "listoc"
	if($_GET['p'] == 'listoc'){$p = 'Актуальные цены на оцинкованные листы в городе Алматы, скидки! Заказать онлайн на сайте';}
}

//-на запрос "listoc" == https://qazprice.kz/металлопрокат/листы/алматы?h1=listoc&h2=listoc&h3=listoc&p=listoc

//------------------------------------------------
?>