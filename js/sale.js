// Markiert Produkte, welche in der Datenbank in der Spalte "Sale" eine 1 (true) haben

var count = 0;

function hasSale(product, val, price) {

    if (val >= 1) {
        $('[data-target="sale_button_' + product + '"]')
            .removeClass('btn-light');
        $('[data-target="sale_button_' + product + '"]')
            .attr('title', 'Dieses Produkt befinden sich im Sale!')
            .addClass('btn-danger text-white')
            .children('sup')
            .addClass('text-light')
            .removeClass('text-secondary');
        count++;
        setOldPrice(product, price);
    }
    updateNotification(count);

}

function updateNotification(val) {

    $('[data-select="notification_badge"]')
        .html(val);
    // Update Mouseover
    if (val = 1) {
        $('[data-select="notification_badge"]')
            .attr('title', val + ' Produkt befindet sich im Sale!')
    } else {
        $('[data-select="notification_badge"]')
            .attr('title', val + ' Produkte befinden sich im Sale!')
    }

}

function setOldPrice(product, inputprice) {

    let price = (inputprice * 1.19) * 1.5; // Soll den "alten" Preis symoblisieren
    $('[data-target="sale_' + product + '"]')
        .removeClass('d-none')
        .append(document.createTextNode(`Alter Preis: ${price.toFixed(2).toString().replace('.',',')}€`));
}