<?php
$ids=$_POST['email'];
$userpassword = $_POST['password'];
mysql_connect("localhost", "root", "") or die(mysql_error()); 
mysql_select_db("patientinfo") or die(mysql_error()); 
$ids = mysql_real_escape_string($_POST['email']);
 $userpassword = mysql_real_escape_string($_POST['password']);

$query = "SELECT * FROM data WHERE email = '$ids' AND password = '$userpassword'";
    $result = mysql_query($query) or die ("Unable to verify user because " . mysql_error());

$count = mysql_num_rows($result);
    if ($count == 1)

    {

        $_SESSION['loggedIn'] = "true";

        header("Location: welcome.html");

// I also tried the whole URL here, but same result.
 

    }

    else

    {

        $_SESSION['loggedIn'] = "false";
        echo "<p>Login failed, username or password incorrect.</p>";

    }
 


