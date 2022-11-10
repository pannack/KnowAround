<?php
$dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $database='know_around';

   $conn = mysqli_connect($dbhost, $dbuser, $dbpass);

   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="css.css" />
    <link rel="icon" href="favvv.ico" />
  </head>
  <style>
   .fa-star{
     color:yellow;
   }
   .fa-star-half{
     color:yellow;
   }
   .modal-body {
  background-color:#2ec1ac;
}
.btn btn-primary{
  background-color: white;
}
.modal-header{
  background-color: #ffc93c;
}
.last{
  margin-top: 30px;
}
.first{
  margin-top: 30px;
}
.modal-dialog{
  width:100%;

}
  </style>
  <body>
  <section class="cafees">
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
  <a href="add.php">Would you like to add new cafe?</a>
  <div class="container">
    <div class="row first">
      <div class="col-md-4">
        <div class="box">
          <div class="immg">
            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#staticBackdrop">
            <img src="stoneway.jpeg" height="300px" width="300px" alt="">
            <h4>Stoneway Cafe</h4></button>
          </div>
    <div class="textt">
      <div class="modal fade" id="staticBackdrop"  tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">Stoneway Cafe</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <img  src="stoneway.jpeg" height="300px" width="300px" alt="">
            <?php
            mysqli_select_db($conn,'know_around');
            $sql = 'select * from imagee where cafe="Stoneway Cafe"'; // change this id as per your need
           $result = mysqli_query($conn, $sql) or die('Error ' . mysqli_error($conn));
           $row = mysqli_fetch_array($result);
           if(isset($row['imagedata'])){
           echo '<img src="data:image/jpeg;base64,'.base64_encode($row['imagedata']).'"/>';}
           else{

           }
            ?>
           <h4>Stoneway cafe</br>
          <h6>
         <b>4.4</b><i class="fa fa-star" ></i>
      <i class="fa fa-star" ></i>
      <i class="fa fa-star" ></i>
      <i class="fa fa-star" ></i>
      <i class="fa fa-star-half"></i></h6></h4>
    <p>
    <b>Dine-in | Takeaway | Delivery</br></b>
    <b> Address:</b> Ushakiran complex Padubidri-karkala highway, near NMAMIT, Nitte, Karnataka 574110 </br>
       <strong>Open:</strong> 11am-10pm
       <p>
         <b>REVIEWS</b>
       </p>
       <?php
       $sql = 'SELECT firstname, lastname, reviews FROM feedback WHERE cafe="Stoneway cafe"';
       mysqli_select_db($conn,'know_around');
       $retval = mysqli_query(  $conn,$sql);

       if(! $retval ) {
          die('Could not get data: ' . mysqli_connect_error());
       }

       while($row = mysqli_fetch_array($retval)) {
          echo " <b>{$row['firstname']}</b>  ".
              "<b>{$row['lastname']}</b> <br> ".
             "  {$row['reviews']} <br> ".
             "<br>";
       }

        ?>
        <b><a href="imagee.php">ADD IMAGES</a></b>
    </p>
       </div>
         </div>
          </div>
          </div>
        </div>
        </div>
        </div>
        <div class="col-md-4">
          <div class="box">
            <div class="immg">
<button type="button" class="btn btn-default" data-toggle="modal" data-target="#heavenlypatties">
  <img src="heavenlypatties.jpg" height="300px" width="300px" alt="">
  <h4>Heavenly Patties</h4>
