
<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
        <link rel ="stylesheet" href="../mystylesheet.css" type ="text/css"/>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
      
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
        
        
        <h1 class ="mainheading">Select a Product</h1>
                
              <br/>
              
              <div id="formstyling">
                <form method="POST" action="Ebus2.php">
                  
                  <label for="salesforce">
                    <input type="radio" id="salesforce" name="product"  onClick="disablebtnProceed()"/>
                    SalesForce @ $100
                  </label>
                  
                  <br/>
                  <br/>
                  
                  <label for="aws">
                    <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
                    Amazon Web Services @ $300
                  </label>
                  
                  <br/>
                  <br/>
                  
                  <label for="cloud 9">
                    <input type="radio" id="cloud 9" name="product" onClick="disablebtnProceed()"/>
                    Cloud 9 @ $200
                  </label>
                  
                  <br/>
                  <br/>
                  
                  <label for="Gmail">
                    <input type="radio" id="Gmail" name="product" onClick="disablebtnProceed()"/>
                    Gmail @ $400
                  </label>
                  
                  <br/>
                  <br/>
                  
                  <label for="subtotal">
                    Sub Total
                    <input type="text" id="subtotal" value="0.00" readonly style="float:right; width:19%"/>
                  </label>
                  
                  <br/>
                  <br/>
                  
                    <label for="discount">
                      Discount @ 5%:
                      <input type="text" id="discount" value=0.00 readonly style="float:right; width:19%"/>
                    </label>
                  
                  <br/>
                  <br/>
                      <!--Vat Label-->
                    <label for ="vat">
                      Vat @ 10%:
                      <input type="text" id=vat value=0.00 readonly style="float:right ; width:19%"/>
                    </label>
                    
                  <br/>
                  <br/>
                  
                  <label for="total">
                    Total
                    <input type="text" id="total" name="total" value="0.00" readonly style="float:right; width:19%"/>
                  </label>
        
                  <br/>
                  <br/>
                  
                  <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
                
                </form>
            
                <br/>
                <button class ="btnCalc" onClick="calcSub()" >Calculate Cost</button>
                <a role="button" class ="btnClear" href="Ebus1.php">Clear Choice</a>
            
          </div>    
      </div>
    </body>
</html>
