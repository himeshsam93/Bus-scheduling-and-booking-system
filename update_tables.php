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
        $firstName = htmlspecialchars($_POST["txtFirstName"]);
        $lastName = htmlspecialchars($_POST["txtLastName"]);
        $contactNo = htmlspecialchars($_POST["txtTelNo"]);
        $email = htmlspecialchars($_POST["txtEmail"]);
        $accountType = htmlspecialchars($_POST["drpAccType"]);
        $username = htmlspecialchars($_POST["txtUsername"]);
        $password = htmlspecialchars($_POST["txtPass"]);
        $rePassword = htmlspecialchars($_POST["txtRePass"]);

        // array for append updating values
        $update_check = array();

        // chechking whether every varibale has a value to update in the db (if user inputted values to update)
        if(!empty($firstName)){

            $update_check["First_Name"] = $firstName;
        }
        if(!empty($lastName)){

            $update_check["Last_Name"] = $lastName;
        }
        if(!empty($contactNo)){

            $update_check["Contact_No"] = $contactNo;
        }
        if(!empty($email)){

            $update_check["Email"] = $email;
        }
        if(!empty($username)){

            $update_check["Username"] = $username;
        }
        if(!empty($password)){

            $update_check["Passwords"] = $password;
        }
        if(!empty($rePassword)){

            $update_check["Re_Password"] = $rePassword;
        }
        
        // checking the user type to differentiate
        if($accountType == "passenger"){
            
            $table = "Passenger";
            $idColumn = "Passenger_ID";

        } 

        else if($accountType == "driver"){

            $table = "Driver";
            $idColumn = "Driver_ID";
        }

        // if update values exists
        if(!empty($update_check)){

            foreach($update_check as $column => $value){

                $sql = "UPDATE $table SET $column = '$value' WHERE $idColumn = '$userID'";
                $result = $conn -> query($sql);
                
            }
           
        }
        else{

            echo"<script> alert('Enter data to update !') </script>";
        }

        // checking the database operation is done without errors
        if($result){

            echo "<script> alert('Updated the user successfully !') </script>";

            if($accountType == "passenger"){

                header("location: ./passengers.php");
            }
            else if($accountType == "driver"){

                header("location: ./drivers.php");

            }
            else{
                // Handle invalid account type
                echo "<script> alert('Invalid account type!') </script>";
                exit;
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

                        <h1 align="center"> Update User Accounts </h1>
                        <br>
                         <!-- update form-->
                        <div style="padding-left:420px;">
                            <div class="form-content container">

                                <script src="./js/sign_up.js"> </script>

                                <form name="frmUpdate" id="FrmUpdate" method="POST" action="./update_tables.php">
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


                                    <label for="first-name"> <p>First Name </p> </label>
                                    <br>
                                    <input type="text" name="txtFirstName" id="txtFirstName" placeholder="Enter your First Name">

                                    <br>
                                    <label for="last-name"><p>Last Name</p> </label>
                                    <br>
                                    <input type="text" name="txtLastName" id="txtLastName" placeholder="Enter your Last Name">

                                    <br>
                                    <label for="contact-no"><p>Contact Number</p></label>
                                    <br>
                                    <input type="tel" name="txtTelNo" id="txtTelNo" placeholder="0112344567" maxlength="10" pattern="[0-9]{10}" title="Contact Number must be in the following order, 0112345678">
                                    
                                    <br>
                                    <label for="email"><p>Email</p></label>
                                    <br>
                                    <input type="email" name="txtEmail" id="txtEmail" placeholder="your@example.com" pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$" title="Email must be in the following order, your@example.domain">
                                    
                                    <br>
                                    <label for="username"><p>Username</p></label>
                                    <br>
                                    <input type="text" name="txtUsername" id="txtUsername" placeholder="Enter your Username">

                                    <br>
                                    <label for="password"><p>Password</p></label>
                                    <br>
                                    <input type="password" name="txtPass" id="txtPass" placeholder="Create a Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">

                                    <br>
                                    <label for="Re-password"><p>Re-enter Password</p> </label>
                                    <br>
                                    <input type="password" name="txtRePass" id="txtRePass" placeholder="Re-enter your Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">

                                    <br>
                                    <input type="checkbox" name="shwPass" id="shwPass" value="yes" class="terms" onclick="showPassword()"> &nbsp;&nbsp;
                                    <label for="shwpass" class="terms"><p style="font-size: 12.5px; display: inline-block;">Show Password</p></label>
                                    <br>

                                    <br>
                                    <button type="submit" name="btnUpdate" id="btnUpdate" class="btn" style="background-color:green; color:white;">Update User</button>
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