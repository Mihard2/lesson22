<?php
//Принимаем постовые данные
$username=$_POST['user_name'];
$useremail=$_POST['user_email'];
$userpassword=$_POST['user_password'];
//Тут указываем на какой ящик посылать письмо
$to = "enot42@gmail.com";
//Далее идет тема и само сообщение
// Тема письма
$subject = "Заявка с сайта";
// Сообщение письма
$message = "
Имя пользователя: ".htmlspecialchars($username)."<br />
Email адрес: ".htmlspecialchars($useremail)."<br />
Пароль для входа:".htmlspecialchars($userpassword);
// Отправляем письмо при помощи функции mail();
$headers = "From: workforphp.sl <mail@stastroi.ru>\r\nContent-type: text/html; charset=UTF-8 \r\n";
mail ($to, $subject, $message, $headers);
// Перенаправляем человека на страницу благодарности и завершаем скрипт
header('Location: thanks.html');
exit();
?>