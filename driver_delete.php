<?php 
     // including the configuration file
    include("./config.php");
    session_start();
    
    if(!isset($_SESSION["username"])){

        header("location: ./signin.php");
    }
   
    

?>
<?php
    $sql_delete = "DELETE FROM Driver WHERE Username = '$username'";
    $result_delete = $conn -> query($sql_delete);

    // checking the database operation is done without errors
    if($result_delete){

        echo "<script> alert('Deleted the the successfully !') </script>";
        $delete = header("location: ./logout.php");
        if($delete){

            header("location: ./signin.php");

        }
    }
    else{
        
        echo "<script> alert('Failed to add the record ! Unknown error occurred.') </script>";
        
    }
    $conn -> close();
?>