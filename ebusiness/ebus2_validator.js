/* global $ */

function validateDetails(){
    
    var pin;
    var name;
    var email;
    
    
    pin = document.getElementById("user_pin").value;
    email = document.getElementsByName("email").value
    name = document.getElementsByName("name").value;
    
    
    if(pin ==""){
        alert("Please enter your PIN");
        
    }
    if (String(pin).length < 4){
        alert("Please make sure your PIN is accurate");
    }
    
     if (email == ""){
        alert("Please ensure you have entered your E-mail.");
    }
    
    if (name == ""){
        alert("Please ensure you have entered your name");
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


