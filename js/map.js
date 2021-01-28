var lat = 47.61634;
var lon = 6.14439;
var macarte = null;
// Fonction d'initialisation de la carte
function initMap() {

    // Créer l'objet "macarte" et l'insèrer dans l'élément HTML qui a l'ID "map"
    macarte = L.map('macarte').setView([lat, lon], 11);
    // Leaflet ne récupère pas les cartes (tiles) sur un serveur par défaut. Nous devons lui préciser où nous souhaitons les récupérer. Ici, openstreetmap.fr
    L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
        // Il est toujours bien de laisser le lien vers la source des données
        attribution: 'données © <a href="//osm.org/copyright">OpenStreetMap</a>/ODbL - rendu <a href="//openstreetmap.fr">OSM France</a>',
        minZoom: 1,
        maxZoom: 20
    }).addTo(macarte);
}
window.onload = function(){
    // Fonction d'initialisation qui s'exécute lorsque le DOM est chargé
    initMap();

    var tableauMarker = []
    var marqueurs = L.markerClusterGroup();


// creation de marqueur avec Popup

    var marqueur1 =
        L.marker([47.63698269981212, 6.151860537109415]); //addTo(macarte);
    marqueur1.bindPopup("<h5 style='color: darkred'>Online FormaPro</h5>" +
        "<p>19 Rue de Praley, 70000 Vesoul</p>"+
        "<button type='submit' class='btn btn-primary'>Contacter</button></form>");
    marqueurs.addLayer(marqueur1);

    var marqueur2 =
    L.marker([47.26553689607852, 6.052855630301632]); //addTo(carte);
    marqueur2.bindPopup("<h5 style='color: darkred'>Online FormaPro</h5>" +
        "<p>2b Chemin de Palente, 25000 Besançon</p>" +
        "<h6>Contact :</h6>" +
    "<button type='submit' class='btn btn-primary'>Contacter</button></form>");
    marqueurs.addLayer(marqueur2);


    //On ajoute le marqueur au tableau

    tableauMarker.push(marqueurs);

    //On regroupe les marqueurs dans un groupe lefleat
    var groupe = new L.featureGroup(tableauMarker);

    //On adapte le zoom au groupe
    macarte.fitBounds(groupe.getBounds());

    macarte.addLayer(marqueurs);
};
