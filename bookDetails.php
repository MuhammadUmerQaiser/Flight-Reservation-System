<?php
include('config.php');
session_start();
if(isset($_POST["name"]))
{
    //USER INPUT
    $flight = $_POST["flight"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $contact = $_POST["contact"];
    $credit = $_POST["card"];
    $seats = $_POST["seats"];


    //FLIGHT DATABASE RECORDS
    $flightQuery = "SELECT * FROM flight WHERE Flight_No = '".$flight."'";
    $flightResult = mysqli_query($con, $flightQuery);
    $records = mysqli_fetch_assoc($flightResult);

    $date = $records["Date"];
    $time = $records["Time"];
    $day = $records["Day"];
    $destination = $records["Destination"];
    $fromto = $records["FromTo"];
    $price = $records["Price"];
    $seatsFlight = $records["Seats"];


    $amount = (int)$seats * (int)$price; //AMOUNT MULTIPLY

    //INSERTION
    $query = "INSERT INTO `booking`(`Name`, `Email`, `Contact`, `Flight_No`, `Seats`, `Credit_Card`, `Amount`, `Day`, `Date`, `Time`, `FromTo`, `Destination`) VALUES ('".$name."', '".$email."', '".$contact."', '".$flight."', '".$seats."', '".$credit."', '".$amount."', '".$day."', '".$date."', '".$time."', '".$fromto."', '".$destination."')";
    $result = mysqli_query($con, $query);
    if($result)
    {
        //UPDATING SEATS IN FLIGHTS
        $updatedSeats  = (int)$seatsFlight - (int)$seats;
       
        //SESSION
        $_SESSION["name"] = $name;
        $_SESSION["amount"] = $amount; //TOTAL AMOLUNT
        $_SESSION["day"] = $day;
        $_SESSION["date"] = $date;
        $_SESSION["time"] = $time;
        $_SESSION["destination"] = $destination;
        $_SESSION["UpdatedSeats"] = $updatedSeats; //UPDATED SEATS
        $_SESSION["Flight"] = $flight;
        $_SESSION["email"] = $email;
        $_SESSION["contact"] = $contact;
        $_SESSION["credits"] = $credit;
        $_SESSION["seats"] = $seats; // USER SEATS


        header('Location: afterBooking.php');
    }
    else
    {
        header('Location: afterBooking.php');
    }

}
?>