/* global $ */

function validateDetails(){
    
    var pin;
    var name;
    var email;
    
    
    pin = document.getElementById("user_pin").value;
    email = document.getElementsByName("email").value
    name = document.getElementsByName("name").value;
    
    
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

  

function enablebtnPurchase (){
    $('#btnPurchase').prop('disabled', false);
}    

function disablebtnPurchase() {
    $('#btnPurchase').prop('disabled', true);
}
