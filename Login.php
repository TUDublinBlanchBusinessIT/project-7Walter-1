<?php

$usr = $_POST['username'];
$pwd = $_POST['passwd'];

require('dbcon.php');

$conn = mysqli_connect($servername, $username, $password, $dbname, $port);

$sql = "select pwd from registeredUser where userName='$usr'";

$result = mysqli_query($conn,$sql);

while($row = $result->fetch_assoc())
{
    $dBpwd = $row['pwd'];
}
if ($dBpwd==$pwd)
{
    echo "password correct";
}
else
{
    echo "password is incorrect";
}
?>