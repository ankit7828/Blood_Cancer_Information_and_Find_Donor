<?php
include "config.php";

session_start();
if(!isset($_SESSION["login"])){
if(isset($_POST["login"])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `userdata1` WHERE username = '$username' or email = '$username' ";
    $result = mysqli_query($con, $sql);

    if($result){
        if(mysqli_num_rows($result) == 1){
            $fetch = mysqli_fetch_assoc($result);
            if($fetch["password"] == $_POST['password']){
                $_SESSION['login'] = true;
                $_SESSION['name'] = $fetch['name'];

                // echo "<script> alert('login successfull')</script>";
                header("refresh: 0; url=index.php");
            }
            else{
                echo "<script> alert('invalid password')</script>";
            }
        }
        else{
            echo "<script> alert('user not found')</script>";
        }
    }
    else{
        echo "<script> alert('query failed 001')</script>";
    }

}
}
else{
    header("location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Blood Cancer Treatment | Login</title>
    <style>
       @media (max-width: 400px){
        .container {
    margin: auto;
    margin-top: 10%;
    width: 300px;
    height: 280px;
    border: 2px solid black;
}
       }
       .container {
        height: 300px;
       }
       body{
        background-color: rgb(198, 210, 201);
       }
       .container form .form-group input{
        background: none;
       }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="title">Blood Cancer Treatment <br/> Login Form</h2>
        <form action="" method="post">
            <div class="form-group">
                <input type="text" name="username" placeholder="Enter username or Email" required >
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="Enter password" required >
            </div>
            <input type="submit" name="login" value="Login" >
            <p>Don't have an Account <a href="signup.php">Sign Up</a></p>
        </form>
    </div>
</body>
</html>