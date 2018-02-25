<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>RECEIPT</title>
    </head>
     <body id="mainbody">
        <div id="wrapper">
            <div id="header">
            <h4 class ="mainheading">RECEIPT</h4>
            </div>
        
        <?php
        // Echo session variables that were set on previous page
        echo "Name:" . $_SESSION["name"],"<br/>";
        echo "Email:" . $_SESSION["email"] . " . ","<br/>";
        echo "Total Price: " . $_SESSION["total"] . " . ";
        ?>
        
        
       </div>
    </body>
</html>
