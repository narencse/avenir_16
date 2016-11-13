
<?php
$db_name = "webappdb";
$mysql_user = "root";
$mysql_pass = "";
$server_name = "localhost";

$conn = new mysqli($server_name,$mysql_user,$mysql_pass,$db_name);
if ($conn->connect_error) {
 //   die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";


?>