<?php 

// $host = "mysql-8.0";
$host = "localhost";
$username = "root";
$password = "";
$db = "school_project_new";

$conn = mysqli_connect($host, $username, $password, $db);

if ($conn->connect_error) 
{
    die("Ошибка подключения к БД".$conn->connect_error);
} 
//echo "Connected";

?>