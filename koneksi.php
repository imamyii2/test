<?php
$host= "localhost";
$db_name="db_akademik";
$db_username="root";
$db_password="";
try
{
$pdo= new PDO('mysql:host='. $host .';dbname='.$db_name, $db_username, $db_password);
}
catch(PDOException $e)
{
exit("Error Connectiong to database");
}?>
