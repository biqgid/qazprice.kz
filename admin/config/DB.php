<?php 

    require 'library/rb.php';

	R::setup('mysql:host=localhost;dbname=p-1054_qazprice', 'p-1054_qazprice_db_user', 'p-1054_qazprice');/*первое база', ' второе пользователь', ' третье пароль*/


    if (!R::testConnection()) {
        exit("нет подключения к базе данных!!!+");
    };

 ?>