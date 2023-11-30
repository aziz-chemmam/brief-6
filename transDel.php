<?php
    include("index.php");

        if(isset($_GET["id"])){
            $id = $_GET["id"];

            $deletsql = "DELETE FROM transactions WHERE id ='$id'" ;
            if(mysqli_query($conn, $deletsql)){
                echo "transaction deleted successfully";
            }else{

                echo "transaction does not deleted successfully";
            }


        }
        header("location: transaction.php");
        exit();



?>