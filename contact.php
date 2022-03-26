<?php
    include __DIR__.'\scripts\contact-scripts.php';
?>

<!doctype html>
<html lang="en">

<head>
    <!--character width              -->
    <meta charset="utf-8">
    <!--page to fit screen at diff widths    -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-compatible" content="ie=edge">
    <!--  page title  -->
    <title>About</title>
    <!-- stylesheet reference   -->
    <link href="main.css" rel="Stylesheet" type="text/css" />
    <!-- icon -->
    <link rel="icon" href="images/Logop.jpg" type="image/x-icon">

</head>

<body>
    <div class="container">

        <div class="bg-img">
            <nav class="navbar">
                <!-- side navigation bar   -->
                <a href="#" onclick="OSM()">
                    <svg class="svg" width="30" height="30">
                        <path id="sgv1" d="M0,5 30,5" stroke="#fff" stroke-width="5"/>
                        <path id="sgv2" d= "M0,14 30,14" stroke="#fff" stroke-width="5"/>
                        <path id="sgv3" d= "M0,23 30,23" stroke="#fff" stroke-width="5"/>
                        
                    
                    </svg>
                </a>

                <ul class="navbar-nav">
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="order.html">ORDER</a></li>
                    <li><a class="active" href="#">CONTACT</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                    <li><a href="about.html">JOIN</a></li>
                </ul>
            </nav>
        </div>
        <div id="side-menu" class="side-nav">

            <a href="#" class="btn-close" onclick="CSM()">&times;</a>
            <!--  Side navigation bar links  -->
            <ul>
                <a href="index.html">HOME</a>
                <a href="order.html">ORDER</a>
                <a class="active" href="#">CONTACT</a>
                <a href="about.html">ABOUT</a>
                <a href="about.html">JOIN</a>
            </ul>
        </div>

        <!-- form -->

        <form id="contact" action="scripts/contact-scripts.php" method="POST">
            <!--contact us form-->
            <div class="formContainer">

                <h1>Cold food? Good experience? Whatever your feedback, we would like to hear it.</h1>
                <hr>

                <div id="fname">
                    <label for="contact"></label>
                    <input type="text" placeholder="Full Name" name="fname" required>
                </div>

                <label for="contact"></label>
                <input type="email"  placeholder="Email" name="email" required>

                <div id="rep">
                    <label for="contact"></label>
                    <input type="email" placeholder="Confirm Email" name="email-confirm" required>
                </div>


                <textarea id="mssg" placeholder="Write your message here" name="comments"></textarea><br />



                <!-- form -->

                <button name = "submit" type="submit" class="registerbtn">Submit</button>
            </div>


        </form>


        <script src="main.js"></script>
        <hr/>
        <footer>

            <div class="foot">

                <P>Get In Touch and Follow us</P>
                <nav class="nav1">
                    <ul class="nav_links">
                        <li>
                            <a href="https://www.facebook.com"><img src="images/facebook.jpg" alt="facebook icon"></a>
                        </li>
                        <li>
                            <a href="https://www.twitter.com"><img src="images/twitter.jpg" alt="twitter icon"></a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com"><img src="images/instagram.png" alt="instagram icon"></a>
                        </li>
                    </ul>
                    <P>PixelChills &#64;2022</P>
                </nav>
            </div>

        </footer>

    </div>
</body>

</html>