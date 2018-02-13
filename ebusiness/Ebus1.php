<!DOCTYPE html>
<html>
    <head>
        
    <title>Select Product</title>
    <link rel ="stylesheet" href="mystylesheet.css" type ="text/css"/>
    
    
    <!--jQuery-->
    <script src ="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type= "text/javascript" src = "cost_calc.js"></script>
    </head>
    
    <style>
        .formstyling{
            padding-left: 25%;
        }
        
        h3{
            text-align:center;
        }
        
        
        
    </style>
    <body>
        <h3>Select a Product</h3>
        
        <br/>
    
       <div class="formstyling">        
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