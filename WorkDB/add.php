<?php
$servername = "localhost";
$username = "root";
$password = "";
$DBname="MyUsers";

// Create connection
$conn = new mysqli($servername, $username, $password, $DBname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else
{
	$loghin=$_POST['login'];
	$password=$_POST['password'];
	$email=$_POST['email'];

	$sql = "INSERT INTO users 
            VALUES (NULL,'".$loghin. "', '".$password. "', '".$email. "')";

	if ($conn->query($sql) === TRUE) {
	  echo "New record created successfully<br>";
	  echo "<a  href='index.html'>На главную</a>";
	} else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}
}

$conn->close();
?>