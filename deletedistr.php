<?php
    include("index.php");

        if(isset($_GET["id"])){
            $id = $_GET["id"];

            $deletsql = "DELETE FROM distributeurs WHERE id ='$id'" ;
            if(mysqli_query($conn, $deletsql)){
                echo "distributeurs deleted successfully";
            }else{

                echo "distributeurs does not deleted successfully";
            }


        }
        header("location: distributeurs.php");
        exit();



?>