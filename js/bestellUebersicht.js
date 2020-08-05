function submitToView() {
    var x = document.getElementById("bestellung");
    var text = "";
    var i;
        for (i = 0; i < x.length ;i++) {
            if (x.elements[i].type === "text" ){
                text += x.elements[i].value + "&";
                localStorage.setItem(x.elements[i].id , x.elements[i].value);
            }   
        }
        var payment = x.querySelector('input[name = "payment[]"]:checked').value;
        localStorage.setItem("payment",payment);
        var shipping = x.querySelector('input[name = "shipping[]"]:checked').value;
        localStorage.setItem("shipping",shipping);
            console.log(payment); 
            console.log(shipping);
        
console.log(text);

}

function hideElement(myElementId) {
    var x = document.getElementById(myElementId);
         x.style.display = "none";

}

function showElement(myElementId){
    var x = document.getElementById(myElementId);
         x.style.display = "block";
}



function showData(){
   
    createAccountDiv();
    createInvoiceDiv();
}

function createAccountDiv(){
        
       $("#accountDaten").html(
        "<h3>Accountdaten</h3>"+   
        localStorage.getItem('accVorname')+","+localStorage.getItem('accNachname')+"</br>"+
        localStorage.getItem('accStraße')+" "+"</br>"+
        localStorage.getItem('accPlz')+" "+localStorage.getItem('accOrt')
       );
      
}    


function createInvoiceDiv(){
    $("#invoiceDaten").html(
        "<h3>Rechnungsdaten</h3>"+   
        localStorage.getItem('invoiceVorname')+","+localStorage.getItem('invoiceNachname')+"</br>"+
        localStorage.getItem('invoiceStraße')+" "+"</br>"+
        localStorage.getItem('invoicePlz')+" "+localStorage.getItem('invoiceOrt')
       );
}

function createArticleDiv(){

}