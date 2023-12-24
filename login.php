<!-- business Login  -->
<?php
    session_start();

    include("db.php");
    
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $gmail = $_POST['mail'];
        $password = $_POST['pass'];
    
        if(!empty($gmail) && !empty($password) && !is_numeric($gmail))
        {
            $query = "select * from form where Email ='$gmail' limit 1";
            $result = mysqli_query($con,$query);

            if($result){
                if($result && mysqli_num_rows($result)>0)
                {
                    $user_data= mysqli_fetch_assoc($result);
                    if($user_data['Password']== $password)
                    {
                        header("location:FrontPage.html");
                        die;

                    }
                }
            }
            echo "<script type='text/javascript'>alert('Wrong Username or Password')</script>";
        }
        else{
            echo "<script type='text/javascript'>alert('Wrong Username or Password')</script>";
        }

    }
?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Bloginstyle.css">
    <title>Login Bissuness Account</title>
</head>
<body>
    <div class="login">
        <h1>Login</h1>
        <h4>Its free and only takes a minute</h4>
        <form method="POST">
            <label for="">Email</label>
            <input type="email" name="mail" required>
            <label for="">Password</label>
            <input type="password" name="pass" required>
            <input type="submit" name="" value="Submit">
        </form>
        <p>Not have an account <a href="signup.php">Sign Up here</a></p>
    </div>
</body>
</html>