<?php

$fn = $_POST['fname'];
$sn = $_POST['sname'];

include("dbcon.php");

$sql = "Insert into army(firstname,surname)
values ('$fn','$sn')";

mysqli_query($conn,$sql);
mysqli_close($conn);

echo "Soldier Enlisted";
?>