<?php

$connection = mysql_connect("localhost", "vadim", "");
$db = mysql_select_db("mysite");
mysql_set_charset("utf8");
if (!$connection || !$db){
	exit(mysql_error());
}

?>