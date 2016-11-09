<?php
$id = $_POST['id'];
$id = mysql_real_escape_string( $id );

$getid = "SELECT first_name, last_name FROM users WHERE user_id = $id;";
$result = mysql_query($getid);

system('localhost'.$_GET['host']);
