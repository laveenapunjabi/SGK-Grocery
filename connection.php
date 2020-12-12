<?php


$servername='remotemysql.com';
$user='yL8dDuN9Va';
$password='wwOjztezvD';
$dbname = "yL8dDuN9Va";

$conn=mysqli_connect($servername,$user,$password,$dbname);

if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}

?>