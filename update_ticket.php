<?php 
    // including the configuration file
    require("./config.php");
    session_start();
    
    if(!isset($_SESSION["admin_username"])){

        header("location: ./signin.php");
    }


?>

<?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $busID = htmlspecialchars($_POST["txtBusId"]);
        $startingPoint = htmlspecialchars($_POST["txtStartingPoint"]);
        $destination = htmlspecialchars($_POST["txtDestination"]);
        $ticketPrice = htmlspecialchars($_POST["txtTicketPrice"]);
        $startTime = htmlspecialchars($_POST["txtstartTime"]);

        // array for append updating values
        $update_check = array();

        // chechking whether every varibale has a value to update in the db (if user inputted values to update)
        if(!empty($busID)){

            $update_check["Bus_ID"] = $busID;
        }
        if(!empty($startingPoint)){

            $update_check["Starting_Point"] = $startingPoint;
        }
        if(!empty($destination)){

            $update_check["Destination"] = $destination;
        }
        if(!empty($ticketPrice)){

            $update_check["Ticket_Price"] = $ticketPrice;
        }
        if(!empty($startTime)){

            $update_check["Start_Time"] = $startTime;
        }
        

        // if update values exists
        if(!empty($update_check)){

            foreach($update_check as $column => $value){

                $sql = "UPDATE Price SET $column = '$value' WHERE Bus_ID = '$busID'";
                $result = $conn -> query($sql);
                
            }
           
        }
        else{

            echo"<script> alert('Enter data to update !') </script>";
        }

        // checking the database operation is done without errors
        if($result){

            echo "<script> alert('Updated the user successfully !') </script>";

            header("location: ./ticket_price.php");

        }
        else{
            
            echo "<script> alert('Failed to add the record ! Unknown error occurred.') </script>";
            
        }
        $conn -> close();
    }
    

?>


<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <title>Update</title>
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
            <div class="container_signin" style="height:1230px;">

                <div class="admin-container">
                    <!-- admin menu bar -->
                    <?php 

                        include("./admin_menubar.php");
                    ?>

                     <!-- update -->

                    <div class="update-content">

                        <h1 align="center"> Update Ticket Prices </h1>
                        <br>
                         <!-- update form-->
                        <div style="padding-left:420px;">
                            <div class="form-content container">

                                <script src="./js/sign_up.js"> </script>

                                <form name="frmUpdate" id="FrmUpdate" method="POST" action="./update_ticket.php">
                                    <br><br>

                                    <label for="ID"> <p> Bus ID</p> </label>
                                    <br>
                                    <input type="text" name="txtBusId" id="txtBusId" placeholder="Enter the Bus ID">

                                    <br>
                                
                                    <label for="startingPoint"> <p>Starting Point</p> </label>
                                    <br>
                                    <input type="text" name="txtStartingPoint" id="txtStartingPoint" placeholder="Enter your Starting Point">

                                    <br>
                                    <label for="destination"><p>Destination</p> </label>
                                    <br>
                                    <input type="text" name="txtDestination" id="txtDestination" placeholder="Enter your Destination">

                                    <br>
                                    <label for="ticket-price"><p>Ticket Price</p></label>
                                    <br>
                                    <input type="txt" name="txtTicketPrice" id="txtTicketPrice" placeholder="Enter a ticket price">
                                    
                                    <br>
                                    <label for="start-time"><p>Start Time</p></label>
                                    <br>
                                    <input type="text" name="txtstartTime" id="txtstartTime" placeholder="00:00:00:">
                                    
                                    <br>
                                    <button type="submit" name="btnUpdate" id="btnUpdate" class="btn" style="background-color:green; color:white;">Update Ticket</button>
                                    <br>
                                </form> 
                            </div>
                        </div>
                    </div>
        
                </div>  
                <!-- footer content-->
                    <div class="footer-content">

                        <table border="0" width="100%" style="padding-bottom: 0; padding-top:100px;">

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