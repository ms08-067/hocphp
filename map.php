<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD3XoztpkvcsKyEyHzII6rTZQcnK7eSEvM&libraries=places,geometry&callback"></script>
<script src="./js/jquery.js"></script>

<style type="text/css">
  .map-shop #gmap{width:100%; height:520px}
</style>
</head>

<body>

<script type="text/javascript">
$(function(){ 
  initMap();
})
    
function initMap(){

var markers = [];
var icon1 = "./images/icon_car2.png";
map_lat = 20.9800675;
map_lng = 105.7924054;

var directionsService = new google.maps.DirectionsService;
var directionsDisplay = new google.maps.DirectionsRenderer;

var latlng = new google.maps.LatLng(map_lat,map_lng);
var myOptions = {
      zoom: 12,
      center: latlng,
      panControl: true,
      scrollwheel: false,
      scaleControl: true,
      overviewMapControl: true,
      overviewMapControlOptions: { opened: true },
      mapTypeId: google.maps.MapTypeId.ROADMAP
};

map = new google.maps.Map(document.getElementById("gmap"), myOptions);
des_lat = 21.041516;
des_lng = 105.84891700000003;

   directionsService.route({  
      origin: {lat: map_lat, lng: map_lng},  // Haight.
      destination: {lat: des_lat, lng: des_lng},  // Ocean Beach.
      travelMode: google.maps.TravelMode["DRIVING"]

    }, function(response, status) {

        if (status == 'OK') {
          directionsDisplay.setDirections(response);
        } else {
          window.alert('Directions request failed due to ' + status);
        }
    });

directionsDisplay.setMap(map);

geocoder = new google.maps.Geocoder();

map.streetViewControl = false;

infowindow = new google.maps.InfoWindow({
  content: "(map_lat,map_lng)"
});

///var latlng = new google.maps.LatLng(lat, lng);

var datas = [{"map_lat":"20.9845052","map_lng":"105.771522","driver_id":1},{"map_lat":"20.9839264","map_lng":"105.7716567","driver_id":1},{"map_lat":"20.9839237","map_lng":"105.7716553","driver_id":1},{"map_lat":"20.9839167","map_lng":"105.7719083","driver_id":1},{"map_lat":"20.9838583","map_lng":"105.7721133","driver_id":1},{"map_lat":"20.9838791","map_lng":"105.7721615","driver_id":1},{"map_lat":"20.9838593","map_lng":"105.7720199","driver_id":1},{"map_lat":"20.98394","map_lng":"105.7723","driver_id":1},{"map_lat":"20.98394","map_lng":"105.7723","driver_id":1},{"map_lat":"20.98394","map_lng":"105.7723","driver_id":1},{"map_lat":"20.98394","map_lng":"105.7723","driver_id":1},{"map_lat":"20.9839401","map_lng":"105.7723055","driver_id":1},{"map_lat":"20.98394","map_lng":"105.7723028","driver_id":1},{"map_lat":"20.98394","map_lng":"105.7723","driver_id":1},{"map_lat":"20.9839733","map_lng":"105.772315","driver_id":1},{"map_lat":"20.9839589","map_lng":"105.7723259","driver_id":1},{"map_lat":"20.9839281","map_lng":"105.7723219","driver_id":1},{"map_lat":"20.9839184","map_lng":"105.7723076","driver_id":1},{"map_lat":"20.9839239","map_lng":"105.7723073","driver_id":1},{"map_lat":"20.9839302","map_lng":"105.772307","driver_id":1},{"map_lat":"20.9839321","map_lng":"105.7723069","driver_id":1},{"map_lat":"20.9839334","map_lng":"105.7723069","driver_id":1},{"map_lat":"20.9839343","map_lng":"105.7723068","driver_id":1},{"map_lat":"20.9839351","map_lng":"105.7723123","driver_id":1},{"map_lat":"20.9839363","map_lng":"105.7723081","driver_id":1},{"map_lat":"20.9839365","map_lng":"105.7723072","driver_id":1},{"map_lat":"20.9839366","map_lng":"105.772307","driver_id":1},{"map_lat":"20.9839367","map_lng":"105.7723068","driver_id":1},{"map_lat":"20.9839367","map_lng":"105.7723068","driver_id":1},{"map_lat":"20.9839367","map_lng":"105.7723067","driver_id":1},{"map_lat":"20.9839367","map_lng":"105.7723067","driver_id":1},{"map_lat":"20.9839367","map_lng":"105.7723067","driver_id":1},{"map_lat":"20.9839367","map_lng":"105.7723067","driver_id":1},{"map_lat":"20.9839367","map_lng":"105.7723067","driver_id":1},{"map_lat":"20.9839367","map_lng":"105.7723067","driver_id":1},{"map_lat":"20.9839367","map_lng":"105.7723067","driver_id":1},{"map_lat":"20.9839367","map_lng":"105.7723067","driver_id":1},{"map_lat":"20.9839367","map_lng":"105.7723067","driver_id":1},{"map_lat":"20.9839367","map_lng":"105.7723067","driver_id":1},{"map_lat":"20.9839367","map_lng":"105.7723067","driver_id":1},{"map_lat":"20.9839367","map_lng":"105.7723067","driver_id":1},{"map_lat":"20.9839367","map_lng":"105.7723067","driver_id":1},{"map_lat":"20.9839367","map_lng":"105.7723067","driver_id":1},{"map_lat":"20.9839367","map_lng":"105.7723067","driver_id":1},{"map_lat":"20.9839367","map_lng":"105.7723067","driver_id":1},{"map_lat":"20.9839367","map_lng":"105.7723067","driver_id":1},{"map_lat":"20.9839367","map_lng":"105.7723067","driver_id":1},{"map_lat":"20.9839367","map_lng":"105.7723067","driver_id":1},{"map_lat":"20.9839367","map_lng":"105.7723067","driver_id":1},{"map_lat":"20.9839367","map_lng":"105.7723067","driver_id":1},{"map_lat":"20.9839389","map_lng":"105.7723281","driver_id":1},{"map_lat":"20.983938","map_lng":"105.7723259","driver_id":1},{"map_lat":"20.9839374","map_lng":"105.7723168","driver_id":1},{"map_lat":"20.983937","map_lng":"105.772312","driver_id":1},{"map_lat":"20.983937","map_lng":"105.7723105","driver_id":1},{"map_lat":"20.9839368","map_lng":"105.7723087","driver_id":1},{"map_lat":"20.9839368","map_lng":"105.7723082","driver_id":1},{"map_lat":"20.9839368","map_lng":"105.7723075","driver_id":1},{"map_lat":"20.9839367","map_lng":"105.7723071","driver_id":1},{"map_lat":"20.9839367","map_lng":"105.772307","driver_id":1},{"map_lat":"20.9839373","map_lng":"105.7723109","driver_id":1},{"map_lat":"20.983937","map_lng":"105.7723089","driver_id":1},{"map_lat":"20.9839369","map_lng":"105.7723078","driver_id":1},{"map_lat":"20.9839385","map_lng":"105.7723128","driver_id":1},{"map_lat":"20.9839376","map_lng":"105.7723099","driver_id":1},{"map_lat":"20.9839374","map_lng":"105.772309","driver_id":1},{"map_lat":"20.9839338","map_lng":"105.7723127","driver_id":1},{"map_lat":"20.9839313","map_lng":"105.7723153","driver_id":1},{"map_lat":"20.9839252","map_lng":"105.7723121","driver_id":1},{"map_lat":"20.9839272","map_lng":"105.7723136","driver_id":1},{"map_lat":"20.9839316","map_lng":"105.7723145","driver_id":1},{"map_lat":"20.9839349","map_lng":"105.7723151","driver_id":1},{"map_lat":"20.9839389","map_lng":"105.7723159","driver_id":1},{"map_lat":"20.9839415","map_lng":"105.7723164","driver_id":1},{"map_lat":"20.9839422","map_lng":"105.7723165","driver_id":1},{"map_lat":"20.9839429","map_lng":"105.7723166","driver_id":1},{"map_lat":"20.9839431","map_lng":"105.7723167","driver_id":1},{"map_lat":"20.9839432","map_lng":"105.7723167","driver_id":1},{"map_lat":"20.9839452","map_lng":"105.7723214","driver_id":1},{"map_lat":"20.9839442","map_lng":"105.772319","driver_id":1},{"map_lat":"20.9839438","map_lng":"105.7723179","driver_id":1},{"map_lat":"20.9839436","map_lng":"105.7723174","driver_id":1},{"map_lat":"20.9839435","map_lng":"105.7723172","driver_id":1},{"map_lat":"20.9839434","map_lng":"105.772317","driver_id":1},{"map_lat":"20.9839434","map_lng":"105.7723169","driver_id":1},{"map_lat":"20.9839433","map_lng":"105.7723168","driver_id":1},{"map_lat":"20.9839433","map_lng":"105.7723168","driver_id":1},{"map_lat":"20.9839433","map_lng":"105.7723167","driver_id":1},{"map_lat":"20.9839433","map_lng":"105.7723167","driver_id":1},{"map_lat":"20.9839433","map_lng":"105.7723167","driver_id":1},{"map_lat":"20.9839433","map_lng":"105.7723167","driver_id":1},{"map_lat":"20.9839433","map_lng":"105.7723167","driver_id":1},{"map_lat":"20.9839433","map_lng":"105.7723167","driver_id":1},{"map_lat":"20.9839433","map_lng":"105.7723167","driver_id":1},{"map_lat":"20.9839433","map_lng":"105.7723167","driver_id":1},{"map_lat":"20.9839433","map_lng":"105.7723167","driver_id":1},{"map_lat":"20.9839433","map_lng":"105.7723167","driver_id":1},{"map_lat":"20.9839433","map_lng":"105.7723167","driver_id":1},{"map_lat":"20.9839433","map_lng":"105.7723167","driver_id":1},{"map_lat":"20.9839433","map_lng":"105.7723167","driver_id":1},{"map_lat":"20.9839433","map_lng":"105.7723328","driver_id":1},{"map_lat":"20.9839433","map_lng":"105.772325","driver_id":1},{"map_lat":"20.9839433","map_lng":"105.7723227","driver_id":1},{"map_lat":"20.9839433","map_lng":"105.7723199","driver_id":1},{"map_lat":"20.9839433","map_lng":"105.772319","driver_id":1},{"map_lat":"20.9839433","map_lng":"105.7723179","driver_id":1},{"map_lat":"20.9839433","map_lng":"105.7723173","driver_id":1},{"map_lat":"20.9839433","map_lng":"105.772317","driver_id":1},{"map_lat":"20.9839433","map_lng":"105.7723169","driver_id":1},{"map_lat":"20.9839433","map_lng":"105.7723168","driver_id":1},{"map_lat":"20.9839422","map_lng":"105.7723206","driver_id":1},{"map_lat":"20.9839427","map_lng":"105.7723188","driver_id":1},{"map_lat":"20.9839429","map_lng":"105.7723182","driver_id":1},{"map_lat":"20.9839431","map_lng":"105.7723175","driver_id":1},{"map_lat":"20.9839431","map_lng":"105.7723173","driver_id":1},{"map_lat":"20.9839432","map_lng":"105.772317","driver_id":1},{"map_lat":"20.9839432","map_lng":"105.7723169","driver_id":1},{"map_lat":"20.9839433","map_lng":"105.7723169","driver_id":1},{"map_lat":"20.9839433","map_lng":"105.7723168","driver_id":1},{"map_lat":"20.9839433","map_lng":"105.7723168","driver_id":1},{"map_lat":"20.9839433","map_lng":"105.7723167","driver_id":1},{"map_lat":"20.9839433","map_lng":"105.7723167","driver_id":1},{"map_lat":"20.9839433","map_lng":"105.7723167","driver_id":1},{"map_lat":"20.9839433","map_lng":"105.7723167","driver_id":1},{"map_lat":"20.9839433","map_lng":"105.7723167","driver_id":1},{"map_lat":"20.9839433","map_lng":"105.7723167","driver_id":1},{"map_lat":"20.9839433","map_lng":"105.7723167","driver_id":1},{"map_lat":"20.9839433","map_lng":"105.7723167","driver_id":1},{"map_lat":"20.9839444","map_lng":"105.7723206","driver_id":1},{"map_lat":"20.9839439","map_lng":"105.7723187","driver_id":1},{"map_lat":"20.9839436","map_lng":"105.7723178","driver_id":1},{"map_lat":"20.9839435","map_lng":"105.7723175","driver_id":1},{"map_lat":"20.9839435","map_lng":"105.7723173","driver_id":1},{"map_lat":"20.9839434","map_lng":"105.7723171","driver_id":1},{"map_lat":"20.9839434","map_lng":"105.7723169","driver_id":1},{"map_lat":"20.9839433","map_lng":"105.7723169","driver_id":1},{"map_lat":"20.9839433","map_lng":"105.7723168","driver_id":1},{"map_lat":"20.9839433","map_lng":"105.7723168","driver_id":1},{"map_lat":"20.9839433","map_lng":"105.7723167","driver_id":1},{"map_lat":"20.9839433","map_lng":"105.7723167","driver_id":1},{"map_lat":"20.9839433","map_lng":"105.7723167","driver_id":1},{"map_lat":"20.9839433","map_lng":"105.7723167","driver_id":1},{"map_lat":"20.9839433","map_lng":"105.7723167","driver_id":1},{"map_lat":"20.9839433","map_lng":"105.7723167","driver_id":1},{"map_lat":"20.9839433","map_lng":"105.7723167","driver_id":1},{"map_lat":"20.9839433","map_lng":"105.7723167","driver_id":1},{"map_lat":"20.9839433","map_lng":"105.7723167","driver_id":1},{"map_lat":"20.9839433","map_lng":"105.7723167","driver_id":1},{"map_lat":"20.9839433","map_lng":"105.7723167","driver_id":1},{"map_lat":"20.9839443","map_lng":"105.7723222","driver_id":1},{"map_lat":"20.9839411","map_lng":"105.7723369","driver_id":1},{"map_lat":"20.9839414","map_lng":"105.7723438","driver_id":1},{"map_lat":"20.9839378","map_lng":"105.7723635","driver_id":1},{"map_lat":"20.9839366","map_lng":"105.7723721","driver_id":1},{"map_lat":"20.98394","map_lng":"105.7723657","driver_id":1},{"map_lat":"20.9839384","map_lng":"105.7723626","driver_id":1},{"map_lat":"20.9839217","map_lng":"105.772395","driver_id":1},{"map_lat":"20.9839262","map_lng":"105.7723864","driver_id":1},{"map_lat":"20.9839338","map_lng":"105.7723604","driver_id":1},{"map_lat":"20.9839364","map_lng":"105.7723482","driver_id":1},{"map_lat":"20.9839397","map_lng":"105.7723331","driver_id":1},{"map_lat":"20.9839407","map_lng":"105.7723286","driver_id":1},{"map_lat":"20.9839398","map_lng":"105.7723306","driver_id":1},{"map_lat":"20.9839415","map_lng":"105.772324","driver_id":1},{"map_lat":"20.983942","map_lng":"105.772322","driver_id":1},{"map_lat":"20.9839404","map_lng":"105.7723246","driver_id":1},{"map_lat":"20.9839393","map_lng":"105.7723276","driver_id":1},{"map_lat":"20.983937","map_lng":"105.772332","driver_id":1},{"map_lat":"20.9839394","map_lng":"105.7723263","driver_id":1},{"map_lat":"20.9839407","map_lng":"105.7723231","driver_id":1},{"map_lat":"20.9839416","map_lng":"105.7723207","driver_id":1},{"map_lat":"20.9839425","map_lng":"105.7723185","driver_id":1},{"map_lat":"20.9839429","map_lng":"105.7723176","driver_id":1},{"map_lat":"20.9839433","map_lng":"105.7723211","driver_id":1},{"map_lat":"20.9839433","map_lng":"105.7723198","driver_id":1},{"map_lat":"20.9839419","map_lng":"105.7723293","driver_id":1},{"map_lat":"20.9839429","map_lng":"105.7723232","driver_id":1},{"map_lat":"20.9839426","map_lng":"105.7723242","driver_id":1},{"map_lat":"20.9839429","map_lng":"105.7723218","driver_id":1},{"map_lat":"20.9839431","map_lng":"105.7723191","driver_id":1},{"map_lat":"20.9839432","map_lng":"105.7723179","driver_id":1},{"map_lat":"20.9839432","map_lng":"105.7723176","driver_id":1},{"map_lat":"20.9839419","map_lng":"105.7723225","driver_id":1},{"map_lat":"20.9839418","map_lng":"105.7723274","driver_id":1},{"map_lat":"20.9839397","map_lng":"105.7723279","driver_id":1},{"map_lat":"20.9839408","map_lng":"105.7723243","driver_id":1},{"map_lat":"20.9839426","map_lng":"105.7723188","driver_id":1},{"map_lat":"20.9839431","map_lng":"105.7723173","driver_id":1},{"map_lat":"20.9839432","map_lng":"105.772317","driver_id":1},{"map_lat":"20.9839429","map_lng":"105.7723251","driver_id":1},{"map_lat":"20.9839427","map_lng":"105.7723243","driver_id":1},{"map_lat":"20.9839429","map_lng":"105.7723221","driver_id":1},{"map_lat":"20.9839433","map_lng":"105.7723167","driver_id":1},{"map_lat":"20.9839433","map_lng":"105.7723167","driver_id":1},{"map_lat":"20.9839433","map_lng":"105.7723167","driver_id":1},{"map_lat":"20.9839433","map_lng":"105.7723167","driver_id":1},{"map_lat":"20.9839433","map_lng":"105.7723167","driver_id":1},{"map_lat":"20.9839299","map_lng":"105.7723175","driver_id":1},{"map_lat":"20.9839266","map_lng":"105.7722951","driver_id":1},{"map_lat":"20.9839148","map_lng":"105.7721671","driver_id":1},{"map_lat":"20.9839138","map_lng":"105.7720519","driver_id":1},{"map_lat":"20.983927","map_lng":"105.7719825","driver_id":1},{"map_lat":"20.9839153","map_lng":"105.771877","driver_id":1},{"map_lat":"20.983935","map_lng":"105.7718205","driver_id":1},{"map_lat":"20.9839357","map_lng":"105.7717908","driver_id":1},{"map_lat":"20.9839102","map_lng":"105.7717216","driver_id":1},{"map_lat":"20.9838893","map_lng":"105.7717155","driver_id":1},{"map_lat":"20.9838839","map_lng":"105.771711","driver_id":1},{"map_lat":"20.9838545","map_lng":"105.7717517","driver_id":1},{"map_lat":"20.9838256","map_lng":"105.7717707","driver_id":1},{"map_lat":"20.9838219","map_lng":"105.7717325","driver_id":1},{"map_lat":"20.9838116","map_lng":"105.7717162","driver_id":1},{"map_lat":"20.9839264","map_lng":"105.7716567","driver_id":1},{"map_lat":"20.9839232","map_lng":"105.7716416","driver_id":1},{"map_lat":"20.9839264","map_lng":"105.7716567","driver_id":1},{"map_lat":"20.9839173","map_lng":"105.7716588","driver_id":1},{"map_lat":"20.9839264","map_lng":"105.7716567","driver_id":1},{"map_lat":"20.9839264","map_lng":"105.7716567","driver_id":1},{"map_lat":"20.9839264","map_lng":"105.7716567","driver_id":1},{"map_lat":"20.9839264","map_lng":"105.7716567","driver_id":1},{"map_lat":"20.9839264","map_lng":"105.7716567","driver_id":1},{"map_lat":"20.986818","map_lng":"105.7796829","driver_id":1},{"map_lat":"20.986818","map_lng":"105.7796829","driver_id":1},{"map_lat":"20.986818","map_lng":"105.7796829","driver_id":1},{"map_lat":"20.9839264","map_lng":"105.7716567","driver_id":1},{"map_lat":"20.9839199","map_lng":"105.7716533","driver_id":1},{"map_lat":"20.9839264","map_lng":"105.7716567","driver_id":1},{"map_lat":"20.9839212","map_lng":"105.7716511","driver_id":1},{"map_lat":"20.9839233","map_lng":"105.7716534","driver_id":1},{"map_lat":"20.9839245","map_lng":"105.7716547","driver_id":1},{"map_lat":"20.9839264","map_lng":"105.7716567","driver_id":1},{"map_lat":"20.9845052","map_lng":"105.771522","driver_id":1},{"map_lat":"20.9839264","map_lng":"105.7716567","driver_id":1},{"map_lat":"20.9839264","map_lng":"105.7716567","driver_id":1},{"map_lat":"20.9839264","map_lng":"105.7716567","driver_id":1},{"map_lat":"20.9839264","map_lng":"105.7716567","driver_id":1},{"map_lat":"20.9836617","map_lng":"105.7785824","driver_id":1},{"map_lat":"20.9836617","map_lng":"105.7785824","driver_id":1},{"map_lat":"20.9839264","map_lng":"105.7716567","driver_id":1},{"map_lat":"20.9839264","map_lng":"105.7716567","driver_id":1},{"map_lat":"20.9839264","map_lng":"105.7716567","driver_id":1},{"map_lat":"20.9840254","map_lng":"105.773929","driver_id":1},{"map_lat":"20.9839961","map_lng":"105.7732577","driver_id":1},{"map_lat":"20.9839264","map_lng":"105.7716567","driver_id":1},{"map_lat":"20.9841354","map_lng":"105.7763904","driver_id":1},{"map_lat":"20.9842372","map_lng":"105.778696","driver_id":1},{"map_lat":"20.983996","map_lng":"105.7733585","driver_id":1},{"map_lat":"20.9839679","map_lng":"105.7726707","driver_id":1},{"map_lat":"20.9839596","map_lng":"105.7725803","driver_id":1},{"map_lat":"20.9839574","map_lng":"105.7725194","driver_id":1},{"map_lat":"20.9840517","map_lng":"105.7745996","driver_id":1},{"map_lat":"20.9842758","map_lng":"105.775313","driver_id":1},{"map_lat":"20.9842685","map_lng":"105.77595","driver_id":1},{"map_lat":"20.9842976","map_lng":"105.7763064","driver_id":1},{"map_lat":"20.9844772","map_lng":"105.7785068","driver_id":1},{"map_lat":"20.9844772","map_lng":"105.7785068","driver_id":1},{"map_lat": "20.9842601", "map_lng": "105.7786779", "driver_id": 1},{"map_lat": "20.984693", "map_lng": "105.7773907", "driver_id": 1},{"map_lat": "20.9845716", "map_lng": "105.7777385", "driver_id": 1},{"map_lat": "20.9839264", "map_lng": "105.7716567", "driver_id": 1},{"map_lat": "20.9839264", "map_lng": "105.7716567", "driver_id": 1},{"map_lat": "20.984256", "map_lng": "105.7715705", "driver_id": 1}];

console.log("Tong so position: "+ datas.length); 

for(var i = 0; i < datas.length; i++){
    
      (function(i) {
        
        setTimeout(function() { 
            
            console.log("Driver Id: "+datas[i].driver_id+", Position_"+i+": "+ datas[i]['map_lat'] + ","+ datas[i]['map_lng']);

            /*
            $.post("1.php",{

                ori_map_lat: datas[i]['map_lat'],
                ori_map_lng: datas[i]['map_lng'],
                des_map_lat: map_lat,
                des_map_lng: map_lng
            }, function(data, status){
            */      
                  //if(data.rows.length > 0 && data.rows.elements.length > 0){

                      //distance = data.rows[0].elements[0].distance.value;
                      //distance = Math.round(distance / 10)/100;
                  
                      var marker_driver = new google.maps.Marker({
                          position: new google.maps.LatLng(datas[i]['map_lat'], datas[i]['map_lng']),
                          map: map,
                          id: datas[i].driver_id,
                          icon: icon1,
                          title: "Nguyen Van A"
                      });
                
                      var infowindow2 = new google.maps.InfoWindow();
                  
                      <?php $avatar =  "./images/avatar.png"; ?>

                      var content = "<div style='min-width:200px;line-height: 20px;overflow: auto;' class='infoWindow'><img style='float: left; margin-right: 6px;' width='40' src='<?php echo $avatar ?>'/><h4>Tài Xế: Nguyen Van A</h4><p class='address'>Cách gậy "+ 10
                      
                      marker_driver.addListener('click', function() {
                          if(infowindow2) infowindow2.close();
                          map.setZoom(20);
                          map.setCenter(marker_driver.getPosition());
                          infowindow2.setContent(content);
                          infowindow2.open(map, marker_driver);
                      });

                        markers.push(marker_driver);
                  /*      
                  }else{

                      console.log(data.error_message);
                  }
                  */
            //});
            

        }, i * 300000);

      })(i);
}

}

</script>

<input type="hidden" value="" id="distance_driver_product" />

<div class="map-shop" style="width: 96%;float: none;border: solid 1px #ddd;">
 <div id="gmap"></div>
</div>

</body>
</html>
