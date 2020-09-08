<?php

define('ROOT', __DIR__);

require_once ROOT.'/PHPMailer/PHPMailerAutoload.php';
?>

<?php
// ----------------------------конфигурация-------------------------- // 
$adminemail="noreply@qazprice.kz";  // e-mail админа
$date=date("d.m.y"); // число.месяц.год 
$time=date("H:i"); // часы:минуты:секунды 
$backurl="contacts";  // На какую страничку переходит после отправки письма 
//---------------------------------------------------------------------- // 
// Принимаем данные с формы 

$contactForm = $_POST;

if(isset($contactForm['submit-contact'])) { 

	if(!$contactForm['g-recaptcha-response']){
		echo '<script>alert("Заполните капчу")</script>';
	}else {

		$name = $_POST['name']; 
		$email = $_POST['email']; 
		$phone = $_POST['phone'];
		$msg = $_POST['message']; 

		$mail = new PHPMailer;

		$mail->isSMTP();


		$mail->Host = 'smtp.mail.ru';
		$mail->SMTPAuth = true;
		$mail->Username = 'noreply@qazprice.kz'; // логин от вашей почты
		$mail->Password = '9Ev_d16p'; // пароль от почтового ящика
		$mail->SMTPSecure = 'ssl';
		$mail->Port = '465';

		$mail->CharSet = 'UTF-8';

		$mail->From = 'sale@a-steel.kz';
		$mail->FromName = 'А-Сталь';


		$mail->addAddress($adminemail);

		$mail->isHTML(true);
		$mail->Subject = "$date $time Сообщение от $email";
		$mail->Body = $msg;
		$mail->AltBody = $msg;


		if ($mail->send()) {
			$text_Form = "проверьте почту";
		}else {
			$text_Form1 = "Письмо не было отправлено";
			$text_Form1 .= "Ошибка". $mail->ErrorInfo;
		}

		// Проверяем валидность e-mail 

		$msg=" 
		Имя: $name
		E-mail: $email
		Телефон: $phone
		Сообщение: $msg
		"; 
		// Отправляем письмо админу  
		//mail("$adminemail", "$date $time Сообщение 
		//от $name", "$msg"); 
		// Сохраняем в базу данных 
		$f = fopen("message.txt", "a+"); 
		fwrite($f," \n ".$date." ".$time." Сообщение от ".$name); 
		fwrite($f,"\n ".$msg); 
		fwrite($f,"\n ---------------"); 
		fclose($f); 
		// Выводим сообщение пользователю 
		print "<script language='Javascript'><!-- 
		function reload() {location = \"$backurl\"}; setTimeout('reload()', 6000); 
		//--></script> 

		$msg = <p>Сообщение отправлено!</p>";  
	}
}
?>


<?php

/**
     * Отправка файла на почту
     */
$data = $_POST;
$filePath = '';
$send_file = '';
$user_email = $data["user_email"];

/**
     * Получаем файл если он существует
     */
switch($data["country"]) {

	case 'aktau':
		if ($handle = opendir(ROOT.'/file-price-aktau')) {


			/* Именно этот способ чтения элементов каталога является правильным. */
			while (false !== ($file = readdir($handle))) {
				if ($file != "." && $file != "..") {
					$filePath = '/file-price-aktau';
					$send_file = $file;
				}
			}
			closedir($handle);
         
		};
		break;
	case 'atyrau':
		if ($handle = opendir(ROOT.'/file-price-atyrau')) {

			/* Именно этот способ чтения элементов каталога является правильным. */
			while (false !== ($file = readdir($handle))) {
				if ($file != "." && $file != "..") {
					$filePath = '/file-price-atyrau';
					$send_file = $file;
				}
			}
			closedir($handle);
         
		};
		break;
	case 'opt':
		if ($handle = opendir(ROOT.'/file-price-opt')) {

			/* Именно этот способ чтения элементов каталога является правильным. */
			while (false !== ($file = readdir($handle))) {
				if ($file != "." && $file != "..") {
					$filePath = '/file-price-opt';
					$send_file = $file;
				}
			}
			closedir($handle);
        
		};
		break;
	case 'almaty':
		if ($handle = opendir(ROOT.'/file-price')) {

			/* Именно этот способ чтения элементов каталога является правильным. */
			while (false !== ($file = readdir($handle))) {
				if ($file != "." && $file != "..") {
					$filePath = '/file-price';
					$send_file = $file;
				}
			}
			closedir($handle);
         
		};
}



/**
     * Проверка Наличия E-mail Адреса Клиента
     */
if (isset($data["send_file_price"])) {
	if(isset($data['user_email']) != '') {
		$mail = new PHPMailer;

		try {
			$mail->addAttachment(ROOT . '' . $filePath . "/" . $send_file);
		} catch (phpmailerException $e) {
		}
		$mail->isSMTP();
		$mail->Host = 'smtp.mail.ru';
		$mail->SMTPAuth = true;

		$mail->Username = 'noreply@qazprice.kz'; // логин от вашей почты
		$mail->Password = '9Ev_d16p'; // пароль от почтового ящика

		$mail->SMTPSecure = 'ssl';
		$mail->Port = 465;

		$mail->CharSet = 'UTF-8';

		$mail->From = 'noreply@qazprice.kz';
		$mail->FromName = 'А-Сталь';


		$mail->AddAddress($data['user_email']);

		$mail->isHTML(true);
		$mail->Subject = "Прайс-Лист Металлопрокат";
		$mail->Body = "Прайс-Лист Металлопрокат <br> Прайс-Лист Металлопрокат Алматы";

		try {
		   $status = $mail->send();
           $f = fopen(ROOT.'/email-price-'.$data["country"].'/email-'.$data["country"].'.txt', 'a');
           $msg=" Файл был отправлен на почту:  ".$data['user_email']; 
	            fwrite($f," \n ".$date." ".$time); 
				fwrite($f,"\n ".$msg); 
				fwrite($f,"\n ---------------"); 
				fclose($f); 
			print json_encode($status);
		}catch(phpmailerException $e) {
			print $e;
		}





	}
}
?>
