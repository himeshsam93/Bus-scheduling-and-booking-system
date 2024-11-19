<?php 

    if(empty($_SESSION['id'])){

        $_SESSION['id'] = "";
    }

?>

<!--Himesh-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" type="text/css" href="css/Home.css">
        <link rel="stylesheet" type="text/css" href="css/Menu_bar.css">
        <link rel="stylesheet" type="text/css" href="css/drp_profile.css">
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
            @import url('https://fonts.cdnfonts.com/css/evolventa');
            @import url('https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Syne:wght@400..800&display=swap');
        </style>

        
    </head>
    <body>
        <!--Home page content container-->
        <div id="root">
            <div class="landing-page-container">
               <!--Menu Bar-->
               <div class="menu-bar">
                    <!--Menubar NaviBus logo-->
                    <div class="menu-bar-logo" style="display: inline-block;">
                        <br>
                        <a href="./index.php" target="_self"> 
                            <img src="Assets/Logos/NaviBus_Logo.png" alt="NaviBus Logo" title="Logo" class="menu_bar_logo">
                        </a>  
                    </div>
                    <!-- Menu bar links -->
                    <div class="navigational-links" style="display: inline-block;padding-top:2px;">

                        <ul type="disc" class="menu_ul">

                            <li class="menu_li"><a href="./index.php"> Home</a></li>
                            <li class="menu_li"><a href="./journey.php"> Journey Planner</a></li>
                            <li class="menu_li"><a href="./client.php"> Clients</a></li>
                            <li class="menu_li"><a href="./about_us.php"> About</a></li>
                            <li class="menu_li"><a href="./support.php"> Support</a></li>
                            
                        </ul>
                        <!--Sign in button-->
                                <?php 

                                        // if user is not logged in ---> login icon behaviour
                                        if(!$_SESSION["id"]){
                                            echo "<div style='display:inline; padding-left:135px; padding-top:0px; background-color:transparent;'>";

                                                echo "<a href='#'><img src='Assets/Images/Home/user_icon.png' class='logging_icon' alt='sign up icon' style='padding:10px;float:inline;margin:5px;'></a>";

                                            echo"</div>";
                                        }
                                        // if user logged in ---> login icon behaviour
                                        else if($_SESSION["id"]){

                                            echo "<div style='float:inline-end;display:inline; padding-left:135px; padding-top:0px; background-color:transparent;'>";
                                                // dropdown list options depend on the user
                                                $_SESSION["drpPassenger"] = array("Profile", "Billing History","Reviews", "Support", "Logout");
                                                $_SESSION["drpDriver"] = array("Profile", "Journey History", "Ride Requests", "Support", "Logout");
                                                $_SESSION["drpAdmin"] = array("Dashboard", "Logout");
                                                
                                                
                                                function DrpLoop(){
                                                    // Passenger session ID is 1
                                                    if($_SESSION["id"] == "1"){

                                                        $userName = $_SESSION["username"];
                                                        $len = sizeof($_SESSION["drpPassenger"]);
                                                        $drp_rows = $_SESSION["drpPassenger"];
                                                        $links = array("./passenger_profile.php", "#", "./review.php" ,"./support.php", "./logout.php");
                                                    }
                                                    // Driver session ID is 2  
                                                    else if($_SESSION["id"] == "2"){

                                                        $userName = $_SESSION["username"];
                                                        $len = sizeof( $_SESSION["drpDriver"]);
                                                        $drp_rows = $_SESSION["drpDriver"];
                                                        $links = array("./Driver_profile.php", "#", "#","./support.php", "./logout.php");
                                                    
                                                    }
                                                    // Admin session ID is 3
                                                    else if($_SESSION["id"] == "3"){

                                                        $userName = $_SESSION['admin_username'];
                                                        $len = sizeof($_SESSION["drpAdmin"]);
                                                        $drp_rows = $_SESSION["drpAdmin"];
                                                        $links = array("./admin.php", "./logout.php");
            
                                                    }
                                                    // creating the dropdown list according to the user type dynamically
                                                    echo "<div class = 'dropdown'>";
                                                        $drp_menu =     
                                                        "               
                                                                <button class='dropbtn' style='background-color:transparent;'>
                                                                    <img src='Assets/Images/Home/user_icon.png' class='logging_icon' alt='sign up icon' style='display:inline; margin:5px; '>
                                                                    <img src='Assets/Images/Home/dropdown_arrow.png' class='drop_arrow'>
                                                                </button>
                                                                <div class='dropdown_content'>
                                                                <img src='Assets/Images/Home/user_icon.png' class='logging_icon' alt='sign up icon' style='display:inline;width:25px; height:25px;float:inline-start;margin-left:15px;'>
                                                                    <div style='font-size:18px; color:black; font-weight:600;padding:14px;display:inline; float:inline; float:inline-start;'>$userName</div>
                                                        ";          // assigning the drop down members and their links
                                                                    for($i = 0; $i < $len; $i++){
            
                                                                        $drp_menu .=  "<a href='$links[$i]'>$drp_rows[$i]</a>";
                                                                    }
                                                                $drp_menu .= "</div>";  
                                                        echo "$drp_menu";
                                                    echo "</div>";
                                                }
                                        
                                                if($_SESSION["id"]) {
            
                                                    DrpLoop();
                                                } 
                                            echo"</div>";
                                        } 
                                ?>
                            <?php 
                                //  if user is not logged in then show sign in text
                                if(!$_SESSION["id"]){

                                echo "<ul type='disc' class='sign_in_button_ul'>
                                    <li class='signing menu_li' style='padding-left: 0px;float:inline-end;'><a href='./signin.php'> Sign in</a></li>
                                </ul>";
                                }  
                            ?>
                    </div>
               </div>
            </div>
        </div>
    </body>
</html>