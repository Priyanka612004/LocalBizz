<!-- User Sign UP -->
<?php
    session_start();

    include("db.php");
    
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $username   = $_POST['fname'];
        $gmail = $_POST['mail'];
        $password = $_POST['pass'];
    
        if(!empty($gmail) && !empty($password) && !is_numeric($gmail))
        {
            $query = "insert into uform (Username,Email,Password) values('$username','$gmail','$password')";

            mysqli_query($con,$query);
            
            echo "<script type='text/javascript'>alert('Sucessfully Register')</script>";
        }
        else{
            echo"<script type='text/javascript'>alert('Please Enter Some Valid Information')</script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Bloginstyle.css">
    
    <title>Sign Up User Account</title>
</head>
<body>
    <div class="signup">
        <h1>Sign Up</h1>
        <h4>It's free and only takes a minute</h4>
        <form  method="POST">
            <label for="">Username</label>
            <input type="text" name="fname" required>
            <label for="">Email</label>
            <input type="email" name="mail" required>
            <label for="">Password</label>
            <input type="password" name="pass" required>
            <input type="submit" name="" value="Submit">
        </form>
        <p>By clicking the Sign Up button,you agree to our <br>
        <a href="">Terms and Condition</a> and <a href="">Policy privacy</a>
    </p>
        <p>Already have an account <a href="ulogin.php">Login Here</a>
        </p>
    </div>

</body>
</html>
