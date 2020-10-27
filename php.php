<?php
isset($_POST['submit']);
    require('connect.php');
    $sql ="INSERT INTO info (a_id,title,fname,lname,sex,date,job,tel,face,email,password,photo)
    VALUES (:a_id, :title, :fname, :lname, :sex,:date, :job,:tel, :face,:email,:password,:photo)";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':a_id', $_POST['a_id']);
  	$stmt->bindParam(':title', $_POST['title']);
	  $stmt->bindParam(':fname', $_POST['fname']);
  	$stmt->bindParam(':lname', $_POST['lname']);
    $stmt->bindParam(':sex', $_POST['sex']);
    $stmt->bindParam(':date', $_POST['date']);
    $stmt->bindParam(':job', $_POST['job']);
    $stmt->bindParam(':tel', $_POST['tel']);
    $stmt->bindParam(':face', $_POST['face']);
    $stmt->bindParam(':email', $_POST['email']);
    $stmt->bindParam(':password', $_POST['password']);
    $stmt->bindParam(':photo', $_POST['photo']);

	if( $stmt->execute()):
    $message = 'Successfully add new customer';
     else:
        $message = 'Fail to add new customer';
	endif;
    $conn = null;
?>
<?php
isset($_POST['submit']);

    $sql1 ="INSERT INTO addr_home (a_id,House-No,Moo-home,road-home,Province-home,Area-home,Sub-area-home,Postal-Code-home,Tel-home)
    VALUES (:a_id, :House-No, :Moo-home, :road-home, :Province-home,:Area-home, :Sub-area-home,:Postal-Code-home, :Tel-home)";

    $stmt1 = $conn->prepare($sq1l);
    $stmt1->bindParam(':a_id', $_POST['a_id']);
  	$stmt1->bindParam(':House-No', $_POST['House-No']);
	  $stmt1->bindParam(':Moo-home', $_POST['Moo-home']);
  	$stmt1->bindParam(':lname', $_POST['lname']);
    $stmt1->bindParam(':Province-home', $_POST['Province-home']);
    $stmt1->bindParam(':Area-home', $_POST['Area-home']);
    $stmt1->bindParam(':Sub-area-home', $_POST['Sub-area-home']);
    $stmt1->bindParam(':Postal-Code-home', $_POST['Postal-Code-home']);
    $stmt1->bindParam(':Tel-home', $_POST['Tel-home']);

	if( $stmt1->execute()):
    $message = 'Successfully add new customer';
     else:
        $message = 'Fail to add new customer';
	endif;
    $conn = null;

isset($_POST['submit']);
    $sql2 ="INSERT INTO addr_work (a_id,Work-No,Moo-work,road-work,Province-work,Area-work,Sub-area-work,Postal-Code-work,Tel-work)
    VALUES (:a_id, :Work-No, :Moo-work, :road-work, :Province-work,:Area-work, :Sub-area-work,:Postal-Code-work, :Tel-work)";

    $stmt2 = $conn->prepare($sql2);
    $stmt2->bindParam(':a_id', $_POST['a_id']);
  	$stmt2->bindParam(':Work-No', $_POST['Work-No']);
	  $stmt2->bindParam(':Moo-work', $_POST['Moo-work']);
  	$stmt2->bindParam(':lname', $_POST['lname']);
    $stmt2->bindParam(':Province-work', $_POST['Province-work']);
    $stmt2->bindParam(':Area-work', $_POST['Area-work']);
    $stmt2->bindParam(':Sub-area-work', $_POST['Sub-area-work']);
    $stmt2->bindParam(':Postal-Code-work', $_POST['Postal-Code-work']);
    $stmt2->bindParam(':Tel-work', $_POST['Tel-work']);

	if( $stmt2->execute()):
    $message = 'Successfully add new customer';
     else:
        $message = 'Fail to add new customer';
	endif;
    $conn = null;


isset($_POST['submit']);
    require('connect.php');
    $sql3 ="INSERT INTO year (a_id,attend,finish)
    VALUES (:a_id,:attend,:finish )";

    $stmt3 = $conn->prepare($sql3);
    $stmt3->bindParam(':a_id', $_POST['a_id']);
  	$stmt3->bindParam(':attend', $_POST['attend']);
	  $stmt3->bindParam(':finish', $_POST['finish']);


	if( $stmt3->execute()):
    $message = 'Successfully add new customer';
     else:
        $message = 'Fail to add new customer';
	endif;
    $conn = null;
?>