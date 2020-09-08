<?php 

 require '../sort.php';

 $data = $_POST;

 if (isset($data['buttonForm'])) {

    $errors = array();

    if (trim($data['name'] == "")) {
         $errors[] = 'Введите имя';
    }
    if ($data['password'] == "") {
         $errors[] = 'Ведите пароль';
    }
    if ($data['password'] != $data['password2']) {
         $errors[] = 'Веденные пароли не совпадают';
    }

    if (R::count('users', 'email = ?', array($data['email'])) > 0) {
         $errors[] = "<div style='color: red'>Пользователь с таким email-ом уже существует</div><hr>";
    }



    if ( empty($errors) ) {
        
        $user = R::dispense('users');

        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->phone = $data['phone'];
        $user->password = password_hash($data['password'], PASSWORD_DEFAULT);
        $user->join_date = date("d.m.y  H:i");

        R::store($user);

        $reg = "<div style='color: green'>Вы успешно зарегистрированы<br>Можете <a href='signup.php'>Авторизоваться</a></div><hr>";

    }else {
        $err_ech = "<div style='color: red'>". array_shift($errors) ."</div>";
    }
 }

 ?>

<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Регистрация.</title>
    <link rel="shortcut icon" type="image/x-icon" href="../favicon.ico">
    <link rel="stylesheet" href="../css/calc.css">
    <link rel="stylesheet" href="../css/jqcart.css">
    <script type="text/javascript" src="../js/jquery-1.11.1.min.js"></script>
</head>
<body>
    <div id="skrollr-body">
        
    <div class="container" style="padding: 55px">
        <div class="col-md-7 services" id="zayavka">

            <p class="p">Форма регистрации</p>
            <div class="line-separator5"></div>
            <div class="errors">
                <?
                    echo $err_ech;
                 ?>
            </div>
            <div class="reg">
                <?
                    echo $reg;
                 ?>
            </div>
            <div class="margin-top70">
                <form method="post" action="" id="form">
                    <div class="row">
                        <div class="col-md-6 required">
                            <label>Ваше Имя</label>
                            <input type="text" name="name" value="<? echo @$data['name']; ?>" required>
                        </div>
                        <div class="col-md-6 required">
                            <label>Ваш e-mail</label>
                            <input type="email" name="email" value="<? echo @$data['email']; ?>" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 required">
                            <label>Ваш телефон</label>
                            <input type="tel" name="phone" value="<? echo @$data['name']; ?>" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 required">
                            <label>Ваш Пароль</label>
                            <input type="password" name="password" required>
                        </div>
                        <div class="col-md-6 required">
                            <label>Подтвердите пароль</label>
                            <input type="password" name="password2" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-xs-12 text-center">
                            <br>
                            <input type="submit" name="buttonForm" value="Зарегистрироваться">
                        </div>
                    </div>
                </form>
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