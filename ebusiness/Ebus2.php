<!DCOTYPE html>
<html>
    <head>
    <title>Enter Details</title>
    
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!--jQuery-->
    <script src ="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <body>
        
    <style>
        .formstyling{
            padding-left: 25%;
        }
        
        h2{
            text-align:center;
            background-color: #00001a;
             color: #ffffff
        }
        
        
        
    </style>
        <h2>Please enter your payment details</h2>
        
        <div class="formstyling">
            <form action="Ebus3.php" method="POST">
                
                <label for="name">Name:</label>
                <br/>
                <input type = "text" id ="name" placeholder="Name">
                
                <br/>
                
                <label for="email">Email:</label>
                <br/>
                <input type = "text" id ="email" placeholder="Email">
                
                <br/>
                
                <label for="user_pin">PIN:</label>
                <br/>
                <input type ="password" id="user_pin" placeholder="Card PIN" maxlength="4">
                
                <button type ="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
                
            </form>
            <div/>
            
        <br/>
            <button onClick ="validateDetails()">Validate</button>
        
       
        <script type ="text/javascript" src="ebus2_validator.js"></script>
    </body>
</html>