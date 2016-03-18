<html>
<head>
	<title>Мій сайт</title>
	<link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<body>

<div class="header" align="center">

	<!-- Верхняя часть страницы -->


	<!-- Верхняя часть страницы -->
</div>


<div class="light">
	<!-- Навигация -->

	<ul>
		<?php
		$leftMenu = array(
			array('link'=>'Главная', 'href'=>'index.php'),
			array('link'=>'Добавить фильм', 'href'=>'insert.php'),
		);
		?>
		<li><a href='<?= $leftMenu[0]['href']?>'><?= $leftMenu[0]['link']?></a></li>
		<li><a href='<?= $leftMenu[1]['href']?>'><?= $leftMenu[1]['link']?></a></li>
	</ul>
	<!-- Навигация -->
</div>
<div class="center">
	<h3>Редактирование новости</h3>

	<?php

	include_once("db.php");

	$id = $_GET['id'];

	$result = mysqli_query($db, "SELECT text_1, text_2, time_created, time FROM film WHERE id='$id'");

	$row = mysqli_fetch_assoc($result);

	if (isset($_POST['save'])) {
		$text_1 = strip_tags(trim($_POST['text_1']));
		$text_2 = strip_tags(trim($_POST['text_2']));

		mysqli_query($db, "UPDATE film SET text_1='$text_1', text_2='$text_2' WHERE id='$id'");

		mysqli_close($db);

		echo "Новость успешно редактирована";
	}
	?>

	<form method="post" action="addit.php?id=<?php echo $id; ?>">

		Название новости<br>
		<input type="text" name="text_1" value="<?php echo $row['text_1']; ?>"><br>
		Текст новости<br>
		<textarea cols="40" rows="10" name="text_2"><?php echo $row['text_2']; ?></textarea><br><br>

		<input type="submit" name="save" value="Сохранить">

	</form>

</div>

<div class="footer" align="center">
	<!-- Нижняя часть страницы -->
	&copy; Супер-мега сайт, 2015
	<!-- Нижняя часть страницы -->
</div>
</body>
</html>
