// Fullscreen-Modal, welches auf der Index-Seite angezeigt wird
// Aktiviert die Modal Warnung, nach dem die Seite geladen ist
let infoModal = localStorage.getItem('displayInfoModal')

$(window).on('load', function() {
    if(infoModal == null) $('#modal_warnung').modal('show')
});

function dismissInfoModal() {
    localStorage.setItem('displayInfoModal', false)
}
