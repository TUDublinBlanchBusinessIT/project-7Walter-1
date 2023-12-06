<?php

$fn = $_POST['fname'];
$sn = $_POST['sname'];
$yis = $_POST['yis'];
$rk = $_POST['rking'];
$gr = $_POST['gder'];

//avoid word "rank" conflict with SQL commands

include("dbcon.php");

$sql = "Insert into army(firstname,surname,yearsinservice,ranking,gender)
values ('$fn','$sn','$yis','$rk','$gr')";

mysqli_query($conn,$sql);
mysqli_close($conn);

echo "Soldier Enlisted";
?>