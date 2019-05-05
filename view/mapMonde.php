<!DOCTYPE html>
<html>
	<head>
        <meta charset="utf-8">
        <!-- Nous chargeons les fichiers CDN de Leaflet. Le CSS AVANT le JS -->
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ=="
            crossorigin="" />
			<link rel="stylesheet" type="text/css" href="mapMonde.css" media="all"/>
        <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js" integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw=="
            crossorigin=""></script>
		<script type="text/javascript">
		//couleur de markers
	var greenIcon = new L.Icon({
  	iconUrl: 'https://cdn.rawgit.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-green.png',
  	shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
  	iconSize: [25, 41],
  	iconAnchor: [12, 41],
  	popupAnchor: [1, -34],
  	shadowSize: [41, 41]
	});

	var redIcon = new L.Icon({
  	iconUrl: 'https://cdn.rawgit.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-red.png',
  	shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
  	iconSize: [25, 41],
  	iconAnchor: [12, 41],
  	popupAnchor: [1, -34],
  	shadowSize: [41, 41]
	});
			// On initialise la latitude et la longitude de Paris (centre de la carte)
			var lat = 48.852969;
			var lon = 2.349903;
			var macarte = null;
			// on rentre les coordonées en dur 
			var site=[
				["Site A",34.580075,22.388987],
				["Site B",-58.347999,15.006175],
				["Site C",51.779558,149.654612],
				["Site D",17.691385,-127.7282],
				["Site E",51.605222,-30.345388]
			];
			var equipes=[
				["Equipe 1",55.046433,-69.720388],
				["Equipe 2",60.680304,10.0843],
				["Equipe 3", 21.858687 ,81.451487]
				
				
			];

			var bases=[
				["Base Marseille",43.354564,5.309225],
				["Base Bordeaux",44.837781,-0.733254],
				["Base Brest",48.390528,-4.486009]

			];
			var materiel=[
				["Valise KMACS 5",43.354564,5.309225],
				["Motopompes",51.779558,149.654612],
				["Matériel photo-vidéo numérique sous-marin",-58.347999,15.006175],
				["Compresseur HP",43.354564,5.309225],
				["Lance à dévaser",48.390528,-4.486009]
			];
			var mkr=[];
			// Fonction d'initialisation de la carte
			function initMap() {
				// Créer l'objet "macarte" et l'insèrer dans l'élément HTML qui a l'ID "map"
                macarte = L.map('map',{
					center:[42.0,-3.0],
					minZoom: 1.4,
					zoom: 1.5
				});
                // Leaflet ne récupère pas les cartes (tiles) sur un serveur par défaut. Nous devons lui préciser où nous souhaitons les récupérer. Ici, openstreetmap.fr
                L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
                    // Il est toujours bien de laisser le lien vers la source des données
                    attribution: 'données © <a href="//osm.org/copyright">OpenStreetMap</a>/ODbL - rendu <a href="//openstreetmap.fr">OSM France</a>',
                   
                }).addTo(macarte);
            }
			window.onload = function(){
				// Fonction d'initialisation qui s'exécute lorsque le DOM est chargé
				initMap(); 
				}

				function equipe(){
					if(mkr.length>0){
						for(var j=0;j<mkr.length;j++){
						macarte.removeLayer(mkr[j]);
					}
				}
					for(var i=0;i<equipes.length;i++){
						marker = L.marker([equipes[0,i][1],equipes[0,i][2]],{icon:greenIcon}).bindPopup(equipes[0,i][0]).addTo(macarte);
						mkr[i]=marker;
					}
				};
				function materiels(){
					if(mkr.length>0){
					for(var j=0;j<mkr.length;j++){
						macarte.removeLayer(mkr[j]);
					}
				}
					for(var i=0;i<materiel.length;i++){
						marker = L.marker([materiel[0,i][1],materiel[0,i][2]],{icon:redIcon}).bindPopup(materiel[0,i][0]).addTo(macarte);
						mkr[i]=marker;	
					}
				};
				function tout(){
					if(mkr.length>0){
					for(var j=0;j<mkr.length;j++){
						macarte.removeLayer(mkr[j]);
					}
				}
					for(var i=0;i<materiel.length;i++){
						marker = L.marker([materiel[0,i][1],materiel[0,i][2]],{icon:redIcon}).bindPopup(materiel[0,i][0]).addTo(macarte);
						mkr.push(marker);	
					}
					for(var i=0;i<equipes.length;i++){
						marker = L.marker([equipes[0,i][1],equipes[0,i][2]],{icon:greenIcon}).bindPopup(equipes[0,i][0]).addTo(macarte);
						mkr.push(marker);
					}
					for(var i=0;i<bases.length;i++){
						marker = L.marker([bases[0,i][1],bases[0,i][2]]).bindPopup(bases[0,i][0]).addTo(macarte);
						mkr.push(marker);
					}
				};
				function base(){
					if(mkr.length>0){
					for(var j=0;j<mkr.length;j++){
						macarte.removeLayer(mkr[j]);
						
					}
				}
					for(var i=0;i<bases.length;i++){
						marker = L.marker([bases[0,i][1],bases[0,i][2]]).bindPopup(bases[0,i][0]).addTo(macarte);
						mkr[i]=marker;
					}
				};
				
				//var marker = L.marker([lat, lon]).addTo(macarte).bindPopup('Le texte du marker<br> On peut y mettre du code HTML');
				
			
		</script>
		
		<title>Carte</title>
	</head>
	<body>
		<button name=""tout" onclick="tout()" >Tout</button>
		<button name=""equipes" onclick="equipe()">Equipes</button>
		<button name=""materiels" onclick="materiels()">Materiels</button>
		<button name=""bases" onclick="base()">Bases</button>
		<br>
		<div id="map">
			<!-- Ici s'affichera la carte -->
		</div>
	</body>
</html>
