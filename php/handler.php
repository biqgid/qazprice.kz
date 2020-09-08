<?php

			parse_str($_GET['orderlist'], $orderlist);
			parse_str($_GET['userdata'], $userdata);

			// Заголовок письма
			$subject = 'Заказ от '.date('d.m.Y').'г.';
			
			// Формируем таблицу с заказанными товарами
			$tbl = '<table style="width: 100%; border-collapse: collapse;">
				<tr>
					<th style="width: 1%; border: 1px solid #333333; padding: 5px;">ID</th>
					<th style="width: 20%; border: 1px solid #333333; padding: 5px;">Кол-во метров</th>
					<th style="border: 1px solid #333333; padding: 5px;">Наименование</th>
					<th style="border: 1px solid #333333; padding: 5px;">Цена</th>
					<th style="border: 1px solid #333333; padding: 5px;">Кол-во кг.</th>
					<th style="border: 1px solid #333333; padding: 5px;">Сумма</th>
				</tr>';
			$total_sum = 0;
			foreach($orderlist as $id => $item_data) {
				$total_sum += (float)$item_data['count'] * (float)$item_data['price'];
				$tbl .= '
				<tr>
					<td style="border: 1px solid #333333; padding: 5px;">'.$item_data['id'].'</td>
					<td style="border: 1px solid #333333; padding: 5px;">'.$item_data['meter'].'</td>
					<td style="border: 1px solid #333333; padding: 5px;">'.$item_data['title'].'</td>
					<td style="border: 1px solid #333333; padding: 5px;">'.$item_data['price'].'</td>
					<td style="border: 1px solid #333333; padding: 5px;">'.$item_data['kol'].'</td>
					<td style="border: 1px solid #333333; padding: 5px;">'.$item_data['price'].'</td>
				</tr>';
			}
			$tbl .= '<tr>
					<td  style="border: 1px solid #333333; padding: 5px;" colspan="3">Итого:</td>
					<td style="border: 1px solid #333333; padding: 5px;"><b>'.$total_sum.'</b></td>
					<td style="border: 1px solid #333333;">&nbsp;</td>
				</tr>
			</table>';
			// Тело письма
			$body = '
			<html>
			<head>
			  <title>'.$subject.'</title>
			</head>
			<body>
			  <p>Информация о заказчике:</p>
				<ul>
					<li><b>Имя:</b> '.$userdata['user_name'].'</li>
					<li><b>Телефон:</b> '.$userdata['user_phone'].'</li>
					<li><b>Комментарий:</b> '.$userdata['user_comment'].'</li>
				</ul>
				<p>Информация о заказае:</p>
			  '.$tbl.'
				<p>Письмо создано</p>
			</body>
			</html>';

				require 'PHPMailer/PHPMailerAutoload.php';

				$mail = new PHPMailer;

				$mail->isSMTP();

				$mail->Host = 'smtp.mail.ru';
				$mail->SMTPAuth = true;
				$mail->Username = 'sale@a-steel.kz'; // логин от вашей почты
				$mail->Password = 'A-steel_2016+2019'; // пароль от почтового ящика
				$mail->SMTPSecure = 'ssl';
				$mail->Port = 465;

				$mail->CharSet = 'UTF-8';
				$mail->From = 'sale@a-steel.kz'; // адрес почты, с которой идет отправка
				$mail->FromName = 'a-steel.kz'; // имя отправителя
				$mail->addAddress('sale@a-steel.kz', 'отдел продаж');
				$mail->addAddress('sale@a-steel.kz', 'отдел продаж'); // Кому отправляем
				$mail->addAddress('sale@a-steel.kz', 'тестовый-отдел продаж'); // Кому отправляем
				$mail->addCC('k.i.v@bk.ru');

				$mail->isHTML(true);
				$mail->Subject = $subject;
				$mail->Body = $body;
				$mail->AltBody = 'Ваша почта не поддерживает html формат';

			/*	if ($mail->send()) {
					echo "Письмо отправлено усешно!!!";
				}else {
					echo "Письмо не было отправлено";
					echo "Ошибка". $mail->ErrorInfo;
				}*/


			// Отправка
			/*$send_ok = mail($to, $subject, $body, implode("\r\n", $headers));*/

			// Ответ на запрос
			$response = [
				'errors' => !$mail->send(),
				'message' => $mail->send() ? 'Заказ принят в обработку!' : 'Произощла Ошибка!'. $mail->ErrorInfo
			];
			// ! Для версий PHP < 5.4 использовать традиционный синтаксис инициализации массивов:
			/*
			$response = array (
				'errors' => !$send_ok,
				'message' => $send_ok ? 'Заказ принят в обработку!' : 'Хьюстон! У нас проблемы!'
			);
			*/
			exit( json_encode($response) ); 