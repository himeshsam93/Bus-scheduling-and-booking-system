<?php 
    
    // Starting the session for login activities
    session_start();

?>

<html>
    <head>
        
    <meta charset="utf-8">
        <title>About Us</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/ico" href="Assets/Logos/Favicon.png">
        <link rel="shortcut icon" type="image/x-icon" href="Assets/Logos/Favicon.png"/>
        <link rel="apple-touch-icon" href="Assets/Logos/Favicon.png">

        <link rel="stylesheet" type="text/css" href="css/Home.css">
        <link rel="stylesheet" type="text/css" href="css/Menu_bar.css">
        <link rel="stylesheet" type="text/css" href="css/Footer.css">
        <link rel="stylesheet" type="text/css" href="css/about_us.css">
        <style>
        
            @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
             @import url('https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
            @import url('https://fonts.cdnfonts.com/css/evolventa');
            @import url('https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Syne:wght@400..800&display=swap');
        </style>

        <script src="./js/about_us.js"></script>
    </head>
     <!-- page background image-->
    <body>
         
        <div id="root">
            <div class="page-container bg_image_container_about">
               <!--Menu Bar-->
                <?php
                    include("./menu_bar.php");
                ?>
        
        
                <!-- NaviBus logo-->
                
                
                <!-- text using h1 and h3-->
                <h1 id="folks">The folks behind this system are</h1>
                <p class="website_making"> a talented group of developers who are students at SLIIT(Sri Lanka Institute of Information Technology).</p>
            
                <br><br><br><br>
                    
                
                    <!-- add a Bus image--> 
                    
                        <img src="./Assets/Images/About_us/bus.jpeg" class="Bimg">
                    <!-- Our story title--> 
                    
                    <h1 style="color:#8D8D97; font-size: 100px; padding-right: 100px; padding-top:80px;" align="right">Our story</h1>
                    
                    <div style="float:right; padding-right:50px;">
                        <div class="ourstory">
                            <!-- Our story Para--> 
                            <p>Our story begins with a group of passionate IT students from SLIIT who shared a common vision: to improve the way people move around 
                            cities. Fueled by their enthusiasm for technology and a desire to make a positive impact, they embarked on a journey to revolutionize 
                            bus scheduling. With dedication and perseverance, they combined their skills in software development, data analysis, and system optimization 
                            to create a solution that would streamline public transportation. Through countless hours of collaboration and innovation, they overcame challenges
                            and transformed their ideas into reality. Today, their bus scheduling system stands as a testament to their hard work and determination,
                            shaping the future of urban mobility one ride at a time.</p>
                            
                        </div>
                        <br><br><br><br>
                    </div>
                    
                    <!-- horizontal line--> 
                        <hr class="fade-in-text">
                        <br><br><br>

                        <center><h1 id="happy_team">we are a happy small team</h1></center>
                        <!-- description-->
                        <div class="description">
                        <p>We bring a fresh perspective and innovative ideas to the table</p>
                        </div>
                        <!--members-->
                        <div class="avatar-text">
                            <br>
                            <center><img id="avatar_img" border="0"></center>
                            <br>
                            <center><p id="para"></p></center>
                            <center><p id="para_name" style="color: white; font-weight: 500;"></p></center>
                        <center>
                        <table class="table1">
                        <tr>
                            
                            <td> <h1 id="mem1" onclick="members('mem1')" class="mem">Himesh Samarawickrama</h1></td>
                            <td> <h1 id="mem2" onclick="members('mem2')" class="mem">Shenali Gunerathne</h1></td>
                            <td><h1 id="mem3" onclick="members('mem3')" class="mem">Hasara Edirisinghe</h1></td>

                        </tr>

                        </table>
                    
                        <table class="table1">
                        <tr>
                    
                        <td> <h1 id="mem4" onclick="members('mem4')"  class="mem">Ryan Wijesekara</h1></td>
                        <td> <h1 id="mem5" onclick="members('mem5')" class="mem">Ashika Wijesundara</h1></td>

                        </tr>

                    

                        </table> 
                        
                    </center>
                    
                        </div>
                    <!-- horizontal line--> 
                    <hr class="fade-in-text">
                    <!-- passionate,Energetic,Achiever--> 
                    <center><h1 style="color: #aeb5d8; font-size: 50px;">Join a teams of makers</h1></center>
                    <p style=" margin-left: 100px;margin-right: 100px;text-align: center;color: #8D8D97;font-size: 30px;border: 2px solid lightgrey;">As problem solvers, we're a diverse team dedicated to crafting better bus schedules. Using technology and creativity, 
                        we optimize routes and minimize wait times, making commuters happier.</p>
                         <!--join a teem of workers --> 
                    <center>
                    <table class="table2">
                       
                        <tr>

                            <td class="td1"><img src="./Assets/Images/About_us/pas.png" width="40"  height="40"></td>
                            <td  class="td1"><img src="./Assets/Images/About_us/everget.png" width="40"  height="40"></td>
                            <td  class="td1"><img src="./Assets/Images/About_us/10846986.png" width="40" height="40"></td>
                            
                            
                        </tr>
                        <tr>
                            <td><p class="p2">Passionate</p><p class="p3">We're all about reimagining</p><p class="p3">bus scheduling with digital solutions</p></td>
                            <td><p class="p2">Energetic</p><p class="p3"> Our enthusiasm drives us to</p><p class="p3"> create dynamic solutions</p></td>
                            <td><p class="p2">Achiever</p><p class="p3"> Our drive pushes us to constantly</p><p class="p3"> improve and innovate, striving for optimal routes</p></td>
                            
                            
                        </tr>
                        </table>
                    </center>
                    <!-- marquee apply now--> 
                    <div class="border">
                        <marquee class="marquee" direction="left">
                            
                        <p class="apply_now">  Apply now!</p></marquee>
                    </div>
                
            </div>
        </div>           
               
                    
           <!--Footer Content-->
           <div class="footer-content">
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
               
    </body>
</html>

