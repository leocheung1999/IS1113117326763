<?php
//start the session
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Enter Details</title>
    
        <link rel="stylesheet" href="../mystylesheet.css" type="text/css"/>
    
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        
        
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
            <li class ="eBusiness"><a href="company.html">eBusiness</a></li>
        </ul>
    </nav>
    
        <h1 class ="mainheading">Please enter your payment details</h1>
        
        <div id="formstyling">
            <form method="POST" action="Ebus3.php">    
                
                <!--name label-->
              <label for="name">Name:</label>
              
              <br/>
              
              <input type="text" name="name" placeholder="Name" maxlength="20" required='' width="70%">
              
              <br/>
              <!--email label-->
              <label for="email">Email:</label>
              
              <br/>
              
              <input type="email" name="email" placeholder="Email" required='' width="70%">
              
              <br/>
                
                <label for="user_pin">PIN:</label>
                <br/>
                <input type ="password" id="user_pin" placeholder="Card PIN" maxlength="4" width="70%">
                
                <button type ="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
                
            </form>
            
            
        <br/>
            <button id="btnValidate" onClick ="validateDetails()">Validate</button>
       <div/>
        <script type ="text/javascript" src="ebus2_validator.js"></script>
        
        
        </div>
        <?php
        // set session variables
        $_SESSION["total"] = $_POST["total"];
        ?>
    </body>
</html>