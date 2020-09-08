<?php 

 require '../sort.php';

 $data = $_POST;

 if (isset($data['login_Btn'])) {

    $backurl="profile.php";

    $errors =  array();

    $user = R::findOne( 'users', 'email = ?', array($data['email']));

    if ($user) {

        if (password_verify($data['password'], $user->password)) {
            
            $_SESSION['logged_user'] = $user;
            
            $messageLogin = "<script language='Javascript'>function reload() {location = \"$backurl\"}; setTimeout('reload()', 3000); </script> <p style='color: green; font-size: 17px'>Вы успешно авторизовались!</p>";

        }else {
            $errors[] = "Пользователь с таким паролем не найден";
        }

    }else {
        $errors[] = "Пользователь с таким телефоном или email-ом не найден";
    }

    if ( !empty($errors)) {

        $result = "<div style='color: red'>". array_shift($errors) ."</div>";

    };

/*    $response = array(
        'errors' => 'sdsdsd',
        'message' => 'вы успешно зарег'
    );

    $json = json_encode($response);

    print $json;

    exit();*/

 };

/**/

/*     $user = R::findOrCreate( 'users', [
        'email' => $data['email'], 
        'phone' => $data['phone']
    ]);*/

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Вход в личный кабинет</title>
    <link rel="shortcut icon" type="image/x-icon" href="../favicon.ico">
    <link rel="stylesheet" href="../css/calc.css">
    <link rel="stylesheet" href="../css/jqcart.css">
	<link rel="stylesheet" href="../bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
    <div id="parent-form">
        <div class="modalForm">
            <form id="login" method="post" action="">
                <h1>Форма входа</h1>
                <div id="errorLogin"><?php echo $result ?></div>
                <div id="trueLogin"><?php echo $messageLogin ?></div>
                <fieldset id="inputs">
                    <input id="username" name="email" type="text" placeholder="Телефон или ад. эл. почты" autofocus required>
                    <input id="password" type="password" name="password" placeholder="Пароль" required>
                </fieldset>
                <fieldset id="actions">
                    <input type="submit" id="submit" name="login_Btn" value="ВОЙТИ">
                    <a href="reduction_password.php">Забыли пароль?</a>
                    <a href="registration.php">Регистрация</a>
                </fieldset>
                <div class="exit-form">x</div>
            </form>
        </div>
    </div>
</body>

<!-- <script>


    $('#submit').click(function(){

        $.ajax({
            url: 'signup.php',
            type: 'post',
            dataType: 'json',
            data: $('#login').serialize(),
            error: function(error) {
                console.log(error);
                $('#errorLogin').html('<p>' + error + '</p>');
            },
            success: function(data) {

                console.log(data)
                if (!data.errors) {
                    $('#errorLogin').html('<p>' + data.message + '</p>');
                }else{
                    $('#errorLogin').html('<p>' + data.error + '</p>');
                }
            }
        });
      return false;
    });

</script> -->
</html>