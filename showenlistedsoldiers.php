<?php

include("dbcon.php");

$sql = "select * from army";
$result = mysqli_query($conn,$sql);
echo "<TABLE border='1'>";
while($row = mysqli_fetch_assoc($result)) {
    $fn = $row['firstname'];

    echo "<TR><TD>$fn</TD></TR>";
}
echo "</TABLE>";

mysqli_close($conn);
?>