<?php
session_start();
if(isset($_SESSION["adminName"])){
    header('Location: dashboard.php');
}
if(isset($_POST["email"])){
    $email = $_POST["email"];
    $password = $_POST["pass"];

    if($email == "admin@gmail.com" && $password == "admin123"){
        $_SESSION["adminName"] = "Admin";
        header('Location: dashboard.php');
    }
    else{
        echo "<script>";
        echo "alert('Credentials doesn't match.');";
        echo "</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Pak Airways | Admin</title>
</head>
<body>
    <div class="container mt-5">
        <div class="text-center">
            <h2>Welcome Back</h2>
            <h2>Enter Credentials to Login!</h2>
                
        </div>
        <form action="" method="post">
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Email">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Password</label>
                <input type="password" class="form-control" name="pass" id="pass" placeholder="Password">
            </div>
            <div class="mb-3">
                <input type="submit" class="btn btn-success" value="Login" id="login" name="login">
            </div>
        </form>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</body>
</html>