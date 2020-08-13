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
        localStorage.setItem("artikel_Tomaten","5");
        localStorage.setItem("artikel_Gurke","2");
        
console.log(text);

}
//Div-Container werden versteckt
function hideElement(myElementId) {
    var x = document.getElementById(myElementId);
         x.style.display = "none";

}
//Div-Cotainer werden auf der Seite sichtbar gemacht
function showElement(myElementId){
    var x = document.getElementById(myElementId);
         x.style.display = "block";
}


//Checkout übersicht -> Aufruf der Daten, die sich im Localstorage oder in der DB befinden
function showData(){
   
    createAccountDiv();
    createInvoiceDiv();
    createArticleContainer(getLsKeysIntoArray('artikel_'));
}

//Alle Accountdaten vom Formular werden mithilfe der Funktion im Checkout Div angezeigt
function createAccountDiv(){
        
       $("#accountDaten").html(
        "<h3>Accountdaten</h3>"+   
        localStorage.getItem('accVorname')+","+localStorage.getItem('accNachname')+"</br>"+
        localStorage.getItem('accStraße')+" "+"</br>"+
        localStorage.getItem('accPlz')+" "+localStorage.getItem('accOrt')
       );
      
}    

//Alle Rechnungsdaten vom Formular werden mithilfe der Funktion im Checkout Div angezeigt
function createInvoiceDiv(){
    $("#invoiceDaten").html(
        "<h3>Rechnungsdaten</h3>"+   
        localStorage.getItem('invoiceVorname')+","+localStorage.getItem('invoiceNachname')+"</br>"+
        localStorage.getItem('invoiceStraße')+" "+"</br>"+
        localStorage.getItem('invoicePlz')+" "+localStorage.getItem('invoiceOrt')
       );
}
//Alle Artikel vom Warenkorb werden mithilfe der Funktion im Checkout Div angezeigt

function createArticleContainer(keyArray){
    var table = "<h3>Warenkorb</h3>";
    table += "<table>";
    table += "<tr> <th>Artikel</th> <th>Menge</th> <th>Preis</th> </tr>";
    for (var i = 0; i < keyArray.length; i++){
        table += '<tr>' +  
        '<td>'+ keyArray[i] + '</td>' +
        '<td>'+ localStorage.getItem(keyArray[i]) + '</td>' + 
        '<td>'+ showProductPrice() + '</td>' +
        '</tr>';
    }
    $("#artikel").append(table);
}

function getLsKeysIntoArray(str){
    var articleInChart = [];
    for (var lsLength = 0; lsLength < localStorage.length; lsLength++) {
        var tempKey = localStorage.key(lsLength);
        if (tempKey.includes(str)) {
         articleInChart.push(tempKey);   
        }
        
    }
    return articleInChart;
}



function showProductPrice() {
    var str = "artikel_";
    var xhttp;
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
      //Glaube Hier muss der abgleich mit dem Localstorage eintrag hin
        //document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    xhttp.open("GET", "artikelUebersicht.php?q="+str, true);
    xhttp.send();
  }