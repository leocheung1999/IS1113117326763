<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>RECEIPT</title>
    </head>
    <body>
        <h4>RECEIPT</h4>
        
        <!--Set session variables-->
        <?php
        $_SESSION["name"]= $_POST["name"];
        $_SESSION["email"]= $_POST["email"];
        ?>
                
        <?php
        // Echo session variables that were set on previous page
        echo "Name:" . $_SESSION["name"],"<br/>";
        echo "Email:" . $_SESSION["email"] . " . ","<br/>";
        echo "Total Price: " . $_SESSION["total"] . " . ";
        
         
        ?>
        
       
    </body>
</html>
