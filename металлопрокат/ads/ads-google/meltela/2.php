<?php 
//------------------------------------------------
if(isset($_GET['h1'])){
	if($_GET['h1'] == 'pomolniesharyy'){$h1 = 'Шары помольные';}//-ЗАПРОС "pomolniesharyy"
}
//------------------------------------------------
if(isset($_GET['h2'])){//-на запрос "pomolniesharyy"
	if($_GET['h2'] == 'pomolniesharyy'){$h2 = 'Прайс лист с ценами';}
}
//------------------------------------------------
if(isset($_GET['h3'])){//-на запрос "pomolniesharyy"
	if($_GET['h3'] == 'pomolniesharyy'){$h3 = 'Узнать цены на помольные шары';}
}
//------------------------------------------------
if(isset($_GET['p'])){//-на запрос "pomolniesharyy"
	if($_GET['p'] == 'pomolniesharyy'){$p = 'Шары помольные всех диаметров стали в наличии и под заказ в Алматы, актуальные цены!';}
}

//-на запрос "pomolniesharyy" == https://qazprice.kz/металлопрокат/мелющие-тела/алматы?h1=pomolniesharyy&h2=pomolniesharyy&h3=pomolniesharyy&p=pomolniesharyy

//------------------------------------------------
?>