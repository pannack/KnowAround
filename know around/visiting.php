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
.visiting{
  background-color: #2ec1ac;
}
  </style>
  <body class="visiting">
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
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="box">
          <div class="immg">
            <button type="button" class="btn btn" data-toggle="modal" data-target="#arbifalls">
            <img src="arbhi.jpeg" height="300px" width="300px" alt="">
            <h4>Nitte Arbi Falls</h4></button>
          </div>
          <div class="modal fade" id="arbifalls"  tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="staticBackdropLabel">Nitte Arbi Falls</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                  <div class="modal-body">
                    <div class="textt">
                    <img src="arbhi.jpeg" height="300px" width="300px" alt="">

            <h4>Nitte Arbi Falls</br>
              <h6>
              <b>4.1</b><i class="fa fa-star" ></i>
              <i class="fa fa-star" ></i>
              <i class="fa fa-star" ></i>
              <i class="fa fa-star" ></i>
              </h6></h4>
            <p>
              <a href="https://goo.gl/maps/gui5cZ6hDxN6ehL68">
               <i class="fa fa-map-marker"></i>
               Nitte,Karkala,Udupi District,574110 </br></a>
               <strong>Open:</strong> 24hours</br>
               <p>
                 <b>REVIEWS</b>
               </p>
               <?php
               $sql = 'SELECT firstname, lastname, reviews FROM visiting WHERE visit="Nitte Arbi Falls"';
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

        <div class="col-md-4">
          <div class="box">
            <div class="immg">
              <button type="button" class="btn btn" data-toggle="modal" data-target="#durgawaterfalls">
              <img src="durga.jpeg" height="300px" width="300px" alt="">
              <h4>Durga Water Falls</h4>
            </button>
            <div class="modal fade" id="durgawaterfalls"  tabindex="-1" role="dialog">
              <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Durga Water Falls</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
            <div class="textt">
              <img src="durga.jpeg" height="300px" width="300px" alt="">
              <h4>Durga Water Falls
                <h6>
                <b>4.4</b><i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star-half"></i></h6></h4>
              <p>
                <a href="https://goo.gl/maps/4M71Sj4ySNyXaUS57">
                 <i class="fa fa-map-marker"></i>
                 Tellar Rd, Karkala, Karnataka 576117</br></a>
                <b>Open:</b> 24hrs</br>
                <p>
                  <b>REVIEWS</b>
                </p>
                <?php
                $sql = 'SELECT firstname, lastname, reviews FROM visiting WHERE visit="Durga Water Falls"';
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
                            <button type="button" class="btn btn" data-toggle="modal" data-target="#gomata">
                <img src="gomata.jpeg" height="300px" width="300px" alt="">
                <h4>Gomateshwara Statue</h4></button>
              </div>
              <div class="modal fade" id="gomata"  tabindex="-1" role="dialog" >
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="staticBackdropLabel">Gomateshwara Statue</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
              <div class="textt">
                <img src="gomata.jpeg" height="300px" width="300px" alt="">
                <h4>Gomateshwara Statue
                  <h6>
                  <b>4.6</b><i class="fa fa-star" ></i>
                  <i class="fa fa-star" ></i>
                  <i class="fa fa-star" ></i>
                  <i class="fa fa-star" ></i>
                  <i class="fa fa-star-half"></i></h6></h4>
                <p>
                  <a href="https://goo.gl/maps/J9wMUCosCBtWmXtz7">
                   <i class="fa fa-map-marker"></i>
                  Udupi District, Karkala, Karnataka 574104</br></a>
                  <b>Open:</b> 8am to 5pm</br>
                  <p>
                    <b>REVIEWS</b>
                  </p>
                  <?php
                  $sql = 'SELECT firstname, lastname, reviews FROM visiting WHERE visit="Gomateshwara Statue"';
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
</div>
</br>
</br>

    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="box">
            <div class="immg">
              <button type="button" class="btn btn" data-toggle="modal" data-target="#basadi">
              <img src="varanga1.jpeg" height="300px" width="300px" alt="">
              <h4>Varanga Lake (kere) Basadi</h4></button>
            </div>
            <div class="modal fade" id="basadi"  tabindex="-1" role="dialog" >
              <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Varanga</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
            <div class="modal-body">
            <div class="textt">
              <img src="varanga1.jpeg" height="300px" width="300px" alt="">
              <h4>Varanga Lake (kere) Basadi
                <h6>
                <b>4.7</b><i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
               <i class="fa fa-star-half" ></i></h6></h4>
              <p>
                <a href="https://goo.gl/maps/sgXre76qtMBqxj7B7">
                 <i class="fa fa-map-marker"></i>
                Varanga Jain Math Road, Varanga, Karnataka 574108</br></a>
                <b>Open:</b> 8:30am–1pm, 4–6pm</br>
                <p>
                  <b>REVIEWS</b>
                </p>
                <?php
                $sql = 'SELECT firstname, lastname, reviews FROM visiting WHERE visit="Varanga Basadi"';
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
          <div class="col-md-4">
            <div class="box">
              <div class="immg">
                <button type="button" class="btn btn" data-toggle="modal" data-target="#sirimane">
                <img src="sirimane.jpeg" height="300px" width="300px" alt="">
                <h4>Sirimane Waterfalls</h4></button>
                      </div>
                      <div class="modal fade" id="sirimane"  tabindex="-1" role="dialog" >
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="staticBackdropLabel">Sirimane</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
              <div clss="modal-body">
              <div class="textt">
                <img src="sirimane.jpeg" height="300px" width="300px" alt="">

                <h4>Sirimane Waterfalls
                  <h6>
                  <b>4.5</b><i class="fa fa-star" ></i>
                  <i class="fa fa-star" ></i>
                  <i class="fa fa-star" ></i>
                  <i class="fa fa-star" ></i>
                  <i class="fa fa-star-half"></i></h6></h4>
                <p>
                  <a href="https://goo.gl/maps/M9Xngj5wvmtWhaaM9">
                   <i class="fa fa-map-marker"></i>
                 Sirimane Falls Road, Yadadahalli, Karnataka 577139</br></a>
                  <b>Open:</b> 9am-6pm</br>
                  <p>
                    <b>REVIEWS</b>
                  </p>
                  <?php
                  $sql = 'SELECT firstname, lastname, reviews FROM visiting WHERE visit="Sirimane Falls"';
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
            <div class="col-md-4">
              <div class="box">
                <div class="immg">
                  <button type="button" class="btn btn" data-toggle="modal" data-target="#kundadri">
                  <img src="kundadri.jpeg" height="300px" width="300px" alt="">
                  <h4>Kundadri</h4></button>
                </div>
                <div class="modal fade" id="kundadri"  tabindex="-1" role="dialog" >
                  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Kundadri</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                <div class="modal-body">
                <div class="textt">
                  <img src="kundadri.jpeg" height="300px" width="300px" alt="">
                  <h4>Kundadri
                    <h6>
                    <b>4.6</b><i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                   <i class="fa fa-star-half" ></i></h6></h4>
                  <p>
                    <a href="https://goo.gl/maps/zsvtGiHhRhTDbD6Z8">
                     <i class="fa fa-map-marker"></i></a>
                   Kundadri Hill, Karnataka 577424, Shimoga, India</br>
                   <p>
                     <b>REVIEWS</b>
                   </p>
                   <?php
                   $sql = 'SELECT firstname, lastname, reviews FROM visiting WHERE visit="Kundadri"';
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
</div>
</br>
</br>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="box">
              <div class="immg">
                <button type="button" class="btn btn" data-toggle="modal" data-target="#chaturmukha">
                <img src="basadi.jpg" height="300px" width="300px" alt="">
                <h4>Chaturmukha Basadi</h4>
              </button>
              </div>
              <div class="modal fade" id="chaturmukha"  tabindex="-1" role="dialog" >
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="staticBackdropLabel">Chaturmukha Basadi</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
              <div class="textt">
                <img src="basadi.jpg" height="300px" width="300px" alt="">
                <h4>Chaturmukha Basadi
                  <h6>
                  <b>4.5</b><i class="fa fa-star" ></i>
                  <i class="fa fa-star" ></i>
                  <i class="fa fa-star" ></i>
                  <i class="fa fa-star" ></i>
                <i class="fa fa-star-half" ></i></h6></h4>
                <p>
                  <a href="https://goo.gl/maps/AmLJBnXdqQzeVAaT6">
                   <i class="fa fa-map-marker"></i>
                  Karkala Taluk Municipality Building, Market Rd, Karkala, Karnataka 574104</br></a>
                  <b>Open:</b> 7:30–9:30am, 5:30–6:30pm</br>
                  <p>
                    <b>REVIEWS</b>
                  </p>
                  <?php
                  $sql = 'SELECT firstname, lastname, reviews FROM visiting WHERE visit="Chaturmukha Basadi"';
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

            <div class="col-md-4">
              <div class="box">
                <div class="immg">
                  <button type="button" class="btn btn" data-toggle="modal" data-target="#padubiri">
                  <img src="padubidri.jpeg" height="300px" width="300px" alt="">
                  <h4>Padubidri Beach</h4></button>
                </div>
                <div class="modal fade" id="padubiri"  tabindex="-1" role="dialog" >
                  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Padubidri Beach</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                <div class="modal-body">
                <div class="textt">
                  <img src="padubidri.jpeg" height="300px" width="300px" alt="">
                  <h4>Padubidri Beach
                    <h6>
                    <b>4.7</b><i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star-half"></i></h6></h4>
                  <p>
                    <a href="https://goo.gl/maps/DbV2UmikNzTDpjEFA">
                     <i class="fa fa-map-marker"></i>
                    Padubidri, Udupi, Udupi 574111 </br></a>
                    <b>Open</b> 24hours</br>
                    <p>
                      <b>REVIEWS</b>
                    </p>
                    <?php
                    $sql = 'SELECT firstname, lastname, reviews FROM visiting WHERE visit="Padubidri Beach"';
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
              <div class="col-md-4">
                <div class="box">
                  <div class="immg">
                    <button type="button" class="btn btn" data-toggle="modal" data-target="#kudlu">
                    <img src="kudlu.jpg" height="300px" width="300px" alt="">
                    <h4>Kudlu Theertha Falls</h4></button>
                  </div>
                  <div class="modal fade" id="kudlu"  tabindex="-1" role="dialog" >
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="staticBackdropLabel">Kudlu Theertha Falls</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                  <div class="modal-body">
                  <div class="textt">
                    <img src="kudlu.jpg" height="300px" width="300px" alt="">
                    <h4>Kudlu Theertha Falls
                      <h6>
                      <b>4.6</b><i class="fa fa-star" ></i>
                      <i class="fa fa-star" ></i>
                      <i class="fa fa-star" ></i>
                      <i class="fa fa-star" ></i>
                  <i class="fa fa-star-half" ></i></h6></h4>
                    <p>
                      <a href="https://goo.gl/maps/eQ2Savs41xR8mHcGA">
                       <i class="fa fa-map-marker"></i>
                      Nadpal, Karnataka 576112</br></a>
                      <b>Open:</b> 9am-4pm</br>
                      <p>
                        <b>REVIEWS</b>
                      </p>
                      <?php
                      $sql = 'SELECT firstname, lastname, reviews FROM visiting WHERE visit="Kudlu Theertha Falls"';
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
</div>
</br>
</br>
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="box">
                <div class="immg">
                  <button type="button" class="btn btn" data-toggle="modal" data-target="#kudremukh">
                  <img src="kudremukh.jpeg" height="300px" width="300px" alt="">
                  <h4>Kudremukh</h4></button>
                </div>
                <div class="modal fade" id="kudremukh"  tabindex="-1" role="dialog" >
                  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Kudurekuha Jamly(Kudremukh)</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                <div class="textt">
                  <img src="kudremukh.jpeg" height="300px" width="300px" alt="">
                  <h4>Kudurekuha Jamly(Kudremukh)
                    <h6>
                    <b>4.5</b><i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                  <i class="fa fa-star-half" ></i></h6></h4>
                  <p>
                    <a href="https://goo.gl/maps/dpCtNksX3VeFkHQw5">
                     <i class="fa fa-map-marker"></i>
                    Mudigere Taluk Chikkamagaluru district, Karnataka, India</br></a>
                    <b>Open:</b> 6:00 AM to 6:00 PM</br>
                    <p>
                      <b>REVIEWS</b>
                    </p>
                    <?php
                    $sql = 'SELECT firstname, lastname, reviews FROM visiting WHERE visit="Kudremukh"';
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
              <div class="col-md-4">
                <div class="box">
                  <div class="immg">
                    <button type="button" class="btn btn" data-toggle="modal" data-target="#sanmilan">
                    <img src="sammilan.jpeg" height="300px" width="300px" alt="">
                    <h4>Sammilan Shetty's Butterfly Park</h4></button>
                  </div>
                  <div class="modal fade" id="sanmilan"  tabindex="-1" role="dialog" >
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="staticBackdropLabel">Sammilan Shetty's Butterfly Park</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                  <div class="textt">
                    <img src="sammilan.jpeg" height="300px" width="300px" alt="">
                    <h4>Sammilan Shetty's Butterfly Park
                      <h6>
                      <b>4.7</b><i class="fa fa-star" ></i>
                      <i class="fa fa-star" ></i>
                      <i class="fa fa-star" ></i>
                      <i class="fa fa-star" ></i>
                      <i class="fa fa-star-half"></i></h6></h4>
                    <p>
                      <a href="https://goo.gl/maps/gui5cZ6hDxN6ehL68">
                       <i class="fa fa-map-marker"></i>
                       13, Butterfly Park Road, Beluvai, Karnataka 574213</br></a>
                      <b>Open:</b> 8am–1pm</br>
                      <p>
                        <b>REVIEWS</b>
                      </p>
                      <?php
                      $sql = 'SELECT firstname, lastname, reviews FROM visiting WHERE visit="Sammilan Shettys Butterfly Park"';
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
                <div class="col-md-4">
                  <div class="box">
                    <div class="immg">
                      <button type="button" class="btn btn" data-toggle="modal" data-target="#konaje">
                      <img src="konajekallu1.jpeg" height="300px" width="300px" alt="">
                      <h4>Konaje Kallu</h4></button>
                    </div>
                    <div class="modal fade" id="konaje"  tabindex="-1" role="dialog" >
                      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Konaje Kallu</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                    <div class="modal-body">
                    <div class="textt">
                      <img src="konajekallu1.jpeg" height="300px" width="300px" alt="">
                      <h4>Konaje Kallu
                        <h6>
                        <b>4.7</b><i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                    <i class="fa fa-star-half" ></i></h6></h4>
                      <p>
                        <a href="https://goo.gl/maps/KaHwDaYZw57N93n5A">
                         <i class="fa fa-map-marker"></i>
                        Konaje Kallu,Moodbidri, Karnataka 574227</br></a>
                        <b>Open:</b> 5:00 am - 10:30 pm</br>
                        <p>
                          <b>REVIEWS</b>
                        </p>
                        <?php
                        $sql = 'SELECT firstname, lastname, reviews FROM visiting WHERE visit="Konaje Kallu"';
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
</body>
</html>
