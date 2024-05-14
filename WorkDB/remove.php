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
	
	$sql = "DELETE FROM users WHERE loghin='".$loghin."'";

	if ($conn->query($sql) === TRUE) {
	  echo "Record deleted successfully<br>";
	  echo "<a  href='index.html'>На главную</a>";
	} else {
	  echo "Error deleting record: " . $sql . "<br>" . $conn->error;
	}
}

$conn->close();
?>