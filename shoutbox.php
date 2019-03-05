<?php 

require "database.php";


if(isset($_POST['name']) && isset($_POST['shout']) ){

$name=mysqli_real_escape_string($conn,$_POST['name']);
$shout=	mysqli_real_escape_string($conn,$_POST['shout']);
$date=	mysqli_real_escape_string($conn,$_POST['date']);

date_default_timezone_set("Asia/Dhaka");
$date=date("d M Y h:i:sa");

$query="INSERT INTO shouts(name,shout,date) VALUES('$name','$shout','$date')  ";

$execute=mysqli_query($conn,$query);

if(!$execute){

echo "Error";

}else{

echo "<li class='list-group-item'>".$name.": ".$shout."[" .$date."]</li>";

}



}



 ?>