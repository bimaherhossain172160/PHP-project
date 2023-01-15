<?php

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

#php codes

    if (empty("firstname")) {
        echo "Enter firstname<br/>";    }

    elseif (empty("lastname")) {
          echo "Enter lastname<br/>";       }

    elseif (empty("email")) {
          echo "Enter email<br/>";          }
    
    elseif (empty("password")) {
          echo "Enter password<br/>";   }
    
    elseif (empty("rpassword")) {
          echo "Retype password<br/>";  }

    elseif ( '$password' != '$rpassword'  ) {
          echo "Password didn't match. Enter password again<br/>";  }

    else {
            $sql = "INSERT INTO user(U_firstname,U_lastname,U_Email,U_Password,U_image) 
            VALUES (firstname,lastname,email,password,uimage)";
            $conn->exec($sql);
            echo "Connected successfully<br/>";    
        }


?>

<!DOCTYPE html>
<html>
<head>
	<title>BookMesh</title>
</head>
<body>
	<h1>Welcome To BookMesh</h1>

	<h3>SignUp</h3>
	<form>

		
		First Name: <input type="text" name="firstname" placeholder="First Name">
		Last Name: <input type="text" name="lastname" placeholder="Last Name"><br><br>
		Email: <input type="text" name="email" placeholder="Email"><br><br>
		Password: <input type="password" name="password" placeholder="Password"><br><br>
		Retype Password: <input type="password" name="rpassword" placeholder="Retype password"><br><br>
		Image: <input type="File" name="uimage"><br><br>
		<input type="submit" name="submit" value="Sign Up">
			
	</form>

	<br><br><br>

	<h3>Login</h3>
	<form>

		
		Email : <input type="text" name="lmail" placeholder="Email"><br><br>
		Password: <input type="password" name="lpass" placeholder="Password"><br><br>

		<input type="submit" name="lsubmit" value="Login">

	</form>
	
</body>
</html>