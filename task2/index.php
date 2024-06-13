<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/static/bootstrap/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <?php 
                    if(isset($_SESSION['feedback'])){
                        echo "<div class='alert alert-success'>".$_SESSION['feedback']."</div>";
                        unset($_SESSION['feedback']);
                    }
                ?>
                <h2 class="text-warning">Registration Process....</h2>
                <h4 class="text-primary">An Email Has been sent to you</h4>
               
            </div>
        </div>
    </div>
    
</body>
</html>