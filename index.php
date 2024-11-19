<?php 
     // including the configuration file
    include("./config.php");
    // Starting the session for login activities
    session_start();

?>
<!--Himesh-->
<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <title>Home</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/ico" href="Assets/Logos/Favicon.png">
        <link rel="shortcut icon" type="image/x-icon" href="Assets/Logos/Favicon.png"/>
        <link rel="apple-touch-icon" href="Assets/Logos/Favicon.png">

        <link rel="stylesheet" type="text/css" href="css/Home.css">
        <link rel="stylesheet" type="text/css" href="css/Menu_bar.css">
        <link rel="stylesheet" type="text/css" href="css/Footer.css">
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
            @import url('https://fonts.cdnfonts.com/css/evolventa');
            @import url('https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Syne:wght@400..800&display=swap');
        </style>

        <script src="./js/Home.js"></script>

        
    </head>
    <body>
        <!--Home page content container-->
        <div id="root">
            <div class="landing-page-container bg_image_container" >
               <!--Menu Bar-->
                <?php
                    include("./menu_bar.php");
                ?>
                <!--Landing page content-->
               <div class="landing-text-images">
                    <br><br><br><br>
                    <table border="0" width="100%">
                        <tr>
                            <td>
                
                                <div class="tagline navibus" style="display: inline-block;">NaviBus,</div><div class="tagline" style="display: inline-block;">Your Portal to New Horizons!

                                <?php
                                    if(empty($_SESSION['username'])){

                                        $_SESSION['username'] = "";
                                    }
                                    if($_SESSION['username']){

                                        echo "<h2 style='font-size:25px;'>Welcome to NaviBus, $_SESSION[username] !</h2>";
                                    }   
                                ?>
                                </div>
                            </td>
                            <td>
                                <img src="Assets/Images/Home/bg_bus_curved_borederd.png" alt="Bus image" title="Bus" class="landing_image" align="right">

                            </td>
                        </tr>

                    </table>

                    <a href="./journey.php"><button type="button" class="book_now_button">Book Now</button></a>
                    
                    <br><br><br><br><br><br><br><br>
                    <!--Marquee client line-->
                    <div class="clients-marquee-line">

                        <div class="marquee_bg">

                            <div class="marquee">

                                <span>
                                    <img src="./Assets/Images/Home/Clients/Scania_logo.png" height="33" width="110" style="margin: 25px;" alt="client-01">
                                    <img src="./Assets/Images/Home/Clients/Golden_Drangon_logo.png" height="50" width="120" style="margin: 20px;" alt="client-02">
                                    <img src="./Assets/Images/Home/Clients/Higer_logo.png" height="40" width="160" style="margin: 20px;" alt="client-03">
                                    <img src="./Assets/Images/Home/Clients/King_Long_logo.png" height="40" width="160" style="margin: 20px;" alt="client-04">
                                    <img src="./Assets/Images/Home/Clients/Marcopolo_logo.png" height="30" width="210" style="margin: 27px;" alt="client-05">
                                    <img src="./Assets/Images/Home/Clients/Daimler_logo.png" height="40" width="130" style="margin: 20px;" alt="client-06">
                                    <img src="./Assets/Images/Home/Clients/Volvo_logo.png" height="18" width="95" style="margin: 32px;" alt="client-07">
                                    <img src="./Assets/Images/Home/Clients/Man_logo.png" height="40" width="70" style="margin: 27px;" alt="client-08">
                                </span>
                            </div>
                        </div> 
                           
                    </div>
                </div>
                <!--Our services -->
                <div class="our-services">
                    <div class="bg_image_container fade-in-text" style="background-image: url('Assets/Images/Home/our_services_bg3.png'); height: 900px;">

                        <br><br><br><br><br>

                        <h1 align="center">Our Services</h1>

                        <p align="center">Skip the hassle and book your bus ticket with NaviBus in seconds! <br>
                        No more waiting in lines, just a smooth journey to your happy place.</p>
                        <br>
                        <table border="0" width="75%" cellspacing="30" cellpadding="10" align="center">
                            <tr>
                                <td>
                                    <center>
                                        <h2 id="rcorners" align="left">Book bus tickets from anywhere, anytime.
                                            <p align="left" style="display: inline-block;">Book your ticket online anytime, anywhere, and avoid queues.</p>
                                        </h2>
                                    </center>
                                </td>
                                <td>
                                    <center>
                                        <h2 id="rcorners" align="left">Safe payment processing.
                                            <p align="left" style="display: inline-block;"> We use secure payment processors with encryption to protect your financial information.</p>
                                        </h2>
                                    </center>
                                </td>
                                <td>
                                    <center>
                                        <h2 id="rcorners" align="left">Get help with our 24/7 customer support.
                                            <p align="left" style="display: inline-block;">Our 24/7 customer support removes the uncertainty from your journey, allowing you to focus on your journey.</p>
                                        </h2>
                                    </center>
                                </td>
                            </tr>
                        </table>
                        <br><br><br>
                        <!--HR Line-->
                        <hr class="fade-in-text">
                    </div>
                </div>
                <!--Why choose us codes-->
                <div class="why-choose-us">
                    <div class="bg_image_container fade-in-text" style="background-image: url('Assets/Images/Home/why_choose_us_bg.png'); height: 900px;">

                        <br><br><br><br><br>

                        <h1 align="center">Why Choose Us</h1>
                        <br>
                        <center><h2 align="center" class="caption_choose_us" style="font-size: 35px;">Simpler. Smarter. Faster.</h2></center>
                        <p align="center"> Our online bus booking system is simple to use,<br> our technology is up to date, and our customer support team is available to assist you.
                        </p>
                        <br>
                        <table border="0" width="75%" cellspacing="30" cellpadding="10" align="center">
                            <!--Table row 1-->
                            <tr>
                                <td>
                                    <center>
                                        <h2 class="rcorners_2" align="left">Effortless Booking.
                                            <p align="left" style="display: inline-block;">Ditch the queues and long phone calls. Book your bus ticket in seconds with our platform.</p>
                                        </h2>
                                    </center>
                                </td>
                                <td>
                                    <center>
                                        <h2 class="rcorners_2" align="left">Save Time & Money.
                                            <p align="left" style="display: inline-block;"> Find the best deals with our competitive prices and transparent fee structure.</p>
                                        </h2>
                                    </center>
                                </td>
                                <td>
                                    <center>
                                        <h2 class="rcorners_2" align="left">Travel with Confidence.
                                            <p align="left" style="display: inline-block;">See real-time availability and confirm your seat selection instantly. No more worrying about last-minute surprises.</p>
                                        </h2>
                                    </center>
                                </td>
                            </tr>
                            <!--Table row 2-->
                            <tr>
                                <td>
                                    <center>
                                        <h2 class="rcorners_2" align="left">Flexibility at Your Fingertips.
                                            <p align="left" style="display: inline-block;">Need to change your plans? Manage your bookings with ease.</p>
                                        </h2>
                                    </center>
                                </td>
                                <td>
                                   <center> <img src="./Assets/Logos/stroke_logo.png" width="230" height="150" alt="NaviBus_Logo" title="NaviBus"></center>
                                   <!--<center> <div class="tagline navibus" style="padding: 0px;">NaviBus</div></center>-->

                                    
                                </td>
                                <td>
                                    <center>
                                        <h2 class="rcorners_2" align="left">Your Journey, Your Way.
                                            <p align="left" style="display: inline-block;">Choose your preferred seat for added comfort on longer trips.</p>
                                        </h2>
                                    </center>
                                </td>
                            </tr>
                           
                        </table>
                        <br><br>
                        <!--HR Line-->
                        <hr class="fade-in-text">

                    </div>
                    

                </div>
                <!--Some count that matters-->
                <div class="count-that-matters">
                    <br><br><br><br><br><br><br><br><br>
                    <br><br><br><br><br><br><br><br><br>
                    <br><br><br><br><br><br>

                    <div class="bg_image_container" style="height: 600px;">
                        <br><br><br><br><br>
                        <h1 align="center">Some Count That Matters</h1>
                        <p align="center">These are just a glimpse of the positive impact we're making on the bus travel industry. <br>We're constantly striving to improve, offering new features, expanding our network,
                            <br>and making bus travel booking the easiest and most convenient choice for everyone.
                        </p>
                        <br><br>

                        <table border="0" width="100%" cellpadding="10" align="center">
                            <tr>
                                <td>
                                    <center>
                                        <h3>100+ <br> Nice Buses</h3>
                                    </center>
                                </td>
                                <td>
                                    <center>
                                        <h3>250+<br> Journey Completed</h3> 
                                    </center>
                                </td>
                                <td>
                                    <center>
                                        <h3>50+ <br> Team Members</h3>
                                    </center>
                                </td>
                                <td>
                                    <center>
                                        <h3>10+ <br>Patnered Bus Providers</h3>
                                    </center>
                                </td>
                            </tr>
                        </table>
                        
                        
                    </div>
                </div>
                 <!--what our clients say-->
                <div class="what-our-passengers-say">

                    <div class="passengers-testinomial bg_image_container" style="height:600px; background-image: url('./Assets/Images/Home/our_services_bg3.png');">
                        <br><br><br><br><br>
                        <h1 align="center">What Our Passengers Say</h1>
                        <p align="center">Hear from our satisfied passengers about their experience travelling with us.</p>
                        <br><br>
                        <!--JS Passenger Avatar Appear -->
                        <div class="avatar-text">
                            <br>
                            <center><img id="avatar_img" border="0"></center>
                            <br>
                            <center><p id="para"></p></center>
                            <center><p id="para_name" style="color: white; font-weight: 500;"></p></center>
                          
                            <!--Passenger Buttons -->
                            <table border="0"cellpadding="10" width="75%" align="center">
                                <tr>
                                    <td>
                                        <button name="btnSanga" id="btn1" onclick="Passengers_Testimonials('btn1')" class="book_now_button">Kumar Sangakkara</button>
                                    </td>
                                    <td>
                                        <button name="btnOtara" id="btn2" onclick="Passengers_Testimonials('btn2')"  class="book_now_button">Otara Gunewardene</button>
                                    </td>
                                    <td>
                                        <button name="btnSaranga" id="btn3" onclick="Passengers_Testimonials('btn3')"  class="book_now_button">Saranga Dissasekara</button>
                                    </td>
                                </tr>
                            </table>
                            <br><br><br>
                            <hr class="fade-in-text">
                            <br><br><br>
                           
                        </div>
                    </div>
                </div>
                <!--Footer Content-->
                <div class="footer-content">
                    <br><br><br> <br><br><br><br><br><br>
                    <br><br><br><br><br><br><br>
                    <div class="footer">
                        <footer>
                            <br><br><br><br>
                            <table border="0" width="100%" cellpadding="10">
                                <tr>
                                    <td>
                                        <!--Menubar NaviBus logo-->
                                        <div class="menu-bar-logo" style="display: inline-block;">
                                            <br>
                                            <a href="./index.html" target="_self"> 
                                                <img src="./Assets/Logos/NaviBus_Logo.png" alt="NaviBus Logo" title="Logo" class="menu_bar_logo" style="height: 45px;width: 55px; padding-left: 80px;">
                                                
                                            </a>  
                                            <p class="footer_text" style="padding-left: 80px;">&copy; 2024 NaviBus. All Rights Reserved.</p>
                                            <br><br><br><br>
                                            <div class="Scocial-media-icons" style="display: inline-block;">

                                                <img src="./Assets/Images/Home/fb.png" class="social_media" style="padding-left: 80px; width: 17px;height: 17px; ">
                                                <img src="./Assets/Images/Home/x.png" class="social_media">
                                                <img src="./Assets/Images/Home/Instagram.png" class="social_media">
                                                <img src="./Assets/Images/Home/LinkedIn.png" class="social_media">
                                                <img src="./Assets/Images/Home/Google.png" class="social_media">
                                                <img src="./Assets/Images/Home/YT.png" class="social_media" style="width: 20px;">
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="footer_text" style="padding-top: 25px;"><b>Links</b></p>
                                        <br>
                                        <a href="/index.html"><p class="footer_text">Home</p></a>
                                        <p class="footer_text">Clients</p>
                                        <p class="footer_text">Careers</p>
                                        <p class="footer_text">About</p>
                                        <p class="footer_text">Support</p>
                                    </td>
                                    <td style="vertical-align: top;">
                                        <p class="footer_text" style="padding-top: 25px;"><b>Legal</b></p>
                                        <br>
                                        <p class="footer_text">Terms & Conditions</p>
                                        <p class="footer_text">Privacy policy</p>
                                        <p class="footer_text">Cookie policy</p>
                            
                                    </td>
                                    <td style="vertical-align: top;">
                                        <p class="footer_text" style="padding-top: 25px;"><b>Get In Touch</b></p>
                                        <br>
                                        <p class="footer_text">Malabe, Sri Lanka</p>
                                        <p class="footer_text">xxx-xxxx</p>
                                        <p class="footer_text">info@navibus.com</p>
                            
                                    </td>
                                </tr>
                            </table>
                            <br><br><br><br>

                        </footer>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>