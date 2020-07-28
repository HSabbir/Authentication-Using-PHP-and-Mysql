<?php

    $user = 'sabbir';
    $pass = 'password_nai1999';
    $db = 'my_db';
    $servername = 'localhost';

$conn = mysqli_connect($servername, $user, $pass, $db);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO person (FirstName, LastName, Age)
        VALUES ('Peter', 'Griffin', '35')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>

//    $sql = "CREATE TABLE register(
//email varchar(50),
//name varchar(50),
//password varchar(50)

)";
/*
$sql = "CREATE TABLE person 
(
FirstName varchar(15),
LastName varchar(15),
Age int
)";*/

if (mysqli_query($conn, $sql)) {
    echo "Table person created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>


<div class="form-body">
    <form action="register.php" method="post">

        <label>Username:</label><br>
        <input type="text" name="username" placeholder="Enter username"><br>
        <label>Password:</label><br>
        <input type="password" name="password" placeholder="Enter password"><br>
        <label>Confirm Password:</label><br>
        <input type="password" name="confirm_password" placeholder="Enter confirm password"><br>
        <button name="signup">Sign Up</button>
    </form>

    <div class="form-body">
        <form action="register.php" method="post">
            <label>Username:</label><br>
            <input type="text" name="username" placeholder="Enter username"><br>
            <label>Password:</label><br>
            <input type="password" name="password" placeholder="Enter password"><br>

            <button name="signin">Sign In</button>
        </form>
        <p>Not Signed Up!<a href="register.php">Sign Up</a> </p>
    </div>

    <div class="container">
        <!-- Content here -->

        <form action="register.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" aria-describedby="emailHelp" name="username">

            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="form-group">
                <label for="confirm_password">Confirm Password</label>
                <input type="password" class="form-control" id="confirm_password" name="confirm_password" >
            </div>
            <button type="submit" class="btn btn-primary" name="signup">Submit</button>
        </form>
        <p>Already Signed Up!<a href="login.php">Sign In</a> </p>
    </div>

    <!-- Optional JavaScript -->

