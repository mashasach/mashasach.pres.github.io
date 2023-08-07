<html>
<head>
<title></title>
</head>
<body>
<?php
//проверяем, существуют ли переменные в массиве POST
if(!isset($_POST['fio']) and !isset($_POST['email'])){
?> 


<form class="form" action="send.php" method="post">
	<input autocomplete="off"  class="input1" type="text" name="fio" placeholder="Имя" required autocomplete="off"> 
	<input autocomplete="off" placeholder="E-mail" class="input2" type="text" name="email" required autocomplete="off" > 
	<textarea class="input3" type="text" name="message" placeholder="Оставьте сообщение"   autocomplete="off"></textarea>
	<input class="submit" type="submit" value="Надіслати" autocomplete="off">
</form> 







<?php
} else {
//показываем форму
$fio = $_POST['fio'];
$email = $_POST['email'];
$message = $_POST['message'];
$fio = htmlspecialchars($fio);
$email = htmlspecialchars($email);
$message = htmlspecialchars($message);
$fio = urldecode($fio);
$email = urldecode($email);
$message = urldecode($message);
$fio = trim($fio);
$email = trim($email);
$message = trim($message);

if (mail("mashasachenko1807@gmail.com", "Заявка с сайта", "ФИО:".$fio.". E-mail: ".$email , "From: \r\n")){ 
echo "Сообщение успешно отправлено"; 
} else { 
echo "При отправке сообщения возникли ошибки";
}
}

?>









</body>
</html>