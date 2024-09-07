<?php
$sername ="localhost" ;
$username="root";
$password="";
$dbname="my_app1";

$conn = mysql_connect($servername,$username,$password,$dbname);

if (!$conn){
    die("Connection failed :" . mysql_connect_error());
}
?>
    