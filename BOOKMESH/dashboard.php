<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
</head>
<body>	

	<?php
#connection.................................................
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "book sharing system";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   	}
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

#php codes..................................................

    $email = $_POST['lmail'];
    $password = $_POST['lpass'];

    $stmt1 = $conn->prepare(" SELECT U_firstname, U_lastname FROM user WHERE U_email = :email ");
    $stmt2 = $conn->prepare(" SELECT U_firstname, U_lastname FROM user WHERE U_password = :password ");
    $stmt1->execute(array(':email'=> $email));
    $stmt2->execute(array(':password'=> $password));

    $row = $stmt1-> fetch(PDO::FETCH_ASSOC);
    if ($stmt1->rowcount() > 0 ) {	

    	$row = $stmt2-> fetch(PDO::FETCH_ASSOC);
    	if ($stmt2->rowcount() > 0 ) {

    		{

    		 $stmt1 =(" SELECT U_possession FROM user WHERE U_email = :email ");
    		 exec($stmt1);

    		echo "string";

    		}


    	}
    	else{
    		echo "Invalid password";
    	}

    }
    else
    {
    	echo "Invalid Email";
    }

?>

<h4>Borrowed books</h4><br><br>

<a href="img1.php">
  <img src="img1.jpg" style="width:200px;height:200px;border:0;">
</a>

<a href="img2.jpg">
  <img src="img2.jpg" style="width:200px;height:200px;border:0;">
</a>

<br><br><br>
<h4>Shared Books</h4><br><br>

<a href="img3.jpg">
  <img src="img3.jpg" style="width:200px;height:200px;border:0;">
</a>

<a href="img4.jpg">
  <img src="img4.jpg" style="width:200px;height:200px;border:0;">
</a>

<br><br><br>

<h4>Recommended Books</h4><br><br>

<a href="img5.jpg">
  <img src="img5.jpg" style="width:200px;height:200px;border:0;">
</a>

<a href="img6.jpg">
  <img src="img6.jpg" style="width:200px;height:200px;border:0;">
</a>




</body>
</html>



