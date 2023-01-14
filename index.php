<?php
include('config.php');
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Pak Airways</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- google fonts -->
   <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,300&display=swap" rel="stylesheet">
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
    <style>
        /* SERVICE */
        .about{
            width: 100%;
            padding: 78px 0px;
            background-color: #191919;
            margin-top: 20px;
        }
        .about img{
            height: auto;
            width: 420px;
        }
        .about-text{
            width: 550px;
        }
        .main{
            width: 1130px;
            max-width: 95%;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: space-around;
        }
        .about-text h1{
            color: white;
            font-size: 80px;
            text-transform: capitalize;
            margin-bottom: 20px;
        }
        .about-text h5{
            color: white;
            font-size: 25px;
            text-transform: capitalize;
            margin-bottom: 25px;
            letter-spacing: 2px;
        }
        span{
            color: #f9004d;
        }
        .about-text p{
            color: #fcfc;
            letter-spacing: 1px;
            line-height: 28px;
            font-size: 18px;
            margin-bottom: 45px;
        }
        button{
            background: #f9004d;
            color: white;
            text-decoration: none;
            border: 2px solid transparent;
            font-weight: bold;
            padding: 13px 30px;
            border-radius: 30px;
            transition: .4s;
            font-size: 12px;
        }
        button:hover{
            background: transparent;
            border: 2px solid #f9004d;
            cursor: pointer;
        }

        /* CARDSSSS */
        .cards-text{
            margin-top: 30px;
            font-size: 50px;
            font-weight: 700;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: white;
        }
        .myContatiner{
            display: flex;
            justify-content: center;
            /* background-image: url("assets/images/homecardbackground.jpg"); */
            background-repeat: no-repeat;
            /* z-index: 1; */       
        }
        .card{
            /* background-color: white; */
            height: 570px;
            width: 300px;
            margin: 10px;
            border-radius: 20px;  
            opacity: 0.5;
        }
        .card h2{
            color: black;
            padding: 15px 20px;
            display: block;
            text-align: center;
            margin: 20px 50px;
            text-decoration: none;
            font-size: 24px;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            font-weight: 700;
        }
        .card p{
            padding: 10px;
            padding-left: 25px;
            color: black;
            font-size: 20px;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            font-weight: 500;
        }
        .card a{
            background-color: black;
            color: white;
            padding: 15px 20px;
            display: block;
            text-align: center;
            margin: 20px 50px;
            text-decoration: none;
            font-size: 12px;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }
        .card:hover{
            background-color: rgb(176, 167, 167);
            color: white;
            cursor: pointer;
            transform: scale(1.03);
            transition: all 1s ease;
        }
        .show{
            background-color: black;
            color: white;
            padding: 15px 20px;
            display: block;
            text-align: center;
            margin: 20px 50px;
            text-decoration: none;
            font-size: 20px;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            font-weight: 700;
            width: 50%
        }
        
    </style>
</head>

<body>
    <?php include('header.php') ?>


    <!-- CABIN CONCEPT -->
    <section class="about">
        <div class="main">
            <img src="assets/images/cabin.jpg">
            <div class="about-text">
                <h1>Cabin Concept</h1>
                <p>
                To fly with <span>PakAirways</span> is to feel at home, in surroundings you know and trust.
                De veloped by the VistaJet design team, the cabin concept is intentionally universal, translating seamlessly across the globe.
                </p>
                <button type="button">Consistent Interior</button>
            </div>
        </div>
    </section>


    <!-- SERVICE -->
    <section class="about">
        <div class="main">
            <img src="assets/images/headerbackground.jpg">
            <div class="about-text">
                <h1>Service</h1>
                <h5>We take pride in serving <span>our customers safely.</span></h5>
                <p>
                To ensure passengers enjoy unrivaled service as standard, every <span>PakAirways</span> flight has at least one Cabin Hostess as well as two crew in the flight deck.
                Our crew is trained by the British Butler Institute, Norland College, and Wine & Education Trust.
                </p>
                <button type="button">Attention To details</button>
            </div>
        </div>
    </section>

     <!-- CARDS  -->
     <div style="background: #101010; width:100%">
        <center><h1 class="cards-text">Flights Information</h1></center>
        <section class="myContatiner">
            <?php
                $query = "SELECT * FROM flight";
                $result = mysqli_query($con, $query);
                $count = mysqli_num_rows($result);
                for($i = 0; $i < 3; $i++){
                    $records = mysqli_fetch_assoc($result);
            ?>
            <div class="card">
                <h2>Description</h2>
                <p>Flight No: <?php echo $records["Flight_No"]; ?></p>
                <p>From: <?php echo $records["FromTo"]; ?></p>
                <p>Destinantion: <?php echo $records["Destination"]; ?></p>
                <p>Date: <?php echo $records["Date"]; ?></p>
                <p>Time: <?php echo $records["Time"]; ?></p>
                <p>Day: <?php echo $records["Day"]; ?></p>
                <p>Price: <?php echo $records["Price"]; ?></p>
                <p>Seats Available: <?php echo $records["Seats"]; ?></p>
                <a href="Booknow.php">Book Now</a>
            </div>
            <?php } ?>
        </section>
        <center><a href="flight.php" class="show">SHOW MORE &nbsp; ↓</a></center>
     </div>

     <!-- CARDS END -->
                
       

    <?php include('footer.php') ?>
</body>

</html>
