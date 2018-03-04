<?php
//start the session
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Enter Details</title>
    
        <link rel="stylesheet" href="../mystylesheet.css" type="text/css"/>
    
        <!--jQuery-->
        <script src ="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type ="text/javascript" src="ebus2_validator.js"></script>
        
       
    </head>
    <body id="mainbody">
        <div id="wrapper">
            
            <nav>
                <ul>
                    <li><a href="../homepage.html">Homepage</a></li>
                    <li><a href="../Interests/sports.html">Interests</a></li>
                    <li><a href="../Interests/travel.html">Travel</a></li>
                    <li><a href="../Interests/cloudservices.html">Cloud Services</a></li>
                    <li class ="eBusiness"><a href="company.html">eBusiness</a></li>
                </ul>
            </nav>
    
            <h2 class ="mainheading">Please enter your payment details</h2>
        
            <div id="formstyling">
                <form name="details"  action="Ebus3.php" method="POST">    
                    
                        
                    <label for="name"><strong>Name:</strong></label>
                      
                    <br/>
                      
                      <!--Validating Name-->
                    <input type="text" id ="name" name="name" placeholder="Name" maxlength="20" required='' pattern="[a-zA-Z]*" title="No numbers or special characters allowed" style="width:150%">
                      
                    <br/>
                    <br/>
                      
                    <label for="email"><strong>Email:</strong></label>
                      
                    <br/>
                     <!--Validating email. Code for pattern from w3Schools-->
                    <input type="email" id="email" name="email" placeholder="Email e.g djimi@umail.ucc.ie" required='' pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Please enter email format, No Capitals. Eg. djimi@email.ie" style ="width:150%">
                      
                    <br/>
                    <br/>
                    
                    <label for="user_pin"><strong>PIN:</strong></label>
                    <br/>
                    <!--Validating Pin-->
                    <input type ="password" id="user_pin" placeholder="Card PIN" maxlength="4" required='' pattern="\d*" title="Only Numbers allowed" style ="width:150%">
                        
                    <br/>
                    <br/>
                        
                    <button type ="submit" id="btnPurchase" onClick="correctDetails()" disabled>Proceed with Purchase</button>
                    
                </form>
                
                
                <br/>
                <button  type ="submit" id="btnValidate" onClick ="validateDetails()">Validate</button>
            <div/>
            <script type ="text/javascript" src="ebus2_validator.js"></script>
        
        
        </div>
        <?php
        // set session variables
        $_SESSION["total"] = $_POST["total"];
        ?>
    </body>
</html>