<?php
    include("index.php");

        if(isset($_GET["id"])){
            $id = $_GET["id"];

            $deletsql = "DELETE FROM agency WHERE id ='$id'" ;
            if(mysqli_query($conn, $deletsql)){
                echo "agency deleted successfully";
            }else{

                echo "agency does not deleted successfully";
            }


        }
        header("location: agency.php");
        exit();



?>