<!DOCTYPE html>
<html>
<head>
    <title>Insert Image into MySQL Database using PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="css.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital@1&family=Ubuntu:ital,wght@1,500&display=swap" rel="stylesheet">
    <link rel="icon" href="favvv.ico" />

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
</head>
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
<br/>
<div class="container">
    <div class="col-xs-8 col-xs-offset-2 well" style="background:none;">
    <form action="upload.php" method="post" enctype="multipart/form-data">
      <div class="form-group">
      <label for="cafe" required>Select the cafe</label>
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
        <legend>Please Choose Image to Upload</legend>
        <div class="form-group">
            <input type="file" name="glryimage" accept="image/*" />
        </div>
        <div class="form-group">
            <input type="submit" name="submit" value="Upload Image" class="btn btn-danger"/>
        </div>
        <?php if(isset($_GET['st'])) { ?>
            <div class="alert alert-danger text-center">
            <?php if ($_GET['st'] == 'success') {
                    echo "Image uploaded successfully!!!";
                }
                else
                {
                    echo 'Error uploading image...';
                } ?>
            </div>
        <?php } ?>
    </form>
    </div>
</div>
</body>
</html>
