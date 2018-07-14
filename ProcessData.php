<?php
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$time = $_POST['time'];
$date = $_POST['date'];
$means = $_POST['means'];
$selected = $_POST['selected'];
$doc = $_POST['doc'];

mysql_connect("localhost", "root", "") or die(mysql_error()); 
mysql_select_db("patientinfo") or die(mysql_error()); 


$Query= "insert into data values ('$name','$email','$password' ,'$gender','$address','$time','$date','$means','$selected','$doc')";

//mysql_query($Query);

$result = mysql_query($Query);

if ($result>0)
	{
echo "<br>Record added";
	}
else
	{
echo "<br>Some problem";
	}


?>