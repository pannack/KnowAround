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
if (isset($_POST['submit']))
{
    $img_name = $_FILES['glryimage']['name'];
    $cafe=$_POST['cafe'];

    //upload file
    if ($img_name!='')
    {
        $ext = pathinfo($img_name, PATHINFO_EXTENSION);
        $allowed = ['png', 'gif', 'jpg', 'jpeg'];

        //check if it is valid image type
        if (in_array($ext, $allowed))
        {

            // read image data into a variable for inserting
            $img_data = addslashes(file_get_contents($_FILES['glryimage']['tmp_name']));

            // insert image into mysql database
            $sql = "INSERT INTO imagee(name, imagedata,cafe) VALUES('$img_name', '$img_data','$cafe')";
            mysqli_query($con, $sql) or die("Error " . mysqli_error($con));
            header("Location: imagee.php?st=success");
        }
        else
        {
            header("Location: imagee.php?st=error");
        }
    }
    else
        header("Location: imagee.php");
}
?>
