
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
	<h1>Добавление новости</h1>
	<form method="post" action="insert.php">

		Название новости<br>
		<input type="text" name="text_1"><br>
		Текст новости<br>
		<textarea cols="40" rows="10" name="text_2"></textarea><br><br>
		<input type="hidden" name="time_created" value="<?php echo date('Y-m-d');?>">
		<input type="hidden" name="time" value="<?php date('H:i:s');?>">
		<input type="submit" name="add" value="Добавить">
	</form>

	<?php

	include_once("db.php");

	if (isset($_POST['aad'])) {
		$text_1 = strip_tags(trim($_POST['text_1']));
		$text_2 = strip_tags(trim($_POST['text_2']));
		$time_created = $_POST['time_created'];
		$time = $_POST['time'];

		mysqli_query($db, "INSERT INTO film(text_1, text_2, time_created, time) VALUES ('$text_1', '$text_2', '$time_created', '$time')");

		mysqli_close($db);
		echo "Новость успешно добавлена";
	}
	?>

</div>

<div class="footer" align="center">
	<!-- Нижняя часть страницы -->
	&copy; Супер-мега сайт, 2015
	<!-- Нижняя часть страницы -->
</div>
</body>
</html>


