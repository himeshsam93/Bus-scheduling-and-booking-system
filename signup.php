<!--Himesh-->

<?php

   // Starting the session for login activities
    session_start();
    // including the configuration file
    require_once("./config.php");
    
    // checking the submit button is clicked or not
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        // Assign values to variables to error checking
        $errors = array();
        $username = htmlspecialchars($_POST["txtUsername"]);
        $email = htmlspecialchars($_POST["txtEmail"]);
        $account_type = htmlspecialchars($_POST["drpAccType"]);
        $password = htmlspecialchars($_POST["txtPass"]);
        $rePassword = htmlspecialchars($_POST["txtRePass"]);
        
        // checking the username and email is already exists or not
        if($account_type == "passenger"){

            $sql_username = "SELECT * FROM Passenger WHERE Username = '$username'";
            $sql_email = "SELECT * FROM Passenger WHERE Email = '$email'";
        }
        else if($account_type == "driver"){

            $sql_username = "SELECT * FROM Driver WHERE Username = '$username'";
            $sql_email = "SELECT * FROM Driver WHERE Email = '$email'";
        }

        $result_username = $conn -> query($sql_username);
        $result_email = $conn -> query($sql_email);

        // alerting the user that enetered email or username is already exists
        // $result_username -> num_rows > 0 ---> outputs the number of rows that value exixts in the DB
        if(($result_username -> num_rows > 0) && ($result_email -> num_rows > 0)){

            
            $errors[] = "Username and Email has already exists"; 
            echo "<script> alert('Username and Email has already exists !') </script>";
        }
        else if($result_username -> num_rows > 0){

            $errors[] = "Username has already exists";
            echo "<script> alert('Username has already exist !') </script>";
            
        }
        else if($result_email -> num_rows > 0){

            $errors[] = "Email has already exists";
            echo "<script> alert('Email has already exists !') </script>";
           
        }

        // checking the password and the re-enter password is matching or not
        if($password != $rePassword){

            $errors[] = "Your entered Password and Re-entered Password is mismatched, Please try again !";
            echo "<script> alert('Your entered Password and Re-entered Password is mismatched, Please try again !') </script>";
        }

        // if no errors occur then submit the data to the Database
        if(empty($errors)){

            $firstName = htmlspecialchars($_POST["txtFirstName"]);
            $lastName = htmlspecialchars($_POST["txtLastName"]);
            $contactNo = htmlspecialchars($_POST["txtTelNo"]);
            $email = htmlspecialchars($_POST["txtEmail"]);
            $accountType = htmlspecialchars($_POST["drpAccType"]);
            $username = htmlspecialchars($_POST["txtUsername"]);
            $password = htmlspecialchars($_POST["txtPass"]);
            $rePassword = htmlspecialchars($_POST["txtRePass"]);

            // checking the account type to differentiate the tables to data to be saved.
            if($account_type == "passenger"){

                $sql = "INSERT INTO Passenger (First_Name, Last_Name, Contact_No, Email, Account_Type, Username, Passwords, Re_Password)
                VALUES ('$firstName', '$lastName', '$contactNo', '$email', '$accountType', '$username', '$password', '$rePassword')";
               
            }
            else if($account_type == "driver"){

                $sql = "INSERT INTO Driver (First_Name, Last_Name, Contact_No, Email, Account_Type, Username, Passwords, Re_Password)
                VALUES ('$firstName', '$lastName', '$contactNo', '$email', '$accountType', '$username', '$password', '$rePassword')"; 
            }

            $result = $conn -> query($sql);
            
            // if query is successfully submitted to the databse then go the sign in page
            
            if($result){

                echo "<script> alert('Registration is successful !') </script>";
                $_SESSION["success"] = "Registration is successful !";
                header("location: ./signin.php");
                
            }
            else{
                
                echo "<script> alert('Failed to add the record ! Unknown error occurred.') </script>";
                
            }
            $conn -> close();
        }
    }
?>

<!-- Sign up page -->

