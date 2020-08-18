// Fügt Produkte dem Warenkorb hinzu

const PREFIX = 'artikel_'
const CURRENCY = '€'
var sum = 0
var sumPrice = 0

for (let key in localStorage) {
    if (key.startsWith(PREFIX))  {
        console.log(key, localStorage.getItem(key))
        // Entfernt "Leerer Warenkorb"-Meldung und zeigt Tabelle an
        $('[data-select="product_empty"]').addClass('d-none')
        $('[data-select="product_table').removeClass('d-none')

        // Erstelle Zeile mit den Produkt
        var price = localStorage.getItem('price_' + key)
        var totalPrice = localStorage.getItem(key) * price
        var name = key.replace(/^artikel_/, '') // Entferne Prefix in der Tabelle...
        var markup = `<tr><th scope=\"row\">${name}</th><td>${localStorage.getItem(key)}</td><td>${(price*1.19).toFixed(2) + CURRENCY}</td><td class=\"font-weight-bold\">${totalPrice.toFixed(2) + CURRENCY}</</td></tr>`
        $('[data-select="product_tbody"]').append(markup)
        sum += parseInt(localStorage.getItem(key))
        sumPrice +=parseFloat(totalPrice.toFixed(2))
    }
    $('[data-select="sum').html(sum)
    $('[data-select="sumPrice').html(sumPrice + CURRENCY)
}