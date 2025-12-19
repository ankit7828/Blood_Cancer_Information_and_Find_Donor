<?php
include "config.php";

if (isset($_POST["contact"])) {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    $sql = "INSERT INTO `contactdata`(`username`, `email`, `phone`, `message`) VALUES ('$username','$email','$phone','$message')";
    if (mysqli_query($con, $sql)) {
        echo "<script> alert('Request has been submitted successfully')</script>";
    } else {
        echo "<script> alert('query failed 001')</script>";
    }
}

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/f33178e519.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/contact.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <title>Blood Cancer Treatment | Contact</title>
    <style>
        
@media (max-width: 400px){
    .footer h2{
        font-size: 1rem;
        padding: 10px;
    }
    .address-group{
        float: none;
        background: white;
        box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.407);
        width: 90%;
        margin: auto;
        margin-bottom: 20px;
        margin-top: 40px;
    }
    .address-element i{
        font-size: 10px;
        padding-left: 10px;
    }
    .address-element h1{
        text-transform: uppercase;
        padding: 10px auto;
        padding-top: 20px;
        font-size: 1.5rem;
    }
    .address-element p{
        text-transform: lowercase;
        padding-left: 10px;
        font-size: 1rem;
    }
    .address-group img{
        max-width: 90%;
        padding: 20px 0 55px 10px;
    }
    .form-group{
        margin: auto;
        float: none;
        background: white;
        box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.407);
        width: 90%;
        padding: 1em;
    }
    .form-heading{
        text-transform: uppercase;
        text-align: center;
        padding-top: 20px;
        font-size: 1.5rem;
        padding-bottom: 10px;
        border-bottom:4px solid red ;
        color: gray;
    }
    .form-group p{
        text-transform: lowercase;
        color:gray;
        font-size: 1rem;
        padding: 10px 5px;
    }
    .f1{
        font-size: 1.2rem;
        color: gray;
        padding-left: 5px;
        text-transform: uppercase;
        font-weight: 700;
    }
    .submit{
        background: linear-gradient(25deg ,#d6437f,#ee4758 50%);
        margin-left:50%;
        transform: translate(-50%);
        margin-top: 10px;
        margin-bottom: 20px;
        padding: 10px 40px;
        color: white;
        font-size: 1.6rem;
    }
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
    <br><br><br><br><br>
    <section class="contact-page">
        <div class="container">
            <div class="form-wrapper">
                <div class="address-group">
                    <div class="address-element">
                        <i class="fa-solid fa-location-dot fa-2x text-red"></i>
                        <h1>location</h1>
                        <p> Homi Babha Building, Dr Ernest Borges Rd, Parel East, Parel, Mumbai, Maharashtra 400012</p>
                    </div>
                    <div class="address-element">
                        <i class="fa-solid fa-envelope fa-2x text-red"></i>
                        <h1>e-mail</h1>
                        <p>ankit78285059ankit@gmail.com</p>
                    </div>
                    <div class="address-element">
                        <i class="fa-solid fa-phone fa-2x text-red"></i>
                        <h1>call</h1>
                        <p>+91-22-24177000</p>
                    </div>
                    <img src="../img/tatahospital.jpg" alt="company-img">
                </div>
                <div class="form-group">
                    <h1 class="form-heading">Request a Consultant</h1>
                    <p>Let us know your questions, and request for treatement by filling out the contact form below , also contact us.</p>
                    <form class="form" action="" method="post">
                        <label class="f1" for="username">Name</label><br>
                        <input style="width: 100%;" type="text" name="username" id="username" required><br><br><br>

                        <label class="f1" for="email">Email</label><br>
                        <input style="width: 100%;" type="email" name="email" id="email" required><br><br><br>

                        <label class="f1" for="phone">Phone</label><br>
                        <input style="width: 100%;" type="number" name="phone" id="phone" required><br><br><br>

                        <label class="f1 f2" for="message">Message for Consultant</label><br>
                        <input  style="color: red; width: 100%; height: 200px; text-align: start;" id="message" name="message" type="text" placeholder="Briefly explain about your disease to find best consultant" required>

                        <input class="submit" width="100%" type="submit" name="contact" value="SUBMIT">
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="footer">
            <h2>© All Rights Reserved to the Tata Medicals | Privacy Policy | Cookie Policy </h2>
        </div>
    </footer>
</body>

</html>