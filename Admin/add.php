<?php 
include('config.php');
if(isset($_POST["add"])){
    $flight_no = $_POST["flight_no"];
    $from = $_POST["from"];
    $to = $_POST["to"];
    $seat = $_POST["seat"];
    $price = $_POST["price"];
    $date = date("d-M-Y", strtotime($_POST["date"]));
    $time = date("h:i a", strtotime($_POST["time"]));
    //get day from date
    $timestamp = strtotime($date);
    $day = date('l', $timestamp);

    $query = "INSERT INTO `flight`(`Flight_No`, `FromTo`, `Destination`, `Seats`, `Date`, `Time`, `Day`, `Price`) VALUES 
    ('".$flight_no."','".$from."','".$to."','".$seat."','".$date."','".$time."','".$day."','".$price."')";
    $result = mysqli_query($con, $query);
    if($result){
        header('Location: flight_details.php');
    }
}
?>