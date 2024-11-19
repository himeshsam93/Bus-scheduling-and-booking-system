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
        <!--Admin page content container-->
        <div id="root">
            <div class="landing-page-container">
               <!-- Admin Menu Bar-->
               <div class="menu-bar">
                    <!--Menubar NaviBus logo-->
                    <div class="menu-bar-logo" style="display: inline-block;">
                        <br>
                        <a href="./admin.php" target="_self"> 
                            <img src="Assets/Logos/NaviBus_Logo.png" alt="NaviBus Logo" title="Logo" class="menu_bar_logo">
                        </a>  
                    </div>
                    <!-- Menu bar links -->
                    <div class="navigational-links" style="display: inline-block;padding-top:2px;">

                        <ul type="disc" class="menu_ul">

                            <li class="menu_li"><a href="./admin.php"> Dashboard</a></li>
                            <li class="menu_li"><a href="./passengers.php"> Passengers</a></li>
                            <li class="menu_li"><a href="./drivers.php"> Drivers</a></li>
                            <li class="menu_li"><a href="./ticket_price.php"> Tickets</a></li>
                            <li class="menu_li"><a href="./feedback.php"> Feedbacks</a></li>
                            
                        </ul>
                        <!--Sign in button-->
                                <?php 
                                        // if user logged in ---> login icon behaviour
                                        if($_SESSION["id"]){

                                            echo "<div style='float:inline-end;display:inline; padding-left:100px; padding-top:0px; background-color:transparent;'>";
                                                // dropdown list options depend on the user
                        
                                                $_SESSION["drpAdmin"] = array("Dashboard", "Logout");
                                                
                                                
                                                function DrpLoop(){
                                                    
                                                    // Admin session ID is 3
                                                    if($_SESSION["id"] == "3"){

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
                    </div>
               </div>
            </div>
        </div>
    </body>
</html>