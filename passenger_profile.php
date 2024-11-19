
<?php 
// including the configuration file
include("./config.php");
 // Starting the session for login activities
session_start();

if(!isset($_SESSION["username"])){

   header("location: ./signin.php");
}

?>
<?php
    $user = $_SESSION["username"];
    $sql1="SELECT * FROM Passenger WHERE Username = '$user'";
    $result_1 = $conn -> query($sql1);

    $row1 = $result_1 -> fetch_assoc();

    $firstname = $row1["First_Name"];
    $lastname = $row1["Last_Name"];
    $email = $row1["Email"];
    $username = $row1["Username"];
    $contactnumber = $row1["Contact_No"];
    $acctype = $row1["Account_Type"];



?>
<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

   //$userID = htmlspecialchars($_POST["UserId"]);
    $FirstName = htmlspecialchars($_POST["F_Name"]);
    $LastName = htmlspecialchars($_POST["L_Name"]);
    $ContactNumber = htmlspecialchars($_POST["TelNo"]);
    $Email = htmlspecialchars($_POST["Email"]);
    //$accountType = htmlspecialchars($_POST["drpAccType"]);
    // $Username = htmlspecialchars($_POST["Username"]);
    $Password = htmlspecialchars($_POST["Pass"]);
    $RePassword = htmlspecialchars($_POST["RePass"]);




    // array for append updating values
    $update_check = array();
    

    // chechking whether every varibale has a value to update in the db (if user inputted values to update)

   
    if(!empty($FirstName)){

        $update_check["First_Name"] = $FirstName;
    }
    if(!empty($LastName)){

        $update_check["Last_Name"] = $LastName;
    }
    if(!empty($ContactNumber)){

        $update_check["Contact_No"] = $ContactNumber;
    }
    if(!empty($Email)){

        $update_check["Email"] = $Email;
    }
    if(!empty($Username)){

        $update_check["Username"] = $Username;
    }
    if(!empty($Password)){

        $update_check["Passwords"] = $Password;
    }
    if(!empty($RePassword)){

        $update_check["Re_Password"] = $RePassword;
    }

    // if update values exists
    if(!empty($update_check)){

        foreach($update_check as $column => $value){

            $sql = "UPDATE Passenger SET $column = '$value' WHERE Username  = '$username'";
            $result = $conn -> query($sql);
            
        }
       
    }
    else{

        echo"<script> alert('Enter data to update !') </script>";
    }

    // checking the database operation is done without errors
    if($result){

        echo "<script> alert(' successfully updated the Passenger profile !') </script>";
        
       
        
    }
    else{
        
        echo "<script> alert('Failed to add the record ! Unknown error occurred.') </script>";
        
    }
    
   
   $sql1="SELECT * FROM Passenger WHERE Username = '$username'";
   $result_1 = $conn -> query($sql1);

   $row1 = $result_1 -> fetch_assoc();

   $firstname = $row1["First_Name"];
   $lastname = $row1["Last_Name"];
   $email = $row1["Email"];
   $username = $row1["Username"];
   $contactnumber = $row1["Contact_No"];




    $conn -> close();
    
    
}
?>

