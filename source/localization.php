<?php
	session_start();
    require("controllo_login.php");
	$_SESSION['n_pag']=0;
?>
<html>
<head>
	<title>GeoPizza</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
	<link rel="stylesheet" href="style.css" type="text/css">
  
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true&key=AIzaSyACTmXw4AUU04k7jH5fg4dk4B2_PA6MiQE"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
<script type="text/javascript" src="http://jquery-ui-map.googlecode.com/svn/trunk/ui/jquery.ui.map.js"></script>

<script type="text/javascript">
	    
	function createMap(){
		results = 'Catania'
		var geocoder = new google.maps.Geocoder();
		var address = document.getElementById('typeahead').value;		
		geocoder.geocode( { 'address': address}, function(results, status) {
			if (status == google.maps.GeocoderStatus.OK) {
            	var pizzeria = [
                	['Bellini', 4],
                    ['Pizza e Pizzoli', 14],
                    ['Da Vinci', 24],
                    ['Vicolo', 34],
                    ['Settepiu\'', 44],
                    ['Bella Napoli', 54],
                    ['I Santi', 64],
                    ['Santa Rita', 74],
                    ['Carboni Ardenti', 84],
                    ['I Frati', 94]
                ];
                var num = Math.round(9*Math.random() + 1);
                //alert(num);
                var pizz = [];
                var i = 0, b = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
                //alert(num);
                while(i<num){
                	var n = Math.round(9*Math.random());
                    if(b[n] == 0){
                    	b[n] = 1;
                        i++;
                    }
                }
                
				var latitude = results[0].geometry.location.lat();
			    var longitude = results[0].geometry.location.lng();
			    var locations = [];
                var k = 0, j=0;
                for(i=0; i<b.length; i++){
                	if(b[i] == 1){
                    	locations[j] = [i,latitude + k,longitude + k];
                        k += 0.001;
                        j++;
                    }
                }
                /*var locations = [
                  ['Location Random 0', latitude, longitude, 4],
                  ['Location Random 1', latitude+0.001, longitude+0.001, 4],
                  ['Location Random 2', latitude+0.002, longitude+0.002, 5],
                  ['Location Random 3', latitude+0.003, longitude+0.003, 3],
                  ['Location Random 4', latitude+0.004, longitude+0.004, 2],
                  ['Location Random 5', latitude+0.010, longitude+0.005, 1]
                ];*/

			    var latlng = new google.maps.LatLng(latitude, longitude);
				var myOptions = {
					zoom: 15,
					center: latlng,
					//scrollwheel: false,
					//mapTypeId: google.maps.MapTypeId.ROADMAP
				};
				
				var map = new google.maps.Map(document.getElementById("map_canvas"),myOptions);
				//var marker = new google.maps.Marker({
				//	position: latlng,
				//	animation: google.maps.Animation.DROP,
				//	map: map,
                //    title: 'Sistema GeoPizza\n'+latlng
				//});
			    
                var infowindow = new google.maps.InfoWindow();

                var marker, i;

				$('.board').empty();
                $('.board').append('<font face="Century Gothic, Arial, Helvetica, sans-serif" size="4" color="black">Elenco delle pizzerire piu\' vicine nella zona di <b>'+address+'</b></font><br><br>');
                for (i = 0, j = 0; i < locations.length; i++) {  
                  marker = new google.maps.Marker({
                    position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                    map: map
                  });
				  google.maps.event.addListener(marker, 'click', (function(marker, i) {
                    return function() {
                      //infowindow.setContent("<a href='http://pizzeriadb1.altervista.org/cameriere.php?id="+pizzeria[locations[i][0]][1]+"'>"+pizzeria[locations[i][0]][0]+"</a>");
                      infowindow.setContent("<a href='controllo_sessione.php?id="+pizzeria[locations[i][0]][1]+"'>"+pizzeria[locations[i][0]][0]+"</a>");
                      infowindow.open(map, marker);
                    }
                  })(marker, i));
                  //for(; j<b.lenght && b[j]==0; j++);
                  $('.board').append('<input type="botton" style="border:0px;height:36px;display:inline-block;border-radius:4px;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;padding:0 43px;font-size:15px;font-weight:bold;outline:none;-webkit-box-shadow:none;box-shadow:none;cursor:pointer;margin-top:10px;vertical-align:middle;text-align:center;background-color:#000080;color:white;" value="'+pizzeria[locations[i][0]][0]+'" onclick="prova('+pizzeria[locations[i][0]][1]+')"></br>');
                  //j++;
    			}
				
                //google.maps.event.addListener(marker, 'click', function() {
				//	alert("ciao");
				//});
               
               
                
			}
		}); 
		
	}
    function prova(id){
    	//window.open('http://pizzeriadb1.altervista.org/login.php?id='+id);
        window.open('controllo_sessione.php?id='+id);
        //alert(id);
    }

    $(window).on('load',function () {
      createMap();
    });
    

