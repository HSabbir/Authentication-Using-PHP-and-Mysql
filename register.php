<?php
    session_start();
    $user = 'sabbir';
    $pass = 'password_nai1999';
    $db = 'my_db';
    $servername = 'localhost';

    $db = new mysqli($servername, $user, $pass, $db);
    if(isset($_POST['signup'])){

        $username = $_POST['username'];
        $password = $_POST['password'];
        $confirmpassword = $_POST['confirm_password'];

        if($password == $confirmpassword){
            $query = "INSERT INTO register_info(username, password) VALUES ('$username', '$password')";

            $run = mysqli_query($db, $query);

            if($run){
                $msg = "Registration Successful";
                header("Location: http://localhost/assignment/login.php?msg=".$msg);

            }else{
                $errors = "error".mysqli_error($db);
                echo "<h3>$errors</h3>";

            }
        }else{
            //$error['password_not_match'] = "Password Not Matched...Enter correct Password";

            echo "<h3>Password Not Matched...Enter correct Password</h3>";
        }

    }
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];


        $result = $db->query("SELECT * FROM register_info WHERE username = '$username' ");
        $row = $result->fetch_assoc();

        if($row['username'] == $username && $row['password'] == $password){
            $_SESSION['loggedin'] = true;
            header("Location: http://localhost/assignment/home.php");
        }else{
            echo "Sign In Unsuccessful";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Registration</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style2.css" type="text/css">
</head>
<body>

<div class="registration-container d-flex align-items-center justify-content-center">

    <form action="register.php" class="register-form text-center" method="post">

        <h1 class="mb-5 font-weight-light text-uppercase">Registration</h1>
        <div class="form-group">
            <input type="text" class="form-control rounded-pill form-control-lg" placeholder="Username" name="username">
        </div>
        <div class="form-group">
            <input type="password" class="form-control rounded-pill form-control-lg" placeholder="Password" name="password">
        </div>
        <div class="form-group">
            <input type="password" class="form-control rounded-pill form-control-lg" placeholder="Confirm Password" name="confirm_password">
        </div>
        <button type="submit" name="signup" class="btn mt-5 rounded-pill btn-lg btn-custom btn-block text-uppercase">Submit</button>
        <p class="mt-3 font-weight-normal">Already Register? <a href="login.php"><strong>Log In</strong></a></p>
    </form>
</div>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
