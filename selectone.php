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
    <br><br><br>
    <?php

    require("connect.php");
    $id = $_GET['a_id'];
    $sql = "SELECT * FROM info WHERE a_id = '$id'";
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
            <p class="card-text">วันเกิด : <?php echo $result['date']; ?></p>
            <p class="card-text">งาน : <?php echo $result['job']; ?></p>
            <p class="card-text">เบอร์โทรศัพท์ : <?php echo $result['tel']; ?></p>
            <p class="card-text">Facebook : <?php echo $result['face']; ?></p>
            <p class="card-text">E-mail : <?php echo $result['email']; ?></p>

            <div align="right">
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php
    $id = $_GET['a_id'];
    $sql = "SELECT * FROM addr_home WHERE a_id = '$id'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    ?>
    <?php
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    ?>
    <h1 class="card-title">ข้อมูลที่อยู่</h1>
    <div class="card w-75">
      <div class="card-body">
        <div class="row">
          <div class="col-8">
            <h5 class="card-text">บ้านเลขที่ : <?php echo $result['House-No']; ?></h5>
            <p class="card-text">หมู่ : <?php echo $result['Moo-home']; ?></p>
            <p class="card-text">ถนน : <?php echo $result['road-home']; ?></p>
            <p class="card-text">จังหวัด : <?php echo $result['Province-home']; ?></p>
            <p class="card-text">ตำบล : <?php echo $result['Area-home']; ?></p>
            <p class="card-text">อำเภอ : <?php echo $result['Sub-area-home']; ?></p>
            <p class="card-text">ตำบล : <?php echo $result['Postal-Code-home']; ?></p>
            <p class="card-text">เบอร์บ้าน : <?php echo $result['Tel-home']; ?></p>
          </div>
        </div>
      </div>
    </div>

    <?php
    $id = $_GET['a_id'];
    $sql = "SELECT * FROM addr_work WHERE a_id = '$id'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    ?>
    <?php
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    ?>
    <h1 class="card-title">ข้อมูลที่อยู่ที่ทำงาน</h1>
    <div class="card w-75">
      <div class="card-body">
        <div class="row">
          <div class="col-8">
            <h5 class="card-text">บ้านเลขที่ : <?php echo $result['Work-No']; ?></h5>
            <p class="card-text">หมู่ : <?php echo $result['Moo-work']; ?></p>
            <p class="card-text">ถนน : <?php echo $result['road-work']; ?></p>
            <p class="card-text">จังหวัด : <?php echo $result['Province-work']; ?></p>
            <p class="card-text">ตำบล : <?php echo $result['Area-work']; ?></p>
            <p class="card-text">อำเภอ : <?php echo $result['Sub-area-work']; ?></p>
            <p class="card-text">ตำบล : <?php echo $result['Postal-Code-work']; ?></p>
            <p class="card-text">เบอร์บ้าน : <?php echo $result['Tel-work']; ?></p>

          </div>
        </div>
      </div>
    </div>

    <?php
    $id = $_GET['a_id'];
    $sql = "SELECT * FROM year WHERE a_id = '$id'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    ?>
    <?php
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    ?>
    <h1 class="card-title">ปีที่เข้า-จบการศึกษา</h1>
    <div class="card w-75">
      <div class="card-body">
        <div class="row">
          <div class="col-8">
            <h5 class="card-text">ปีที่เข้า : <?php echo $result['attend']; ?></h5>
            <p class="card-text">ปีที่จบ : <?php echo $result['finish']; ?></p>
          </div>
        </div>
      </div>
    </div>

 
  </div>
  <br><br><br> <br><br><br>



</body>

</html>