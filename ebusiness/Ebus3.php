<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>RECEIPT</title>
        
        <link rel="stylesheet" href="../mystylesheet.css" type="text/css"/>
    </head>
     <body id="mainbody">
        <div id="wrapper">
            <div id="header">
            <h2 class ="mainheading">RECEIPT</h2>
            </div>
            
        </br>
        </br>
        
       
         <?php
        
        echo "Name: " . $_POST["name"] . ",<br/>";
        
        echo "Email: " . $_POST["email"] . ".<br/>";

        echo "Total is : " . $_SESSION["total"] . ".";
        ?>
        
       </div>
       
     
    </body>
</html>
