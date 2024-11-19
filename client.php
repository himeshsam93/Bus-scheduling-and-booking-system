<!--Ashika-->
<?php 
    // Starting the session for login activities
    session_start();

?>
<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <title>Client</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/ico" href="Assets/Logos/Favicon.png">
        <link rel="shortcut icon" type="image/x-icon" href="Assets/Logos/Favicon.png"/>
        <link rel="apple-touch-icon" href="Assets/Logos/Favicon.png">

        <link rel="stylesheet" type="text/css" href="css/Home.css">
        <link rel="stylesheet" type="text/css" href="css/client.css">
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
            <div class="landing-page-container bg_image_container_client" style="height:2400px">
               <!--Menu Bar-->
               <?php
                    include("./menu_bar.php");
                ?>

                <!--Landing page content-->
                <div class="cap">
                <p ><center>Life is a journey, not a destination..Enjoy the ride!!</center></p>
                </div>

                <!--Text-->
                <div class="text">
                <p><center>We feature an exhaustive online bus booking platform for purchasing tickets.
                    <br> With NaviBus' efficient bus reservation system, you may schedule your travel in advance,
                    <br> save time by reserving a seat, avoiding waiting in long queues, and have a comfortable and enjoyable trip.</center>
                </p>
                <div>

                <h1 class="heading"><center>Trusted by leading companies</center></h1>
                <!--bus brand cards -->
                <div class="container">
                    <div class="card">
                        <img src="./Assets\Images\client\Daimler_logo.png" alt="Mercidies Daimler" width="300px" height="auto">
                        <br><br>
                        <h2 class="head">Mercidies Daimler</h2>
                        <a href="https://www.daimlertruck.com/en/company/daimler-buses" class="btn" style="float:right">Read More</a>
                    </div> 
                    
                    <div class="card">
                        <img src="./Assets\Images\client\Golden_Drangon_logo.png" alt="Golden Drangon" width="auto" height="100">
                        <h2 class="head">Golden Drangon</h2>
                        <div style="float:right;padding-top:110px">
                        <a href="https://www.goldendragonbus.com/" class="btn">Read More</a>
                        </div>
                    </div>

                    <div class="card">
                        <img src="./Assets\Images\client\Higer_logo.png" alt="Higer" width="400px" height="auto">
                        <br><br>
                        <h2 class="head">Higer</h2>
                        <a href="https://en.higer.com/" class="btn" style="float:right">Read More</a>
                    </div>

                    <div class="card">
                        <img src="./Assets\Images\client\King_Long_logo.png" alt="King Long" width="400px" height="auto">
                        <br><br><br>
                        <h2 class="head">King Long</h2>
                        <a href="http://www.kinglong-bus.com/" class="btn" style="float:right">Read More</a>
                    </div>

                    <div class="card">
                        <h1 style="font-size:35px"><center>"Riding in style:<br> where comfort meets efficiency."</center></h1>
                    </div>

                    <div class="card">
                        <img src="./Assets\Images\client\Marcopolo_logo.png" alt="Marcopolo" width="435px" height="auto">
                        <br><br><br><br>
                        <h2 class="head">Marcopolo</h2>
                        <a href="https://www.marcopolo.com.br/en" class="btn" style="float:right">Read More</a>
                    </div>

                    <div class="card">
                        <img src="./Assets\Images\client\Scania_logo.png" alt="Scania" width="400px" height="auto">
                        <h2 class="head">Scania</h2>
                        <a href="https://www.scania.com/group/en/home/products-and-services/buses-and-coaches.html" class="btn" style="float:right">Read More</a>
                    </div>

                    <div class="card">
                        <h1 style = "font-size : 35px"><center>"Seamless journeys,<br>memorable moments."</center></h1>
                    </div>

                    <div class="card">
                        <img src="./Assets\Images\client\Yutong_logo.png" alt="Yutong" width="170px" height="auto">
                        <h2 class="head">Yutong</h2>
                        <div style="float:right;padding-top:110px">
                            <a href="https://en.yutong.com/" class="btn">Read More</a>
                        </div>
                    </div>

                    <div class="card">
                        <img src="./Assets\Images\client\Zhong_Tong_logo.png" alt="Zhong Tong" width="400px" height="auto">
                        <br><br>
                        <h2 class="head">Zhong Tong</h2>
                        <a href="http://www.zhongtongbuses.com/" class="btn" style="float:right">Read More</a>
                    </div>

                    <div class="card">
                        <img src="./Assets\Images\client\Man_logo.png" alt="Man" width="180px" height="auto">
                        <h2 class="head">Man</h2>
                        <div style="float:right;padding-top:110px">
                        <a href="https://www.man.eu/corporate/en/homepage.html" class="btn">Read More</a>
                        </div>
                    </div>

                    <div class="card">
                        <img src="./Assets\Images\client\Volvo_logo.png" alt="Volvo" width="400px" height="auto">
                        <br><br><br><br>
                        <h2 class="head">Volvo</h2>
                        <a href="https://www.volvobuses.com/en/" class="btn" style="float:right">Read More</a>
                    </div>  
                </div>   
                <br><br><br>

                <!-- text2 -->
                <div class="text2">
                    <p><center>Our platform connects reliable partners with spacious vehicles, ensuring seamless journeys for our valued travelers.
                        <br> With a commitment to punctuality and safety, our collaborators maintain fleets equipped with modern amenities. 
                        <br>From urban commutes to cross-country adventures, our network of providers ensures passengers experience comfort and efficiency on every ride.
                    </center></p>
                </div>   
                
                <!-- what our client say -->
                <div class="what-our-clients-say">

                    <div class="clientsay">
                    <br><br><br><br>
                    <h1 align="center">What Our Clients Say</h1>

                    <div>

                        <br>
                        <center><img id="client_img"></center>
                        <br>
                        <center><p id="para"> </p></center>
                        <br>
                        <center><p id="para_name" style="color:white; font-size:30px; font-weight:500;"></p></center>
                        <br><br>

                        <script src="./js/client.js"></script>

                        <table border="0" width="75%" align="center">

                            <tr>

                                <td>
                                    <center>
                                    <button name="btnMercedes" id="btn1" onclick="clientReviews('btn1')" class="book_now_button">CEO of Mercedes </button>
                                    </center>
                                </td>

                                <td>
                                    <center>
                                    <button name="btnVolvo" id="btn2" onclick="clientReviews('btn2')" class="book_now_button">CEO of Volvo </button>
                                    </center>
                                </td>

                            </tr>
                        </table>
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
