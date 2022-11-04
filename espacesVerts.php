<?php include_once("inc/header.php"); ?>

<h1 id="titleCarte">Les espaces verts</h1>

    <div id="map"></div>
    <script>
        mapboxgl.accessToken = 'pk.eyJ1Ijoic21laGVubmkiLCJhIjoicHhDa3IwWSJ9.2zNetPcjBYZrLDrdgyDMdw';
        latitude = -73.6877;
        longitude = 45.5244;
        
        window.addEventListener('load', (event) => {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
            }
        });

        function showPosition(position) {
            latitude = position.coords.latitude;
            longitude = position.coords.longitude;

            
        marker1 = new mapboxgl.Marker() 
            .setLngLat([longitude, latitude])
            .addTo(map);

            map.flyTo({center:[longitude, latitude]});
        }

        // Nouvelle carte
        const map = new mapboxgl.Map({
            container: 'map',
            // Style pour Montréal
            style: 'mapbox://styles/smehenni/cla0cjny2000t14rxgyfn17lx',
            // Vous pouvez modifier les coordonnées du point d'origine onload, le zoom et l'angle de la carte
            center: [-73.6877, 45.5244], 
            zoom: 10.5,
            pitch: 35   
        });

        map.on('load', () => {
            // Ajout d'une source de données
            // Va fetch directement les parcs du site de données ouvertes à chaque chargement. Plus long, mais toujours à jour.
            // Définitement plus rapide si vous loadez un geosjon local
            map.addSource('mtl-parcs', {
                'type': 'geojson',
                'data': 'https://data.montreal.ca/dataset/2e9e4d2f-173a-4c3d-a5e3-565d79baa27d/resource/35796624-15df-4503-a569-797665f8768e/download/espace_vert.json'
            });

            // Ajout de la couche des parcs 
            map.addLayer({
                'id': 'mtl-parcs-couche',
                'type': 'fill',
                'source': 'mtl-parcs',
                'paint': {
                    'fill-color': 'rgba(15, 107, 53, 0.4)',
                    'fill-outline-color': 'rgba(15, 107, 53, 1)'
                }
            });

            // Popup pour les noms des parcs
            map.on('click', 'mtl-parcs-couche', (e) => {
                new mapboxgl.Popup()
                    .setLngLat(e.lngLat)
                    .setHTML(e.features[0].properties.Nom)
                    .addTo(map);
            });

            // Change le curseur quand on passe sur les parcs
            map.on('mouseenter', 'mtl-parcs-couche', () => {
                map.getCanvas().style.cursor = 'pointer';
            });

            map.on('mouseleave', 'mtl-parcs-couche', () => {
                map.getCanvas().style.cursor = '';
            });
        });
    </script>

<?php include_once("inc/footerMobile.php"); ?>