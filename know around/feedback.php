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
if(isset($_POST['submit'])){
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email= $_POST['email'];
$phonenumber= $_POST['phonenumber'];
$cafe= $_POST['cafe'];
$dayy= $_POST['dayy'];
$ratings= $_POST['ratings'];
$foodquality= $_POST['foodquality'];
$reviews= $_POST['reviews'];
$sql="INSERT INTO `feedback` (`firstname`, `lastname`, `email`, `phonenumber`, `cafe`, `dayy`, `ratings`, `foodquality`, `reviews`) VALUES ('$firstname', '$lastname', '$email', '$phonenumber', '$cafe', '$dayy', '$ratings','$foodquality','$reviews')";
//echo $sql;
if(mysqli_query($con,$sql))
{
 //echo 'Data entered Successfully';
 $insert=true;
}
else
{
 echo 'Something went wrong';
 }
mysqli_close($con);
}
else{

}
 ?>
   <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Feedback</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
     <link rel="stylesheet" href="css.css"/>
     <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital@1&family=Ubuntu:ital,wght@1,500&display=swap" rel="stylesheet">
     <link rel="icon" href="favvv.ico" />
   </head>
   <body class="feedback">
     <section id="title">

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
              <a class="nav-link" href="feedback.php">Give feedback</a>
          </li>
      </ul>
   </div>
   </nav>
   <h2>Please fill the form!!</h2>
   <?php
   if($insert ==true){
   //echo "<p>Thanks for your valuable feedback!</p>";
    }
   ?>
   <section class="foorm">
     <form  action="feedback.php" method="post" class=foorm>
       <div class="form-row">
         <div class="form-group col-md-6">
           <label for="firstname">FIRST NAME</label>
           <input type="text" class="form-control" id="firstname" placeholder="First name" name="firstname" required>
         </div>
         <div class="form-group col-md-6">
           <label for="lastname">LAST NAME</label>
           <input type="text" class="form-control" id="lastname" placeholder="Last name" name="lastname">
         </div>
       </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" placeholder="Email" name="email">
      </div>
      <div class="form-group col-md-6">
        <label for="phonenumber">Phone Number</label>
        <input type="phonenumber" class="form-control" id="phonenumber" placeholder="Phone Number" name="phonenumber">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-4">
        <label for="cafe" required>Select your fav cafe to reveiw</label>
        <select id="cafe" name="cafe" class="form-control ">
          <option>Stoneway Cafe</option>
          <option>Heavenly patties</option>
          <option>Cafe Bohemia</option>
          <option>Maddys</option>
          <option>Ratna Forever</option>
          <option>V39</option>
          <option>Cream hub</option>
          <option>Junxxon</option>
          <option>Kitchen bells</option>
        </select>
      </div>
      <div class="form-group col-md-6 dayy">
        <label for="dayy">Day Visited</label>
        <input type="date" class="form-control" id="dayy" placeholder="Day visited" name="dayy">
        </div>
      </div>
        <div class="form-row">
         <div class="form-group col-md-6">
         <label for="ratings">Ratings</label>
         <div class="stars" data-rating="3">
         <span class="star" id="ratings" name="ratings">&nbsp;</span>
         <span class="star" id="ratings" name="ratings">&nbsp;</span>
         <span class="star" id="ratings"name="ratings">&nbsp;</span>
         <span class="star"  id="ratings"name="ratings" >&nbsp;</span>
         <span class="star"  id="ratings" name="ratings">&nbsp;</span>
        </div>
       </div>
       <div class=form-group-col-md-6>
         <label for="foodquality">Food Quality</label><br>
         <input type="radio" id="Excellent" name="foodquality" value="Excellent">
         <label for="male">Excellent</label><br>
         <input type="radio" id="Good" name="foodquality" value="Good">
         <label for="female">Good</label><br>
         <input type="radio" id="Average" name="foodquality" value="Average">
         <label for="other">Average</label><br />
         <input type="radio" id="Dissatisfied" name="foodquality" value="Dissatisfied">
         <label for="other">Dissatisfied</label>
       </div>

      </div>
     <div class="form-group">
     <label for="reviews">Reviews</label>
     <textarea class="form-control" id="reviews" rows="3" name="reviews" required></textarea>
   </div>
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  </form>


   </section>
   </section>
   <div id="footer">
     <div class="container">
       <div class="row">
         <div class="col-md-4">
           <h4>Know around😎</h4>
           <p>
              Hope we helped you to know Nitte better!!<br />
              Visit Again👏
           </p>

         </div>
         <div class="col-md-4">
           <h4>Quick contact</h4>
           <p>
             <i class="fa fa-phone">9480558411</i>
           </p>
           <p>
             <i class="fa fa-envelope">abc@gmail.com</i>
           </p>
         </div>
         <div class="col-md-4">
           <h4>Follow us</h4>
           <p>
             <i class="fa fa-instagram"><span>  </span>Instagram</i>
           </p>
           <p>
            <i class="fa fa-facebook"> <span>  </span>Facebook</i>
           </p>
         </div>

     <hr />
     <div>
     <p class="ftext">
       Made with ❤ from Prajna and Prarthana K</p>
     </div>
    </div>
  </div>
<!--<script src="feedback.js" charset="utf-8"></script>-->
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script>
   </body>
 </html>
