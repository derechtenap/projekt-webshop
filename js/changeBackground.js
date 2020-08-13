// Diese CSS-Klassen werden Produkttypen zugewiesen
const COLOR = [
    'next-bg-red',
    'next-bg-green',
    'next-bg-orange',
    'next-bg-lime'
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
        console.info(`Setze Hintergrund für '${TYPES[i]}'`)
        $('[data-select="' + TYPES[i] + '"]').addClass(COLOR[i])
    }
}