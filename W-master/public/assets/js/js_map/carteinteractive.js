/**
 * Affichage de la carte interactive
 */

function $(element) {
  return document.getElementById(element);
}

var objMap = {};

objMap.lesContacts = null;
objMap.map = null;
objMap.markerClusterer = null;
objMap.markers = [];
objMap.infoWindow = null;

objMap.init = function() {
  var latlng = new google.maps.LatLng(lngLatitude, lngLongitude);
  var options = {
    'zoom': intZoom,
    'center': latlng,
    'mapTypeId': google.maps.MapTypeId.ROADMAP
  };

  objMap.map = new google.maps.Map($('map'), options);
  objMap.lesContacts = data.contacts;
  
  // var useGmm = document.getElementById('usegmm');
  // google.maps.event.addDomListener(useGmm, 'click', objMap.change);
  
  // var numMarkers = document.getElementById('nummarkers');
  // google.maps.event.addDomListener(numMarkers, 'change', objMap.change);

  objMap.infoWindow = new google.maps.InfoWindow();

  objMap.showMarkers();
};

objMap.showMarkers = function() {
  objMap.markers = [];

  var type = 1;
  // if ($('usegmm').checked) {
  //   type = 0;
  // }

  if (objMap.markerClusterer) {
    objMap.markerClusterer.clearMarkers();
  }

  // var panel = $('markerlist');
  // panel.innerHTML = '';
  // var numMarkers = $('nummarkers').value;
  var numMarkers = data.contacts.length;

  for (var i = 0; i < numMarkers; i++) {

    // var titleText = objMap.lesContacts[i].photo_title;
    // if (titleText === '') {
    //   titleText = 'No title';
    // }

    // var item = document.createElement('DIV');
    // var title = document.createElement('A');
    // title.href = '#';
    // title.className = 'title';
    // title.innerHTML = titleText;

    // item.appendChild(title);
    // panel.appendChild(item);


    var latLng = new google.maps.LatLng(objMap.lesContacts[i].latitude,
                                        objMap.lesContacts[i].longitude);

    var imageUrl = 'http://chart.apis.google.com/chart?cht=mm&chs=24x32&chco=' +
        'FFFFFF,008CFF,000000&ext=.png';

    var markerImage = new google.maps.MarkerImage(imageUrl,
        new google.maps.Size(24, 32));

    var marker = new google.maps.Marker({
      'position': latLng,
      'icon': markerImage
    });

    var fn = objMap.markerClickFunction(objMap.lesContacts[i], latLng);
    google.maps.event.addListener(marker, 'mouseover', fn);
    // google.maps.event.addDomListener(title, 'click', fn);
    objMap.markers.push(marker);
  }

  window.setTimeout(objMap.time, 0);
};

objMap.markerClickFunction = function(pointCarte, latlng) {
  return function(e) {
    e.cancelBubble = true;
    e.returnValue = false;
    if (e.stopPropagation) {
      e.stopPropagation();
      e.preventDefault();
    }

    var titre ='';
    if (pointCarte.url.trim() == "") {
      titre = pointCarte.nom;
    }
    else
      titre = '<a href="' + pointCarte.url + '" target="_blank">' + pointCarte.nom + '</a>';

    var infoHtml = '<div class="info">' +
                      '<h4>' + titre + '</h4>' +
                      '<div>' +
                        pointCarte.description +
                      '</div>' +
                      '<div class="info-body">' +
                        pointCarte.adresse +
                      '</div>' +
                    '</div>';

    objMap.infoWindow.setContent(infoHtml);
    objMap.infoWindow.setPosition(latlng);
    objMap.infoWindow.setOptions({maxWidth:200});
    objMap.infoWindow.open(objMap.map);
  };
};

objMap.clear = function() {
  // $('timetaken').innerHTML = 'cleaning...';
  for (var i = 0, marker; marker = objMap.markers[i]; i++) {
    marker.setMap(null);
  }
};

objMap.change = function() {
  objMap.clear();
  objMap.showMarkers();
};

objMap.time = function() {
  // $('timetaken').innerHTML = 'timing...';
  // var start = new Date();
  // if ($('usegmm').checked) {
    objMap.markerClusterer = new MarkerClusterer(objMap.map, objMap.markers, {imagePath: './assets/img/img_map/m'});
  // } else {
  //   for (var i = 0, marker; marker = objMap.markers[i]; i++) {
  //     marker.setMap(objMap.map);
  //   }
  // }

  // var end = new Date();
  // $('timetaken').innerHTML = end - start;
};
