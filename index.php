
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
				<li><a href='index.php'>Главная</a></li>
				<li><a href="insert.php">Добавить фильм</a></li>
			</ul>
			<!-- Навигация -->
		</div>
		<div class="center">
			<h3>Новости кино</h3>
			<?php
				include_once("db.php");

				$result = mysql_query(" SELECT id, title, time_created, time, discription FROM film ORDER BY `id` DESC LIMIT 5");
				mysql_close();
				while($row = mysql_fetch_array($result))
					{
			?>
					<h3><?php echo $row['title']?></h3>
					<p><?php echo $row['discription']?></p>
					<p>Дата публикации <?php echo $row['time_created']?> / <?php echo $row['time']?></p>
					<a href="addit.php?id=<?php echo $row['id']?>">Редактировать новость</a>
					<hr>
			<?php }?>
		</div>
		
		<div class="footer" align="center">
			<!-- Нижняя часть страницы -->
			&copy; Супер-мега сайт, 2015 
			<!-- Нижняя часть страницы -->
		</div>
	</body>
</html>