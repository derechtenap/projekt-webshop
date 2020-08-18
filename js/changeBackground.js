// Diese CSS-Klassen werden Produkttypen zugewiesen
const COLOR = [
    'bg-fruechte',
    'bg-obst',
    'bg-exotisch',
    'bg-gemuese'
]

// Kategorien, welche in der DB festgelegt wurden
const TYPES = [
    'Frucht',
    'Obst',
    'Exotisch',
    'Gemuese'
]

// Die Funktion ändert die Hintergrundfarbe der Cards anhand der jeweiligen, in der DB festgelegten, Kategorie
function changeBackground() {
    for(let i = 0; i < TYPES.length; i++) {
        $('[data-select="' + TYPES[i] + '"]').addClass(COLOR[i])
    }
}