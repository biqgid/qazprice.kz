<?php 

require 'editFunc.php';

?>

<?php 

$backurl = 'profile.php';

$edit_pas = $_POST;

if (isset($edit_pas['editPass'])) {

	$user = R::findOne('users', 'id = ?', array($id));

	if ($user) {

		if ($edit_pas['new_pass'] === $edit_pas['new_pass2']) {

			$user->password = password_hash($edit_pas['new_pass'], PASSWORD_DEFAULT);

			$_SESSION['logged_user'] = $user;

			R::store($user);

			$message = "Данные были успешно обновлены!!!<script language='Javascript'><!-- 
                function reload() {location = \"$backurl\"}; setTimeout('reload()', 5000); 
                //--></script>";
		}else {
			$errorPass = 'Веденные пароли не совпадают';
		}

	}else {
		$errorPass2 = 'Пользователь с таким паролем не найден';
	}
}


?>

<!doctype html>
<html>

	<head>
		<meta charset="utf-8">
		<meta content="width=device-width, initial-scale=1.0" name="viewport">
		<title>Изменить пароль</title>
		<link rel="shortcut icon" type="image/x-icon" href="../favicon.ico">
		<link rel="stylesheet" href="../css/calc.css">
		<link rel="stylesheet" href="../css/jqcart.css">
		<link rel="stylesheet" href="css/style.css">
		<script type="text/javascript" src="../js/jquery-1.11.1.min.js"></script>
	</head>
	<body>
		<div>
			<header>

			</header>
			<div class="container" style="padding-top: 30px">
				<div class="col-md-12">
					<a href="../index.html">Главная ></a>
					<a href="profile.php">Изменить пароль</a>
					<hr>
				</div>
				<div class="col-md-3" id="profile_menu">
					<ul class="profile-menu">
						<li class="myProfile">
							<span class="img"></span>
							<a href="profile.php">Мой профиль</a>
						</li>
						<li class="OrderHistory">
							<span class="img"></span>
							<a href="">История заказов</a>
						</li>
						<li class="catrProduct">
							<span class="img"></span>
							<div class="label-place"></div>
						</li>
					</ul>
					<div class="exit">
						<a href="../logout.php">Выйти</a>
					</div>
				</div>
				<div class="col-md-9" id="profile_content">
					<div class="content-header">
						<h3 style="margin-top: 0;">Изменить пароль</h3>
					</div>
					<div>
						<div style="color: green"><? echo $message; ?></div>
						<div style="color: green"><? echo $errorPass; ?></div>
						<div style="color: green"><? echo $errorPass2; ?></div>
						<div class="margin-top70">
							<form action="" method="post" id="edit-form" >
								<div>
									<p>Новый пароль</p>
									<input type="password" name="new_pass">
								</div>
								<div>
									<p>Подтвердить новый пароль</p>
									<input type="password" name="new_pass2">
								</div>
								<div>
									<input type="submit" name="editPass" value="сохранить">
								</div>
								<div>
									<a href="profile.php">Отмена</a>
								</div>
							</form>
						</div>
						<!-- <?php echo $id; ?> -->
					</div>
				</div>
			</div>
			<footer>

			</footer>

			<link href="../css/style.css" rel="stylesheet" type="text/css">
			<link href="../m.font/css/masstera.css" rel="stylesheet" type="text/css">
			<link href="../css/magnific-popup.css" rel="stylesheet" type="text/css" />
			<script type="text/javascript" src="../library/bootstrap.min.js"></script>
			<script type="text/javascript" src="../js/skrollr.js"></script>                                                                                        
			<script type="text/javascript" src="../js/jquery.themepunch.tools.min.js"></script>                                                                                        
			<script type="text/javascript" src="../js/jquery.themepunch.revolution.min.js"></script>                                                                                       
			<script type="text/javascript" src="../js/wow.min.js"></script>                                                                                        
			<script type="text/javascript" src="../js/jquery.mixitup.min.js"></script>                                                                                     
			<script type="text/javascript" src="../js/app.js"></script>                                                                                        
			<script type="text/javascript" src="../js/waypoints.min.js"></script>                                                                                      
			<script type="text/javascript" src="../js/jquery.easypiechart.min.js"></script>                                                                                        
			<script type="text/javascript" src="../js/SmoothScroll.js"></script>                                                                                       
			<script type="text/javascript" src="../js/jquery.sticky.js"></script>                                                                                      
			<script type="text/javascript" src="../js/jquery.countTo.js"></script>                                                                                         
			<script type="text/javascript" src="../js/jquery.magnific-popup.min.js"></script>                                                                                      
			<script type="text/javascript" src="../js/owl.carousel.min.js"></script>                                                                                       
			<script type="text/javascript" src="../js/jquery.mCustomScrollbar.js"></script>                                                                                        
			<script type="text/javascript" src="../js/jquery.easing.1.3.js"></script>                                                                                      
			<script type="text/javascript" src="../js/jquery.timeline.js"></script>                                                                                        
			<script type="text/javascript" src="../js/main.js"></script>   
			<script src="../js/calculator.js"></script>
			<script src="../js/jqcart.js"></script>

			</body>

		</html>