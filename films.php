<?
$db = mysqli_connect('localhost', 'root', '', 'mysite');
$result = mysqli_query($db, "SELECT id, time_created, title, discription FROM film ORDER BY `id` DESC LIMIT 5");
while($row = mysqli_fetch_array($result))
print_r('<b>' . $row['title'] . '</b>' . '<br>' . $row['discription'] . '<br>'. $row['time_created'] . '<br>' . '<a href="addit.php">Редактировать новость</a>' . '<br>');

?>
