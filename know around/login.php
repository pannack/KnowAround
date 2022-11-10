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
$sql="select * from `register` where name='$name' && password='$password'";
$result=mysqli_query($con,$sql);
$row=mysqli_num_rows($result);
if($row==1){
  header('location:add.php');
}
else{
  $insert=true;
}
}
else{
   echo "<b>INVALID CREDENTIALS</b>";
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="css.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital@1&family=Ubuntu:ital,wght@1,500&display=swap" rel="stylesheet">
    <link rel="icon" href="favvv.ico" />
  </head>
  <style>
  .formm{
    margin:200px;
    postion:absolute;
  }
  body{
    background-color: #a3d2ca;
  }

  </style>
  <body>
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
  <form action="login.php" method="post" class="formm" >
    <div class="form-row">
    <div class="col-md-6">
      <label for="name">USERNAME</label>
      <input type="text" class="form-control" name="name" placeholder="Name" required>
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
    <label for="inputPassword4">Password</label>
    <input type="password" class="form-control" id="inputPassword4" name="password" placeholder="Password" required>
  </div>
</div>
  <div class="form-row">
    <button type="submit" class="btn btn-primary" name="submit">Log in</button>
</div>

</form>
  </body>
</html>
