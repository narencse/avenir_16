<?php
require "init.php";
$name = $_POST["user"];
$user_name = $_POST["user_name"];
$user_pass = $_POST["user_pass"];

$sql_query = "insert into user_info values('$name','$user_name','$user_pass');";

if(mysqli_query($conn,$sql_query))
{
//	echo "Insertion Success";
}
else
{
//	echo "Insertion Fail".mysqli_error($conn);
}



?>