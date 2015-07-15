<html>
	<head>
		<title>Мій сайт</title>
		<link rel="stylesheet" href="style.css" type="text/css"/>
	</head>
<body>
<form method="post" action="insert.php">

Название новости<br>
<input type="text" name="title"><br>
Текст новости<br>
<textarea cols="40" rows="10" name="discription"></textarea><br>

<input type="hidden" name="time_created" value="<?php echo date('Y-m-d');?>"><br>
<input type="hidden" name="time" value="<?php echo date('H:i:s');?>"><br>
<input type="submit" name="add" value="Отправить">

</form>




<?php

include_once("db.php");

if (isset($_POST['add'])) 
{	
	$title = strip_tags(trim($_POST['title']));
	$discription = strip_tags(trim($_POST['discription']));
	$date = $_POST['time_created'];
	$time = $_POST['time'];

	mysql_query(" INSERT INTO film(title, discription, time_created, time) VALUES ('$title', '$discription', '$date', '$time')");
	
	mysql_close();

	echo "Новость успешно добавлена!";
}

?>

</body>
</html>
