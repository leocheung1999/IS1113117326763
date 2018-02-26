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
        
<?php
$_SESSION["name"]= $_POST["name"];
$_SESSION["email"]= $_POST["email"];
?>

        
            
        </br>
        </br>
        
       
         <?php
        //echo session variables 
        echo "Name: " . $_SESSION["name"] . ",<br/>";
        
        echo "Email: " . $_SESSION["email"] . ".<br/>";

        echo "Total is : " . $_SESSION["total"] . ".";
        ?>
        
       </div>
       
     
    </body>
</html>
