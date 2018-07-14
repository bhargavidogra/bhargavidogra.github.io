<?php
$id=$_POST['id'];
$msm = $_POST['ms'];
$ereport = $_POST['ereport'];
$eps = $_POST['eps'];
$ls = $_POST['ls'];
$df = $_POST['df'];
$da = $_POST['da'];
$as = $_POST['as'];
$hs= $_POST['hs'];
$ward= $_POST['ward'];
$ambul = $_POST['ambul'];
$total = $msm + $ereport + $eps +$ls + $df + $da + $as + $hs + $ward + $ambul ; 

mysql_connect("localhost", "root", "") or die(mysql_error()); 
mysql_select_db("patientinfo") or die(mysql_error()); 


$Query= "insert into bills values ('$msm','$ereport','$eps' ,'$ls','$df','$da','$as','$hs','$ward','$ambul','$total','$id')";
$Query1="select * from bills";
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

$dbresult=mysql_query($Query1);


while($row = mysql_fetch_row($dbresult))
	{
echo "<br>";
echo  "*********************************************************************************************************************";
echo "<br>";
echo "ID = ".$row[11];
echo "<br>";
echo "Medical Scheduling = Rs.".$row[0];
echo "<br>";
echo "Electronic Medical Report = Rs.".$row[1];
echo "<br>";
echo "E-Prescription = Rs.".$row[2];
echo "<br>";
echo "Labortary Services = Rs.".$row[3];
echo "<br>";
echo "Dental Facilities = Rs.".$row[4];
echo "<br>";
echo "Doctors Available = Rs.".$row[5];
echo "<br>";
echo "Allopathy Services = Rs.".$row[6];
echo "<br>";
echo "Homeopathy Services = Rs.".$row[7];
echo "<br>";
echo "Ward Availabilty = Rs.".$row[8];
echo "<br>";
echo "Ambulance Services = Rs.".$row[9];
echo "<br>";
echo "Total = Rs.".$row[10];
echo "<br>";
echo  "*********************************************************************************************************************";
	}


?>