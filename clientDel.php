<?php
    include("index.php");

        if(isset($_GET["id"])){
            $id = $_GET["id"];

            $deletsql = "DELETE FROM client WHERE id ='$id'" ;
            if(mysqli_query($conn, $deletsql)){
                echo "client deleted successfully";
            }else{

                echo "client does not deleted successfully";
            }


        }
        header("location: client.php");
        exit();
?>