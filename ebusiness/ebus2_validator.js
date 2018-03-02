/* global $ */

var pin;
pin = document.getElementById("user_pin").value;

if(pin ==""){
        disablebtnPurchase();
}        
//Function to validate details
function validateDetails(){
    
    //Declaring out variables
    var pin;
   
    
    
    //Assigning values to variables
    pin = document.getElementById("user_pin").value;
    
    
    if(pin ==""){
        disablebtnPurchase();
        alert("Please enter your PIN");
        return false;
    }
    else if (String(pin).length < 4){
        disablebtnPurchase();
        alert("Please make sure your PIN is accurate");
       
    }
    
   else{
       nameValidate()
   }
}

function nameValidate(){
     var name;
     
     name = document.getElementsByName("name").value;
     
     if(name==""){
         disablebtnPurchase()
     }
     
    else{
        emailValidate()
    }
}    

function emailValidate(){
    var email;
    
    email = document.getElementsByName("email").value;
    
    if(email==""){
        disablebtnPurchase()
    }
    
    else{
        enablebtnPurchase()
    }
}    
    


function enablebtnPurchase (){
    
    $('#btnPurchase').prop('disabled', false);
}    //end of function

function disablebtnPurchase() {
    $('#btnPurchase').prop('disabled', true);
}    //end of function


