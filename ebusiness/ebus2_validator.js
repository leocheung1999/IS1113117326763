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
    if(pin ==""){
        disablebtnPurchase();
        alert("Please enter your PIN");
    }
    else if (String(pin).length < 4){
        disablebtnPurchase();
        alert("Please make sure your PIN is accurate");
        
    }
    
    else if(name==""){
        alert("Please enter name");
        return false;
    }
    
    else if(email==""){
        alert("Please enter email");
        return false;
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


