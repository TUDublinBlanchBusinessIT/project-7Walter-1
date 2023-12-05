<?php

$fn = $_POST['fname'];
$sn = $_POST['sname'];
$age = $_POST['age'];
$rk = $_POST['rking'];

//avoid word "rank"

include("dbcon.php");

$sql = "Insert into army(firstname,surname,age,ranking)
values ('$fn','$sn','$age','$rk')";

mysqli_query($conn,$sql);
mysqli_close($conn);

echo "Soldier Enlisted";
?>