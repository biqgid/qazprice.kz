<?php 
//------------------------------------------------
if(isset($_GET['h1'])){
	if($_GET['h1'] == 'listma'){$h1 = 'Металлический лист в Алматы';}//-ЗАПРОС "listma"
}
//------------------------------------------------
if(isset($_GET['h2'])){//-на запрос "listma"
	if($_GET['h2'] == 'listma'){$h2 = 'Прайс лист с ценами';}
}
//------------------------------------------------
if(isset($_GET['h3'])){//-на запрос "listma"
	if($_GET['h3'] == 'listma'){$h3 = 'Узнать цены на металлические листы';}
}
//------------------------------------------------
if(isset($_GET['p'])){//-на запрос "listma"
	if($_GET['p'] == 'listma'){$p = 'Актуальные цены на металлические листы в городе Алматы, скидки! Заказать онлайн на сайте';}
}

//-на запрос "listma" == https://qazprice.kz/металлопрокат/листы/алматы?h1=listma&h2=listma&h3=listma&p=listma

//------------------------------------------------
?>