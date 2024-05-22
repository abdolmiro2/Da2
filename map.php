<html>
<head>
<script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyBmM66njRbGDt_-1GQom_SR6x_GE6fcnlo"></script>
<script language="javascript" type="text/javascript">

    var map;
    var geocoder;
    function InitializeMap() {

        var latlng = new google.maps.LatLng(-34.397, 150.644);
        var myOptions =
        {
            zoom: 8,
            center: latlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            disableDefaultUI: true
        };
        map = new google.maps.Map(document.getElementById("map"), myOptions);
    }




   

    window.onload = InitializeMap;

</script>
</head>
<body>
<h2>Gecoding Demo JavaScript: </h2>
	
	
	<div id ="map" style="height: 253px" > </div>
	
</body>
</html>