<?php
require "init.php";
$user_name = "narensingh";
$user_pass = "1234";

$sql_query = "select name from user_info where user_name like '$user_name' and user_pass like '$user_pass';";

$result = mysqli_query($conn,$sql_query);
if(mysqli_num_rows($result)>0)
{
	$row = mysqli_fetch_assoc($result);
	$name = $row["name"];
	echo "<h3>HELLO Welcome " .$name. "</h3>";
}
else
{
	echo "No Info Avialable";
}

?>