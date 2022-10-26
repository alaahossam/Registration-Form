<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_db";



$email = $_POST["email"];
$name = $_POST["name"];
$pass = md5($_POST["pass"]); #password encryption


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql2 = "SELECT  *  FROM user WHERE email = '$email'  ";
$result = $conn->query($sql2);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
	  echo "Email already exists". "<br>";
      echo  " - Email : " . $row["email"].  "<br>";
  }
}
 else {
	 $sql = "INSERT INTO user (email , name , password )
 VALUES ('$email' , '$name' , '$pass' )";

	 if ($conn->query($sql) === TRUE) {
	echo "Successful Registration" . "<br>";
	echo  " - Welcome : " . " '$name'  ".  "<br>";
}
else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

 }


$conn->close();

?>