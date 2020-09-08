<?php 

 require 'editFunc.php';

 ?>

<?php

    $email = $_REQUEST['email'];
    $code = $_REQUEST['code'];

    $newPass = $_POST;

    $user = R::findOne('users', 'email = ?',array($email));

    if ($code  !== $user->password) {
        /*header('location: ../index.php');*/
        /*exit;*/
    };

    if (isset($newPass['new_password'])) {
        if ($newPass['new_password1'] === $newPass['new_password2']) {
            $user->password = password_hash($newPass['new_password1'], PASSWORD_DEFAULT);
            R::store($user);
            $_SESSION['logged_user'] = $user;

            $message = "Ваш пароль был успешно изменен!!!";
        }else {
            $errorPass = 'Введенные пароли не совпадают.';
        };
    };

?>


<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Редоктировать пароль</title>
    <meta name="yandex-verification" content="7a3e26cac6feeb5e" />
    <link rel="shortcut icon" type="image/x-icon" href="../favicon.ico">
    <link rel="stylesheet" href="../css/calc.css">
    <link rel="stylesheet" href="../css/jqcart.css">
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="../js/jquery-1.11.1.min.js"></script>
    <meta name="google-site-verification" content="nesSjlTvht8Gbt5YPQh5lChkOL8PS22tg7Yc5Hcis8Y" />
</head>
<body>
    <noscript>
        <iframe src="//www.googletagmanager.com/ns.html?id=GTM-T287PV" class="GTM"></iframe>
    </noscript>
    <!--DOM-->
    <div id="skrollr-body">
        <header>
        
        </header>
    <div class="container" style="padding-top: 30px">
        <div class="col-md-12">
            <a href="../index.html">Главная ></a>
            <a href="profile.php">Редактирование профиля</a>
            <hr>
        </div>
        <div class="col-md-12">
            <h3></h3>
        </div>
        <div class="col-md-9" id="profile_content">
            <div class="content-header">
                <h3 style="margin-top: 0;">Изменить пароль</h3>
            </div>
                <div>
                    <div style="color: green"><? echo $message; ?></div>
                    <div style="color: red"><? echo $errorPass; ?></div>
                    <div class="margin-top70">
                    <form action="" method="post" id="edit-form" >
                        <div>
                            <p>Новый пароль</p>
                            <input type="password" name="new_password1">
                        </div>
                        <div>
                            <p>Подтвердить новый пароль</p>
                            <input type="password" name="new_password2">
                        </div>
                        <div>
                            <input type="submit" name="new_password" value="сохранить">
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