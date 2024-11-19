<?php 
    include("./connection.php");
?>
<!DOCTYPE html>
<html lang="en">
    
    <body>
        <!-- page content container-->
        <div id="root">

            <!-- sign in container-->
            <div>

                <div>
                    <!-- admin menu bar -->
                    <?php 

                        //include("./admin_menubar.php");
                    ?>

                     <!-- passenger summery -->

                    <div class="passenger-content">

                        <h1 align="center"> List of Buyers </h1>
                        <br>
                        <h2 style="padding-left:80px; font-size:30px; display:inline-block;">Summary</h2>
                        <br>
                        <div align="center" >

                            <table border="1" width="70%" cellpadding="10" style="background-color:white;">

                                <tr>
                                    <?php
                                        // printing the table columns
                                        $column_names = array("name", "email", "phone","cvc", "card_type", "card_no","confirmation");
                                        for($i = 0; $i <= 6; $i++){

                                            echo"<th><p style='font-size:15px; color:black; font-weight:600;'>". $column_names[$i]. "</p></th>";
                                        }
                                        echo"<th><p <p style='font-size:15px; color:black;font-weight:600;'> Actions </p></th>";
                                       

                                    ?>
                                </tr>
                                
                                <?php
                                    // getting the number of entries and all the data
                                    $mysql_data = "SELECT * FROM payment_details";
                                    $sql_count = "SELECT COUNT(*) AS Len FROM payment_details";

                                    $result_data = $con -> query($mysql_data);
                                    $result_count = $con -> query($sql_count);

                                    if($result_data -> num_rows > 0){

                                        $len = $result_count -> fetch_assoc();
                                        // printing the table data
                                        for($i = 0; $i < $len['Len']; $i++){

                                            $row_data = $result_data -> fetch_assoc();
                                            echo"<tr>";

                                            for($x = 0; $x <= 6; $x++){

                                                echo"<td><p style='font-size:14px; color:black;'>". $row_data[$column_names[$x]] ."</p></td>";

                                            }
                                            echo"<td colspan='2'>
                                                <a href='./payment_update.php' style='text-decoration: none; color:white;'><button style='background-color: green;color:white;padding: 3px; border-radius:3px; border-color:white;'> Edit </a></button>
                                                <a href='./payment_delete.php' style='text-decoration: none; color:white;'><button style='background-color: red;color:white;padding: 3px; border-radius:3px; border-color:white;'> Delete </a></button>
                                            </td>";
                                           
                                            echo "</tr>";
                                        }
                                    }

                                ?>
                        
                            </table>
                        </div>
                    </div>
                </div>  
                
            </div>
        </div>
    </body>
</html>