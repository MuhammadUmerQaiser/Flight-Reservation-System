<?php 
session_start();
if(!isset($_SESSION["Message"]))
{
    header('Location: Contact.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#myModal").modal('show');
        });
    </script>
    <style>
        *{
            background: #101010;
        }
        .modal-dialog{
            border-radius: 10px;
            background: white;
        }
        .modal-title{
            color: white;
            font-weight: 700;
            font-size: 30px;
        }
        .modal-body{
            color: white;
            font-weight: 400;
            font-size: 18px;
        }
        .btn{
            display: inline-block;
            background: #f9004d;
            font-size: 15px;
            letter-spacing: 1px;
            text-transform: uppercase;
            font-weight: 500;
            border: 2px solid transparent;
            border-radius: 10px;
            width: auto;
            transition: ease .20s;
            cursor: pointer;
            height: auto;
        }
        .btn:hover{
            border: 2px solid #f9004d;
            background: transparent;
            transform: scale(1.1);
        }
    </style>
    <title>Document</title>
</head>
<body>


    <!-- The Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Thanks!!!</h4>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <?php
                    if(isset($_SESSION["Message"]))
                    {
                ?>
                <p>Thanks For Contacting Us, We Will Reply You Soon.</p>
                <?php
                    }
                ?>
            </div>

            <!-- Modal footer -->
            <form method="post" action="afterContactModal.php">
                <div class="modal-footer">
                    <input type="submit" class="btn btn-danger" value="Close" data-bs-dismiss="modal" />
                </div>
            </form>

            </div>
        </div>
    </div>
</body>
</html>