<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_db";


$email = $_POST["email"];
$pass = $_POST["pass"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	echo "failed";
  die("Connection failed: " . $conn->connect_error);
}

   $sql = "SELECT  *  FROM user WHERE email = '$email' AND password = '$pass'";
   $result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
	  echo "Login progress is done". "<br>";
  echo  " - Welcome : "  . $row["email"] .  "<br>";
  }
} else {
	echo "e-mail or Password is incorrect" . "<br>";
    echo "0 results";
}
$conn->close();

?>
