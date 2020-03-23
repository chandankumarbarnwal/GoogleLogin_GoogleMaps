var map;
var geocoder;
function loadMap() {
	var pune = {lat: 18.5204, lng: 73.8567};
    map = new google.maps.Map(document.getElementById('map'), {
      zoom: 12,
      center: pune
    });

    var marker = new google.maps.Marker({
    	position: pune,
    	map:map
    });


    var cdata = document.getElementById('data').innerHTML;
    cdata = JSON.parse(cdata);

    geocoder = new google.maps.Geocoder();


   var allData = document.getElementById('allData').innerHTML;
    allData = JSON.parse(allData);


    showAllColleges(allData);

    // codeAddress(cdata);
}

function showAllColleges(allData) {
	var infoWind = new google.maps.InfoWindow;

	Array.prototype.forEach.call(allData, function(data){
    	
		var content = document.createElement('div');
		var strong = document.createElement('strong');
			strong.teXtContent = data.name;

			content.appendChild(strong);

    	var marker = new google.maps.Marker({
    		position: new google.maps.LatLng(data.lat, data.lng),
    		map:map
    	});	


    	marker.addListener('click', function(){
    		infoWind.setContent(content);
    		infoWind.open(map, marker);
    	});

	});
}

//   function codeAddress(cdata) {
//     Array.prototype.forEach.call(cdata, function(data){

//     	var address = data.name + ' ' +data.address;
//     geocoder.geocode( { 'address': address}, function(results, status) {
     
// console.log(status);

//       // if (status == 'OK') {
//       //   map.setCenter(results[0].geometry.location);
//       //  console.log(results[0].geometry.location);
//       // } else {
//       //   alert('Geocode was not successful for the following reason: ' + status);
//       // }
//     });

//   });
// }
































