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
{$loghin=$_POST['login'];
  $password=$_POST['password'];
  $email=$_POST['email'];

  $sql1 = "UPDATE  users SET loghin='".$loghin."',password='".$password."',email='".$email."' WHERE UserId='".$_POST["UserId"]."'";

  if ($conn->query($sql1) === TRUE) {
    echo "Record UPDATEd successfully<br>";
    echo "<a  href='index.html'>На главную</a>";
  } else {
    echo "Error updating record: " . $sql1 . "<br>" . $conn->error;
  }
}
