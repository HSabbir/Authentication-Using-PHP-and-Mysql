
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Sign In</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>
<body>


<div class="login-container d-flex align-items-center justify-content-center">

    <form action="register.php" class="login-form text-center" method="post">
        <div class="alert alert-success " role="alert">
            <?php
            session_start();
            if(isset($_GET['msg'])){
                $msg = $_GET['msg'];
                echo $msg;
            }
            ?>
        </div>
        <h1 class="mb-5 font-weight-light text-uppercase">Login</h1>
        <div class="form-group">
            <input type="text" class="form-control rounded-pill form-control-lg" placeholder="Username" name="username">
        </div>
        <div class="form-group">
            <input type="password" class="form-control rounded-pill form-control-lg" placeholder="Password" name="password">
        </div>
        <button type="submit" name="submit" class="btn mt-5 rounded-pill btn-lg btn-custom btn-block text-uppercase">Log in</button>
        <p class="mt-3 font-weight-normal">Don't have an account? <a href="register.php"><strong>Register Now</strong></a></p>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>