<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <title>Sign up</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/ico" href="./Assets/Logos/Favicon.png">
        <link rel="shortcut icon" type="image/x-icon" href="./Assets/Logos/Favicon.png"/>
        <link rel="apple-touch-icon" href="./Assets/Logos/Favicon.png">

        <link rel="stylesheet" type="text/css" href="css/Home.css">
        <link rel="stylesheet" type="text/css" href="css/Footer.css">
        <link rel="stylesheet" type="text/css" href="css/Sign_up.css">
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

            <!-- sign up container-->
            <div class="container_signin">

                <div class="sign-up-main-container">
                    <table border="0" width="100%" height="840">
                        <tr>
                            <!-- logo, tagline side -->
                            <td width="50%" style="vertical-align: top;">
                                <div class="left-side-container">
                                   
                                   <!--Menubar NaviBus logo-->
                                   <div class="menu-bar-logo">
                                        <br>
                                        <a href="./index.php" target="_self">
                                    
                                            <img src="./Assets/Logos/NaviBus_Logo.png" alt="NaviBus Logo" title="Logo" class="menu_bar_logo" style="height: 50px;width: 70px; padding-left: 90px; padding-top: 30px;">
                                        </a>
                                    </div> 

                                    <div class="tagline-sign-up" style="padding-top: 220px;">

                                        <div class="tagline navibus" style="display: inline-block;">NaviBus,</div>
                                        <div class="tagline" style="display: inline-block;">Your Portal to New Horizons 🎉✨!</div>

                                    </div>
                                </div>
                            </td>
                            <!-- Sign Up form container-->
                            <td width="50%">
                                 <!--Form content-->
                                <div class="right-side-conatiner" style="padding-left: 65px;" >
                                    <br><br>
                                    <div class="form-content container">
                                        <!-- script tag included here -->
                                        <script src="./js/sign_up.js"></script>

                                        <form name="frmReg" id="FrmReg" method="POST" action="./signup.php">
                                          
                                            <label for="sign-up"><h1>Sign Up</h1></label>
                
                                            <label for="first-name"> <p>First Name </p> <span class="req_class">*</span></label>
                                            <br>
                                            <input type="text" name="txtFirstName" id="txtFirstName" placeholder="Enter your First Name" required>

                                            <br>
                                            <label for="last-name"><p>Last Name</p> <span class="req_class">*</span></label>
                                            <br>
                                            <input type="text" name="txtLastName" id="txtLastName" placeholder="Enter your Last Name" required>

                                            <br>
                                            <label for="contact-no"><p>Contact Number</p> <span class="req_class">*</span></label>
                                            <br>
                                            <input type="tel" name="txtTelNo" id="txtTelNo" placeholder="0112344567" maxlength="10" pattern="[0-9]{10}" title="Contact Number must be in the following order, 0112345678" required>
                                            
                                            <br>
                                            <label for="email"><p>Email</p> <span class="req_class">*</span> </label>
                                            <br>
                                            <input type="email" name="txtEmail" id="txtEmail" placeholder="your@example.com" pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$" title="Email must be in the following order, your@example.domain" required>

                                            <br>
                                            <label for="Account-type"><p>Choose Your Account Type</p> <span class="req_class">*</span></label>
                                            <br>
                                            <select name="drpAccType" id="drpAccType" style="width:83.5%; height: 32px; cursor: pointer;"required>
                                                <option value="">Choose a Account Type</option>
                                                <option value="passenger">Passenger Account</option>
                                                <option value="driver">Driver Account</option>
                                            </select>
                                            
                                            <br>
                                            <label for="username"><p>Username</p> <span class="req_class">*</span></label>
                                            <br>
                                            <input type="text" name="txtUsername" id="txtUsername" placeholder="Enter your Username" required>

                                            <br>
                                            <label for="password"><p>Password</p> <span class="req_class">*</span></label>
                                            <br>
                                            <input type="password" name="txtPass" id="txtPass" placeholder="Create a Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>

                                            <br>
                                            <label for="Re-password"><p>Re-enter Password</p> <span class="req_class">*</span></label>
                                            <br>
                                            <input type="password" name="txtRePass" id="txtRePass" placeholder="Re-enter your Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>

                                            <br>
                                            <input type="checkbox" name="shwPass" id="shwPass" value="yes" class="terms" onclick="showPassword()"> &nbsp;&nbsp;
                                            <label for="shwpass" class="terms"><p style="font-size: 12.5px; display: inline-block;">Show Password</p></label>
                                            <br>

                                            
                                            <input type="checkbox" name="Terms" id="Terms" value="yes" class="terms" onclick="enableButton()" required > &nbsp;&nbsp;
                                            <label for="terms" class="terms"><p style="font-size: 12.5px; display: inline-block;">I agree to these <a href="#">Terms & Conditions</a></p></label>
                                            <br>


                                            <br>
                                            <button type="submit" name="btnSignUp" id="btnSignUp" class="btn" disabled>Sign Up</button>
                                            <br>

                                            <br>
                                            <hr aln="left" class="hrclass"><p style="font-size: 13px; display: inline-block; padding-left: 15px; padding-right: 15px;"> OR</p> <hr aln="left" class="hrclass">

                                            <br><br>

                                            <!-- social media sign up buttons -->
                                            <table border="0" width="84%">
                                                <tr>
                                                    <td>
                                                        <a href="#" target="_blank">
                                                            <button class="btn" type="button" style="width:90%">
                                                                <img src="./Assets/Images/Sign up/google.png" width="20" height="20" style="padding-top: 3px;">
                                                            </button>
                                                        </a>

                                                    </td>
                                                    <td align="right">
                                                        <a href="#" target="_blank">
                                                            <button class="btn" type="button"  style="width:90%">
                                                                <img src="./Assets/Images/Sign up/apple.png" width="20" height="20" style="padding-top: 3px;">
                                                            </button>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </table>
                                            <!-- Already a Member texts-->
                                            <br>
                                            <label for="Account-login-link">
                                                <p style="font-size: 12.5px; color: gray; padding-left: 90px; margin-top: 10px;">Already have an Account?<a href="./signin.php" style="font-weight: 500;">  Sign In</a></p>
                                            </label>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr> 
                    </table>

                     <br><br><br>
                    <!-- footer content-->
                    <div class="footer-content">

                        <table border="0" width="100%">

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
        </div>
    </body>
</html>