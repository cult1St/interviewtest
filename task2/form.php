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
            <div class="card col-md-6">
                <?php 
                    if(isset($_SESSION['error'])){
                        echo "<div class='alert alert-danger'>".$_SESSION['error']."</div>";
                        unset($_SESSION['error']);
                    }
                ?>
               <div class="card-header">
               <h2 class="text-warning">Registration Form</h2>
               </div>
                <form action="process/process_reg.php" class="form-control" method="post">
                    <div class="mb-3">
                        <div class="form-floating">
                            <input type="text" name="name" id="name" class="form-control">
                            <label for="">Full Name</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-floating">
                            <input type="email" required name="email" id="email" class="form-control">
                            <label for="">Email</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-floating">
                            <input type="text" name="phone" id="phone" class="form-control">
                            <label for="">Phone Number</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="col-12">
                            <button name="submit" value="submit" class="col-12 btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>