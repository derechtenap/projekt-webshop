function submitToView() {
    var x = document.getElementById("bestellung");
    var text = "";
    var i;
        for (i = 0; i < x.length ;i++) {
            if (x.elements[i].type === "text" ){
                text += x.elements[i].value + "<br>";
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
   /* for (var i = 0; i < localStorage.length; i++){
        $('#userOutput').append(localStorage.getItem(localStorage.key(i)));
    } */
    createAccountDiv();

}

function createAccountDiv(){

    var accArray = new Array();

    for (var i = 0; i < localStorage.length; i++){
        var store = localStorage.key(i);
        if (store.startsWith("acc")){
            accArray.push(store);
        } 
    }
    console.log(accArray);

        var div = document.getElementById('userOutput');
        var tbl = document.createElement('table');
        tbl.style.width = '100%';
        tbl.setAttribute('border', '1');
        var tbdy = document.createElement('tbody');

        var tr = document.createElement('tr');
        var td = document.createElement('td');

        td.appendChild(document.createTextNode(localStorage.getItem('vorname')));
        tr.appendChild(td);
        td.appendChild(document.createTextNode(localStorage.getItem('nachname')));
        tr.appendChild(td);
        tbl.appendChild(tr);



        /* for (var i = 0; i < 3; i++) {
          var tr = document.createElement('tr');
          for (var j = 0; j < 2; j++) {
            if (i == 2 && j == 1) {
              break
            } else {
              var td = document.createElement('td');
              td.appendChild(document.createTextNode('\u0020'))
              tr.appendChild(td)
            }
          }
          tbdy.appendChild(tr);
        } */
        tbl.appendChild(tbdy);
        div.appendChild(tbl)
      
}

function createInvoiceDiv(){

}

function createarticleDiv(){

}