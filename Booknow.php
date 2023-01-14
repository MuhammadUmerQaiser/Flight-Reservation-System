<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <title>Pak Airways</title>
    <style>
        body{
            margin: 0;
            padding: 0;
        }
        body:before{
            content: '';
            position: fixed;
            width: 100vw;
            height: 100vh;
            background-image:url(assets/images/flight3.avif);
            background-position: center center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            -webkit-background-size: cover;
            background-size: cover;
            -webkit-filter: blur(10px);
            -moz-filter: blur(10px);
            filter: ;
        }
        .contact-form{
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            -moz-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            -o-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            width: 30%;
            height: 750px;
            padding: 80px 40px;
            background: rgba(0, 0, 0, 0.6);
        }
        .contact-form h2{
            margin: 0;
            padding: 0 0 20px;
            text-align: center;
            text-transform: uppercase;
            color: darkorange;
            font-size: 30px;
            font-family: Georgia, 'Times New Roman', Times, serif;
            font-weight: 900;
        }
        .contact-form p{
            margin: 0;
            padding: 0;
            font-weight: 700;
            color: darkgray;
            font-size: 15px;
            font-family: Georgia, 'Times New Roman', Times, serif;
        }
        .contact-form input{
            width: 100%;
            margin-bottom: 20px;
        }
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
        }

        /* Firefox */
        input[type=number] {
        -moz-appearance: textfield;
        }
        .contact-form input[type=email],
        .contact-form input[type=number],
        .contact-form input[type=text]{
            border: none;
            border-bottom: 1px solid #fff;
            background: transparent;
            outline: none;
            height: 35px;
            color: #fff;
            font-size: 18px;
        }
        .contact-form input[type=submit]{
            height: 30px;
            color: #fff;
            font-size: 15px;
            background: red;
            cursor: pointer;
            border-radius: 25px;
            border: none;
            outline: none;
            margin-top: 7%;
        }
    </style>
</head>
<body>
    <div class="contact-form">
        <h2>Book Your Tickets Now!!!</h2> <br> 
        <form action="bookDetails.php" method="post">
            <p>Flight No.</p>
            <input type="number" placeholder="Enter Flight Number" name="flight" required> <br> <br>

            <p>Full Name</p>
            <input type="text" placeholder="Enter Your Name" name="name" required> <br> <br>

            <p>Email</p>
            <input type="email" placeholder="Enter Your Email" name="email" required> <br> <br>

            <p>Contact</p>
            <input type="number" placeholder="Enter Yout Phone Number" name="contact" required> <br> <br>

            <p>Number of Seats</p>
            <input type="number" placeholder="Enter Seats" name="seats" required> <br> <br>

            <p>Credit Card Number</p>
            <input type="number" placeholder="Enter Credit Card Number" name="card" required>


            <input type="submit" value="Book Now..." name="submit" required>
        </form>
    </div>



    <script>
        $(document).ready(function() {
            $("submit").click(function() {
                $.ajax({
                    type: "POST",
                    url: "bookDetails.php",
                    data: this.data,
                    cache: false,
                    success: function(data) {
                        alert(data);
                    }
                
                }); 
            
            });
        
        });
    </script>
</body>
</html>