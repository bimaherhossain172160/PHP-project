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

    if (empty($_POST["firstname"])) {
    	echo "Enter firstname<br/>";    }

   	elseif (empty($_POST["lastname"])) {
		  echo "Enter lastname<br/>";   	}

    elseif (empty($_POST["email"])) {
		  echo "Enter email<br/>";			}
    
    elseif (empty($_POST["password"])) {
		  echo "Enter password<br/>";	}
    
    elseif (empty($_POST["rpassword"])) {
		  echo "Retype password<br/>";	}

    elseif ( $_POST["password"] != $_POST["rpassword"]  ) {
		  echo "Password didn't match. Enter password again<br/>";	}

    else {
    	    $sql = "INSERT INTO user(U_firstname,U_lastname,U_Email,U_Password,U_image) 
    	    VALUES ('$_POST[firstname]','$_POST[lastname]','$_POST[email]','$_POST[password]', '$_POST[uimage]')";
   		 	$conn->exec($sql);
   		 	echo "Connected successfully<br/>"; 
           
   		}
?>


<!DOCTYPE html>
<html>
<head>
  <title>Sign UP!!</title>
</head>
<body>
  <h3>Add a little bit more about you!</h3>

  <form>
    
    I want to be called as: <input type="text" name="username" placeholder="Username"><br><br>
    
    I graduated from: <input type="text" name="inst" placeholder="Institution"><br>

    <p>
       I am
       <select name="formGender">
       <option value="">Select...</option>
       <option value="M">Male</option>
       <option value="F">Female</option>
       </select>
    </p>



      I love reading: <br />
      <input type="checkbox" name="formgenre[1]" value="A" />Action and adventure<br/>
      <input type="checkbox" name="formgenre[2]" value="B" />Autobiography<br/>
      <input type="checkbox" name="formgenre[3]" value="C" />Biography<br/>
      <input type="checkbox" name="formgenre[4]" value="D" />Comic book<br/>
      <input type="checkbox" name="formgenre[5]" value="E" />Drama<br>
      <input type="checkbox" name="formgenre[6]" value="E" />History<br>
      <input type="checkbox" name="formgenre[7]" value="E" />Textbook<br>
      <input type="checkbox" name="formgenre[8]" value="E" />Thriller<br>
      <input type="checkbox" name="formgenre[9]" value="E" />Travel<br>
      <input type="checkbox" name="formgenre[10]" value="E" />Poetry<br><br>


    My favorite authors are: <br/>
      <input type="checkbox" name="formAuthor[1]" value="A" />Humayun Ahmed<br/>
      <input type="checkbox" name="formAuthor[2]" value="B" />Jafor Ikbal<br/>
      <input type="checkbox" name="formAuthor[3]" value="C" />Anisul Haque<br/>
      <input type="checkbox" name="formAuthor[4]" value="D" />Comic book<br/>

    Add a book to share and get started <br><br>
    
    Title: <input type="text" name="book" placeholder="Book name">  <br><br>
    Author:   
          <select name="formGender">  
          <option value="">Select...</option>
          <option value="M">Humayun Ahmed</option>
          <option value="F">Anisul Haque</option>
          <option value="F">Jafor Ikbal</option>
          <option value="F">Other</option>
       </select>


    Edition: <input type="Number" name="edition" min="1">
    Published: <input type="Number" name="published" min="1500" max="2019">

    <h3>And FINALLY a beautiful you :)</h3>
    Image: <input type="File" name="uimage"><br><br>

    <input type="submit" name="submit" value="Done and dusted">


  </form>

</body>
</html>




