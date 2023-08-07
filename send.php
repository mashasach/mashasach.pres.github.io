<html>
<head>
<title></title>
</head>
<body>
<?php
//проверяем, существуют ли переменные в массиве POST
if(!isset($_POST['fio']) and !isset($_POST['email'])){
?> 

<div class="form-background">
<form class="form" action="send.php" method="post">
<div style="display:flex ; flex-wrap:wrap";>
	<div  class="input1"><div class="placeholder-name">ІМ'Я</div><input autocomplete="off" type="text" name="fio"  required autocomplete="off"> </div>
	<div  class="input2"><div class="placeholder-name">E-MAIL</div><input autocomplete="off" type="text" name="email" required autocomplete="off" > </div>
	<div  class="input3"><p class="placeholder-name">ЗАЛИШТЕ ПОВІДОМЛЕННЯ</p><textarea type="text" name="message"   autocomplete="off"></textarea></div>
	<div  class="submit"><input type="submit" value="Надіслати" autocomplete="off">
</div>
</div>
</form> 
</div>






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

if (mail("pres2008@ukr.net", "Заявка с сайта https://pres.com.ua", "ФИО:".$fio.". E-mail: ".$email.".Повідомлення: ".$message, "From:Pres \r\n")){ 
echo "Сообщение успешно отправлено"; 
} else { 
echo "При отправке сообщения возникли ошибки";
}
}

?>











</body>
</html>