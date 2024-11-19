<?php
    include("./connection.php");
?>
    <div class="payment_details-content">

            <h1 align="center"> List of Buyers </h1>
            <br>
            <h2 style="padding-left:80px; font-size:30px; display:inline-block;">Summary</h2>
            <br>
            <div align="center">

                <table border="1" width="70%" cellpadding="10" style="background-color:white;">

                    <tr>
                        <?php
                            // printing the table columns
                            $column_names = array("CVC","name", "email", "phone","card_type","card_no","confirmation");
                            for($i = 0; $i <= 8; $i++){

                                echo"<th><p style='font-size:15px; color:black; font-weight:600;'>". $column_names[$i]. "</p></th>";
                            }
                            echo"<th><p <p style='font-size:15px; color:black;font-weight:600;'> Actions </p></th>";
                            

                        ?>
                    </tr>
                    
                    <?php
                        // getting the number of entries and all the data
                        $sql_data = "SELECT * FROM payment_details";
                        $sql_count = "SELECT COUNT(*) AS Len FROM payment_details";

                        $result_data = $conn -> query($sql_data);
                        $result_count = $conn -> query($sql_count);

                        if($result_data -> num_rows > 0){

                            $len = $result_count -> fetch_assoc();
                            // printing the table data
                            for($i = 0; $i < $len['Len']; $i++){

                                $row_data = $result_data -> fetch_assoc();
                                echo"<tr>";

                                for($x = 0; $x <= 8; $x++){

                                    echo"<td><p style='font-size:14px; color:black;'>". $row_data[$column_names[$x]] ."</p></td>";

                                }
                                echo"<td colspan='2'>
                                    <a href='./payment_update.php' style='text-decoration: none; color:white;'><button style='background-color: green;color:white;padding: 3px; border-radius:3px; border-color:white;'> Edit </a></button>
                                    <a href='./delete_tables.php' style='text-decoration: none; color:white;'><button style='background-color: red;color:white;padding: 3px; border-radius:3px; border-color:white;'> Delete </a></button>
                                </td>";
                                
                                echo "</tr>";
                            }
                        }

                    ?>
            
                </table>
            </div>
        </div>
    </div>  


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./styles/payment.css">
    <title>Payment</title>
</head>
<body class="bg_class">
    <div class="container">
        <!-- start #header -->
        <header id="header">
            <!-- start #menu -->
            
            <!-- end #menu -->
        </header>
        <main>
            
            <section class="container mt-5 forms">
                <h1 align ="center"> Update Payment Details</h1>
                <form class="form-horizontal" method="post">
                    <div class="row">
                    <?php echo @$msg; ?>
                        <div class="col-sm-12 col-md-5 pe-5">
                            <div class="form-group mb-2">
                                <div class="row">
                                    <div class="control-label col-sm-12 col-md-3 col-lg-3">
                                        <h4> Name :</h4>
                                    </div>
                                    <div class="col-sm-12 col-md-9 col-lg-9">
                                        <input type="text" class="form-control" name="updatename" placeholder="Enter Your Name" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group mb-2">
                                <div class="row">
                                    <div class="control-label col-sm-12 col-md-3 col-lg-3">
                                        <h4>Email :</h4>
                                    </div>
                                    <div class="col-sm-12 col-md-9 col-lg-9">
                                        <input type="email" class="form-control" name="updateemail" placeholder="Enter Your Email" required />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group mb-2">
                                <div class="row">
                                    <div class="control-label col-sm-12 col-md-3 col-lg-3">
                                        <h4>Mobile :</h4>
                                    </div>
                                    <div class="col-sm-12 col-md-9 col-lg-9">
                                        <input type="text" class="form-control" name="updatephone" placeholder="Type Your Phone Number" required>
                                    </div>
                                </div>
                            </div>

                            
                            <div class="form-group mb-2">
    <div class="row">
        <div class="control-label col-sm-12 col-md-3 col-lg-3">
            <h4>Card Type:</h4>
        </div>
        <div class="col-sm-12 col-md-9 col-lg-9">
            <select class="form-control" name="updatecard_type" required>
                <option>Visa</option>
                <option>Mastercard</option>
            </select>
        </div>
    </div>
</div>

<div class="form-group mb-2">
    <div class="row">
        <div class="control-label col-sm-12 col-md-3 col-lg-3">
            <h4>Card No :</h4>
        </div>
        <div class="col-sm-12 col-md-9 col-lg-9">
            <input type="text" name="updatecard_no" class="form-control" required>
        </div>
    </div>
</div>

                    
                            <div class="form-group mb-2">
                                <div class="row">
                                    <div class="control-label col-sm-12 col-md-3 col-lg-3">
                                        <h4> cvc :</h4>
                                    </div>
                                    <div class="col-sm-12 col-md-9 col-lg-5">
                                        <input type="text" class="form-control" name="cvc" placeholder="Enter Your cvc" required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                        <div class="col-sm-12 col-md-7">
                            <div class="form-group mb-2">
                                <div class="row">
                                   
                                    <div class="col-sm-12 col-md-9 col-lg-3">
                                      
                                    </div>
                                </div>
                            </div>
                       

                            <div class="form-group">
                                <div class="row">
                                    
                                    <div class="col-sm-12 col-md-9 col-lg-3">
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    
                                    <div class="col-sm-12 col-md-9 col-lg-3">
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>

                  

                           
                    <div class="row mt-4">
                        <div class="col-sm-12 d-flex justify-content-center">
                            <input type="submit" value="Pay Now" name="savedata" class="booking-button" required />
                        </div>
                    </div>
                </form>
            </section>
            <!-- end booking form -->
        </main>
        <!-- end main -->
        
    </div>
    </body>
</html>