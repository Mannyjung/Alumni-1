<?php 
require('connect.php');

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

$sqlse = "SELECT * FROM `info` WHERE `idcard`";
$stmtse = $conn->query($sqlse);
$result = $stmtse->fetch( PDO::FETCH_ASSOC );
if($result['idcard']===$idcard){
    echo "<script>alert('ไม่สามารถลงทะเบียนซ้ำได้');</script>";
        header("refresh:0;url=regis.php");
        exit(0);
    

}
else{

$sql = "INSERT INTO `info`(`a_id`, `title`, `fname`, `lname`, `idcard`, `sex`, `date`, `job`, `tel`, `face`, `email`, `password`, `image`) 
VALUES (null,'$title','$fname','$lname','$idcard','$sex','$date','$job','$tel','$face','$email','$password','$image')";
    $stmt = $conn->query($sql);

$House_No = $_POST['House-No'];
$Moo_home = $_POST['Moo-home'];
$road_home = $_POST['road-home'];
$Province_home = $_POST['Province-home'];
$Area_home = $_POST['Area-home'];
$Sub_area_home = $_POST['Sub-area-home'];
$Postal_Code_home = $_POST['Postal-Code-home'];
$Tel_home = $_POST['Tel-home'];

$sql1 = "INSERT INTO `addr_home`(`a_id`, `House-No`, `Moo-home`, `road-home`, `Province-home`, `Area-home`, `Sub-area-home`, `Postal-Code-home`, `Tel-home`) 
VALUES (null,'$House_No','$Moo_home','$road_home','$Province_home','$Area_home','$Sub_area_home','$Postal_Code_home','$Tel_home')";
    $stmt1 = $conn->query($sql1);

    $Work_No = $_POST['Work-No'];
    $Moo_work = $_POST['Moo-work'];
    $road_work = $_POST['road-work'];
    $Province_work = $_POST['Province-work'];
    $Area_work = $_POST['Area-work'];
    $Sub_area_work = $_POST['Sub-area-work'];
    $Postal_Code_work = $_POST['Postal-Code-work'];
    $Tel_work = $_POST['Tel-work'];

$sql2 = "INSERT INTO `addr_work`(`a_id`,`Work-No`, `Moo-work`, `road-work`, `Province-work`, `Area-work`, `Sub-area-work`, `Postal-Code-work`, `Tel-work`) 
VALUES (null,'$Work_No','$Moo_work','$road_work','$Province_work','$Area_work','$Sub_area_work','$Postal_Code_work','$Tel_work')";
    $stmt2 = $conn->query($sql2);

    $attend = $_POST['attend'];
    $finish = $_POST['finish'];
    $sql3 = "INSERT INTO `year`(`a_id`, `attend`, `finish`) VALUES (null,'$attend','$finish')";
    $stmt3 = $conn->query($sql3);

    if($stmt && $stmt1 && $stmt2 && $stmt3){
        echo "<script>alert('เสร็จสิ้นการลงทะเบียน');</script>";
        header("refresh:0;url=regis.php");
        exit(0);
    }
    else{
        echo "fail";
    }
}
?>