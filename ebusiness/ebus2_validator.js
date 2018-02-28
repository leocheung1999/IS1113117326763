/* global $ */

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
    
    //If statement to validate details
    if(pin =="" || name=="" || email==""){
        alert("Please enter your details");
    }
    else if (String(pin).length < 4){
        alert("Please make sure your PIN is accurate");
    }
    else{
        enablebtnPurchase();
    }
    
}
   //end of function
  


function enablebtnPurchase (){
    
    $('#btnPurchase').prop('disabled', false);
}    //end of function

function disablebtnPurchase() {
    $('#btnPurchase').prop('disabled', true);
}    //end of function


