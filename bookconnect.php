<?php
include_once 'dbconnect1.php';
if($_SERVER['REQUEST_METHOD']=='POST')
{
$f=$_POST["firstname"];
$l=$_POST["lastname"];
$q=$_POST["email"];
$qu=$_POST["number"];
$we=$_POST["nationality"]
$s=$_POST["pnumber"];
$si=$_POST["rnumber"];		


}

$insert1="insert into book( fname,email,phone,nationality,nofpeople,nroom
)
values('$f', '$l','$q','$qu','$we','$s',$si')";
if (mysqli_query($mysqli , $insert1)) {
echo "New record created successfully";
if($insert1==true){
echo "Data are inserted well";
}
}

else {
echo "Error: " . $insert1 . "<br>" . mysqli_error($mysqli );
}
mysqli_close($mysqli );


?>
