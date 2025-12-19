<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <link rel="stylesheet" href="../css/showcase.css">
    <link rel="stylesheet" href="../css/footer.css">
    <title>Blood Cancer Treatment | Records</title>
    <style>
        @media (max-width: 400px){
            .footer h2{
        font-size: 1rem;
        padding: 10px;
    }
    .container-table table{
        max-width: 350px;
        font-size: 50%;
    }
}
.menu-items li{
    list-style: none;
    margin-left:1.5em ;
    font-size: 1.6rem;
}
.empty h1{
    padding: 30px;
}

.list-heading{
    font-size: 2rem;
    text-align: center;
    margin: 10px auto;
    box-sizing: border-box;
}
table{
    box-sizing: border-box;
    border: none;
    width: 100%;
}
.table-head {
    background: rgb(32, 109, 32);
    box-sizing: border-box;
}
.table-head th{
    box-sizing: border-box;
    font-size: 2rem;
    padding: 10px auto;
    width: 15%;
    max-width: 40%;
}
.table-head .th4{
    width: 80%;
}
.table-head .th{
    padding: 10px ;
    box-sizing: border-box;
    
}
.container-table {
    box-sizing: border-box;
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

    <div class="container container-table">
    <h1 class="list-heading">List of Patients</h1>
    <table>
    <tr class="table-head">
        <th class="th1 th">Sn</th>
        <th class="th2 th">Name</th>
        <th class="th3 th">Age</th>
        <th class="th4 th">Email</th>
        <th class="th5 th">Phone</th>
    </tr>
    <div class="table-data">
<?php
include "config.php";

$pdata = "SELECT * FROM `patientdata`";
    $presult = $con-> query($pdata);
    $sn = $presult->num_rows;
    $i = $sn-1;
    if($presult->num_rows > 0){
        while($row = $presult->fetch_assoc()){
            echo "<tr><td style='font-size: 1.5rem; padding-left: 3px; padding-bottom: 5px; box-sizing: border-box;' >". $sn-$i ."</td><td style='font-size: 1.5rem; padding-left: 3px; padding-bottom: 5px; box-sizing: border-box;'>". $row['name'] ."</td><td style='font-size: 1.5rem; padding-left: 3px; padding-bottom: 5px; box-sizing: border-box;'>". $row['age'] ."</td><td style='font-size: 1.5rem; padding-left: 3px; padding-bottom: 5px; box-sizing: border-box;'>". $row['email'] ."</td><td style='font-size: 1.5rem; padding-left: 3px; padding-bottom: 5px; box-sizing: border-box;'>". $row['phone'] ."</td></tr>";
            $i--;
        }
        echo "</table>";
    }
?>
</div>
</table>
    </div>


    <div class="container container-table">
    <h1 class="list-heading">List of Donors</h1>
    <table>
    <tr class="table-head">
        <th class="th1 th">Sn</th>
        <th class="th2 th">Name</th>
        <th class="th3 th">Age</th>
        <th class="th4 th">Email</th>
        <th class="th5 th">Phone</th>
    </tr>
    <div class="table-data">
<?php
include "config.php";

$ddata = "SELECT * FROM `donatedata`";
    $dresult = $con-> query($ddata);
    $sn2 = $dresult->num_rows;
    $i2 = $sn2-1;
    if($dresult->num_rows > 0){
        while($row2 = $dresult->fetch_assoc()){
            echo "<tr><td style='font-size: 1.5rem; padding-left: 3px; padding-bottom: 5px; box-sizing:border-box;' >". $sn2-$i2 ."</td><td style='font-size: 1.5rem; padding-left: 3px; padding-bottom: 5px; box-sizing:border-box;'>". $row2['name'] ."</td><td style='font-size: 1.5rem; padding-left: 3px; padding-bottom: 5px; box-sizing:border-box;'>". $row2['age'] ."</td><td style='font-size: 1.5rem; padding-left: 3px; padding-bottom: 5px; box-sizing:border-box;'>". $row2['email'] ."</td><td style='font-size: 1.5rem; padding-left: 3px; padding-bottom: 5px; box-sizing:border-box;'>". $row2['phone'] ."</td></tr>";
            $i2--;
        }
        echo "</table>";
    }
?>
</div>
</table>
    </div>
</body>
</html>