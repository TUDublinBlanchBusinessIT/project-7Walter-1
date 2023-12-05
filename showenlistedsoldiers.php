<?php

include("dbcon.php");

$sql = "select * from army";
$result = mysqli_query($conn,$sql);
echo "<TABLE border='1'>";
while($row = mysqli_fetch_assoc($result)) {
    $fn = $row['firstname'];
    $sn = $row['surname'];
    $age = $row['age'];
    $rk = $row['ranking'];
    echo "<TR><TD>$fn</TD><TD>$sn</TD><TD>$age</TD><TD>$rk</TD></TR>";
}
echo "</TABLE>";

mysqli_close($conn);
?>