/* global $ */

function validateDetails(){
    
    var pin;
    var name;
    var email;
    
    
    pin = document.getElementById("user_pin").value;
    email = document.getElementById("email").value
    name = document.getElementById("name").value;
    
    
    if(pin ==""){
        alert("Please enter your PIN");
        
    }
    else if (String(pin).length < 4){
        alert("Please make sure your PIN is accurate");
    }
    else{
        enablebtnPurchase();
    }
    
}

    if(name == ""){
        alert("Please enter Name");
    }
    
    else {
        enablebtnPurchase();
    }

function enablebtnPurchase (){
    $('#btnPurchase').prop('disabled', false);
}    

function disablebtnPurchase() {
    $('#btnPurchase').prop('disabled', true);
}

