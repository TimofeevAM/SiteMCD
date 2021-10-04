

//key = API_KEY AIzaSyB1MrPlrDTYOobbpgDF72J7TYailfC0_ps
// AIzaSyDlFtcLieaokKovXqBj0ebv4B8X9NoE-FQ

//59.943438375591796, 30.27871813055042



// Initialize and add the map
function initMap() {
    // The location of mcdVO
    const uluru = { lat: 59.943438375591796, lng: 30.27871813055042 };
    // The map, centered at mcdVO
    const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 17,
        center: uluru,
    });
    // The marker, positioned at mcdVO
    const marker = new google.maps.Marker({
        position: uluru,
        map: map,
    });
}