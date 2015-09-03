<?php

include 'includes/functions.php';

$name = $_POST["name"];
$email = $_POST["email"];
$bootcamp = $_POST["bootcamp"];
$tuition = $_POST["tuition"];
$discount = $_POST["discount"];
$deposit = $_POST["deposit"];
$apr = $_POST["apr"] / 100;
$periods = $_POST["periods"];
$gPeriods = $_POST["gPeriods"];
$gAmount = $_POST["gAmount"];
$principal = $tuition - $discount - $deposit;
$monthly = payment($apr,$periods,$principal);

echo $monthly;

?>