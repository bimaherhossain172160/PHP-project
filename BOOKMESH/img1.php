<!DOCTYPE html>
<html>
<head>
	<title>Ayna Ghor</title>
</head>
<body>


	<h1>Book Information</h1>

	<?php
	#connection.................................................
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "book sharing system";

	try {	
    	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    	$stmt1 = $conn->prepare(" SELECT Title,Author, Edition FROM books WHERE Title = 'AynaGhor' ");
    	$stmt1->execute();
    	$users = $stmt1->fetchAll();

    	foreach ($users as $user) {

    		echo "<img src = img1.jpg >";
    		echo $user['Title'].'<br/><br/>';
    		echo $user['Author'].'<br/><br/>';
    		Edition : echo $user['Edition'].'<br/><br/>';
 
    	}

   		}
	catch(PDOException $e)
    	{
    	echo "Connection failed: " . $e->getMessage();
    	}

	?>


</body>
</html>