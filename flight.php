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
            flex-wrap: wrap;
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
            font-size: 28px;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            font-weight: 700;
        }
        .card p{
            padding: 10px;
            padding-left: 25px;
            color: black;
            font-size: 24px;
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
    </style>
</head>

<body>
    <?php include('header.php') ?>  

     <!-- CARDS  -->
     <div style="background: #101010; width:100%">
        <center> <h1 class="cards-text">Flights Information</h1></center>
        <!-- 1ST ROW -->
       
        <section class="myContatiner">
            <?php
                    $query = "SELECT * FROM flight";
                    $result = mysqli_query($con, $query);
                    $count = mysqli_num_rows($result);
                    for($i = 0; $i < $count; $i++){
                        $records = mysqli_fetch_assoc($result);
                        if($i != 0 && $i == 3 * $i){
                            echo "<section class='myContatiner'>";
                            echo "</section class='myContatiner'>";
                        }else{
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


            <?php } } ?>
        </section>
        


     </div>

     <!-- CARDS END -->

    
   
                
       

     <?php include('footer.php') ?>
</body>

</html>
