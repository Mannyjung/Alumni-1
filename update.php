<?php 
require('connect.php');

$id = $_POST['a_id'];
$title = $_POST['title'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$idcard =  $_POST['idcard'];
$sex = $_POST['sex'];
$date = $_POST['date'];
$job = $_POST['job'];
$tel = $_POST['tel'];
$face = $_POST['face'];
$email = $_POST['email'];
$password = $_POST['password'];

$image = $_FILES['image']['name'];
move_uploaded_file($_FILES['image']['tmp_name'], 'upload/'.$image);


$sql = "UPDATE `info` SET `title`='$title',`fname`='$fname',`lname`='$lname',`idcard`='$idcard',`sex`='$sex',
`date`='$date',`job`='$job',`tel`='$tel',`face`='$face',`email`='$email',`password`='$password',`image`='$image' WHERE a_id = '$id'";
    $stmt = $conn->query($sql);

$House_No = $_POST['House-No'];
$Moo_home = $_POST['Moo-home'];
$road_home = $_POST['road-home'];
$Province_home = $_POST['Province-home'];
$Area_home = $_POST['Area-home'];
$Sub_area_home = $_POST['Sub-area-home'];
$Postal_Code_home = $_POST['Postal-Code-home'];
$Tel_home = $_POST['Tel-home'];

$sql1 = "UPDATE `addr_home` SET `House-No`='$House_No',`Moo-home`='$Moo_home',`road-home`='$road_home',`Province-home`='$Province_home',
`Area-home`='$Area_home',`Sub-area-home`='$Sub_area_home',`Postal-Code-home`='$Postal_Code_home',`Tel-home`='$Tel_home' WHERE `a_id`='$id'";
    $stmt1 = $conn->query($sql1);

    $Work_No = $_POST['Work-No'];
    $Moo_work = $_POST['Moo-work'];
    $road_work = $_POST['road-work'];
    $Province_work = $_POST['Province-work'];
    $Area_work = $_POST['Area-work'];
    $Sub_area_work = $_POST['Sub-area-work'];
    $Postal_Code_work = $_POST['Postal-Code-work'];
    $Tel_work = $_POST['Tel-work'];

$sql2 = "UPDATE `addr_work` SET `Work-No`='$Work_No',`Moo-work`='$Moo_work',`road-work`='$road_work',`Province-work`='$Province_work',
`Area-work`='$Area_work',`Sub-area-work`='$Sub_area_work',`Postal-Code-work`='$Postal_Code_work',`Tel-work`='$Tel_work' WHERE `a_id`='$id'";
    $stmt2 = $conn->query($sql2);

    $attend = $_POST['attend'];
    $finish = $_POST['finish'];
    $sql3 = "UPDATE `year` SET `attend`='$attend',`finish`='$finish' WHERE `a_id`='$id'";
    $stmt3 = $conn->query($sql3);

    if($stmt && $stmt1 && $stmt2 && $stmt3){
        echo "<script>alert('แก้ไขเสร็จสิ้น');</script>";
        header("refresh:0;url=info.php");
        exit(0);
    }
    else{
        echo "fail";
    }
?>