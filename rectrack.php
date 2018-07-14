<?php
$ids=$_POST['ids'];
mysql_connect("localhost", "root", "") or die(mysql_error()); 
mysql_select_db("patientinfo") or die(mysql_error()); 
$Query1="select total from bills where id=$ids";
$dbresult=mysql_query($Query1);
while($row = mysql_fetch_row($dbresult))
	{
echo "<br>";
echo  "*********************************************************************************************************************";
echo "<br>";
echo "Total = Rs.".$row[0];
echo "<br>";
echo  "*********************************************************************************************************************";
}
