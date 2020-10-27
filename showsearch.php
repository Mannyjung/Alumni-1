<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include('bs.html') ?>
</head>

<body>
     <div align="center">
        <img src="photo/header1920px.png" width="100%">
    </div>
    <!-- header -->
    <!-- Nav -->
    <?php require('navaf.php'); ?>
    <!-- Nav -->
    <br>
    <?php
    include('connect.php');
    $search = $_GET['search'];
    $sql = "SELECT * FROM `alumni`.`info` WHERE (CONVERT(`fname` USING utf8) LIKE '%$search%')";
    $stmt = $conn->query($sql);
    ?>
    <!-- header -->
   

    <div class="container">
        <br><br><br>
        <center>
            <h1>รายชื่อศิษย์เก่าทั้งหมด</h1>
        </center>
        <br><br><br>
        <?php

        while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
        ?>
            <div class="card w-75">
                <div class="card-body">
                    <div class="row">
                        <div class="col-4">
                            <img src="upload/<?php echo $result['image'] ?>" alt="" width="180px" height="180px">
                        </div>
                        <div class="col-8">
                            <h5 class="card-title">ชื่อ : <?php echo $result['title'], $result['fname'], ' ', $result['lname']; ?></h5>
                            <p class="card-text">อีเมลล์ : <?php echo $result['email']; ?></p>
                            <p class="card-text">เฟสบุ๊ค : <?php echo $result['face']; ?></p>
                            <p class="card-text">ปีที่เข้า : <?php echo $result['attend']; ?></p>
                            <div align="right">
                                <a href="selectone.php?a_id=<?php echo $result['a_id']; ?>" class="btn btn-primary">ดูรายละเอียด</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        <?php
        }
        $conn = null;
        ?>
</body>

</html>