<?php
session_start();

  $insert=false;
  $server = "localhost";
  $username = "root";
  $password = '';
  $database="know_around";
  $con = mysqli_connect($server,$username,$password,$database);
  if(!$con){
    die("connection to database failed". mysqli_connect_error());
  }

if(isset($_POST['submit']))
{
$name=$_POST['name'];
$password=$_POST['password'];
$password1=$_POST['password1'];
if($password==$password1){
$sql="INSERT INTO `register` (`name`,`password`,`password1`) VALUES ('$name', '$password', '$password1')";
mysqli_query($con,$sql);
}
else{
  echo "<b>Password not matching</b>";
}
}
else{

}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="css.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital@1&family=Ubuntu:ital,wght@1,500&display=swap" rel="stylesheet">
    <link rel="icon" href="favvv.ico" />
    <title></title>
  </head>
  <style>
    .formm{
      margin:80px;
      postion:absolute;
    }
    body{
      background-color:#a3d2ca;
    }
    .btt{
      margin:auto;
    }
    .login{
      text-align:center;
    }
    </style>
  <body>
    <section id="title">

    <nav class="navbar bg-dark navbar-expand-lg navbar-dark">
     <a class="navbar-brand" href="">Know around😎</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
   </button>

   <div class="collapse navbar-collapse" id="navbarSupportedContent">
     <ul class="navbar-nav ml-auto">
         <li class="nav-item">
             <a class="nav-link" href="">Home</a>
         </li>
         <li class="nav-item">
             <a class="nav-link" href="#footer">Contact us</a>
         </li>
         <li class="nav-item">
             <a class="nav-link" href="intermediate.html">Give feedback</a>
         </li>
     </ul>
  </div>
  </nav>
  <form action="register.php" method="post" class="formm" >
    <div class="form-row">
    <div class="col">
      <label for="name">USERNAME</label>
      <input type="text" class="form-control" name="name" placeholder="Name" required>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="Email">
    </div>
    </div>
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4" name="password" placeholder="Password" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Confirm password</label>
      <input type="password" class="form-control" id="inputPassword4" name="password1" placeholder="Confirm Password" required>
    </div>
    </div>
  <button type="submit" class="btn btn-primary" name="submit">Register</button>
</form>
<div class="login">
  <b>Already registered? </b><a href="login.php">LOG IN</a>
  </div>

  </body>
</html>
