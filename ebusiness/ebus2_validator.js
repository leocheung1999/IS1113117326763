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
    var name;
    var email;
    
    //Assigning values to variables
    pin = document.getElementById("user_pin").value;
    email = document.getElementsByName("email").value;
    name = document.getElementsByName("name").value;
    
    if(pin ==""){
        disablebtnPurchase();
        alert("Please enter your PIN");
        return false;
    }
    else if (String(pin).length < 4){
        disablebtnPurchase();
        alert("Please make sure your PIN is accurate");
        return false;
    }
    
    if(name==""){
        disablebtnPurchase()
        alert("Please enter name");
        return false;
    }
    
    if(email==""){
        disablebtnPurchase()
        alert("Please enter email");
        return false;
    }
    
    enablebtnPurchase()
    return true;
}
    
    


function enablebtnPurchase (){
    
    $('#btnPurchase').prop('disabled', false);
}    //end of function

function disablebtnPurchase() {
    $('#btnPurchase').prop('disabled', true);
}    //end of function


