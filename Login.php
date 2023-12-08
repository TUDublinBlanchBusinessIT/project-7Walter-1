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
        //if password is correct, user will be brought to the next page
        session_start();
        $_Session['userName'] = $usr;
        header("Location: MilitaryService.html");
}
else
{
        //if password is incorrect, user will be brought back to sign in again
        header("Location: LoginTryAgain.html");
}
?>