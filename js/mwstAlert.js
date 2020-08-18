let mwstAlert = localStorage.getItem('displayMwstAlert')

// Wenn die Variable im Storage nicht gefunden wurde (== null), 
// wird der Alert auf der Hauptsache anzeigt...
if(mwstAlert == null) $('[data-select="mwstAlert"]').removeClass('d-none')

// Setzt, nach einem onclick, den Flag auf false. Der Alert wird nicht mehr angezeigt...
function dismissMwstAlert() {
    localStorage.setItem('displayMwstAlert', false)
}