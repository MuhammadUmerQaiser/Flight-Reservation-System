<?php
session_start();
include('config.php');

$query = "UPDATE `flight` SET `Seats`='".$_SESSION["UpdatedSeats"]."' WHERE Flight_No = '".$_SESSION["Flight"]."'";
$result = mysqli_query($con, $query);

header('Location: Booknow.php');
session_destroy();

?>