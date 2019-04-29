<?php
include_once 'dbconnect.php';
if($_SERVER['REQUEST_METHOD']=='POST')
{
$f=$_POST["uname"];
$l=$_POST["uphone"];
$q=$_POST["uemail"];
$qu=$_POST["umessage"];


}

$insert="insert into user(email,	phone,	nationality,	nofpeople,	nroom)
values('$f', '$l','$q','$qu')";
if (mysqli_query($mysqli , $insert)) {
echo "New record created successfully";
if($insert=true){
echo "Data are inserted well";
}
}

else {
echo "Error: " . $insert . "<br>" . mysqli_error($mysqli );
}
mysqli_close($mysqli );


?>
