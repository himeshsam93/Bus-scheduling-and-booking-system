<?php 
    // including the configuration file
    require("./config.php");
    session_start();
    
    if(!isset($_SESSION["admin_username"])){

        header("location: ./signin.php");
    }


?>


<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <title>Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/ico" href="../Assets/Logos/Favicon.png">
        <link rel="shortcut icon" type="image/x-icon" href="../Assets/Logos/Favicon.png"/>
        <link rel="apple-touch-icon" href="../Assets/Logos/Favicon.png">

        <link rel="stylesheet" type="text/css" href="css/Home.css">
        <link rel="stylesheet" type="text/css" href="css/Footer.css">
        <link rel="stylesheet" type="text/css" href="css/Sign_up.css">
        <link rel="stylesheet" type="text/css" href="css/dashboard.css">
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
            @import url('https://fonts.cdnfonts.com/css/evolventa');
            @import url('https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Syne:wght@400..800&display=swap');
        </style>
        
    </head>
    <body>
        <!-- page content container-->
        <div id="root">

            <!-- sign in container-->
            <div class="container_signin" style="height:1000px;">

                <div class="admin-container">
                    <!-- admin menu bar -->
                    <?php 

                        include("./admin_menubar.php");
                    ?>

                     <!-- dashboard summery -->

                    <div class="dashboard-content">

                        <h1 align="center"> Dashboard </h1>
                        <br>
                        <h2 style="padding-left:200px; font-size:30px; display:inline-block;">Summary</h2>
                        <table border="0" width="75%" cellspacing="30" cellpadding="10" align="center">

                            <tr>
                                <td>
                                    <center>
                                        <div class="rcontainer">

                                            <center><img src="./Assets/Images/Dashboard/passengers.png" style="width:50px; height:50px; padding:20px;"></center>
                                            <h2 style="color:black; text-align:center">150+ Passengers</h2>
                                    
                                        </div>
  
                                    </center>
                                </td>
                                <td colspan="2">
                                    <center>
                                        <div class="rcontainer" style="width:690px;">

                                            <center><img src="./Assets/Images/Dashboard/feedback.png" style="width:60px; height:60px; padding:20px;"></center>
                                            <h2 style="color:black; text-align:center">
                                                100+ Passenger feedbacks on Google<br> 
                                                40+ <div style='color:green; display:inline-block'>5</div> star ratings <br>

                                            </h2>
                                            </div>
                                    </center>
                                </td>
                            </tr>
                            <!-- table row 2-->
                            <tr>
                                <td>
                                    <center>
                                        <div class="rcontainer">

                                            <center><img src="./Assets/Images/Dashboard/journey2.png" style="width:60px; height:60px; padding:20px;"></center>
                                            <h2 style="color:black; text-align:center">250 Journeys completed</h2>
                                        </div>
  
                                    </center>
                                </td>
                                <td>
                                    <center>
                                        <div class="rcontainer">

                                            <center><img src="./Assets/Images/Dashboard/driver.png" style="width:60px; height:60px; padding:20px;"></center>
                                            <h2 style="color:black; text-align:center">20 Drivers</h2>
                                            </div>
                                    </center>
                                </td>
                                <td>
                                    <center>
                                        <div class="rcontainer">

                                            <center><img src="./Assets/Images/Dashboard/client.png" style="width:60px; height:60px; padding:20px;"></center>
                                            <h2 style="color:black; text-align:center">10 Clients</h2>
                                        </div>
                                    </center>
                                </td>
                            </tr>

                        </table>
                        
                    </div>
        
                </div>  
                <!-- footer content-->
                    <div class="footer-content">

                        <br>

                        <table border="0" width="100%" style="padding-bottom: 0;">

                            <tr>
                                <td>
                                    <p style="padding-left: 80px; font-size: 12px; display: inline;">&copy; 2024 NaviBus. All Rights Reserved.</p>
                                </td>
                                <td align="right" style="padding-right: 60px;">
                                     
                                    <img src="./Assets/Images/Sign up/mail.png" width="18" height="18" style="display: inline-block;">
                                    <p style="font-size: 12px; display: inline;">info@navibus.com</p>

                                </td>
                            </tr>
                        </table>
                    </div>  
            </div>
        </div>
    </body>
</html>