/* global $ */

//Function to calculate subtotal
function calcSub(){
    
    //Declaring variable
    var argSubTotal;
    
    if(document.getElementById("salesforce").checked) {
    argSubTotal = 100;
    }

    else if(document.getElementById("aws").checked) {
        argSubTotal= 300;
    }
    
    else if(document.getElementById("cloud 9").checked) {
        argSubTotal = 200;
    }
    else {
        argSubTotal = 400;
    }

    
    calcDisVatTotal(argSubTotal);
}

//Function to calculate breakdown of total price   
function calcDisVatTotal(parmSubTotal){
        
        //Declaring and assigning values to variables
        var discountAmt = 0.05 * parmSubTotal;
        var vatAmt = 0.10 * (parmSubTotal - discountAmt);
        var totalPrice = parmSubTotal - discountAmt + vatAmt;
        
        display(parmSubTotal,discountAmt,vatAmt,totalPrice)
}

//Function which displays our values    
function display(parm1 , parm2 , parm3 , parm4){
        
        document.getElementById("subtotal").value = '$' + parm1;
        document.getElementById("discount").value = '$' + parm2;
        document.getElementById("vat").value = '$' + parm3;
        document.getElementById("total").value = '$' + parm4;
        
        enablebtnProceed();
}
    
function enablebtnProceed() {
        $('#btnProceed').prop('disabled',false);
}
    
function disablebtnProceed() {
        $('#btnProceed').prop('disabled',true);
}