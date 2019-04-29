

<?php

$conn = mysqli_connect("localhost"," ","","hotel");
// if(mysqli_connect_errno()){
// 	die("connection failed : ".mysqli_connect_error());
// }

if(!$conn){
	echo "not connected";
}



//$mysqli = new mysqli("localhost", "root", "", "hotel");

// /* check connection */
// if (mysqli_connect_errno()) {
// printf("Connect failed: %s\n", mysqli_connect_error());
// exit();

?>