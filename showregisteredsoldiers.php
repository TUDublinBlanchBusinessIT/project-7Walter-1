<?php

include("dbcon.php");

$sql = "select * from army";
$result = mysqli_query($conn,$sql);
echo "<TABLE border='1'>";
while($row = mysqli_fetch_assoc($result)) {
    $fn = $row['firstname'];
    $sn = $row['surname'];
    $yis = $row['yearsinservice'];
    $rk = $row['ranking'];
    $gr = $row['gender'];
    $dd = $row['discharged'];

    echo "<TR><TD>$fn</TD><TD>$sn</TD><TD>$yis</TD><TD>$rk</TD><TD>$gr</TD><TD>$dd</TD</TR>";
}
echo "</TABLE>";

mysqli_close($conn);
?>