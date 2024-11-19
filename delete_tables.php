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

        $userID = htmlspecialchars($_POST["txtUserId"]);
        $accountType = htmlspecialchars($_POST["drpAccType"]);
        
        // checking the user type to differentiate
        if($accountType == "passenger"){
            
            $table = "Passenger";
            $idColumn = "Passenger_ID";

        } 

        else if($accountType == "driver"){

            $table = "Driver";
            $idColumn = "Driver_ID";
        }
        else{
            // Handle invalid account type
            echo "<script> alert('Invalid account type!') </script>";
            exit;
        }

        $sql = "DELETE FROM $table WHERE $idColumn = '$userID'";
        $result = $conn -> query($sql);

         // checking the database operation is done without errors
        if($result){

            echo "<script> alert('Deleted the the successfully !') </script>";

            if($accountType == "passenger"){

                header("location: ./passengers.php");
            }
            else if($accountType == "driver"){

                header("location: ./drivers.php");

            }
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
            <div class="container_signin" style="height:840px;">

                <div class="admin-container">
                    <!-- admin menu bar -->
                    <?php 

                        include("./admin_menubar.php");
                    ?>

                     <!--Delete -->

                    <div class="passenger-content">

                        <h1 align="center"> Delete User Accounts</h1>
                        <br>
                        <div style="padding-left:420px;">
                            <div class="form-content container">

                                <script src="./js/sign_up.js"> </script>

                                  <!--Delete form-->
                                <form name="frmDelete" id="FrmDelete" method="POST" action="./delete_tables.php">
                                    <br><br>

                                    <label for="ID"> <p> User ID</p> </label>
                                    <br>
                                    <input type="text" name="txtUserId" id="txtUserId" placeholder="Enter the User Account ID">

                                    <br>
                                    <label for="Account-type"><p>Choose Your Account Type</p> </label>
                                    <br>
                                    <select name="drpAccType" id="drpAccType" style="width:83.5%; height: 32px; cursor: pointer;">
                                        <option value="">Choose a Account Type</option>
                                        <option value="passenger">Passenger Account</option>
                                        <option value="driver">Driver Account</option>
                                    </select>

                                    <br><br><br>
                                    <button type="submit" name="btnDelete" id="btnDelete" class="btn" style="background-color:red; color:white;">Delete User</button>
                                    <br>
                                </form>  
                            </div>
                        </div>
                    </div>
                </div>  
                <!-- footer content-->
                    <div class="footer-content">

                        <table border="0" width="100%" style="padding-bottom: 0; padding-top:250px;">

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