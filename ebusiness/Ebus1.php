<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
        <link rel ="stylesheet" href="mystylesheet.css" type ="text/css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!--jQuery-->
        <script src ="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type= "text/javascript" src = "cost_calc.js"></script>
    </head>
    
    <style>
        
        h1{
            text-align:center;
            background-color: #00001a;
            color: #ffffff
        }
    </style>
    
    <body>
        <h1>Select a Product</h1>
        
        <br/>
    
       <div class="mx-auto" style="width: 250px;">        
        <form method="POST" action ="Ebus2.php">
            <label for ="salesforce">
                <input type ="radio" id ="salesforce" name="product" checked onClick="disablebtnProcess()"/>
                SalesForce @ $100
            </label>
            
            <br/>
            
            <label for "aws">
                <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
                AWS @ $300
            </label>
            
            <br/>
            <br/>
            
            <label for="subtotal">
                Sub Total
                <input type ="text" id="subtotal" value="0.00" readonly/>
            </label>
            
            <br/>
            
            <label for ="total">
                Total
                <input type="text" id="total" value ="0.00" readonly/>
            </label>    
            
            <br/>
            
            <button type ="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
            
        </form>
        
            <button id ="calculatecost" ;style="border-radius: 8px;" style ="text-color: white;" onClick="calcSub()">Calculate Cost</button>
            <a role="button"  href="Ebus1.php">Clear Choice</a>
        </div>
        <br/>
        
        
        
    </body>
</html>