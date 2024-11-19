<?php 
    // including the configuration file
    include("./config.php");
    // Starting the session for login activities
    session_start();
   
    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form data
        $user = $_SESSION["username"];
        $name = $_POST["r_name"];
        $mobile = $_POST["mobile"];
        $email = $_POST["email"];
        $payment = $_POST["payment"];
        $seats = $_POST['seats'];
        //$seats = implode(", ", $_POST["seats"]); // Convert array to string

        $seat_count = sizeof($seats);
        $prices = array(100.00, 150.00, 200.00, 250.00, 300.00);
        $total_price = 0.0;

        $destination = $_SESSION["destination"];
        if($destination == "Galle"){

            $total_price = $prices[0] * $seat_count;
        }
        else if($destination == "Ella"){

            $total_price = $prices[1] * $seat_count;
        }
        else if($destination == "Anuradhapura"){

            $total_price = $prices[2] * $seat_count;
        }
        else if($destination == "Polonnaruwa"){

            $total_price = $prices[3] * $seat_count;
        }
        else if($destination == "Jaffna"){

            $total_price = $prices[4] * $seat_count;
        }
        
        // Insert data into the database
        $sql = "INSERT INTO Reservation_Details (Cus_Name, Username, Mobile, Email, Payment_Type, Qty, Total_Price) VALUES ('$name', '$user', '$mobile', '$email', '$payment', '$seat_count', '$total_price')";

        // Execute the query

        $result = $conn -> query($sql);

        if($result){

            $sql_res_id = "SELECT Res_ID FROM Reservation_Details WHERE Username = '$user'";
            $result_res_id = $conn->query($sql_res_id);
    
            if($result_res_id -> num_rows > 0){
    
                $row_res_id = $result_res_id -> fetch_assoc();
                $res_id = $row_res_id["Res_ID"];
                
            }

            $res_idd = (int)$res_id;
            $_SESSION["Res_ID"] = $res_idd;
            foreach($seats as $key => $seatNo){
                
                $SeatNumber = (int)$seatNo;
                $sql_seat_res ="INSERT INTO Seat (Res_ID, Seat_ID) VALUES ('$res_idd', '$SeatNumber')";
                $result_seat = $conn->query($sql_seat_res);
            }

            echo "<script> alert('Order placed successfully!') </script>";
            header("location: ./paymentreceipt.php");
        } 
        
        else {
            echo "<script> alert('Error: ' . $conn->error) </script>";
            header("location: ./paymentreceipt.php");
        }

       
    }

    // Check for booked seats
    $booked_seats = array();

    $sql_booked_seats = "SELECT Seat_ID FROM Seat";

    $result = $conn->query($sql_booked_seats);

    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {
            $booked_seats[] = $row['seats'];
        }
    }

    // Close the database connection
    $conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Journey Planner</title>
    <link rel="stylesheet" type="text/css" href="css/Home.css">
    <link rel="stylesheet" type="text/css" href="css/Menu_bar.css">
    <link rel="stylesheet" type="text/css" href="css/Footer.css">
    <link rel="stylesheet" type="text/css" href="./css/book.css">
    
</head>
<body>

<div id="root">
    <div class="bg_image_container" style="height:1680px;background-size:cover;background-position: left;background-repeat: no-repeat;">
        <!--Menu Bar-->
        <?php include("./menu_bar.php"); ?>

        <!--Booking page content-->
        <div class="booking-content">
            <form id="reservationForm" class="form" method="POST" action="./book.php">
                <h1 style="font-size:40px; text-align:center;">Seat Selection</h1>

                    <fieldset>
                        <legend>Select Your Seat(s)</legend>
                        <div style="display: grid; grid-template-columns: repeat(5, 1fr);">
                            <?php
                                // Generate checkboxes for each seat
                                    for ($i = 1; $i <= 50; $i++) {
                                    echo "<div style='padding: 5px;'>";
                                    $disabled = in_array($i, $booked_seats) ? "disabled" : "";
                                    echo "<label for='seat{$i}' style='padding: 5px;'> {$i}</label>";
                                    echo "<input type='checkbox' id='{$i}' name='seats[]' value='{$i}' $disabled>";
                                    echo "</div>";
                                    // Break into a new row after every 5 checkboxes
                                    if ($i % 5 == 0) {
                                    echo "<br>";
                                    }
                                }
                            ?> 
                        </div>
                    </fieldset>
                <p for="r_name">Name:</p>
                <input type="text" id="name" name="r_name" required><br>

                <p for="mobile">Mobile Number:</p>
                <input type="tel" id="mobile" name="mobile" maxlength="10" required><br>

                <p for="email">Email:</p>
                <input type="email" id="email" name="email" required><br>

               

                <input type="radio" name="payment" id="paypal" value="paypal" required>
                <p for="paypal">PayPal</p>

                <input type="radio" name="payment" id="card" value="card" required>
                <p for="card">Debit/Credit Card</p><br>

                <script src=./js/book.js></script>
                <div id="cardDetails" style="display: none;">
                    <p>
                    <input type="text" name="cardholder_name" placeholder="Cardholder Name" class="payment-input" required>
                    </p>
                    <p>
                    <input type="text" name="card_number" placeholder="Card Number" class="payment-input" required maxlength="10">
                    </p>
                    <p>
                    <input type="date" name="expiry_date" placeholder="Expiry Date (MM/YYYY)" class="payment-input" required>
                    </p>
                    <p>
                    <input type="text" name="cvv" placeholder="CVV" class="payment-input" maxlength="3" required>
                    </p>
                </div>

                <button type="submit">Reserve Seat</button>
                
            </form>
        </div>
    </div>
        <!--Footer Content-->
        <div class="footer-content">
        </div>
                <!--Footer Content-->
                <div class="footer-content">
        
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
                    </div>        </div>
    
</div>

</body>

<?php

?>
</html>