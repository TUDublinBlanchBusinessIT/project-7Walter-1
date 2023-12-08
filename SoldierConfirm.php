<?php
include("finalHeader.html");

//translate the comments below into PHP code underneath each comment

//start a session
session_start();

//echo the soldier's firstname from session variable
echo "Soldier's Firstname: " . $_SESSION['soldierFN'] . "<br>";

//echo the soldier's surname from session variable
echo "Soldier's Surname: " . $_SESSION['soldierSN'] . "<br>";

//echo the soldier's years in service from session variable
echo "Soldier's Years in service: " . $_SESSION['soldierYIS'] . "<br>";

//echo the soldier's rank from session variable
echo "Soldier's Rank: " . $_SESSION['soldierR'] . "<br>";

//echo the soldier's gender from session variable
echo "Soldier's Gender: " . $_SESSION['soldierG'] . "<br>";

//echo the soldier's date discharged from session variable
echo "Soldier's Date of Discharge: " . $_SESSION['soldierD'] . "<br>";
?>
