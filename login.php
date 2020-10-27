<?php  
 session_start();  
 $host = "localhost";  
 $username = "root";  
 $password = "";  
 $database = "alumni-1";  
 $message = "";  
 try
 {   $connect = new PDO("mysql:host=$host; dbname=$database", $username, $password);  
      $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
      if(isset($_POST["login"]))  
      {  
           if(empty($_POST["email"]) || empty($_POST["password"]))  
           {  
                $message = '<script>alert("กรุณากรอกข้อมูลให้ถูกต้อง")</script>';  
           }  
           else{  
                $query = "SELECT * FROM info WHERE email = :email AND password = :password";  
                $statement = $connect->prepare($query);  
                $statement->execute(  
                     array(  
                          'email'     =>     $_POST["email"],  
                          'password'     =>     $_POST["password"]

                     )  
                );  
                $count = $statement->rowCount();  
                if($count > 0)  
                {  
                     $_SESSION["email"] = $_POST["email"];  
               

                        echo '<script>
                     alert("ยินดีต้อนรับ")
                     </script>';
                     header("location:indexaf.php");  
                }  
                else  
                {  
                     $message = '<script>
                     alert("กรุณากรอกใหม่ให้ถูกต้อง")
                     </script>';  
                }  
           }  
      }  
 }  
 catch(PDOException $error)  
 {  
      $message = $error->getMessage();  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
<head>   
<!--Google font-->
<link href="https://fonts.googleapis.com/css?family=Athiti|Bai+Jamjuree|Chakra+Petch|Charm|Charmonman|Chonburi|Fahkwang|Itim|K2D|Kanit|KoHo|Kodchasan|Krub|Maitree|Mali|Mitr|Niramit|Pattaya|Pridi|Prompt|Sarabun|Sriracha|Srisakdi|Taviraj|Thasadith|Trirong&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Merriweather|Montserrat|Muli|Noto+Sans|PT+Sans|Poppins|Raleway|Roboto+Mono|Roboto+Slab|Ubuntu&display=swap" rel="stylesheet">
<!--Google font-->
<!--css-->
<link rel="stylesheet" type="text/css" href="styles.css">
<!--css-->
<!--Bootstrap-->
<?php require("bs.html") ?>
<!--end-->
      </head>  
      <body>  
             <!-- header -->
 <div align="center">
 <img src="photo/header1920px.png" width="100%">
 </div>
  <!-- header -->

  <!--menu-->     
      <?php require("nav.html") ?>
  <!--menu-->
           <br />  
           <div class="container" style="width:500px;">  
                <?php  
                if(isset($message))  
                {  
                     echo '<label class="text-danger">'.$message.'</label>';  
                }  
                ?>  
                <br/><br/><h1 class="form-group" align="center"><u>เข้าสู่ระบบ</u></h1><br/><br/>
                <form class="form-group" method="post">  
                     <label>ชื่อผู้ใช้</label>  
                     <input type="email" name="email" class="form-control" placeholder="อีเมลล์"/>  
                     <br />  
                     <label>รหัสผ่านผู้ใช้</label>  
                     <input type="password" name="password" class="form-control"placeholder="รหัสผ่านผู้ใช้" />  
                     <br /> 

                     <div class="form-group" align="right">
                     <input type="submit" name="login" class="btn btn-primary" value="ตกลง" />  
                    </div>
                    
                </form>  
           </div>  
           <br><br/><br/><br/><br/>
      </body>  
 </html>  

