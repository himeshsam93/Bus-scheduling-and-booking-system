<?php 
     // including the configuration file
    include("./config.php");
    session_start();
    
    if(!isset($_SESSION["username"])){

        header("location: ./signin.php");
    }

?>

<?php
    $user = $_SESSION["username"];
    $res = $_SESSION["Res_ID"];
    $sql1="SELECT * FROM Passenger WHERE Username = '$user'";
    $result_1 = $conn -> query($sql1);

    $row1 = $result_1 -> fetch_assoc();
    $firstname = $row1["First_Name"];
    $lastname = $row1["Last_Name"];
    $contact = $row1["Contact_No"];
    $email = $row1["Email"];

    $sql2="SELECT * FROM Reservation_Details WHERE Res_ID = '$res'";
    $result_2 = $conn -> query($sql2);

    $row2 = $result_2 -> fetch_assoc();
    $resID = $row2["Res_ID"];
    $cusName = $row2["Cus_Name"];
    $username = $row2["Username"];
    $mobile = $row2["Mobile"];
    $paymentType = $row2["Payment_Type"];
    $qty = $row2["Qty"];
    $totalPrice = $row2["Total_Price"];

    $start = $_SESSION["starting_point"];
    $dest = $_SESSION["destination"];
    $date = $_SESSION["date"];
    $time = $_SESSION["time"];

    $sql3 ="SELECT * FROM Seat WHERE Res_ID = '$resID'"; 
    $result_3 = $conn -> query($sql3);

    $row3 = $result_3 -> fetch_assoc();
    $reservationID = $row3["Res_ID"];
    
    

  //  $row4 = $result_4 -> fetch_assoc();

 

?>
<!--Ashika-->
<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <title>Payment Receipt</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/ico" href="Assets/Logos/Favicon.png">
        <link rel="shortcut icon" type="image/x-icon" href="Assets/Logos/Favicon.png"/>
        <link rel="apple-touch-icon" href="Assets/Logos/Favicon.png">

        <link rel="stylesheet" type="text/css" href="css/Home.css">
        <link rel="stylesheet" type="text/css" href="css/Menu_bar.css">
        <link rel="stylesheet" type="text/css" href="css/Footer.css">
        <link rel="stylesheet" type="text/css" href="css/receipt.css">
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
            @import url('https://fonts.cdnfonts.com/css/evolventa');
            @import url('https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Syne:wght@400..800&display=swap');
        </style>

        <script src="./js/Home.js"></script>

        
    </head>
    <body>
        <!--Home page content container-->
        <div id="root">
            <div class="landing-page-container bg_image_container" style="height:1500px; background-repeat:no-repeat;background-size:center;">
               <!--Menu Bar-->
                <?php
                    include("./menu_bar.php");
                ?>
                <!--Landing page content-->
                <div style="padding-left:400px">
                    <div class="receipt_container" style="height:1300px;">
                        <table align ="center" border = "0" width="95%" style = "background-color:transparent"> 
                            <tr>
                                <td>
                                    <img src = "./Assets/Logos/NaviBus_Logo.png" style="height :90px; width:auto;" >
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><h1 align="Right" style="padding-right:10px;">Invoice</h1></td>

                            </tr>

                            <tr>
                                <td><h2>Passenger Name : </td>
                                <td><?php
                                        echo "<h2>$firstname $lastname</h2>";
                                    ?>
                                </td>
                            </tr>

                            <tr>
                                <td><h2>Passenger Email : </td>
                                <!-- php passenger email -->
                                <td>
                                <?php
                                        echo "<h2>$email</h2>";
                                    ?>
                                </td>
                            </tr>

                            <tr>
                                <td width="250"><h2>Pass. ContactNo : </td>
                                <!-- php passenger contact -->
                                <td>
                                <?php
                                        echo "<h2>$contact</h2>";
                                    ?>
                                </td>
                            </tr>

                            <tr>
                                <td><h2>Starting Point : </td>
                                <!-- php  starting point -->
                                <td>
                                <?php
                                        echo "<h2>$start</h2>";
                                    ?>
                                </td>
                            </tr>

                            <tr>
                                <td><h2>Destination : </td>
                                <!-- php destination -->
                                <td>
                                <?php
                                        echo "<h2>$dest</h2>";
                                    ?>
                                </td>
                            </tr>

                            <tr>
                                <td><h2>Departure Time : </td>
                                <!-- php passenger name -->
                                <td>
                                <?php
                                        echo "<h2>$date</h2>";
                                    ?>
                                </td>
                            </tr>

                            <tr>
                                <td><h2>Departure Date : </td>
                                <!-- php passenger name -->
                                <td>
                                <?php
                                        echo "<h2>$time</h2>";
                                    ?>
                                </td>
                            </tr>

                            <tr>
                                <td><h2>Number of Seats : </td>
                                <!-- php passenger name -->
                                <td>
                                <?php
                                        echo "<h2>$qty</h2>";
                                    ?>
                                </td>
                            </tr>

                            <tr>
                                <td><h2>Seat Number : </td>
                                <!-- php seat number -->
                                <td>
                                    <?php

                                        // including the configuration file
                                        include "./config.php";

                                        $sqlseat = "SELECT Seat_ID FROM Seat WHERE Res_ID = '$resID'"; 
                                        $result_4 = $conn -> query($sqlseat);

                                        $price_tkt = $totalPrice / $qty;

                                        while($row4 = $result_4 -> fetch_assoc()){
                                            echo "<h2>".$row4['Seat_ID']."</h2";
                                        }
                                        $conn->close();
                                    ?>
                                </td>
                            </tr>

                            <tr>
                                <td><h2>Price of a Ticket : </td>
                                <!-- php price of a ticket -->
                                <td><h2> <?php echo "Rs. ". $price_tkt. ".00" ?> </h2></td>
                            </tr>

                            <tr>
                                <td><h2>Grand Total : </td>
                                <!-- php passenger name -->
                                <td>
                                <?php
                                        echo "<h2>Rs.$totalPrice</h2>";
                                    
                                        
                                ?>
                                </td>
                            </tr>

                        </table>
                    </div>
                </div>
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
        </div>
    </body>
</html>
