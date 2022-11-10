<?php
$server = "localhost";
$username = "root";
$password = '';
$database="know_around";
$con = mysqli_connect($server,$username,$password,$database);
if(!$con){
  die("connection to database failed". mysqli_connect_error());
}

$result=mysqli_query("select firstname,lastname,reviews from know_around");
echo result[fname];
?>
