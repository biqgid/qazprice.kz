<?php 
//------------------------------------------------
if(isset($_GET['h1'])){
	if($_GET['h1'] == 'listmk'){$h1 = 'Металлический лист купить';}//-ЗАПРОС "listmk"
}
//------------------------------------------------
if(isset($_GET['h2'])){//-на запрос "listmk"
	if($_GET['h2'] == 'listmk'){$h2 = 'Прайс лист с ценами';}
}
//------------------------------------------------
if(isset($_GET['h3'])){//-на запрос "listmk"
	if($_GET['h3'] == 'listmk'){$h3 = 'Узнать цены на металлические листы';}
}
//------------------------------------------------
if(isset($_GET['p'])){//-на запрос "listmk"
	if($_GET['p'] == 'listmk'){$p = 'Актуальные цены на металлические листы в городе Алматы, скидки! Заказать онлайн на сайте';}
}

//-на запрос "listmk" == https://qazprice.kz/металлопрокат/листы/алматы?h1=listmk&h2=listmk&h3=listmk&p=listmk

//------------------------------------------------
?>