</button>
<div class="modal fade" id="heavenlypatties"  tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Heavenly patties</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="textt">
          <img src="heavenlypatties.jpg" height="300px" width="300px" alt="">
          <?php
          mysqli_select_db($conn,'know_around');
          $sql = 'select * from imagee where cafe="Heavenly Patties"'; // change this id as per your need
         $result = mysqli_query($conn, $sql) or die('Error ' . mysqli_error($conn));
         $row = mysqli_fetch_array($result);
         if(isset($row['imagedata'])){
         echo '<img src="data:image/jpeg;base64,'.base64_encode($row['imagedata']).'"/>';}
         else{

         }
          ?>
          <h4>Heavenly Patties
            <h6>
            <b>4.4</b><i class="fa fa-star" ></i>
            <i class="fa fa-star" ></i>
            <i class="fa fa-star" ></i>
            <i class="fa fa-star" ></i>
            <i class="fa fa-star-half"></i></h6></h4>
            <p>Heavenly patties gives you all you want in a restaurent</p>
          <p>
            <b>No-contact delivery | Delivery | Takeaway</br></b>
            <b>Address:</b> Heavenly patties- nitte karkala, Nitte 574110</br>
            <b>Open:</b> 11.30am-11.30pm<br />
            <a href="https://heavenlypatties.business.site/?utm_source=gmb&utm_medium=referral"><b>Website</b></a>|
            <a href="tel:07510518000"><b>Call</b></a><br />
            <a href="www.facebook.com">
            <i class="fa fa-facebook"> <span>  </span>Facebook</i>
            </a>
            <a href="www.instagram.com">
            <i class="fa fa-instagram"> <span>  </span>Instagram</i>
            </a>
            <p>
             <b>REVIEWS</b>
            </p>
            <?php
            $sql = 'SELECT firstname, lastname, reviews FROM feedback WHERE cafe="heavenly patties"';
            mysqli_select_db($conn,'know_around');
            $retval = mysqli_query(  $conn,$sql);

            if(! $retval ) {
               die('Could not get data: ' . mysqli_connect_error());
            }

            while($row = mysqli_fetch_array($retval)) {
               echo " <b>{$row['firstname']}</b>  ".
                   "<b>{$row['lastname']}</b> <br> ".
                  "  {$row['reviews']} <br> ".
                  "<br>";
            }

             ?>
          </p>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
            </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="box">
              <div class="immg">
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#cafebohemia">
                <img src=".jpeg" height="300px" width="300px" alt="">
                <h4>Cafe Bohemia</h4></button>
              </div>
              <div class="modal fade" id="cafebohemia"  tabindex="-1" role="dialog" >
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="staticBackdropLabel">Cafe Bohemia</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
              <div class="modal-body">
              <div class="textt">
                <h4>Cafe Bohemia
                  <h6>
                  <b>4.4</b><i class="fa fa-star" ></i>
                  <i class="fa fa-star" ></i>
                  <i class="fa fa-star" ></i>
                  <i class="fa fa-star" ></i>
                  <i class="fa fa-star-half"></i></h6></h4>
                <p>
                  Dine-in | Takeaway</br>
                  <b>Address:</b> Near Nitte College, Nitte, Karkala Taluk, Nitte, Karnataka 574110
                  <b>Open:</b> 24hrs</br>
                  <p>
                    <b>REVIEWS</b></p>
                    <?php
                    $sql = 'SELECT firstname, lastname, reviews FROM feedback WHERE cafe=""';
                    mysqli_select_db($conn,'know_around');
                    $retval = mysqli_query(  $conn,$sql);

                    if(! $retval ) {
                       die('Could not get data: ' . mysqli_connect_error());
                    }

                    while($row = mysqli_fetch_array($retval)) {
                       echo " <b>{$row['firstname']}</b>  ".
                           "<b>{$row['lastname']}</b> <br> ".
                          "  {$row['reviews']} <br> ".
                          "<br>";
                    }
                     ?>
                  </p>
                </p>
              </div>
              </div>
            </div>
      </div>
    </div>
    </div>
    </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="box">
            <div class="immg">
              <button type="button" class="btn btn-default" data-toggle="modal" data-target="#ratna">
              <img src="ratna.jpeg" height="300px" width="300px" alt="">
              <h4>Ratna Forever</h4></button>
            </div>
            <div class="modal fade" id="ratna" tabindex="-1" role="dialog">
              <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Ratna Forever</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
            <div class="modal-body">
            <div class="textt">
              <img src="ratna.jpeg" height="300px" width="300px" alt="">
              <?php
              mysqli_select_db($conn,'know_around');
              $sql = 'select * from imagee where cafe="Ratna Forever"'; // change this id as per your need
             $result = mysqli_query($conn, $sql) or die('Error ' . mysqli_error($conn));
             $row = mysqli_fetch_array($result);
             if(isset($row['imagedata'])){
             echo '<img src="data:image/jpeg;base64,'.base64_encode($row['imagedata']).'"/>';}
             else{

             }
               ?>
              <h4>Ratna Forever
                <h6>
                <b>4.0</b><i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i></h6></h4>
              <p>
                <b>Dine-in | Takeaway</br></b>
                <b>Address:</b> Near Nitte College, Nitte, Karkala Taluk, Nitte, Karnataka 574110</br>
                <b>Open:</b> 24hrs</br>
                <p>
                  <b>REVIEWS</b>
                </p>
                <?php
                $sql = 'SELECT firstname, lastname, reviews FROM feedback WHERE cafe="Ratna Forever"';
                mysqli_select_db($conn,'know_around');
                $retval = mysqli_query(  $conn,$sql);

                if(! $retval ) {
                   die('Could not get data: ' . mysqli_connect_error());
                }

                while($row = mysqli_fetch_array($retval)) {
                   echo " <b>{$row['firstname']}</b>  ".
                       "<b>{$row['lastname']}</b> <br> ".
                      "  {$row['reviews']} <br> ".
                      "<br>";
                }

                 ?>
              </p>
            </div>
            </div>
          </div>
          </div>
          </div>
          </div>
          </div>
          <div class="col-md-4">
            <div class="box">
              <div class="immg">
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#maddys">
                <img src="maddys.jpg" height="300px" width="300px" alt="">
                <h4>Maddy's katti cafe</h4></button>
              </div>
              <div class="modal fade" id="maddys" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="staticBackdropLabel">Cafe Bohemia</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
              <div class="modal-body">
              <div class="textt">
                <img src="maddys.jpg" height="300px" width="300px" alt="">
                <?php
                mysqli_select_db($conn,'know_around');
                $sql = 'select * from imagee where cafe="Maddys Katti Cafe"'; // change this id as per your need
               $result = mysqli_query($conn, $sql) or die('Error ' . mysqli_error($conn));
               $row = mysqli_fetch_array($result);
               if(isset($row['imagedata'])){
               echo '<img src="data:image/jpeg;base64,'.base64_encode($row['imagedata']).'"/>';}
               else{

               }
                ?>
                <h4>Maddy's Katti Cafe
                  <h6>
                  <b>4.5</b><i class="fa fa-star" ></i>
                  <i class="fa fa-star" ></i>
                  <i class="fa fa-star" ></i>
                  <i class="fa fa-star" ></i>
                  <i class="fa fa-star-half"></i></h6></h4>
                <p>
                  <b>Delivery | Takeaway</b></br>
                  <b>Address:</b> Main Rd, Karkala, Karnataka 574104</br>
                  <b>Open:</b> 10am-10pm</br>
                  <p>
                    <b>REVIEWS</b>
                  </p>
                  <?php
                  $sql = 'SELECT firstname, lastname, reviews FROM feedback WHERE cafe="Maddys"';
                  mysqli_select_db($conn,'know_around');
                  $retval = mysqli_query(  $conn,$sql);

                  if(! $retval ) {
                     die('Could not get data: ' . mysqli_connect_error());
                  }

                  while($row = mysqli_fetch_array($retval)) {
                     echo " <b>{$row['firstname']}</b>  ".
                         "<b>{$row['lastname']}</b> <br> ".
                        "  {$row['reviews']} <br> ".
                        "<br>";
                  }

                   ?>
                </p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
              </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            <div class="col-md-4">
              <div class="box">
                <div class="immg">
                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#v39">
                  <img src="v39.jpg" height="300px" width="300px" alt="">
                  <h4>V39 Cafe</h4></button>
                </div>
                <div class="modal fade" id="v39"  tabindex="-1" role="dialog">
                  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">V39 Cafe</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                <div class="modal-body">
                <div class="textt">
                  <img src="v39.jpg" height="300px" width="300px" alt="">
                  <?php
                  mysqli_select_db($conn,'know_around');
                  $sql = 'select * from imagee where cafe="V39"'; // change this id as per your need
                 $result = mysqli_query($conn, $sql) or die('Error ' . mysqli_error($conn));
                 $row = mysqli_fetch_array($result);
                 if(isset($row['imagedata'])){
                 echo '<img src="data:image/jpeg;base64,'.base64_encode($row['imagedata']).'"/>';}
                 else{

                 }
                  ?>
                  <h4>V39 Cafe
                    <h6>
                    <b>4.1</b><i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i></h6></h4>
                  <p>
                    <b>Dine-in | Delivery | Takeaway</b></br>
                    <b>Address:</b> Padubidri Main Road, next to Hotel Pallavi, Padubidri, Karnataka 574111</br>
                    <b>Open:</b> 10am-12am</br>
                    <p>
                      <b>REVIEWS</b>
                    </p>
                    <?php
                    $sql = 'SELECT firstname, lastname, reviews FROM feedback WHERE cafe="heavenly patties"';
                    mysqli_select_db($conn,'know_around');
                    $retval = mysqli_query(  $conn,$sql);

                    if(! $retval ) {
                       die('Could not get data: ' . mysqli_connect_error());
                    }

                    while($row = mysqli_fetch_array($retval)) {
                       echo " <b>{$row['firstname']}</b>  ".
                           "<b>{$row['lastname']}</b> <br> ".
                          "  {$row['reviews']} <br> ".
                          "<br>";
                    }

                     ?>
                  </p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
                </div>
              </div>
        </div>
      </div>
      </div>
      </div>
    </div>
    </div>
      <div class="container">
        <div class="row last">
          <div class="col-md-4">
            <div class="box">
              <div class="immg">
                  <button type="button" class="btn btn-default" data-toggle="modal" data-target="#kitchenbells">
                <img src="kitchenbells.jpeg" height="300px" width="300px" alt="">
                <h4>Kitchen Bells</h4></button>
              </div>
              <div class="modal fade" id="kitchenbells" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="staticBackdropLabel">Kitchen Bells</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
              <div class="modal-body">
              <div class="textt">
                  <img src="kitchenbells.jpeg" height="300px" width="300px" alt="">
                  <?php
                  mysqli_select_db($conn,'know_around');
                  $sql = 'select * from imagee where cafe="Kitchen bells"'; // change this id as per your need
                 $result = mysqli_query($conn, $sql) or die('Error ' . mysqli_error($conn));
                 $row = mysqli_fetch_array($result);
                 if(isset($row['imagedata'])){
                 echo '<img src="data:image/jpeg;base64,'.base64_encode($row['imagedata']).'"/>';}
                 else{

                 }
                ?>
                <h4>Kitchen Bells Sanmati
                  <h6>
                  <b>4.2</b><i class="fa fa-star" ></i>
                  <i class="fa fa-star" ></i>
                  <i class="fa fa-star" ></i>
                  <i class="fa fa-star" ></i></i></h6></h4>
                <p>
                  <b>Dine-in | Delivery | Takeaway</b></br>
                  <b>Address:</b> Short-cut NET Gents hostel to Main Rd, Nitte, Karnataka 574110</br>
                  <b>Open:</b> 9am-9pm</br>
                  <p>
                    <b>REVIEWS</b>
                    <?php
                    $sql = 'SELECT firstname, lastname, reviews FROM feedback WHERE cafe="Kitchen bells"';
                    mysqli_select_db($conn,'know_around');
                    $retval = mysqli_query(  $conn,$sql);

                    if(! $retval ) {
                       die('Could not get data: ' . mysqli_connect_error());
                    }

                    while($row = mysqli_fetch_array($retval)) {
                       echo " <b>{$row['firstname']}</b>  ".
                           "<b>{$row['lastname']}</b> <br> ".
                          "  {$row['reviews']} <br> ".
                          "<br>";
                    }

                     ?>
                  </p>
                </p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
              </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            <div class="col-md-4">
              <div class="box">
                <div class="immg">
                    <button type="button" class="btn" data-toggle="modal" data-target="#creamhub">
                  <img src="creamhub.jpeg" height="300px" width="300px" alt="">
                  <h4>Cream hub</h4></button>
                </div>
                <div class="modal fade" id="creamhub"  tabindex="-1" role="dialog">
                  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Cream Hub</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                <div class="modal-body">
                <div class="textt">
                  <img src="creamhub.jpeg" height="300px" width="300px" alt="">
                  <?php
                  mysqli_select_db($conn,'know_around');
                  $sql = 'select * from imagee where cafe="Cream Hub"'; // change this id as per your need
                 $result = mysqli_query($conn, $sql) or die('Error ' . mysqli_error($conn));
                 $row = mysqli_fetch_array($result);
                 if(isset($row['imagedata'])){
                 echo '<img src="data:image/jpeg;base64,'.base64_encode($row['imagedata']).'"/>';}
                 else{

                 }
                  ?>
                  <h4>Cream Hub
                    <h6>
                    <b>4.7</b><i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star-half"></i></h6></h4>
                  <p>
                    <b>Dine-in | Takeaway</b></br>
                    <a href="https://goo.gl/maps/51mxuDJf98BTCexVA">
                     <i class="fa fa-map-marker"></i>
                     SH 37, Karkala, Karnataka 574104</br></a>
                    <b>Open:</b> 10:30am–2pm, 3:30–10pm <b>AND</b> Sunday- 11am–2pm, 4–10pm</br>
                    <p>
                      <b>REVIEWS</b>
                    </p>
                    <?php
                    $sql = 'SELECT firstname, lastname, reviews FROM feedback WHERE cafe="Cream hub"';
                    mysqli_select_db($conn,'know_around');
                    $retval = mysqli_query(  $conn,$sql);

                    if(! $retval ) {
                       die('Could not get data: ' . mysqli_connect_error());
                    }

                    while($row = mysqli_fetch_array($retval)) {
                       echo " <b>{$row['firstname']}</b>  ".
                           "<b>{$row['lastname']}</b> <br> ".
                          "  {$row['reviews']} <br> ".
                          "<br>";
                    }

                     ?>
                  </p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
                </div>
              </div>
              </div>
              </div>
              </div>
              </div>
                <div class="col-md-4">
                <div class="box">
                  <div class="immg">
                      <button type="button" class="btn btn-default" data-toggle="modal" data-target="#junxxon">
                    <img src="junxxon.jpg" height="300px" width="300px" alt="">
                    <h4>Junxxon</h4></button>
                  </div>
                  <div class="modal fade" id="junxxon"  tabindex="-1" role="dialog">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="staticBackdropLabel"><b>Junxxon</b></h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                  <div class="modal-body">
                  <div class="textt">
                    <img src="junxxon.jpg" height="300px" width="300px" alt="">
                    <?php
                    mysqli_select_db($conn,'know_around');
                    $sql = 'select * from imagee where cafe="Junxxon"'; // change this id as per your need
                   $result = mysqli_query($conn, $sql) or die('Error ' . mysqli_error($conn));
                   $row = mysqli_fetch_array($result);
                   if(isset($row['imagedata'])){
                   echo '<img src="data:image/jpeg;base64,'.base64_encode($row['imagedata']).'"/>';}
                    ?>
                    <h4>Junxxon
                      <h6>
                      <b>3.8</b><i class="fa fa-star" ></i>
                      <i class="fa fa-star" ></i>
                      <i class="fa fa-star" ></i>
                      <i class="fa fa-star" ></i></h6></h4>
                    <p>
                      <b>Delivery | Takeaway</b></br>
                      <b>Address:</b> Gopal Towers, Ground floor, Karkala - Hiriyadka Rd, Karkala, Karnataka 574104</br>
                      <b>Open:</b> 7am-10pm</br>
                      <p>
                        <b>REVIEWS</b>
                      </p>
                      <?php
                      $sql = 'SELECT firstname, lastname, reviews FROM feedback WHERE cafe="Junxxon"';
                      mysqli_select_db($conn,'know_around');
                      $retval = mysqli_query(  $conn,$sql);

                      if(! $retval ) {
                         die('Could not get data: ' . mysqli_connect_error());
                      }

                      while($row = mysqli_fetch_array($retval)) {
                         echo " <b>{$row['firstname']}</b>  ".
                             "<b>{$row['lastname']}</b> <br> ".
                            "  {$row['reviews']} <br> ".
                            "<br>";
                      }

                       ?>
                    </p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
                  </div>
                </div>
          </div>
        </div>
        </div>
        </div>
        </div>
        </div>

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
              <i class="fa fa-instagram apps"><span>  </span>Instagram</i>
            </p>
            <p>
             <i class="fa fa-facebook apps"> <span>  </span>Facebook</i>
            </p>
          </div>

      <hr />
      <div>
      <p class="ftext">
        Made with ❤ from Prajna and Prarthana K</p>
      </div>
     </div>
   </div>
</body>
</html>
