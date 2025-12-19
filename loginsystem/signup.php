<?php
include "config.php";
if(!isset($_SESSION["login"])){
if (isset($_POST["signup"])) {
    $check = "SELECT * FROM `userdata1` WHERE username = '$_POST[username]' or email = '$_POST[email]' ";
    $result = mysqli_query($con, $check);
    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            $fetch = mysqli_fetch_assoc($result);
            if ($fetch["username"] == $_Post['username']) {
                echo "<script> alert('$_POST[username] - already taken')</script>";
            } else {
                echo "<script> alert('$_POST[email] - already registerd')</script>";
            }
        } else {
            $username = $_POST["username"];
            $email = $_POST["email"];
            $name = $_POST["name"];
            $password = $_POST["password"];

            $sql = "INSERT INTO `userdata1`(`username`, `email`, `name`, `password`) VALUES ('$username','$email','$name','$password')";
            if (mysqli_query($con, $sql)) {
                echo "<script> alert('Account created')</script>";
            } else {
                echo "<script> alert('query failed')</script>";
            }
        }
    } else {
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
    <title>Blood Cancer Treatment | Signup</title>
    <style>
        @media (max-width: 400px){
            
            .container {
    margin: auto;
    margin-top: 10%;
    width: 300px;
    height: 280px;
    border: 2px solid black;
}
.container2{
    height: 380px;
}
        }
    .container {
        height: 400px;
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
    <div class="container container2">
        <h2 class="title">Blood Cancer Treatment <br/> signup Form</h2>
        <form action="" method="post">
            <div class="form-group">
                <input type="text" name="username" placeholder="Enter username" required>
            </div>
            <div class="form-group">
                <input type="email" name="email" placeholder="Enter email" required>
            </div>
            <div class="form-group">
                <input type="text" name="name" placeholder="Enter name" required>
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="Enter password" required>
            </div>
            <input type="submit" name="signup" value="Signup">
            <p>Already have an Account <a href="login.php">Login</a></p>
        </form>
    </div>
</body>

</html>