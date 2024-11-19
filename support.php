<?php 
     // including the configuration file
    include("./config.php");
    // Starting the session for login activities
    session_start();

?> 
<!--Shenali-->
<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <title>Support</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/ico" href="Assets/Logos/Favicon.png">
        <link rel="shortcut icon" type="image/x-icon" href="Assets/Logos/Favicon.png"/>
        <link rel="apple-touch-icon" href="Assets/Logos/Favicon.png">

        <link rel="stylesheet" type="text/css" href="css/Home.css">
        <link rel="stylesheet" type="text/css" href="css/Menu_bar.css">
        <link rel="stylesheet" type="text/css" href="css/Footer.css">
        <link rel="stylesheet" type="text/css" href="css/support.css">
        
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
            @import url('https://fonts.cdnfonts.com/css/evolventa');
            @import url('https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Syne:wght@400..800&display=swap');
        </style>

       

        
    </head>
    <body>
        <!--Support page content container-->
        <div id="root">
            <div class="bg_image_container_about">
               <!--Menu Bar-->
                <?php
                    include("./menu_bar.php");
                ?>
                <!--Insert Bus Image-->
               <img src="./Assets/Images/img/bus1.jpg" class="bus">
               <!--NaviBus heading-->
               <center><h3><u>NaviBus Support</u></h3></center><br><br>
               <center><div class="supp1" style="border: 1px solid #dab5eb; width:800px;">
               <p align="center" class="supp">Welcome to our support page! At <b>NaviBus</b>,
                we're dedicated to providing you with the best assistance possible.
                 Whether you have questions about our products, need help with an reservation, 
                 our team is here to help. We value your satisfaction and strive to ensure a seamless experience for every customer.
                  Thank you for choosing <b>NaviBus</b> for your needs we're here to support you every step of the way.</p></div></center><br>
                  <br>
                 <hr class="fade-in-text">
                 <br>
                 <br>
               <!--form-->
               <center>
               <form class="custom1">
                <p>How can we help you?</p>
                <input type="text" style="width:600px;"><br><br>
                <p >What information are you looking for?</p> 
                <select id="question" name="question"  class="qs">
                    <option>Select</opton>
                    <option>Refund issue</opton>
                    <option>Reservation issue</option>
                    <option>Payment issue</option>
                </select>
                
                <p class="border">Contact Us<br>
                <label >Name: </label>
                <input type="text"><br>
                <label >Email: </label>
                <input type="email"><br>
                <label >Subject: </label>
                <input type="text"><br>
                <label style="margin-right:180px;">Issue: </label>
                <textarea  cols="20" rows="5" style="margin-left:80px"></textarea>
            </p>
            <button onclick="showConfirmation()" class="custom-button">Submit</button>
            <input type="submit" class="custom-button1" value="Cancel">
</center>

<script>
        function showConfirmation() {
            if (confirm("Are you sure you want to submit?")) {
                // If user clicks OK, submit the form or perform any other action
                alert("Form submitted successfully!");
            } else {
                // If user clicks Cancel, do nothing or perform any other action
                alert("Submission canceled.");
            }
        }
    </script>


            <br><br>
</form>
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