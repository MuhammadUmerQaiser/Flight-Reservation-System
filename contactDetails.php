<?php
session_start();
include('config.php');
if(isset($_POST["name"]))
{
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $query = "INSERT INTO `contact`(`Name`, `Email`, `Subject`, `Message`) VALUES ('".$name."', '".$email."', '".$subject."', '".$message."')";
    $result = mysqli_query($con, $query);

    if($result)
    {
        $_SESSION["Message"] = $message;
        header('Location: afterContacting.php');
    }
    else
    {
        header('Location: afterContacting.php');
    }
}

?>