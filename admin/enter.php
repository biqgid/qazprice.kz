<?php

	$errors = array();

	session_start();

	if($_SESSION['admin']){

		header("Location: index.php");
		exit;

	}


	$data = $_POST;

	$admin = 'admin';
	$pass = 'boss2008';

	 if (isset($data['submit'])) {

		if($admin == $_POST['user'] AND $pass == $_POST['pass']){

			$_SESSION['admin'] = $admin;
				header("Location: index.php");
			exit;

		}else $errors[] = '<p>Логин или пароль неверны!</p>';
	}
?>



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
<link rel="stylesheet" href="css/admin.css" />

<div class="container wrapper">
 	<div class="row">
 		<div class="col-md-offset-3 col-md-6">
 			<form class="form-horizontal" action="" method="post">

 				<span class="heading">Панель управления</span>
 				<span class="errors"><?=array_shift($errors); ?></span>

				<div class="form-group">
					<input type="text" class="form-control" id="inputEmail" placeholder="Логин" name="user">
					<i class="fa fa-user"></i>
				</div>

				 <div class="form-group help">
				 	<input type="password" class="form-control" id="inputPassword" placeholder="Пароль" name="pass">
				 	<i class="fa fa-lock"></i>
				 	<a href="#" class="fa fa-question-circle"></a>
				 </div>

				 <div class="form-group">
				 	<div class="main-checkbox">
				 		<input type="checkbox" value="none" id="checkbox1" name="check"/>
				 		<label for="checkbox1"></label>
				 	</div>
				 	<span class="text">Запомнить</span>
				 	<button type="submit" name="submit" class="btn btn-default">ВХОД</button>
				 </div>

 			</form>
 		</div>
 	</div><!-- /.row -->
</div><!-- /.container -->