<?php
$x=$_POST['fname'];
$y=$_POST['lname'];
$z=$_POST['email'];
$a=$_POST['contactno'];
$c=$_POST['password'];
$d=$_POST['password_reenter'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hotel_management";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
$sql = "INSERT INTO user_data (first_name, last_name, email, user_contact, user_password)
 VALUES ('$x','$y','$z','$a','$c')";
if ($conn->query($sql) === TRUE){
	echo "\nNew record created successfully";
  header("Location: userlogin.php");
} else{
	echo "ERROR: " .$sql. "<br>" . $conn->error;
}
$conn->close();

?>
