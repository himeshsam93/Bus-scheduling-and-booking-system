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
        <title>Reviews</title>
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

         <!-- script tag included in the form-content container -->
        
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

                     <!-- feedbacks summery -->

                    <div class="feedback-content">

                        <h1 align="center"> List of Passenger Reviews </h1>
                        <br>
                        <h2 style="padding-left:220px; font-size:30px; display:inline-block;">Summary</h2>

                        <br>
                        <div align="center" >

                            <table border="1" width="70%" cellpadding="10" style="background-color:white;">

                                <tr>
                                    <?php

                                        $column_names = array("Review_ID", "Rating", "Description");
                                        for($i = 0; $i <= 2; $i++){

                                            echo"<th><p style='font-size:15px; color:black; font-weight:600;'>". $column_names[$i]. "</p></th>";
                                        }
                                       
                                       

                                    ?>
                                </tr>

                                <?php

                                    $sql_data = "SELECT * FROM Customer_Reviews";
                                    $sql_count = "SELECT COUNT(*) AS Len FROM Customer_Reviews";

                                    $result_data = $conn -> query($sql_data);
                                    $result_count = $conn -> query($sql_count);

                                    if($result_data -> num_rows > 0){

                                        $len = $result_count -> fetch_assoc();

                                        for($i = 0; $i < $len['Len']; $i++){

                                            $row_data = $result_data -> fetch_assoc();
                                            echo"<tr>";

                                            for($x = 0; $x <= 2; $x++){

                                                echo"<td><p style='font-size:14px; color:black;'>". $row_data[$column_names[$x]] ."</p></td>";

                                            }
                                           
                                            echo "</tr>";
                                        }
                                    }

                            
                                ?>
                        
                            </table>
                        </div>
                        
                        
                    </div>
        
                </div>  
                <!-- footer content-->
                    <div class="footer-content">

                        <br><br><br>

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