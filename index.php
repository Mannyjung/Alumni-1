<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>register-software</title>
    <?php require('bs.html'); ?>

    <style>  
    .booder1 {
  border-bottom: 1px solid #A0A0A0;
  width: 750px;
  
}
.booder {
  border-bottom: 1px solid #A0A0A0;
  
}

    </style>
    <style>
#carouselExampleControls{
  margin: 50px 250px 50px 250px;
}
h1{
  margin: 20px 20px 20px 150px;
}
</style>
</head>
<body>
 <!-- header -->
 <div align="center">
 <img src="photo/header1920px.png" width="100%">
 </div>
  <!-- header -->



<!-- Nav -->
<?php require('nav.html'); ?>
<!-- Nav -->
<br><br>

<h1>ภาพรวมกิจกรรม</h1>
    
<p></p>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-interval="2550">
      <img src="photo/show2.jpg"class="d-block w-100" height="650" >
    </div>
    <div class="carousel-item">
      <img src="photo/show1.jpg" class="d-block w-100"height="650" >
    </div>
    <div class="carousel-item">
      <img src="photo/show3.jpg" class="d-block w-100" height="650">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  </div>

<p></p>

</body>
</html>
