<?php
//start the session
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Receipt</title>
        
        <link rel="stylesheet" href="../mystylesheet.css" type="text/css"/>
    </head>
     <body id="mainbody">
        <div id="wrapper">
            <nav>
                <ul>
                    <li><a href="../cv_page1.html">Curriculum Vitae</a></li>
                    <li><a href="../Interests/sports.html">Interests</a></li>
                    <li><a href="../Interests/travel.html">Travel</a></li>
                    <li><a href="../Interests/cloudservices.html">Cloud Services</a></li>
                    <li class ="eBusiness"><a href="company.html">eBusiness</a></li>
                </ul>
            </nav>
            <div id="header">
            <h2 class ="mainheading">Purchase Receipt</h2>
            </div>
            
        <br/>
        <br/>
        
       <center>
           
           <img src ="https://www.freelogoservices.com/api/main/images/1j+ojl1FOMkX9WypfBe43D6kivaBqR5JnBrEwXs1M3EMoAJtlSEkgfVv9vg9" alt ="logo" style ="width:250px; height:150px;"/>
        
        <br/>
        <br/>
        
         <?php
        // set session variables
        $_SESSION["name"] = $_POST["name"];
        $_SESSION["email"] = $_POST["email"];
        ?>
        
        
        
        <?php
        //echo session variables
        echo "Name: " . $_SESSION["name"] , "<br/>";
        echo "Email: " . $_SESSION["email"] . ".","<br/>";
        echo "Total is : " . $_SESSION["total"] . ".";
        ?>
        
        <p><strong>Thank you for shopping at Buzz & Ronny's Cloud services. If you have any further enquires please email : buzzandronny@email.ie</strong></p>
        
        <br/>
        <a href= "Ebus1.php" class="btnShop" style="text-decoration: none">Back to Shop</a>
        </center>
       </div>
       
     
    </body>
</html>
