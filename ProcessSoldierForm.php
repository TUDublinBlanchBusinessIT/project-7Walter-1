<?php

date_default_timezone_set('Europe/Dublin');

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $firstname = $_POST['firstname'];
    $surname = $_POST['surname'];
    $yearsinservice = $_POST['yearsinservice'];
    $ranking = $_POST['ranking'];
    $gender = $_POST['gender'];
    $discharged = $_POST['datedischarged'];

    $_SESSION['soldierFN'] = $firstname;
    $_SESSION['soldierSN'] = $surname;
    $_SESSION['soldierYIS'] = $yearsinservice;
    $_SESSION['soldierR'] = $ranking;
    $_SESSION['soldierG'] = $gender;
    $_SESSION['soldierD'] = $discharged;

    include("dbcon.php");

    $sql = "Insert into army(firstname,surname,yearsinservice,ranking,gender,discharged)
    values ('$firstname','$surname','$yearsinservice','$ranking','$gender','$discharged')";

    mysqli_query($conn,$sql);
    mysqli_close($conn);

    header("Location: SoldierConfirm.php");
    exit();
}
?>