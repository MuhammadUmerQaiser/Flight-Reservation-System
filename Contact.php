<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Pak Airways </title>
    <!-- google fonts -->
   <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,300&display=swap" rel="stylesheet">
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
        section{
            padding: 40px 15%;
        }
        .contact{
            background: #101010;
            height: 100%;
            width: 100%;
            min-height: 100vh;
            display: grid;
            grid-template-columns: repeat(2, 2fr);
            align-items: center;
            grid-gap: 6rem;
        }
        .contact-img img{
            max-width: 100%;
            width: 720px;
            height: auto;
            border-radius: 10px;
        }
        .contact-form h1{
            font-size: 80px;
            color: #fff;
            margin-bottom: 20px;
        }
        span{
            color: #f9004d;
        }
        .contact-form p{
            color: #c6c9d8bf;
            letter-spacing: 1px;
            line-height: 26px;
            font-size: 1.1rem;
            margin-bottom: 3.8rem;
        }
        .contact-form form{
            position: relative;
        }
        .contact-form form input,
        form textarea{
            width: 100%;
            padding: 17px;
            border: none;
            outline: none;
            background: #191919;
            color: #fff;
            font-size: 1.1rem;
            margin-bottom: 0.7rem;
            border-radius: 10px;
        }
        .contact-form textarea{
            resize: none;
            height: 200px;
            width: 100%;
            padding: 17px;
            border: none;
            outline: none;
            background: #191919;
            color: black;
            font-size: 1.1rem;
            margin-bottom: 0.7rem;
            border-radius: 10px;
        }
        .contact-form form .btn{
            display: inline-block;
            background: #f9004d;
            font-size: 1.1rem;
            letter-spacing: 1px;
            text-transform: uppercase;
            font-weight: 600;
            border: 2px solid transparent;
            border-radius: 10px;
            width: 220px;
            transition: ease .20s;
            cursor: pointer;
            height: auto;
        }
        .contact-form form .btn:hover{
            border: 2px solid #f9004d;
            background: transparent;
            transform: scale(1.1);
        }
        @media (max-width: 1570px){
            section{
                padding: 80px 3%;
                transition: .2s;
            }
            .contact-form h1{
                font-size: 60px;
            }
            .contact-form p{
                margin-bottom: 3rem;
            }
        }
        @media (max-width: 1090px){
            .contact{
                grid-gap: 2rem;
                transition: .3s;
            }
        }
        @media (max-width: 1000px){
            .contact{
                grid-template-columns: 1fr;
            }
            .contact-form{
                order: 2;
            }
            .contact-img img{
                max-width: 100%;
                width: 100%;
                height: auto;
                text-align: center;
                margin-bottom: 30px;
            }
        }
    </style>

</head>
<body>

    <?php include('header.php') ?>

        
    <section class="contact">
        <div class="contact-form">
            <h1>Contact <span>Us</span></h1>
            <p>
                Start working with Us that can provide everything you need to generate awareness, weather conditions, connect.
                We guarantee that you'll be able to have any issue resolved within 24 hours.
            </p>
            <form action="contactDetails.php" method="post">
                <input type="text" placeholder="Your Name" name="name" required>
                <input type="email" name="email" placeholder="Your Email" required>
                <input type="text" name="subject" placeholder="Write a Subject" required>
                <textarea name="message" cols="30" rows="10" placeholder="Your Message" required></textarea>
                <input type="submit" value="Submit" class="btn" name="submit">
            </form>
        </div>
        <div class="contact-img">
            <img src="assets/images/contact1.jpg">
        </div>
    </section>


    

    <?php include('footer.php') ?>



    <script>
        $(document).ready(function() {
            $("submit").click(function() {
                $.ajax({
                    type: "POST",
                    url: "contactDetails.php",
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