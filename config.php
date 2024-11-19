<?php 
    // DB Configurations
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "NaviBus";

    // Creating the DB connection
    $conn = new mysqli($servername, $username, $password, $db_name);

    // Checking the connection is valid or not
    if($conn->connect_error){

        die("Connection failed: " . $conn->connect_error);
}
    
    


