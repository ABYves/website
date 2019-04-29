<?php
include_once 'dbconnect.php';
if($_SERVER['REQUEST_METHOD']=='POST')
{
$f=$_POST["image"];
// $g=$_POST["category"];
$l=$_POST["name"];
$q=$_POST["price"];
$qu=$_POST["seller"];
$s=$_POST["image_text"];	


}

$insert="insert into user(image,product_name,price,seller_name,description)
values('$f','$l','$q','$qu','$s')";
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
