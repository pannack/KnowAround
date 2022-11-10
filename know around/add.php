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
  if(isset($_POST['submit'])){
    $img_name = $_FILES['glryimage']['name'];
    if ($img_name!='')
    {
        $ext = pathinfo($img_name, PATHINFO_EXTENSION);
        $allowed = ['png', 'gif', 'jpg', 'jpeg'];

        //check if it is valid image type
        if (in_array($ext, $allowed))
        {

            // read image data into a variable for inserting
            $img_data = addslashes(file_get_contents($_FILES['glryimage']['tmp_name']));
    $cname=$_POST['cname'];
    $checkbox1=$_POST['services'];
$chk="";
foreach($checkbox1 as $chk1)
   {
      $chk .= $chk1.",";
   }
   $address=$_POST['address'];
   $email=$_POST['email'];
   $phonenumber=$_POST['phonenumber'];
   $ratings=$_POST['ratings'];
   $sql="INSERT INTO `addcafe`(`cname`,`services`,`address`,`email`,`phonenumber`,`ratings`,`imagedata`)VALUES('$cname','$chk','$address','$email','$phonenumber','$ratings','$img_data')";
   if(mysqli_query($con,$sql))
   {
     echo "data entered successfully";
   }
   else {
     {
       echo mysqli_error();
     }
   }
  }
}
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
  body{
    background-color:#a3d2ca;
  }
  .foorm{
    margin-left: 100px;
    margin-right:  100px;
    margin-bottom: 50px;
    margin-top: 50px;
    font-size: 30px;
  }
  .star{
            color: goldenrod;
            font-size: 2.0rem;
            padding: 0 1rem; /* space out the stars */
  }
  .star::before{
            content: '\2606';    /* star outline */
            cursor: pointer;
  }
  .star.rated::before{
            /* the style for a selected star */
            content: '\2605';  /* filled star */
  }

  .stars{
              counter-reset: rateme 0;
              font-size: 2.0rem;
              font-weight: 900;
  }
  .star.rated{
              counter-increment: rateme 1;
  }
  .stars::after{
              content: counter(rateme) '/5';
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
             <a class="nav-link" href="index.html">Home</a>
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
  <form  action="add.php" method="POST" class=foorm enctype="multipart/form-data">
    <div class="form-row">
      <div class="form-group col-md-12">
        <label for="inputcname">ENTER THE CAFE NAME</label>
        <input type="text" class="form-control" id="inputfname" placeholder="Cafe name" name="cname" required>
      </div>
      <div class="form-group col-md-12">
        <label for="">Select available services</label></br>
        <input type="checkbox" name="services[]" value="dine">
        <label for="">DINE</label></br>
        <input type="checkbox" name="services[]" value="takeaway">
        <label for="">TAKEAWAY</label></br>
        <input type="checkbox" name="services[]" value="delivery">
        <label for="">DELIVERY</label></br>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-12">
        <label for="inputaddress">ADDRESS</label>
        <input type="textarea" class="form-control" id="address" placeholder="Address" name="address" required>
      </div>
    </div>
 <div class="form-row">
   <div class="form-group col-md-6">
     <label for="inputEmail4">Email</label>
     <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email">
   </div>
   <div class="form-group col-md-6">
     <label for="phonenumber">Phone Number</label>
     <input type="phonenumber" class="form-control" id="phonenumber" placeholder="Phone Number" name="phonenumber">
   </div>
 </div>
 <div class="form-row">
  <div class="form-group col-md-6">
    <label for="ratings" >Ratings</label>
    <div class="rating"> <input type="radio" name="ratings" value="5" id="5"><label for="5">☆</label>
       <input type="radio" name="ratings" value="4" id="4"><label for="4">☆</label>
       <input type="radio" name="ratings" value="3" id="3"><label for="3">☆</label>
       <input type="radio" name="ratings" value="2" id="2"><label for="2">☆</label>
        <input type="radio" name="ratings" value="1" id="1"><label for="1">☆</label>
    </div>
    <!-- <label for="ratings">Ratings</label>
  <div class="stars" data-rating="3">
  <span class="star" value="1" >&nbsp;</span>
  <span class="star" value="2" >&nbsp;</span>
  <span class="star" value="3">&nbsp;</span>
  <span class="star" value="4">&nbsp;</span>
  <span class="star" value="5">&nbsp;</span>
  <input type="hidden" id="ratings" name="ratings" >

 </div> -->
</div>
</div>
<legend>Please Choose Image to Upload</legend>
<div class="form-group">
    <input type="file" name="glryimage" accept="image/*" />
</div>
<div class="form-group">
    <button type="submit" class="btn btn-primary" name="submit">ADD</button>
</div>
</div>
</form>
 <!-- <script src="./feedback.js" charset="utf-8"></script> -->
 <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script>
  </body>
</html>
