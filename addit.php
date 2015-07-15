<html>
	<head>
		<title>Редактирование новости</title>
		<link rel="stylesheet" href="style.css" type="text/css"/>
	</head>
<body>


<?php

include_once("db.php");

$id = $_GET['id'];

$result = mysql_query(" SELECT title, discription, time_created, time FROM film WHERE id='$id'");

$row = mysql_fetch_assoc($result);

if (isset($_POST['save'])) {
	$title = strip_tags(trim($_POST['title']));
	$discription = strip_tags(trim($_POST['discription']));

	mysql_query(" UPDATE film SET title='$title', discription='$discription' WHERE id='$id'");

	mysql_close();
}

?>

<form method="post" action="addit.php?id=<?php echo $id; ?>">

Название новости<br>
<input type="text" name="title" value="<?php echo $row['title']; ?>"><br>
Текст новости<br>
<textarea cols="40" rows="10" name="discription"><?php echo $row['discription']; ?></textarea><br>

<input type="submit" name="save" value="Отправить">

</form>

</body>
</html>