</script>

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!--
<style type="text/css">
      body {
        padding: 60px;
      }
</style>	
-->
</head>

<body style="background-color:#000080">
	<div align="center" style="background-color:#000080">
	<p align="center">
	<a href = "index.php">
		<font face="Century Gothic, Arial, Helvetica, sans-serif" size="6" color="white">
        		<big><big><big><em>GeoPizza</em></big></big></big>
             <br>
        </font>
		</a>
    </p>
    </div>
	<div align="center" style="background-color:#E0F1FF">
	<?php
    	require("menu.php");
    ?>
    </div>
    <div align="center" style="background-color:white">
	<div class="container" align="center">
    		 <br><br><br>
	      <div class="hero-unit span14 pull-left" >
			<div class="well">
				<input id="typeahead" type="search" data-provide="typeahead" class="span3" style="margin: 0 auto; height: 30px; width: 500px;" value="Catania">
				<button onClick="createMap()"  style="border:0px;height:36px;border-radius:4px;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;padding:0 43px;font-size:15px;font-weight:bold;outline:none;-webkit-box-shadow:none;box-shadow:none;cursor:pointer;margin-top:0px;vertical-align:middle;text-align:center;background-color:#000080;color:white;">Search</button>

            </div>
		 </div>		
         

	</div>	
    <div align="center">
    	<div id="map_canvas" style='height:400px; width:815px; border:1px solid #000000;'></div>
  	</div>
    
    <br><br><br>
    
    <div class="board" align="center">
    </div>
    <br><br><br>
    </div>
    
    <div align="center" style="background-color:#000080">
     <p align='center'>
    	<font face="Century Gothic, Arial, Helvetica, sans-serif" size="5" color="white"><b><em>
                  Technologies for advanced programming<br>
                  Modulo: Microsoft Azure<br>
                  A.A. 2016/17</em></b>
        </font>
    </p>
    <table align='center' cellspacing='10'>
    	<tr>
        	<td align='center'>
            	<img src="img/Luca_.jpg" style="border-radius: 50px;box-shadow: 2px 2px 4px gray;" width="80" />
            </td>
            <td>
            <td>
                <font face="Century Gothic, Arial, Helvetica, sans-serif" size="4" color="white">
                    Luca Guarnera<br>
					<a href="mailto:guarneraluca92@gmail.com?subject=About Pinterest API">guarneraluca92@gmail.com</a>
               </font>
            </td>
		
        	<td align='center'>
            	<img src="img/Francesco.jpg" style="border-radius: 50px;box-shadow: 2px 2px 4px gray;" width="80" />
            </td>
            <td>
            <td>
            	<font face="Century Gothic, Arial, Helvetica, sans-serif" size="4" color="white">
					Francesco Ragusa<br>
					<a href="mailto:francescoragusa@outlook.com?subject=About Pinterest API">francescoragusa@outlook.com</a>
                </font>
            </td>
		</tr>
	</table>
    </div>
</body>

</html>