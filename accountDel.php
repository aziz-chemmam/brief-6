<?php
    include("index.php");

        if(isset($_GET["id"])){
            $id = $_GET["id"];

            $deletsql = "DELETE FROM account WHERE id ='$id'" ;
            if(mysqli_query($conn, $deletsql)){
                echo "account deleted successfully";
            }else{

                echo "account does not deleted successfully";
            }


        }
        header("location: account.php");
        exit();



?>