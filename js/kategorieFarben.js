// CSS Farbklassen
const FRUECHTEFARBE = 'next-bg-red';
const OBSTFARBE = 'next-bg-green';
const EXOTISCHFARBE = 'next-bg-orange';
const GEMUESEFARBE = 'next-bg-lime';
const KATEGORIEN = ['Frucht', 'Obst', 'Exotisch', 'Gemuese'];

function changeBackground(type) {
    console.log(type);
    if (type === 'Frucht') {
        $('[data-select="Frucht"]').addClass(FRUECHTEFARBE)
    } else if (type === 'Obst') {
        $('[data-select="Obst"]').addClass(OBSTFARBE)
    } else if (type === 'Gemuese') {
        $('[data-select="Gemuese"]').addClass(GEMUESEFARBE)
    } else if (type === 'Exotisch') {
        $('[data-select="Exotisch"]').addClass(EXOTISCHFARBE)
    } else {
        console.warn('Card konnte keiner Kategorie zugeordnet werden!');
    }
}