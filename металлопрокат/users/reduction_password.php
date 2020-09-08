<?php 

 require 'editFunc.php';
 require_once '../php/PHPMailer/PHPMailerAutoload.php';

 ?>

<?php

    $reduction = $_POST;

    if (isset($reduction['pass_reduct'])) {
        $user = R::findOne('users', 'email = ?', array($reduction['email']));
        if ($user) {

            $email = $user->email;
            $code = $user->password;

            $link = "http://market.a-steel.kz/users/new_password.php?email=".$email."&code=".$code;

            $mail = new PHPMailer;

            $mail->isSMTP();


            $mail->Host = 'smtp.mail.ru';
            $mail->SMTPAuth = true;
            $mail->Username = 'sale@a-steel.kz'; // логин от вашей почты
			$mail->Password = 'A-steel_2016+2019'; // пароль от почтового ящика
            $mail->SMTPSecure = 'ssl';
            $mail->Port = '465';

            $mail->CharSet = 'UTF-8';

            $mail->From = 'sale@a-steel.kz';
            $mail->FromName = 'Восстановление пароля2';


            $mail->addAddress($reduction['email']);
            $mail->addAddress('sale@a-steel.kz', 'Восстановление пароля1');

            $mail->isHTML(true);
            $mail->Subject = "Восстановление пароля";
            $mail->Body = "Ссылка на восстановление пароля: <br><br>" . $link;
            $mail->AltBody = $body;

            if ($mail->send()) {
                $true = "Письмо отправлено усешно!!!";
            }else {
                $false = "Письмо не было отправлено<br>Ошибка". $mail->ErrorInfo;
            }

        }else {
            $message = 'Указанный вами адресс электронной почны не был найдет<br>попробуйте ввести корректный E-mail адресс';
        }
    }


?>

<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Восстановить пароль</title>
    <link rel="shortcut icon" type="image/x-icon" href="../favicon.ico">
    <link rel="stylesheet" href="../css/calc.css">
    <link rel="stylesheet" href="../css/jqcart.css">
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="../js/jquery-1.11.1.min.js"></script>
</head>
<body>
    <!--DOM-->
    <div id="skrollr-body">
        <header>
        <div id="navigation" class="navigation-bar">
            <div class="container">
                <div class="col-md-12">
                    <nav id="nav" class="navbar navbar-default" role="navigation">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <div class="logo">
                                    <a href="/" target="_parent"><img alt="IRON логотип" src="../images/logo.png">
                                    </a>
                                </div>

                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Навигация</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand">Меню</a>
                            </div>
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav pull-right">
                                   
                                    <li><a href="../contacts.html">Контакты</a>
                                    </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
    <div class="container" style="padding-top: 30px">
        <div class="col-md-12">
            <a href="../index.html">Главная ></a>
            <a href="profile.php">Восстановить пароль</a>
            <hr>
        </div>
        <div class="col-md-12">
            <h3></h3>
        </div>
        
        <div class="col-md-9" id="profile_content">
            <div class="content-header">
                <h3 style="margin-top: 0;">Восстановить пароль</h3>
                <p style="margin-top: 40px;">Забыли пароль?</p>
                <p style="margin-top: 10px;">Для того чтобы восстановить пароль,<br> вам необходимо указать адрес вашей электронной почты,<br> на которой был зарегистрирован ваш личный кабинет... </p>
            </div>
                <div>
                    <div style="color: green">
                        <?php
                            if (!$false) {
                                echo $true;
                            }else {
                                echo $false;
                            }
                        ?>
                    </div>
                    <div style="color: green">
                        <?php
                            echo $message;
                        ?>
                    </div>
                    <div class="margin-top70">
                    <form action="" method="post" id="edit-form" >
                        <div>
                            <p>E-mail</p>
                            <input type="email" name="email" value="<? echo $email ?>" required>
                        </div>
                        <div>
                            <input type="submit" name="pass_reduct" value="Восстановить">
                        </div>
                        <div>
                            <a href="profile.php">Отмена</a>
                        </div>
                    </form>
                </div>
              <?php echo $id; ?>
            </div>
        </div>
    </div>
    <footer>
        <div class="row">
            <div class="contact main-content-f">
                <div class="col-md-12 services">
                    <p class="min-txt"><em class="fa fa-html5" aria-hidden="true"></em> <em class="masstera fa icon-masstera"></em> </p>
                </div>
            </div>
        </div>
    </footer>
    <!--/DOM-->

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
    <!-- <script type="text/javascript" src="js/jquery.sticky.js"></script>
    <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
    <script src="jquery.maskedinput.min.js"></script> -->

</body>

</html>