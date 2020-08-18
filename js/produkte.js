// produkte.js entfällt alle Funktionen, um Produkte in den Warenkorb laden zu können

function addProduct(p) {

    // Funktion fügt das Produkt dem Warenkorb hinzu
    // Wird per onClick auf den Warenkorb-Button im Modal ausgelöst
    $('[data-select="btn_warenkorb"]').fadeOut(500);
    $('[data-select="btn_g_sum"]').delay(500).fadeIn(500);
}

// Spagetti Code aber funktioniert :smirk:
// Optimierungen folgen... Ist gerade zu spät :D

function increaseSum(val) {
    $('[data-select="sum"]').attr('value', val + 1);
    $('[data-select="increase"]').attr('onclick', 'increaseSum(' + (val + 1) + ')');
    $('[data-select="decrease"]').attr('onclick', 'decreaseSum(' + (val + 1) + ')');
}

function decreaseSum(val) {
    $('[data-select="sum"]').attr('value', val - 1);
    $('[data-select="decrease"]').attr('onclick', 'decreaseSum(' + (val - 1) + ')');
    $('[data-select="increase"]').attr('onclick', 'increaseSum(' + (val - 1) + ')');
}

function addCart(p) {
    let val = $('[data-select="sum"]').val();
    if (localStorage.getItem(p) === null) {
        localStorage.setItem(p, val);
    } else {
        let newVal = parseInt(localStorage.getItem(p)) + parseInt(val); ;
        localStorage.setItem(p, newVal);
    }
    $('[data-select="btn_g_sum"]').fadeOut(500);
    $('[data-select="notification"]').fadeIn(500);
    $('[data-select="notification"]').delay(1000).fadeOut(500);
    $('[data-select="sum"]').attr('value', 1);
    $('[data-select="decrease"]').attr('onclick', 'decreaseSum(' + 1 + ')');
    $('[data-select="increase"]').attr('onclick', 'increaseSum(' + 1 + ')');
    $('[data-select="btn_warenkorb"]').delay(2000).fadeIn(500);
}