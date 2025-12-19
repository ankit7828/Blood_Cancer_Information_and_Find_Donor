<?php

session_start();

if (!isset($_SESSION["login"])){
    header("location: login.php");
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

    <title>Blood Cancer Treatment | Home</title>
    <style>
        @media (max-width: 400px) {
    * {
        font-size: 50%;
    }
    

    .footer h2{
        font-size: 1rem;
        padding: 10px;
    }
    .showcase .row .lg-heading,
    .showcase2 .row .lg-heading {
        font-size: 2rem;
    }

    .showcase .row,
    .showcase .row2 {
        /* border: 2px solid red; */
        width: 300px;
        height: 100%;
    }

    .showcase .row .img-box {
        width: 100%;
        height: 50%;
        float: none;
    }

    .showcase .row .text-box {
        float: none;
        width: 100%;
        text-align: center;
        font-weight: 50%;
        height: 50%;
    }

    .showcase2 .row,
    .showcase2 .row2 {
        /* border: 2px solid red; */
        width: 350px;
        height: 100%;
        margin-bottom: 20px;
    }

    .showcase2 .row .img-box {
        margin: auto;
        width: 80%;
        height: 50%;
        float: none;
    }

    .showcase2 .row .text-box {
        float: none;
        width: 100%;
        text-align: center;
        font-weight: 50%;
        height: 50%;
    }

    .showcase2 .row .text-box span {
        width: 100%;
        text-align: center;
        font-weight: 50%;
        font-size: 100%;
        height: 50%;
    }

    .showcase2 .t1 {
        margin-bottom: 20px;
    }

    .showcase2 ul {
        font-size: 80%;
        text-align: left;
    }

    .showcase3 .row,
    .showcase3 .row2 {
        /* border: 2px solid red; */
        width: 350px;
        height: 100%;
        margin-bottom: 20px;
    }

    .showcase3 .row .img-box {
        margin: auto;
        width: 80%;
        height: 50%;
        float: none;
    }

    .showcase3 .row .text-box {
        float: none;
        width: 100%;
        text-align: center;
        font-weight: 50%;
        height: 50%;
    }

    .showcase3 .row .text-box h1,
    span {
        width: 100%;
        text-align: center;
        font-weight: 50%;
        font-size: 100%;
        height: 50%;
    }

    .showcase4 {
        height: 20vh;
        /* border: 2px solid rebeccapurple; */
        margin-top: 2.5rem;
        /* margin-bottom: 1rem; */
        align-items: center;
    }

    .showcase4 .container2 {
        /* border: 2px solid red; */
        max-width: 400px;
        width: 90%;
        margin: auto;
    }

    .showcase_data {
        color: gray;
        font-weight: 400;
    }

    .showcase_data h1 {
        font-size: 2rem;
        text-align: center;
        padding-bottom: 15px;
    }

    .showcase_data p {
        font-size: 1rem;
        text-align: center;
        padding-bottom: 20px;
    }

    .btn {
        display: inline-block;
        padding: 0.8em 1.2em;
        border-radius: 50px;
        text-decoration: none;
        font-size: 1rem;
        cursor: pointer;
        outline: none;
        margin-top: 1em;
        text-transform: uppercase;
        font-weight: 300;
        transition: background 0.4s ease-in-out;
    }

    .btn-primary {
        background: #16a083;
        color: white;
        box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.407);

    }

    .btn-primary:hover {
        background: rgb(32, 109, 32);
    }

    .showcase5 .row,
    .showcase5 .row2 {
        /* border: 2px solid red; */
        width: 350px;
        height: 100%;
        margin-bottom: 20px;
    }

    .showcase5 .row .img-box {
        margin: auto;
        width: 80%;
        height: 50%;
        float: none;
    }

    .showcase5 .row .text-box {
        float: none;
        width: 100%;
        text-align: center;
        font-weight: 50%;
        height: 50%;
    }

    .list-data-container {
        display: grid;
        grid-template-columns: 1fr;
    }

    .list-data-container .list-data-item {
        width: 80%;
        height: 80px;
        margin: 20px auto;
    }
    .showcase6{
        margin-bottom: 20px;
        height: 80vh;
    }
    .showcase6 .row,
    .showcase6 .row2 {
        /* border: 2px solid red; */
        width: 350px;
        height: 100%;
        margin: 20px auto;
    }
    .showcase6 .row .img-box {
        margin: auto;
        width: 80%;
        height: 50%;
        float: none;
    }
    .showcase6 .row .img-box img{
        border-radius: 10px;
    }

    .showcase6 .row .text-box {
        float: none;
        width: 100%;
        text-align: center;
        font-weight: 50%;
        height: 50%;
    }

    .showcase6 .row .text-box span {
        font-size: 50%;
    }

    .showcase6 .row .text-box p {
        margin-top: 0;
        padding-top: 0;
    }
    .showcase7 h1{
        font-size: 2rem;
    }
    .showcase7 p{
        font-size: 1rem;
    }
    .showcase7 .links a{
        display: block;
        margin: 20px;
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

    <section class="showcase" id="about-us">
        <div class="container">
            <div class="row row2">
                
                <div class="text-box text-box2">
                    <h1 class="lg-heading t1">Choosing Tata for Medical Treatment in India</h1>
                    <p>Medical Treatment in India is easily the top in the region and among the best across the globe. Being the largest cancer hospital in India and serving more than thousands of cancer patients a year, Tata Medical is the responsible choice for medical treatment.</p>
                    <a href="./contact.php" class="btn btn-primary">Request a Consultant</a>
                </div>
                <div class="img-box img-box2">
                    <img src="../img/tatahospital.jpg" alt="showcase-photo1 image">
                </div>
            </div>
        </div>
    </section>

    <section class="showcase2" id="about-us2">
        <div class="container">
            <div class="row row2">
                <div class="text-box">
                    <h1 class="lg-heading t1">India should be your first choice <span style="color: rgba(255, 0, 0, 0.522);">for medical tourism</span></h1>
                    <p>India should definitely be on your short list for medical treatment. Not only is the <span style="color: black;">cost of care in India affordable by international standards, but you’ll find advanced research and procedures here.</span></p>
                    <br>
                    <p>India stands out as the home of the finest medicine in the region. In fact, India medical tourism and treatment are among the top in Asia and the entire world.</p>
                    <br>
                    <ul>
                        <li>Tata medical Center to be home to India’s best doctors</li> <br>
                          <li>62+ medical hospitals in many states</li> <br>
                            <li>Tata Memorial Hospital employs 1,001 to 5,000 employees in India.</li> <br>
                            <li>Medical tests in excess of over million</li> <br>
                    </ul>
                    <p>There’s simply no good reason not to visit India for advanced medical treatment.</p>
                </div>
                <div class="img-box">
                    <img src="../img/Kidney-Cancer-1.jpg.webp" alt="showcase-photo1 image">
                </div>
            </div>
        </div>
    </section>

    <section class="showcase3" id="about-us3">
        <div class="container">
            <div class="row row2">
                <div class="text-box">
                    <h1 class="lg-heading t1"><span style="color:#0aedc0; font-weight: 600;">The Advantages</span> of Medical Treatment in India</h1>
                    <p>Medical innovation in India is constantly on the move. Breakthroughs in medicine are almost a daily occurrence here. When you come to India for medical treatment, you’ll benefit from:</p><br>
                    <p>Advances in cancer treatment, from targeted chemotherapy to immunotherapy to new surgical techniques</p><br>
                    <p>The finest care from highly skilled Indiai physicians and surgeons. Many Indiai doctors are trained in the US and vice versa. India's medical schools are some of the most rigorous in the world.</p><br>
                    <p>Affordable healthcare costs even without health insurance combined with a high level of care and safety.</p><br>
                    <p>India is an excellent location for American medical tourists, recommended by organizations like the AARP</p>
                    <a href="./contact.php" class="btn btn-primary">Request a Consultant</a>
                </div>
                <div class="img-box">
                    <img src="../img/lovepik-the-doctor-who-took-the-test-tube-to-do-the-picture_500684212.jpg" alt="showcase-photo1 image">
                </div>
            </div>
        </div>
    </section>
    
    <section class="showcase4">
        <div class="container2">
            <div class="showcase_data">
                <h1><span style="color: darkblue;">Why Choose</span> <span style="color: palevioletred; font-weight: 500;">Tata Medical?</span></h1>
            <p>Tata Medical Center is the largest hospital in the region and is a truly massive facility. There are treatments, research, and procedures at Tata that are available nowhere else in the world, making it the ideal choice for medical tourism. <span style="color: black;">In fact large medical research in India is conducted at Tata Medical. Virtually every medical specialty you can imagine is practiced here, including:</span></p>
            </div>
        </div>
    </section>

    <section class="showcase5" id="about-us5">
        <div class="container2">
            <div class="row row2">
                <div class="text-box">
                    <div class="showcase_data">
                        <h1><span style="color: darkblue;">Orthopedic </span> <span style="color: palevioletred; font-weight: 500;">Surgery</span></h1>
                    <p>Affordable, expertly-performed hip and knee replacements.</span></p>
                    </div>

                    <div class="showcase_data">
                        <h1><span style="color: darkblue;">Cardiology</span> </h1>
                    <p>Advanced heart care, including interventional cardiac procedures. Patients needing heart surgery will find global experts at Tata.</span></p>
                    </div>

                    <div class="showcase_data">
                        <h1><span style="color: darkblue;">Cancer and </span> <span style="color: palevioletred; font-weight: 500;">oncological treatments</span></h1>
                    <p>For every type of cancer, both in children and adults.</span></p>
                    </div>

                    <div class="showcase_data">
                        <h1><span style="color: darkblue;">TIL and melanoma </span> <span style="color: palevioletred; font-weight: 500;">specialists</span></h1>
                    <p>Many of the foremost TIL and melanoma specialists are at Tata. These Indian physicians are rigorously trained and experienced, and they regularly collaborate with their colleagues worldwide.</span></p>
                    </div>
                </div>
                <div class="img-box">
                    <img src="../img/istockphoto-1742056601-2048x2048.jpg" alt="showcase-photo1 image">
                </div>
            </div>

            <section class="list-data">
                <div class="list-data-container">
                    <div class="list-data-item">
                        <p>A personal coordinator and translator is made available to assist you during your entire stay.</p>
                    </div>

                     <div class="list-data-item">
                        <p>Clinical consultation with Tata's medical staff is available prior to your arrival</p>
                    </div>

                    <div class="list-data-item">
                        <p>Traveling overseas to a new country can be intimidating, especially when dealing with medical issues. Tata takes care of you with transportation, accommodations, and visas every step of the way</p>
                    </div>

                    <div class="list-data-item">
                        <p>Tata's fees are open and transparent. Tata provides outstanding, affordable medicine</p>
                    </div>

                     <div class="list-data-item">
                        <p>5000+ employees</p>
                    </div>

                    <div class="list-data-item">
                        <p>World class facility </p>
                    </div>
                </div>
            </section>
        </div>
    </section>

    <section class="showcase6" id="about-us6">
        <div class="container2">
            <div class="row row2">
                <div class="text-box">
                    <h1 class="lg-heading t1"><span style="color: white;">Tata Memorial hospital</span><br>
                        <span style="color: #044236;">A Recognized Leader in Cancer Treatement</span></h1>
                    <p style="font-weight: 400;">Tata's Memorial hospital, the largest and most prominent medical center in India, continues to set the standard for excellence in care. One of the list of the world’s best hospitals, in addition to naming it as one of the best smart hospitals and a leader in Cancer treatement. Tata's vision for global healthcare combines clinical excellence and medical innovation alongside international collaboration, and we employ these powerful resources to help patients worldwide.</p>
                </div>
                <div class="img-box">
                    <img src="../img/TMH_Exterior_01_1-scaled.jpg" alt="showcase-photo1 image">
                </div>
            </div>
        </div>
    </section>

    <section class="showcase7">
        <div class="container">
           <h1> Request a <span style="color: #0aedc0;">consultation</span></h1>
            <p>Tata Medical provides innovative, personalized medical care to patients from around the world. We are the largest, most comprehensive hospital in India and dedicated to providing advanced and compassionate medicine for everyone.</p>
            <p>We welcome all cases, including the rarest and the most challenging. Our medical teams collaborate to provide the best possible health outcomes. From your initial inquiry through the long-term follow-up care, we are here for you.</p>
            <p>Request a consultation and a Tata Case Manager will contact you shortly:</p>
            <div class="links">
                <a href="./patient.php" class="btn btn-primary btn-red">New Patient</a>
                <a href="./about.php" class="btn btn-primary btn-green">Current Patient</a>
                <a href="./refer.php" class="btn btn-primary btn-white">Refer a Patient</a>
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