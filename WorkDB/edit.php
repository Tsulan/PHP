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
  $sql = "SELECT * FROM users WHERE loghin='".$loghin."'";
    $result = $conn->query($sql);
 if ($result->num_rows > 0) {
 // while($row = $result->fetch_assoc()) 
  $row = $result->fetch_assoc();
  // output data of each row
  echo '
  <div class="container">
  <h2>Registration form</h2>
    <form class="form-inline" action="update.php" method="POST">
    <input type="text"  hidden id="UserId" value='.$row["UserId"].' name="UserId">
    
    <label for="login" class="mb-2 mr-sm-2">Login:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="login" value='.$row["loghin"].' name="login">
    <label for="pwd2" class="mb-2 mr-sm-2">Password:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="pwd2" value='.$row["password"].' name="password">
     <label for="email2" class="mb-2 mr-sm-2">Email:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="email2" value='.$row["email"].' name="email">
    
    <button type="submit" class="btn btn-primary mb-2">UPDATE</button>
  </form>
</div>';
  
} else {
  echo "0 results";

}
  ///---------------
  }
  
$conn->close();
?>