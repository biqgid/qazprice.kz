<?php 
//------------------------------------------------
if(isset($_GET['h1'])){
	if($_GET['h1'] == 'price'){$h1 = 'Арматура прайс лист';}//-ЗАПРОС "price"
}
//------------------------------------------------
if(isset($_GET['h2'])){//-на запрос "price"
	if($_GET['h2'] == 'price'){$h2 = 'Лучшие цены на арматуру';}
}
//------------------------------------------------
if(isset($_GET['h3'])){//-на запрос "price"
	if($_GET['h3'] == 'price'){$h3 = 'Узнать цены на стальную арматуру А3';}
}
//------------------------------------------------
if(isset($_GET['p'])){//-на запрос "price"
	if($_GET['p'] == 'price'){$p = 'Актуальные цены на арматуру в городе Алматы, скидки! Заказать онлайн на сайте';}
}

//-на запрос "price" == https://qazprice.kz/металлопрокат/арматура/алматы?h1=price&h2=price&h3=price&p=price

//------------------------------------------------
?>