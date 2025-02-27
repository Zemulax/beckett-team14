<!doctype html>
<html lang="en">

<head>
    <!--character width              -->
    <meta charset="utf-8">
    <!--page to fit screen at diff widths    -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-compatible" content="ie=edge">
    <!--  page title  -->
    <title>About Us</title>
    <!-- stylesheet reference   -->
    <link href="main.css" rel="Stylesheet" type="text/css" />
    <!-- icon -->
    <link rel="icon" href="images/Logop2.jpg" type="image/x-icon">
     <!-- social media icons -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">


</head>

<body>
    <div class="container">

    <div class="all_nav">
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
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="order.php">ORDER</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                    <li><a class="active" href="#">ABOUT</a></li>
                    <li><a href="signIn.php">SIGN IN</a></li>
                    <li><a href="ourLocation.php">FIND US</a></li>
                </ul>
            </nav>
        </div>
        </div>
        <div id="side-menu" class="side-nav">

        <a href="#" class="btn-close" onclick="CSM()"><img src="icons/bak.png" alt="back icon" /></a>
            <!--  Side navigation bar links  -->
            <ul>
                <a href="index.php">HOME</a>
                <a href="order.php">ORDER</a>
                <a href="contact.php">CONTACT</a>
                <a class="active" href="#">ABOUT</a>
                <a href="signIn.php">ACCOUNT</a>
                <li><a href="ourLocation.php">LOCATION</a></li>
            </ul>
        </div>


        <div class="main">
            <!--main page content-->


            <span id="abtI">
                <img src="images/chambo.jpg" alt="Chambo">
                <div id="abtT">

                <div class="ourStoryHeading">
                    ABOUT US
                </div>
                
                <div class="ourStory">
                    We are an independent family run café in the bustling district of Little London in the heart of Leeds city centre. 
                    As a family run business we put passion and integrity into everything we do. 
                    Who we are at work is who we are at home. 
                    We believe that good food and great company should be shared wherever you are, so pop in soon. 
                </div>
                     </div>

                <div class="ourValuesHeading">
                    OUR VALUES
                </div>

                <div class="ourValuesBody">
                   We work closely with our local communities and suppliers to provide you with the very best experience.

                </div>

                <div class="recyclingHeading">
                    RECYCLING SCHEME
                </div>
                
                <div class="recyclingBody">
                    We liaise with local city councils to ensure we recycle whatever produce we can. Waste not want not.
                </div>
                
            </span>
            
         

        <!-- page footer  !-->
        <footer class="footer">
            <!-- javascript link   !-->
        <script src="main.js"></script>
    
        <div class="fcontainer"><!-- the whole footer section  !-->
            <div class="row">
                <div class="footer-col">
                    <ul>             <!--  navbar links in the footer section !-->
                        <li><a href="#">HOME</a></li>
                        <li><a href="order.php">ORDER</a></li>
                        <li><a href="contact.php">CONTACT</a></li>
                        <li><a href="about.php">ABOUT</a></li>
                        <li><a href="signIn.php">SIGN UP TODAY</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <ul>
                                       <!--  other links !-->
                        <li><a href="#">FIND PIXEL</a></li>
                        <li><a href="#">CAREERS</a></li>
                        <li><a href="#">HELP</a></li>
                        <li><a href="#">ADS AND COOKIES</a></li>



                    </ul>
                </div>
                <div class="footer-col">

                    <ul>           <!-- other links  !-->
                        <li><a href="#">PRIVACY</a></li>
                        <li><a href="#">POLICIES</a></li>
                        <li><a href="#">TERMS AND CONDITIONS</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3>FOLLOW US</h3>
                    <div class="socialM-links"> <!--  social media links !-->

                        <a href="https://facebook.com"><em class="fab fa-facebook-f"></em></a>
                        <a href="https://twitter.com"><em class="fab fa-twitter"></em></a>
                        <a href="https://whatsapp.com"><em class="fab fa-whatsapp"></em></a>
                        <a href="https://microsoft.com"><em class="fab fa-microsoft"></em></a>


                    </div>

                </div>

            </div>
        </div>
        <hr/>
        <span class="pix"> <!-- name declaration  !-->
           <P>© PIXELCHILLS. All Rights Reserved.</P>
         </span>


    
        </footer>

    </div>
</body>

</html>