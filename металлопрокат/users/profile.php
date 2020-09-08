<?php 

require 'editFunc.php';

?>

<!doctype html>
<html>

	<head>
		<meta charset="utf-8">
		<meta content="width=device-width, initial-scale=1.0" name="viewport">
		<title>Личный кабинет</title>
		<link rel="shortcut icon" type="image/x-icon" href="../favicon.ico">
		<link rel="stylesheet" href="../css/calc.css">
		<link rel="stylesheet" href="../css/jqcart.css">
		<link rel="stylesheet" href="../bootstrap.css">
		<link rel="stylesheet" href="css/style.css">
		<script type="text/javascript" src="../js/jquery-1.11.1.min.js"></script>
	</head>
	<body>
		<div id="skrollr-body">
			<header>

			</header>
			<div class="container" style="padding-top: 30px">
				<div class="col-md-12">
					<a href="../index.php">Главная ></a>
					<a href="profile.php">Личный кабинет</a>
					<hr>
				</div>
				<div class="col-md-12">
					<h3></h3>
				</div>

				<div class="col-md-3" id="profile_menu">
					<u class="profile-menu">
						<li class="myProfile">
							<span class="img"></span>
							<a href="">Мой профиль</a>
						</li>
						<li class="OrderHistory">
							<span class="img"></span>
							<a href="">История заказов</a>
						</li>
						<li class="catrProduct">
							<span class="img"></span>
							<div class="label-place"></div>
						</li>
					</u>
					<div class="exit">
						<a href="../logout.php">Выйти</a>
					</div>
				</div>
				<div class="col-md-9" id="profile_content">
					<div class="content-header">
						<h3 style="margin-top: 0;">Мой профиль</h3>
					</div>
					<div>
						<h3>
							<?php 
							echo $name;
							?>
						</h3>
						<div>
							<div class="content-info">
								<ul class="table">
									<li class="col-md-5">Имя</li>
									<li class="col-md-5">
										<?php echo $name ?>
									</li>
									<li class="col-md-5">E-mail</li>
									<li class="col-md-5">
										<?php echo $email ?>
									</li>
									<li class="col-md-5">Телефон</li>
									<li class="col-md-5">
										<?php echo $phone ?>
									</li>
									<li class="col-md-5">Дата регистрации</li>
									<li class="col-md-5">
										<?php echo $date ?>
									</li>
								</ul>
								<div class="clear"></div>
								<div class="edit">
									<a href="editPasswrd.php">Изменить пароль</a>
									<a href="profileEdit.php">Редактировать персональные данные</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<footer>
				<div class="row">
					<div class="contact main-content-f">
						<div class="col-md-12 services">

						</div>
					</div>
				</div>
			</footer>


			</body>

		</html>