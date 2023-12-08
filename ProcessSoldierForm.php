<?php

session_start();

$fn = $_POST['fname'];
$sn = $_POST['sname'];
$yis = $_POST['yis'];
$rk = $_POST['rking'];
$gr = $_POST['gder'];
$dd = $_POST['discharged'];

//avoid word "rank" conflict with preset SQL commands

include("dbcon.php");

$sql = "Insert into army(firstname,surname,yearsinservice,ranking,gender,discharged)
values ('$fn','$sn','$yis','$rk','$gr','$dd')";

mysqli_query($conn,$sql);
mysqli_close($conn);

echo "Soldier Registered";
?>