<!--Shenali-->
<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <title>Passenger Profile</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/ico" href="Assets/Logos/Favicon.png">
        <link rel="shortcut icon" type="image/x-icon" href="Assets/Logos/Favicon.png"/>
        <link rel="apple-touch-icon" href="Assets/Logos/Favicon.png">

        <link rel="stylesheet" type="text/css" href="css/Home.css">
        <link rel="stylesheet" type="text/css" href="css/Menu_bar.css">
        <link rel="stylesheet" type="text/css" href="css/Footer.css">
        <link rel="stylesheet" type="text/css" href="css/passenger_profile.css">
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
            @import url('https://fonts.cdnfonts.com/css/evolventa');
            @import url('https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Syne:wght@400..800&display=swap');
        </style>

        <script src="./js/Home.js"></script>

        
    </head>
    <body>
        <!--passenger profile page content container-->
        <div id="root">
            <div class="landing-page-container bg_image_container_about" style="height: 1500px; background-position: center; background-repeat: no-repeat; background-size: cover;">
               <!--Menu Bar-->
                <?php
                    include("./menu_bar.php");
                ?>
                <!--pp icon-->
                <br><br><br>
                <table>
                    <tr>
                        <td><img src="./Assets/Images/img/pp.jpg" width="100" height="100" style="margin-left:100px;"></td>
                        <td> <p><?php  echo "Account Type : ".$acctype  ?></p></td>
                    </tr>
                </table>
        <br><br>
    <center>            
       
    
      
        <table border="0"> 
            <tr>
                <td style="padding-right:110px;">
                <u style="color:white;"><h1 >Passenger details</h1></u>
                    <table>
                        <tr>"
                            <td><h2 style="color:darkgray;">Passenger name:</h2></td>
                            <td><?php
                                    echo "<h2>$firstname $lastname</h2>";
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td><h2  style="color:darkgray;">Email:</h2></td>
                            <td><?php
                                    echo "<h2>$email</h2>";
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td><h2  style="color:darkgray;">Username:</h2></td>
                            <td><?php
                                    echo "<h2>$username</h2>";
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td><h2  style="color:darkgray;">Contact number:</h2></td>
                            <td><?php
                                    echo "<h2>$contactnumber</h2>";
                                ?>
                            </td>
                        </tr>
                    
                    </table>

                </td>
                <td>
                <script src="./js/passenger_profile.js"></script>
                    <form  name="frmUpdate" id="FrmUpdate" method="POST" action="./passenger_profile.php">
                        <fieldset style="width:550px;">

                            <legend><h2>Update Profile</h2></legend>
                        
                            <label for="first-name"> <p>First Name </p> </label>
                            <br>
                            <input type="text" style="width:500px;" name="F_Name" id="F_Name" placeholder="Enter your First Name">
                            <br>
                            <label for="last-name"><p>Last Name</p> </label>
                            <br>
                            <input type="text"style="width:500px;"  name="L_Name" id="L_Name" placeholder="Enter your Last Name">
                            <label for="contact-no"><p>Contact Number</p></label>
                            <br>
                            <input type="tel" style="width:500px;" name="TelNo" id="TelNo" placeholder="0112344567" maxlength="10" pattern="[0-9]{10}" >
                            <br>  
                            <label for="email"><p>Email</p></label>
                            <br>
                            <input type="email" style="width:500px;" name="Email" id="Email" placeholder="your@example.com" pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$">      
                            <br>
                            <!-- <label for="username"><p>Username</p></label>
                            <br>
                            <input type="text"style="width:800px; " name="Username" id="Username" placeholder="Enter your Username">
                            <br> -->
                            <label for="password"><p>Password</p></label>
                            <br>
                            <input type="password" style="width:500px; "name="Pass" id="passwordInput" placeholder="Create a Password" pattern="(?=.\d)(?=.[a-z])(?=.*[A-Z]).{8,}" >

                            <br>
                            <br>
                            <label for="password"><p>Re-enter Password</p></label>
                            <input type="password" style="width:500px;" name="RePass" id="repasswordInput" placeholder="Re-enter your Password" pattern="(?=.\d)(?=.[a-z])(?=.*[A-Z]).{8,}" >
                            <br>


                            <br>
                            <input type="checkbox" id="showPasswordCheckbox"> Show Password

                            <script>
                                const passwordInput = document.getElementById("passwordInput");
                                const showPasswordCheckbox = document.getElementById("showPasswordCheckbox");
                                const repasswordInput = document.getElementById("repasswordInput");

                                showPasswordCheckbox.addEventListener("change", function() {
                                    if (this.checked) {
                                        passwordInput.type = "text";
                                        repasswordInput.type = "text";
                                    } else {
                                        passwordInput.type = "password";
                                        repasswordInput.type = "password";
                                    }
                                });
                            </script>
                            <br>
                            <br>
                            <button type="submit" name="btnUpdate" id="btnUpdate" class="btn" style="background-color:green; color:white;">Update Passenger</button>
                            <br>
                        </fieldset>
                    </form>

                </td>
            </tr>
        </table> 
</center>
<br><br>
<center>
<table>
    <tr>
    <td colspan='2'>
            <a href='./delete_tables.php' style='text-decoration: none; color:white;'><button style='background-color: red;color:white; padding: 3px; border-radius:3px; border-color:white; width:20p0x;'> Delete Account</a></button>
    </td>
</tr>
</table>
</center>


           
         
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
    </body>
</html>
