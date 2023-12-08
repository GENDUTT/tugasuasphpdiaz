<?php

@include 'connect.php';

session_start();

if(isset($_POST['submit'])){
    $email = mysqli_real_escape_string($conn, $_POST['usermail']);
    $pass = md5($_POST['password']);
    

    $select = "SELECT * FROM user_form WHERE email = '$email' && password = '$pass'";

    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result)> 0){
        $_SESSION['usermail'] = $email;
        header('location:index.php');
    }else{
        $error[] = 'incorrect email or password';
        
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
            <h3>Login Now</h3>
            <?php
                if(isset($error)){
                    foreach($error as $error){
                        echo '<span class="error-msg">'.$error.'</span>';
                    }
                }
            ?>
            <input type="email" name="usermail" placeholder="Enter Your Email" class="boxlogin" required>
            <input type="password" name="password" placeholder="Enter Your Password" class="boxlogin" required>
            <input type="submit" value="Login Now" name="submit" class="form-btn">
            <p>Don't have an account? <a href="register.php">Register Now</a></p>
        </form>
    </div>
</body>

</html>