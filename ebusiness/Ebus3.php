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
        //echo session variables 
        echo "Name: " . $_SESSION["name"];
        ?>
        <br/>
          <?php
        
        echo "Email: " . $_SESSION["email"];
        ?>
        <br/>
        <?php
        
        echo "Total is " . $_SESSION["total"];
        ?>
        
       </div>
    </body>
</html>
