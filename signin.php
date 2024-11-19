<?php 
     // including the configuration file
    include("./config.php");

    // checking the submit button is clicked or not
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        // Assign values to variables to error checking
        $username = htmlspecialchars($_POST["txtUsername"]);
        $password = htmlspecialchars($_POST["txtPass"]);

        // Getting the user inputted username and the password from the Passenger and Driver Tables
        // Getting certain data from 2 tables at once
        $sql = "SELECT * FROM Passenger WHERE Username = '$username' AND Passwords = '$password'
        UNION SELECT * FROM Driver WHERE Username = '$username' AND Passwords = '$password' ORDER BY Username";

        // querying the sql statement to get the results string
        $result = $conn -> query($sql);

        // checking results string outputs a TRUE boolean  value ----> It means required column data is exist in that table
        if($result){
            // assign the results to another varibale to error validation
            $result_set1 = $result;
        }

        // added the same code again since we are searching the required username and the password from 2 tables once it found from any Table outputs it.
        $sql = "SELECT * FROM Administrator WHERE Username = '$username' AND Passwords = '$password'";

        $result = $conn -> query($sql);

        if($result){

            $result_set2 = $result;
        }

        // Checking variable is assigned FALSE to, if no rows selected then outputs it as False if found then assign True
        $valid_result_set = FALSE;
        // checking no of rows is > 0, cuz it means required data is found otherwise 0
        if(($result_set1 -> num_rows > 0)){

            $valid_result_set = $result_set1;
        } 
        else if($result_set2 -> num_rows > 0){

            $valid_result_set = $result_set2;
        }
        // if True
        if($valid_result_set){
    
            $row = $valid_result_set -> fetch_assoc();

            // Starting the session for login activities
            session_start();
           
            echo "<script> alert('Successfully Logged in !') </script>";
            // checking the user type and according that user type redirect them to their respective pages
            if($row["Account_Type"] == "passenger"){

                $_SESSION["username"] = $row["Username"];
                $_SESSION["id"] = "1"; // should be 1
                header("location: ./index.php");
            }
            else if($row["Account_Type"] == "driver"){
                
                $_SESSION["username"] = $row["Username"];
                $_SESSION["id"] = "2";
                header("location: ./index.php");
            }
            else if($row["Account_Type"] == "admin"){
                
                $_SESSION["admin_username"] = $row["Username"];
                $_SESSION["id"] = "3"; // should be 3
                header("location: ./admin.php");
            }  

        }
        else{
            // Usrenme and password Error handling ---> if username or password is mismatched ones' with DB.
            if(($username != $row["Username"]) && ($password != $row["Passwords"])){ // column name

                echo "<script> alert('Username and Password is Incorrect !') </script>";

            }
            if(($username == $row["Username"]) && ($password != $row["Passwords"])){ // column name

                echo "<script> alert('Password is Incorrect !') </script>";

            }
            if(($username != $row["Username"]) && ($password == $row["Passwords"])){ // column name

                echo "<script> alert('Username is Incorrect !') </script>";

            }
        }
    }

?>

<!-- Sign in page -->

<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <title>Sign In</title>
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

            <!-- sign in container-->
            <div class="container_signin" style="height:840px;">

                <div class="sign-in-main-container">
                    <table border="0" width="100%" height="805">
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

                                        <div class="tagline navibus" style="display: inline-block;">Hello,</div>
                                        <div class="tagline" style="display: inline-block;">Welcome Back 😍🥳👋🏻!</div>

                                    </div>
                                    <!-- Social media icons -->
                                    <div class="Scocial-media-icons" style="display: inline-block; padding-top:310px;">

                                        <img src="./Assets/Images/Home/fb.png" class="social_media" style="padding-left: 80px; width: 17px;height: 17px; ">
                                        <img src="./Assets/Images/Home/x.png" class="social_media">
                                        <img src="./Assets/Images/Home/Instagram.png" class="social_media">
                                        <img src="./Assets/Images/Home/LinkedIn.png" class="social_media">
                                        <img src="./Assets/Images/Home/Google.png" class="social_media">
                                        <img src="./Assets/Images/Home/YT.png" class="social_media" style="width: 20px;">
                                    </div>
                                </div>
                            </td>
                            <!-- Sign In form container-->
                            <td width="50%">
                                 <!--Form content-->
                                <div class="right-side-conatiner" style="padding-left: 65px;" >
                                    <br><br>
                                    <div class="form-content container">
                                       
                                        <!-- script tag included here -->
                                        <script src="./js/sign_up.js"></script>

                                        <form name="frmSignIn" id="FrmSignIn" method="POST" action="./signin.php">
                                          
                                            <label for="sign-up"><h1>Sign In</h1></label>
                                            
                                            <br>
                                            <label for="username"><p>Username</p> <span class="req_class">*</span></label>
                                            <br>
                                            <input type="text" name="txtUsername" id="txtUsername" placeholder="Enter your Username" required>

                                            <br>
                                            <label for="password"><p>Password</p> <span class="req_class">*</span></label>
                                            <br>
                                            <input type="password" name="txtPass" id="txtPass" placeholder="Enter your Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>

                                            <br>
                                            <input type="checkbox" name="shwPass" id="shwPass" value="yes" class="terms" onclick="showPassword()"> &nbsp;&nbsp;
                                            <label for="shwpass" class="terms"><p style="font-size: 12.5px; display: inline;">Show Password</p></label>
                                            

                                            <label for="forgot-pass" class="terms"><p style="font-size: 12.5px; display: inline; padding-left:160px;"><a href="#" style="color:lightgray;">Forgot Password ?</a></p></label>
                                            <br>

                                            <br>
                                            <button type="submit" name="btnSignUp" id="btnSignUp" class="btn">Sign In</button>
                                            <br>

                                            <br>
                                            <hr aln="left" class="hrclass"><p style="font-size: 13px; display: inline-block; padding-left: 15px; padding-right: 15px;"> OR</p> <hr aln="left" class="hrclass">

                                            <br><br>

                                            <!-- social media sign in buttons -->
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
                                            <!-- Don't have a Account texts-->
                                            <br>
                                            <label for="Account-login-link">
                                                <p style="font-size: 12.5px; color: rgb(171, 171, 171); padding-left: 90px; margin-top: 10px;">Don't have an Account?<a href="./signup.php" style="font-weight: 500;"> Sign Up</a></p>
                                            </label>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr> 
                    </table>
                    
                    <!-- footer content-->
                    <div class="footer-content">

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
        </div>
    </body>
</html>