
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
			<h1>Новости кино</h1>
			<?php
				require_once("db.php");

				$result = mysqli_query($db, "SELECT * FROM  film ORDER BY `id` DESC LIMIT 5");
				while($row = mysqli_fetch_array($result))
								{
			?>
					<h3><?php echo $row['text_1']?></h3>
					<p><?php echo $row['text_2']?></p>
					<p>Дата публикации: <?php echo $row['time_created']?> / <?php echo $row['time']?></p>
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