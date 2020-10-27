<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Show-user</title>
  <?php require('bs.html'); ?>
  <style>
    .card {
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
  <?php require('navaf.php'); ?>
  <!-- Nav -->

  <div class="container">
    <br><br><br>
    <?php

    require("connect.php");
    $email = $_SESSION['email'];
    $sql = "SELECT * FROM info WHERE email = '$email'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    ?>
    <?php
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    ?>
    <h1 class="card-title">ข้อมูลส่วนตัว</h1>
    <div class="card w-75">
      <div class="card-body">
        <div class="row">
          <div class="col-4">
            <img src="upload/<?php echo $result['image'] ?>" alt="" width="180px" height="180px">
          </div>
          <div class="col-8">

            <h5 class="card-title">ชื่อ : <?php echo $result['title'], $result['fname']; ?> <? echo $result['lname']; ?></h5>
            <p class="card-text">อีเมลล์ : <?php echo $result['email']; ?></p>
            <p class="card-text">เฟสบุ๊ค : <?php echo $result['face']; ?></p>
            <p class="card-text">เพศ : <?php echo $result['sex']; ?></p>
            <p class="card-text">วันเกิด : <?php echo $result['date']; ?></p>
            <p class="card-text">เลขบัตรประชาชน : <?php echo $result['idcard']; ?></p>
            <p class="card-text">งาน : <?php echo $result['job']; ?></p>
            <p class="card-text">เบอร์โทรศัพท์ : <?php echo $result['tel']; ?></p>
            <p class="card-text">Facebook : <?php echo $result['face']; ?></p>
            <p class="card-text">E-mail : <?php echo $result['email']; ?></p>

          
          </div>
        </div>
      </div>
    </div>


    <div class="container">
    <div align="right">
        <a href="formselect.php?a_id=<?php echo $result['a_id']; ?>"><button type="button" class="btn btn-primary">ดูเพิ่มเติม</button></a>
      </div>
    <!--   <div align="right">
        <a href="formupdate.php?a_id=<?php echo $result['a_id']; ?>"><button type="button" class="btn btn-primary">แก้ไขข้อมูลส่วนตัว</button></a>
      </div> -->
    </div>
  </div>
  <br><br><br> <br><br><br>



</body>

</html>