<?php
require '../database/connect.php';
   $cat = $_GET['category'];


 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> <?php echo $cat; ?>- Pehchan </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <?php require '../headerandfooter/header.php'; ?>

  </head>
  <body>
    <?php require 'navbar.php'; ?>
    <?php require 'productnav.php';?>

    <div class="container">

      <div class="row">
        <div class="col-lg-12">
         <h2 class="my-4 text-center"> <?php echo $cat; ?> </h2>
       </div>
       <?php
       $cat = $_GET['category'];

       $sql= "SELECT * from webprod";
       $result = mysqli_query($con,$sql);
       while($row = mysqli_fetch_array($result)){

        ?>
       <div class="col-lg-4 col-sm-6 text-center mb-4">
         <img class="rounded-circle img-fluid d-block mx-auto" src="data:image;base64,'.$row[1]." alt=<?php echo $row[0];?>>
         <h3> <?php echo $row[2]; ?>
           <!-- <small>Job Title</small> -->
         </h3>
         <p><?php echo $row[3];  ?></p>
       </div>
       <?php

     }
     mysqli_close($con);
     ?>

    </div>
<div>

  </body>
</html>