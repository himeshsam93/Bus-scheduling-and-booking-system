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
        <title>Driver</title>
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
            <div class="container_signin" style="height:1200px;">

                <div class="admin-container">
                    <!-- admin menu bar -->
                    <?php 

                        include("./admin_menubar.php");
                    ?>

                     <!--drivers summery -->

                    <div class="driver-content">

                        <h1 align="center"> List of Drivers </h1>
                        <br>
                        <h2 style="padding-left:130px; font-size:30px; display:inline-block;">Summary</h2>

                        <br>
                        <div align="center" >

                            <table border="1" width="70%" cellpadding="10" style="background-color:white;">

                                <tr>
                                    <?php

                                        $column_names = array("Driver_ID","First_Name", "Last_Name", "Contact_No","Email", "Account_Type","Username", "Passwords","Re_Password");
                                        for($i = 0; $i <= 8; $i++){

                                            echo"<th><p style='font-size:15px; color:black; font-weight:600;'>". $column_names[$i]. "</p></th>";
                                        }
                                        echo"<th><p <p style='font-size:15px; color:black;font-weight:600;'>Actions </p></th>";
    
                                    ?>
                                </tr>

                                <?php

                                    $sql_data = "SELECT * FROM Driver";
                                    $sql_count = "SELECT COUNT(*) AS Len FROM Driver";

                                    $result_data = $conn -> query($sql_data);
                                    $result_count = $conn -> query($sql_count);

                                    if($result_data -> num_rows > 0){

                                        $len = $result_count -> fetch_assoc();

                                        for($i = 0; $i < $len['Len']; $i++){

                                            $row_data = $result_data -> fetch_assoc();
                                            echo"<tr>";

                                            for($x = 0; $x <= 8; $x++){

                                                echo"<td><p style='font-size:14px; color:black;'>". $row_data[$column_names[$x]] ."</p></td>";

                                            }
                                            echo"<td colspan='2'>
                                                <a href='./update_tables.php' style='text-decoration: none; color:white;'><button style='background-color: green;color:white;padding: 3px; border-radius:3px; border-color:white;'> Edit</a> </button>
                                                <a href='./delete_tables.php' style='text-decoration: none; color:white;'><button style='background-color: red;color:white;padding: 3px; border-radius:3px; border-color:white;'> Delete</a> </button>
                                            </td>";
                                           
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