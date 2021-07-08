(function() {
    "use strict";

    document.addEventListener('DOMContentLoaded', function() {

        //Mapa de Leaftlef
        let map = L.map('mapa').setView([-25.804779, -62.835338], 10);
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        L.marker([-25.804779, -62.835338]).addTo(map)
            .bindPopup('¡Hola, Bienvenidx!')
            .openPopup()
            .bindTooltip('Un tooltip')
            .openTooltip();

    }); //DOM CONTENT LOADED
})();
