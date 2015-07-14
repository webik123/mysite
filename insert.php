<form method="post" action="insert.php">

Название новости<br>
<input type="text" name="title"><br>
Текст новости<br>
<textarea cols="40" rows="10" name="text"></textarea><br>

<input type="hidden" name="date" value="<?php echo date('Y-m-d');?>"><br>
<input type="submit" name="add" value="Отправить">

</form>




<?php

$connection = mysql_connect('localhost', 'root', '');
$db = mysql_select_db("mysite");

if (isset($_POST['add'])) 
{	
	$title = strip_tags(trim($_POST['title']));
	$text = strip_tags(trim($_POST['text']));
	$date = $_POST['date'];

	mysql_query("
					INSERT INTO film (title, text, date)
					VALUES ('$title', '$text', '$date')
	");
	echo mysql_error($connection);
	mysql_close();

	echo "Новость успешно добавлена!";
}

/*if (isset($text)) {
	echo $text;
}
else echo "NO";*/
?>