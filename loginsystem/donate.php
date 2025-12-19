<?php
include "config.php";

if (isset($_POST["donate"])) {
    $check = "SELECT * FROM `donatedata` WHERE email = '$_POST[email]' ";
    $result = mysqli_query($con, $check);
    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            $fetch = mysqli_fetch_assoc($result);
            if ($fetch["email"] == $_Post['email']) {
                echo "<script> alert('$_POST[email] - already exists')</script>";
            } 
        } else {
            $name = $_POST["name"];
            $email = $_POST["email"];
            $phone = $_POST["phone"];
            $age = $_POST["age"];
            $address = $_POST["address"];
            $bloodtype = $_POST["bloodtype"];
            $rhfactor = $_POST["rhfactor"];
            $hla = $_POST["hla"];

            $sql = "INSERT INTO `donatedata`(`name`, `email`, `phone`, `age`, `address`, `bloodtype`, `rhfactor`, `hla`) VALUES ('$name','$email','$phone','$age','$address','$bloodtype','$rhfactor','$hla')";
            if (mysqli_query($con, $sql)) {
                echo "<script> alert('Donation successfull')</script>";
                
                // header("location: index.php");
            } else {
                echo "<script> alert('query failed 002')</script>";
            }
        }
    } else {
        echo "<script> alert('query failed 001')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <link rel="stylesheet" href="../css/showcase.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="donate.css">
    <title>Blood Cancer Treatment | Donate</title>
    <style>
        @media (max-width: 400px){
            .footer h2{
        font-size: 1rem;
        padding: 10px;
    }
    .donation {
        margin: auto;
        margin-top: 0%;
        margin-bottom: 20px;
        width: 300px;
        padding-top: 80px;
        height: 650px;
        border: none;
    }
    .donation h2{
        font-size: 1.5rem;
    }
    .empty h1{
        padding: 0px;
}
.donation p{
    font-size: 1.5rem;
}
}
.empty h1{
    padding: 30px;
}
.menu-items li{
    list-style: none;
    margin-left:1.5em ;
    font-size: 1.6rem;
}
    </style>
</head>

<body>
<nav class="navbar">
        <div class="navbar-container container">
            <input type="checkbox">
            <div class="hamburger-lines">
                <span class="line line1 "></span>
                <span class="line line2 "></span>
                <span class="line line3 "></span>
            </div>
            <ul class="menu-items">
                <li><a href="./index.php">Home</a></li>
                <li><a href="./cause.html">Cause of Blood Cancer</a></li>
                <li><a href="./treatement.html">Treatment of Blood Cancer</a></li>
                <li><a href="./find.php">Find a Donor</a></li>
                <li><a href="./donate.php">Donate</a></li>
                <li><a href="./records.php">Records</a></li>
                <li><a href="./contact.php">Contact</a></li>
                <li><a href="./logout.php">Logout</a></li>
               
            </ul>
            <h1 class="logo" style="font-size:1.8rem;">Blood Cancer Treatment</h1>
        </div>
    </nav>
<!-- <br><br><br><br><br><br><br> -->
    <div class="empty">
        <h1>.</h1>
    </div>
    <div class="donation">
        <h2 class="title">Blood Cancer Treatment (Tata Memorial) <br/> Save A Life | Donate</h2>
        <form action="" method="post">
            <div class="form-group">
                <input type="text" name="name" placeholder="Enter Full Name" required>
            </div>
            <div class="form-group">
                <input type="email" name="email" placeholder="Enter Email" required>
            </div>
            <div class="form-group">
                <input type="text" name="phone" placeholder="Enter Contact Number" required>
            </div>
            <div class="form-group">
                <input type="text" name="age" placeholder="Enter Your Age" required>
            </div>
            <div class="form-group">
                <input type="text" name="address" placeholder="Enter Your Address" required>
            </div>
            <div class="form-group">
                <input type="text" name="bloodtype" placeholder="Enter Your Blood Type" required>
            </div>
            <div class="form-group">
                <input type="text" name="rhfactor" placeholder="Enter Your RH Factor (Positive / Negative)" required>
            </div>
            <div class="form-group">
                <input type="text" name="hla" placeholder="Enter Your 16 character HLA ID" minlength="16" maxlength="16" required>
            </div>
            <input type="submit" name="donate" value="Donate">
            <p>You cam save a life by donating your stem cells</p>
        </form>
    </div>

    <footer>
        <div class="footer">
            <h2>© All Rights Reserved to the Tata Medicals | Privacy Policy | Cookie Policy </h2>
        </div>
    </footer>
</body>

</html>