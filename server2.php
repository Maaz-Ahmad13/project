<?php

$hn="localhost";
$un="root";
$pass="";
$db="project";

$connection=mysqli_connect($hn,$un,$pass,$db);
if($connection)
    echo"<br>";
else
    echo"Not Established<br>";

?>

