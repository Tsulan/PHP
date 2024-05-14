<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

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
	$sql = "SELECT * FROM users";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
	echo "<table class='table table-striped'>";
	echo "<tr><th> UserId </th><th> Login  </th><th> Password </th><th>  Email </th></tr>";
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["UserId"]. "</td><td>" . $row["loghin"].  " </td><td> " . $row["password"]." </td><td>".$row["email"]. "</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
}
echo "<a  href='index.html'>На главную</a>";
?>

</body>
</html>
