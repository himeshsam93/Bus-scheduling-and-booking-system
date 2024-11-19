<?php 
     // including the configuration file
    include("./config.php");
    // Starting the session for login activities
    session_start();

?>


<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
        <title>Journey Planner</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/ico" href="Assets/Logos/Favicon.png">
        <link rel="shortcut icon" type="image/x-icon" href="Assets/Logos/Favicon.png"/>
        <link rel="apple-touch-icon" href="Assets/Logos/Favicon.png">

        <link rel="stylesheet" type="text/css" href="css/Home.css">
        <link rel="stylesheet" type="text/css" href="css/Menu_bar.css">
        <link rel="stylesheet" type="text/css" href="css/Footer.css">
        <link rel="stylesheet" href="css/new.css">
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
            @import url('https://fonts.cdnfonts.com/css/evolventa');
            @import url('https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Syne:wght@400..800&display=swap');
        </style>
        
      
        <style>

    .reservation-container{
                background: transparent;
                border: 2px solid rgb(255, 255, 255, .6);
                backdrop-filter: blur(50px);
                -webkit-backdrop-filter: blur(50px);
                border-radius: 20px;
                width: 50%;
                max-width: 250px;
                padding: 50px;
                padding-top: 10px;
                padding-right: 10px;
                padding-left: 90px;
                margin: auto;
                align-items: center;
                color: white;
                font-family: "Montserrat", sans-serif;
                font-size: 20px;
                padding: 100px;   
            }
    .button1{
                width:245px;
                height: 50px;
                border-radius: 10px;
                font-size: 20px;
                font-family: "Poppins", sans-serif;
                font-weight:500;
                color: #ccc;
                background-color: rgba(240, 248, 255, 0);
                border-color: #ccc;
            }
    .button1:hover{
                width:245px;
                height: 50px;
                border-radius: 10px;
                color: rgb(0, 0, 0);
                background-color: rgb(255, 255, 255);
                font-size: 20px;
                font-family: "Poppins", sans-serif;
                border: none;
                font-weight:500;
            }
    .reservation-container p{
                padding: 20px;
            }
        </style>
        
    </head>
    <body id="root" class="bg_image_container" style="height:1400px;">
         <!--Menu Bar-->
        <?php
            include("./menu_bar.php");
        ?>
        <center>
        <table border="0" width="90%">
            <tr><center>
                <td style="align-items: center;">
                    <div class="container">
                    
                        <h1>Journey Planner</h1>
                        <form method="post" action="./journey.php">
                            <div class="" name="start">
                                <p for="start">Enter starting point:</p>
                                <select id="start" name="start" size="1" >
                                    <option>Choose starting point</option>
                                    <option value="Colombo">Colombo</option>
                                    <option value="Moratuwa">Moratuwa</option>
                                    <option value="Panadura">Panadura</option>
                                    <option value="Ratmalana">Ratmalana</option>
                                </select>
                            </div>
                        
                        

                            <div name="destination">
                                <p for="destination">Enter Destination:</p>
                                <select id="destination" name="destination" size="1">
                                    <option>Choose destination</option>
                                    <option value="Galle">Galle</option>
                                    <option value="Ella">Ella</option>
                                    <option value="Badulla">Badulla</option>
                                    <option value="Anuradhapura">Anuradhapura</option>
                                    <option value="Matale">Matale</option>
                                    <option value="Jaffna">Jaffna</option>
                                    <option value="Hatton">Hatton</option>
                                    <option value="Kalmunai">Kalamunai</option>
                                    <option value="Polonnaruwa">Polonaruwa</option>
                                    <option value="Bandarawela">Bandarawela</option>
                                </select>
                            </div>
                            
                            

                            <div name="time">
                                <p for="dandt">Search Date:</p>
                                <input type="date" name="dandt">
                            </div>

                            

                            <div class="control-group" id="startTimeDiv">
                                <p>Search Time:</p>		
                                <select name="start_Time" id="startTime" class="es-select">

                                    <option value="-1">Choose Time</option>
                                    <option value="00:00:00">00:00:00</option>
                                    <option value="00:30:00">00:30:00</option>
                                    <option value="01:00:00">01:00:00</option>
                                    <option value="01:30:00">01:30:00</option>
                                    <option value="02:00:00">02:00:00</option>
                                    <option value="02:30:00">02:30:00</option>
                                    <option value="03:00:00">03:00:00</option>
                                    <option value="03:30:00">03:30:00</option>
                                    <option value="04:00:00">04:00:00</option>
                                    <option value="04:30:00">04:30:00</option>
                                    <option value="05:00:00">05:00:00</option>
                                    <option value="05:30:00">05:30:00</option>
                                    <option value="06:00:00">06:00:00</option>
                                    <option value="06:30:00">06:30:00</option>
                                    <option value="07:00:00">07:00:00</option>
                                    <option value="07:30:00">07:30:00</option>
                                    <option value="08:00:00">08:00:00</option>
                                    <option value="08:30:00">08:30:00</option>
                                    <option value="09:00:00">09:00:00</option>
                                    <option value="09:30:00">09:30:00</option>
                                    <option value="10:00:00">10:00:00</option>
                                    <option value="10:30:00">10:30:00</option>
                                    <option value="11:00:00">11:00:00</option>
                                    <option value="11:30:00">11:30:00</option>
                                    <option value="12:00:00">12:00:00</option>
                                    <option value="12:30:00">12:30:00</option>
                                    <option value="13:00:00">13:00:00</option>
                                    <option value="13:30:00">13:30:00</option>
                                    <option value="14:00:00">14:00:00</option>
                                    <option value="14:30:00">14:30:00</option>
                                    <option value="15:00:00">15:00:00</option>
                                    <option value="15:30:00">15:30:00</option>
                                    <option value="16:00:00">16:00:00</option>
                                    <option value="16:30:00">16:30:00</option>
                                    <option value="17:00:00">17:00:00</option>
                                    <option value="17:30:00">17:30:00</option>
                                    <option value="18:00:00">18:00:00</option>
                                    <option value="18:30:00">18:30:00</option>
                                    <option value="19:00:00">19:00:00</option>
                                    <option value="19:30:00">19:30:00</option>
                                    <option value="20:00:00">20:00:00</option>
                                    <option value="20:30:00">20:30:00</option>
                                    <option value="21:00:00">21:00:00</option>
                                    <option value="21:30:00">21:30:00</option>
                                    <option value="22:00:00">22:00:00</option>
                                    <option value="22:30:00">22:30:00</option>
                                    <option value="23:00:00">23:00:00</option>
                                    <option value="23:30:00">23:30:00</option>
                                </select>

                                <span class="help-inline" id="startTimeErrorSpan"></span> 
                            
                            </div>
                            <br>
                            <br>
                            <input type="submit" value="Continue">
                            <input type="reset" value="Clear">
                        </form>

                    </div>

                </td>

                <td style="padding-left: 80px;padding-right:50px;">
                    <?php
                        // Check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }
                        

                        // Check if form is submitted
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            // Retrieve user input
                            $start = $_POST["start"];
                            $destination = $_POST["destination"];
                            $date = $_POST["dandt"];
                            $time = $_POST["start_Time"];
                            // for display in the receipt
                            $_SESSION["starting_point"] = $start;
                            $_SESSION["destination"] = $destination;
                            $_SESSION["date"] = $date;
                            $_SESSION["time"] = $time;

                            // SQL query to fetch data based on user input
                            $sql = "SELECT * FROM Price WHERE Starting_Point= '$start' AND Destination = '$destination' AND Start_Time = '$time'";
                            
                            // Execute the query
                            $result = $conn->query($sql);

                            // Check if any rows are returned
                            if ($result->num_rows > 0) {
                                // Output data of each row
                                echo "<div class='reservation-container'>";
                                while($row = $result->fetch_assoc()) {
                                    echo "<div class='reservation-details'>";
                                    echo "Start: " . $row["Starting_Point"] . "<br>";echo"<br>";
                                    echo "Destination: " . $row["Destination"] . "<br>";echo"<br>";
                                    echo "Time: " . $row["Start_Time"] . "<br>";echo"<br>";
                                    echo"Ticket Price:".$row["Ticket_Price"]."<br>";echo"<br>";
                                    echo "<a href='book.php'><button class='button1'>Book Seat</button></a>"; // You can output other columns as needed
                                    echo "</div>";
                                }
                                echo "</div>";
                            }
                            else {
                                echo "<div class='reservation-container'> ";
                                echo "0 results"."<br>";
                                echo"</div>";
                            }
                        }
                    
                        // Close the connection
                        $conn->close();
                    ?>
                </td>
            </center>
            </tr>
        </table>
        </center>
         <!--Footer Content-->
        <div class="footer-content">

            <br><br><br> <br><br><br><br><br><br>
            
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
    </body>
</html>