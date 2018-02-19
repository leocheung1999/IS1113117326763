
<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
        <link rel ="stylesheet" href="mystylesheet.css" type ="text/css"/>
        
        
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
        
        <style>
        
        
           h1{
            text-align:center;
            background-color: #00001a;
            color: #ffffff
        }
           
           #formstyling {
               margin: auto;
               width:50%;
               padding-left:200px;
               border-style: solid;
               border-width: 2px;
        }
        
          #btnProceed{
              background-color: #4CAF50;
              color: white;
              border: none;
              font-size: 16px;
        }
        
        #btnProceed active {
             color: white;
              border: none;
              font-size: 16px;
              background-color:#4CAF50;
        }
        
        nav ul li:last-child {
    float: right;
}

nav ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

nav li {
    float: left;
    
}

nav li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

nav li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: #4CAF50;
}

.grade {
  border: 1px solid black;
  border-collapse: collapse;
}

tr, td, th {
    border: 1px solid black;
  border-collapse: collapse;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
      </style>
    </head>
    
    
    <body>
        
    <nav>
        <ul>
            <li><a href="../homepage.html">Homepage</a></li>
            <li><a href="../Interests/sports.html">Interests</a></li>
            <li><a href="../Interests/travel.html">Travel</a></li>
            <li class ="eBusiness"><a href="ebusiness/Ebus1.php">eBusiness</a></li>
        </ul>
    </nav>
    
    <br/>
            <h1>Select a Product</h1>
            
            <br/>
            
            <div id="formstyling" >
            <form method="POST" action="Ebus2.php">
              
              <label for="salesforce">
                <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                SalesForce @ $100
              </label>
              
              <br/>
              
              <label for="aws">
                <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
                AWS @ $300
              </label>
              
              <br/>
              <br/>
              
              <label for="subtotal">
                Sub Total
                <input type="text" id="subtotal" value="0.00" readonly/>
              </label>
              
              <br/>
              
              <label for="total">
                Total
                <input type="hidden" id="total" name="total" value="0.00" readonly/>
              </label>
    
              <br/>
              
              <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
            
            </form>
            
            <br/>
            <button onClick="calcSub()" >Calculate Cost</button>
            <a role="button" href="Ebus1.php">Clear Choice</a>
            </form>
    
    </body>
</html>
