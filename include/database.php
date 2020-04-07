<?php
//----Данные для подключения-------------
$host = "localhost";
$user = "root";
$password = "";
$database = "news";
//----Процедурный стиль-------------
// Подключение к базе данных
$link = mysqli_connect($host, $user, $password, $daabase); 

if(mysqli_connect_errno())
{
	echo 'Ошибка подключения к БД ('.mysqli_connect_errno().'): '. mysqli_connect_error();
	exit();
}
?>