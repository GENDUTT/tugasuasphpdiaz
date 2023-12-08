<?php

@include 'connect.php';

session_start();

if(isset($_POST['submit'])){
    $email = mysqli_real_escape_string($conn, $_POST['usermail']);
    $pass = md5($_POST['password']);
    $cpass = md5($_POST['cpassword']);

    $select = "SELECT * FROM user_form WHERE email = '$email' && password = '$pass'";

    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result)> 0){
        $error[] = 'user already exsist';
    }else{
        if($pass != $cpass){
            $error[] = 'Password Not Matched!';
        }else{
            $insert = "INSERT INTO user_form(email, password) VALUES('$email','$pass')";
            mysqli_query($conn, $insert);
            header('location:login.php');
        }
        
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!---custom css link---->
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<body>
    <div class="form-container">
        <form action="" method="post">
            <h3>Regist Now</h3>
            <?php
                if(isset($error)){
                    foreach($error as $error){
                        echo '<span class="error-msg">'.$error.'</span>';
                    }
                }
            ?>
            <input type="email" name="usermail" placeholder="Enter Your Email" class="boxlogin" required>
            <input type="password" name="password" placeholder="Enter Your Password" class="boxlogin" required>
            <input type="password" name="cpassword" placeholder="Confirm Your Password" class="boxlogin" required>
            <input type="submit" value="Register Now" name="submit" class="form-btn">
            <p>Already have an account? <a href="login.php">Login Now</a></p>
        </form>
    </div>
</body>

</html>