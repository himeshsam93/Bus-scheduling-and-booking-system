<?php
    include("./connection.php");
?>
    

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
                                        <h4> cvv :</h4>
                                    </div>
                                    <div class="col-sm-12 col-md-9 col-lg-5">
                                        <input type="text" class="form-control" name="cvv" placeholder="Enter Your cvc" required>
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