<?
$db = mysqli_connect('localhost', 'root', '', 'mysite');
$result = mysqli_query($db, "SELECT * FROM film ORDER BY `id` DESC LIMIT 5");
while($row = mysqli_fetch_array($result))
print_r('<b>' . $row['text_1'] . '</b>' . '<br>' . $row['text_2'] . '<br>'. $row['time_created'] . '<br>' . '<a href="addit.php">Редактировать новость</a>' . '<br>');

?>
