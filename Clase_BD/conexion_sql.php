 <?php
 
 echo "eba";
$servername = "localhost:5432";
$username = "a00258511";
$password = "p00258511";
$base = "a00258511";


// Create connection
$conn = new mysqli($servername, $username, $password, $base);

// Check connection
 if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}
 echo "Connected successfully";


?> 
