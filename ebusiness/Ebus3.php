<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
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
            
        </br>
        </br>
        
       <center>
           
           <img src ="https://www.freelogoservices.com/api/main/images/1j+ojl1FOMkX9WypfBe43D6kivaBqR5JnBrEwXs1M3EMoAJtlSEkgfVv9vg9" width:"170px" height="150px"; />
        
        <br/>
        <br/>
        
         <?php
        //echo session variables 
        $_SESSION["name"] = $_POST["name"];
        $_SESSION["email"] = $_POST["email"];
        ?>
        
        
        
        <?php
        echo "Name: " . $_SESSION["name"] , "<br/>";
        echo "Email: " . $_SESSION["email"] . ".","<br/>";
        echo "Total is : " . $_SESSION["total"] . ".";
        ?>
        
        <p><strong>Thank you for shopping at Buzz & Ronny's Cloud services. If you have any further enquires please email : BuzzAndRonny@Ethivag.ie</strong></p>
        </center>
       </div>
       
     
    </body>
</html>
