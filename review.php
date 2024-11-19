<?php

// Starting the session for login activities
session_start();
// including the configuration file
require_once("./config.php");

// checking the submit button is clicked or not
if($_SERVER["REQUEST_METHOD"] == "POST"){

    $rating = $_POST["rating"];
    $review = $_POST["txtReviews"];

    $sql = "INSERT INTO customer_reviews (Rating, Description) VALUES ('$rating', '$review')";

    $result = $conn -> query($sql);

    if($result){

        echo "<script> alert('Successfully updated !') </script>";
    }
    else{

        echo"<script>alert ('Failed to add the record ! Unknown error occurred. !')</script>"; 
    }
    $conn -> close();
}


?>

<!--Ashika-->
<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <title>Review</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/ico" href="Assets/Logos/Favicon.png">
        <link rel="shortcut icon" type="image/x-icon" href="Assets/Logos/Favicon.png"/>
        <link rel="apple-touch-icon" href="Assets/Logos/Favicon.png">

        <link rel="stylesheet" type="text/css" href="css/Home.css">
        <link rel="stylesheet" type="text/css" href="css/Menu_bar.css">
        <link rel="stylesheet" type="text/css" href="css/Footer.css">
        <link rel="stylesheet" type="text/css" href="css/review.css">

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
            <div class="landing-page-container bg_image_container" style="height:1030px">
               <!--Menu Bar-->
                <?php
                    include("./menu_bar.php");
                ?>
                <!--Landing page content-->
                <br><br><br><br>
                <div class="customer-reviews">
                <center>
                    <div class="container1">

                        <form name="frmReviews" action="./review.php" method="POST">
                            
                            <h1>Rate your experience</h1>
                            <br><br>
                        <table border="0">
                            <tr>
                                <td>
                                    <h4 style="color:red;">Low</h4>
                                </td>

                                <td style="padding-top:15px">
                                    <div class="star-rating">
                                        <input type="radio" name="rating" value="1_star"> &nbsp;&nbsp;
                                        <input type="radio" name="rating" value="2_star">&nbsp;&nbsp;
                                        <input type="radio" name="rating" value="3_star">&nbsp;&nbsp;
                                        <input type="radio" name="rating" value="4_star">&nbsp;&nbsp;
                                        <input type="radio" name="rating" value="5_star">&nbsp;&nbsp;
                                        <br><br><br>
                                    </div>
                                </td>

                                <td>
                                    <h4 style="color:green;">High</h4>
                                </td>    
                            </tr>
                        </table>
                            <textarea cols="70" rows="18" name="txtReviews">Share your experience with us.....
                            </textarea>

                            <br><br>

                            <button type="submit" name="btnSubmit" id="btnSubmit" class="btn">Submit</button>
                        </form>
                    </div>
                </center>
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
