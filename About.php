<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Pak Airways</title>
    <!-- google fonts -->
   <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,300&display=swap" rel="stylesheet">
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
    <style>
        .about{
            width: 100%;
            padding: 78px 0px;
            background-color: #191919;
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
        }
        button:hover{
            background: transparent;
            border: 2px solid #f9004d;
            cursor: pointer;
        }
    </style>
</head>
<body>


    <?php include('header.php') ?>


    <section class="about">
        <div class="main">
            <img src="assets/images/about2.jpg">
            <div class="about-text">
                <h1>About Us</h1>
                <h5>We take pride in serving <span>our customers safely.</span></h5>
                <p>
                    If you’re looking to relax on sandy beaches, go on shopping sprees, or just have exciting adventures to plan, be amazed by the destinations Ariline ka naam has to offer!
                    Airline ka naam hosts both international and domestic destinations. Airline ka naam's vast network spans across the globe, flying to 25 countries across Asia, Europe and North America, and to 24 cities within Pakistan.
                </p>
                <button type="button">Let's Talk</button>
            </div>
        </div>
    </section>




    <?php include('footer.php') ?>









</body>
</html>