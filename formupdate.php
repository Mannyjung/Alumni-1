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
        $id = $_GET['a_id'];
        $sql = "SELECT * FROM info WHERE a_id = '$id'";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        ?>
        <?php
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        ?>

        <form method="POST" action="update.php" enctype="multipart/form-data">
            <div class="container" style="color: blue;">
                <h3>ข้อมูลส่วนตัว</h3>
            </div>
            <br>
            <div class="form-row">
                <div class="form-group col-md-2">
                    <label for="title">คำนำหน้า</label>
                    <select id="title" class="form-control" name="title">
                        <option selected><?php echo $result['title']; ?></option>
                        <option>นาย</option>
                        <option>นาง</option>
                        <option>นางสาว</option>
                    </select>
                </div>
                <div class="form-group col-md-5">
                    <label for="fname">ชื่อ</label>
                    <input type="text" class="form-control" id="fname" placeholder="ชื่อ(ภาษาไทย)" name="fname" value="<?php echo $result['fname'] ?>">
                </div>
                <div class="form-group col-md-5">
                    <label for="lname">นามสกุล</label>
                    <input type="text" class="form-control" id="lname" placeholder="นามสกุล(ภาษาไทย)" name="lname" value="<?php echo $result['lname'] ?>">
                </div>
            </div>

            <div class="form-group">
                <label for="idcard">เลขบัตรประชาชน</label>
                <input type="text" class="form-control" id="idcard" placeholder="x-xxxx-xxx-xx-xx-x" name="idcard" maxlength="13" value="<?php echo $result['idcard'] ?>" readonly>
            </div>
            <div class="form-row">

                <div class="form-group">
                    <label for="select-sex">เพศ</label><br>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline1" name="sex" class="custom-control-input" value="ชาย">
                        <label class="custom-control-label" for="customRadioInline1">ชาย</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline2" name="sex" class="custom-control-input" value="หญิง">
                        <label class="custom-control-label" for="customRadioInline2">หญิง</label>
                    </div>
                </div>

                <div class="form-group col-md-4">
                    <label for="date">วัน/เดือน/ปี เกิด</label>
                    <input type="date" class="form-control" id="date" name="date" value="<?php echo $result['date'] ?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="job">อาชีพ/ตำแหน่งงาน</label>
                    <input type="text" class="form-control" id="job" name="job" placeholder="อาชีพ/ตำแหน่งงาน" value="<?php echo $result['job'] ?>">
                </div>

            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="Tel">เบอร์โทรศัพท์</label>
                    <input type="text" class="form-control" id="tel" name="tel" placeholder="xx-xxx-xxxx" maxlength="10" value="<?php echo $result['tel'] ?>">
                </div>

                <div class="form-group col-md-6">
                    <label for="Facebook">Facebook</label>
                    <input type="text" class="form-control" id="face" name="face" value="<?php echo $result['face'] ?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="email">E-mail(ใช้เพื่อเข้าสู่ระบบ)</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="name@exam.com" value="<?php echo $result['email'] ?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="password">รหัสผ่าน</label>
                    <input type="password" class="form-control" id="password" name="password" value="<?php echo $result['password'] ?>">
                </div>
            </div>
            <p></p>
            <div class="row">
                <div class="col-1.5">
                    <label for="upphoto">รูปภาพ(ท่าน)</label>
                </div>
                <div class="col-6">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="image">
                        <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose file</label>
                    </div>
                </div>
            </div>
            <br> <br>

            <?php
            $id = $_GET['a_id'];
            $sql = "SELECT * FROM addr_home WHERE a_id = '$id'";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            ?>
            <?php
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            ?>
            <div class="container" style="color: blue;">
                <h3>ที่อยู่ปัจจุบันที่สามารถติดต่อได้</h3>
            </div><br>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="House-No">บ้านเลขที่</label>
                    <input type="text" class="form-control" id="House-No" name="House-No" value="<?php echo $result['House-No'] ?>">
                </div>

                <div class="form-group col-md-4">
                    <label for="Moo-home">หมู่บ้าน</label>
                    <input type="text" class="form-control" id="Moo-home" name="Moo-home" value="<?php echo $result['Moo-home'] ?>">
                </div>
                <div class="form-group col-md-4">
                    <label for="road">ถนน</label>
                    <input type="text" class="form-control" id="road-home" name="road-home" value="<?php echo $result['road-home'] ?>">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="Province">จังหวัด</label>
                    <input type="text" class="form-control" id="Province-home" name="Province-home" value="<?php echo $result['Province-home'] ?>">
                </div>

                <div class="form-group col-md-4">
                    <label for="Area">เขต/อำเภอ</label>
                    <input type="text" class="form-control" id="Area-home" name="Area-home" value="<?php echo $result['Area-home'] ?>">
                </div>
                <div class="form-group col-md-4">
                    <label for="Sub-area">แขวง/ตำบล</label>
                    <input type="text" class="form-control" id="Sub-area-home" name="Sub-area-home" value="<?php echo $result['Sub-area-home'] ?>">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="Postal-Code">รหัสไปรษณีย์</label>
                    <input type="text" class="form-control" id="Postal-Code-home" name="Postal-Code-home" maxlength="5" value="<?php echo $result['Postal-Code-home'] ?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="Tel-home">เบอร์โทรศัพท์(ถ้ามี)</label>
                    <input type="text" class="form-control" id="Tel-home" name="Tel-home" placeholder="xx-xxx-xxxx" maxlength="10" value="<?php echo $result['Tel-home'] ?>">
                </div>

            </div><br>



            <?php
            $id = $_GET['a_id'];
            $sql = "SELECT * FROM addr_work WHERE a_id = '$id'";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            ?>
            <?php
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            ?>
            <br>
            <div class="container" style="color: blue;">
                <h3>ที่อยู่สถานที่ทำงาน</h3>
            </div><br>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="Work-No">บ้านเลขที่</label>
                    <input type="text" class="form-control" id="Work-No" name="Work-No" value="<?php echo $result['Work-No'] ?>">
                </div>

                <div class="form-group col-md-4">
                    <label for="Work-Moo">หมู่บ้าน</label>
                    <input type="text" class="form-control" id="Moo-work" name="Moo-work" value="<?php echo $result['Moo-work'] ?>">
                </div>
                <div class="form-group col-md-4">
                    <label for="Work-road">ถนน</label>
                    <input type="text" class="form-control" id="road-work" name="road-work" value="<?php echo $result['road-work'] ?>">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="Work-Province">จังหวัด</label>
                    <input type="text" class="form-control" id="Province-work" name="Province-work" value="<?php echo $result['Province-work'] ?>">
                </div>

                <div class="form-group col-md-4">
                    <label for="Work-Area">เขต/อำเภอ</label>
                    <input type="text" class="form-control" id="Area-work" name="Area-work" value="<?php echo $result['Area-work'] ?>">
                </div>
                <div class="form-group col-md-4">
                    <label for="Work-Sub-area">แขวง/ตำบล</label>
                    <input type="text" class="form-control" id="Sub-area-work" name="Sub-area-work" value="<?php echo $result['Sub-area-work'] ?>">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="Work-Postal Code">รหัสไปรษณีย์</label>
                    <input type="text" class="form-control" id="Postal-Code-work" name="Postal-Code-work" maxlength="5" value="<?php echo $result['Postal-Code-work'] ?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="Work-Tel">เบอร์โทรศัพท์(ถ้ามี)</label>
                    <input type="text" class="form-control" id="Tel-work" name="Tel-work" placeholder="xx-xxx-xxxx" maxlength="10" value="<?php echo $result['Tel-work'] ?>">
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

            <div class="container" style="color: blue;">
                <h3>ข้อมูลศิษย์เก่า</h3>
            </div><br>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="attend">ปีที่เข้ารับการศึกษา (พ.ศ.)</label>
                    <!--  <input type="text" class="form-control" id="attend" name="attend" maxlength="4"> -->
                    <select id="attend" class="form-control" name="attend">
                        <option selected><?php echo $result['attend'] ?></option>
                        <option value="2553">2553</option>
                        <option value="2554">2554</option>
                        <option value="2555">2555</option>
                        <option value="2556">2556</option>
                        <option value="2557">2567</option>
                        <option value="2558">2558</option>
                        <option value="2559">2559</option>

                    </select>
                </div>

                <div class="form-group col-md-6">
                    <label for="finish">ปีที่จบการศึกษา (พ.ศ.)</label>
                    <!--    <input type="text" class="form-control" id="finish"name="finish"maxlength="4"> -->
                    <select id="finish" class="form-control" name="finish">
                        <option selected><?php echo $result['finish'] ?></option>
                        <option value="2556">2556</option>
                        <option value="2557">2557</option>
                        <option value="2558">2558</option>
                        <option value="2559">2559</option>
                        <option value="2560">2560</option>
                        <option value="2561">2561</option>
                        <option value="2562">2562</option>

                    </select>
                </div>
            </div>

<input type="hidden" value="<?php echo $result['a_id'] ?>" name="a_id">
            <div class="container">
                <div align="right">
                   <button type="submit" class="btn btn-primary">ยืนยัน</button>
                </div>
            </div>
        </form>
    </div>



    <br><br><br> <br><br><br><br><br><br>



</body>

</html>