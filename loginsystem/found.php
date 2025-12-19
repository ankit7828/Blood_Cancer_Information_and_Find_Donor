<?php
include "config.php";
session_start();
$check = "SELECT * FROM `donatedata` WHERE bloodtype = '$_SESSION[bloodtype]' and rhfactor = '$_SESSION[rhfactor]' and hla = '$_SESSION[hla]' ";
    $result = mysqli_query($con, $check);
    if (mysqli_num_rows($result) > 0) {
        $fetch = mysqli_fetch_assoc($result);
    }
    session_destroy();
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
        <link rel="stylesheet" href="found.css">
        <title>Blood Cancer Treatment | Donor Found</title>
        <style>
                @media (max-width: 400px){
            .footer h2{
        font-size: 1rem;
        padding: 10px;
    }
    .found {
        margin: auto;
        margin-top: 0%;
        margin-bottom: 20px;
        width: 300px;
        padding-top: 80px;
        height: 700px;
        border: none;
    }
    .found h2{
        font-size: 2rem;
    }
    .empty h1{
        padding: 0px;
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
    <div class="empty">
        <h1>.</h1>
    </div>
    <div class="found donation">
        <h2 class="title">About the Donor</h2>
            <div class="form">
            <div class="form-group1">
                <p style="font-size: 1.3rem;">Donor has found you can contact him by the given data below</p>
            </div>
            <div class="form-group1">
                <p>Name : <?php echo $fetch['name']; ?></p>
            </div>
            <div class="form-group1">
            <p>Email : <?php echo $fetch['email']; ?></p>
            </div>
            <div class="form-group1">
            <p>Phone : <?php echo $fetch['phone']; ?></p>
            </div>
            <div class="form-group1">
            <p>Age : <?php echo $fetch['age']; ?></p>
            </div>
            <div class="form-group1">
            <p>Address : <?php echo $fetch['address']; ?></p>
            </div>
            <div class="form-group1">
            <p>Bloodtype : <?php echo $fetch['bloodtype']; ?></p>
            </div>
            <div class="form-group1">
            <p>Rh Factor : <?php echo $fetch['rhfactor']; ?></p>
            </div>
            <div class="form-group1">
            <p>HLA : <?php echo $fetch['hla']; ?></p>
            </div>
            </div>
    </div>
    <footer>
        <div class="footer">
            <h2>© All Rights Reserved to the Tata Medicals | Privacy Policy | Cookie Policy </h2>
        </div>
    </footer>
</body>

</html>