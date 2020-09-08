
//Google map
function initialize() {
   var styles = [
    {
      stylers: [
        { hue: "#00ffe6" },
        { saturation: -100 }
      ]
    },{
      featureType: "road",
      elementType: "geometry",
      stylers: [
        { lightness: 0 },
		{ "gamma": 1.18 },
        { visibility: "simplified" }
      ]
    },{
      featureType: "road",
      elementType: "labels",
      stylers: [
        { visibility: "off" }
      ]
    }
  ];
  
  var styledMap = new google.maps.StyledMapType(styles,
    {name: "Филиалы по Казахстану"});
 
  var image = 'images/map-marker.png'; //Значок на карте
  
  var myLatlng = new google.maps.LatLng(43.289514, 76.917251); //Алматы База 1
        var pos1 = new google.maps.LatLng(43.272419, 76.864459); //Алматы База 2
        var pos2 = new google.maps.LatLng(43.361774, 76.887412); //Алматы База 3 
		var pos3 = new google.maps.LatLng(47.103667, 51.963385); //Атырау 
		var pos4 = new google.maps.LatLng(43.634987, 51.251262); //Актау

  var mapOptions = {
    zoom: 4,
	scrollwheel: false,
    center: myLatlng,
	  mapTypeControlOptions: {
      mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
    }
  }
  
  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

  var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      icon: image,
	  title:"IRON COMMERCE COMPANY", //Map marker - Title
  });
  
   var marker = new google.maps.Marker({
      position: pos1,
      map: map,
	  icon: image,
      title: 'Склад №2'
  });
  
  var marker = new google.maps.Marker({
      position: pos2,
      map: map,
	  icon: image,
      title: 'Склад №3'
  });
  
  var marker = new google.maps.Marker({
      position: pos3,
      map: map,
	  icon: image,
      title: 'Склад Атырау'
  });
  
  var marker = new google.maps.Marker({
      position: pos4,
      map: map,
	  icon: image,
      title: 'Склад Актау'
  });
  
  //Associate the styled map with the MapTypeId and set it to display.
  map.mapTypes.set('map_style', styledMap);
  map.setMapTypeId('map_style');
}

google.maps.event.addDomListener(window, 'load', initialize);