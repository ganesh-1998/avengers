<?php
$servername = "172.17.0.3";
$username = "root";
$password = "123";
$dbname = "mydb";

 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

 

$sql = "SELECT * FROM biryani";
$result = $conn->query($sql);

 

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Biryani_name: " . $row["biryaniname"]. "     Hotel_name: " . $row["hotelname"]. "     Price: " . $row["price"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>

