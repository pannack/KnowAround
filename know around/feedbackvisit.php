<?php
session_start();
$server = "localhost";
$username = "root";
$password = '';
$database="know_around";
$con = mysqli_connect($server,$username,$password,$database);
if(!$con){
  die("connection to database failed". mysqli_connect_error());
}
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$phonenumber= $_POST['phonenumber'];
$visit= $_POST['visit'];
$dayy= $_POST['dayy'];
$ratings= $_POST['ratings'];
$experience= $_POST['experience'];
$reviews= $_POST['reviews'];
$sql="INSERT INTO `visiting` (`firstname`, `lastname`, `email`, `phonenumber`, `visit`, `dayy`, `ratings`, `experience`, `reviews`) VALUES ('$firstname', '$lastname', '$email', '$phonenumber', '$visit', '$dayy', '$ratings','$experience','$reviews')";
//echo $sql;
if(mysqli_query($con,$sql))
  {
   echo 'Data entered Successfully';
   $insert=true;
  }
  else
  {
   echo 'Something went wrong';
   }
  mysqli_close($con);
   ?>
