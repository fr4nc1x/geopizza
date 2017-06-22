<!DOCTYPE html>
<?php
	session_start();
    require("controllo_login.php");
	//require_once("config.php");

	$_SESSION['n_pag']=0;
?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>GeoPizza</title>
     <link rel="stylesheet" type="text/css" href="style2.css">
	 <link rel="stylesheet" href="style.css" type="text/css">



<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>

    <title>Analyze Sample</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>

<body style="background-color:#000080">

<script type="text/javascript">
    function processImage() {
        // **********************************************
        // *** Update or verify the following values. ***
        // **********************************************

        // Replace the subscriptionKey string value with your valid subscription key.
        var subscriptionKey = " 699f029f0a8d4e7c8073effc15b05afc";

        // Replace or verify the region.
        //
        // You must use the same region in your REST API call as you used to obtain your subscription keys.
        // For example, if you obtained your subscription keys from the westus region, replace
        // "westcentralus" in the URI below with "westus".
        //
        // NOTE: Free trial subscription keys are generated in the westcentralus region, so if you are using
        // a free trial subscription key, you should not need to change this region.
        var uriBase = "https://westcentralus.api.cognitive.microsoft.com/vision/v1.0/analyze";
    
		var tags= "";
        // Request parameters.
        var params = {
            "visualFeatures": "Categories,Description,Color",
            "details": "",
            "language": "en",
        };

        // Display the image.
        var sourceImageUrl = document.getElementById("inputImage").value;
        document.querySelector("#sourceImage").src = sourceImageUrl;
		 $("#tgs").show();
            $("#attendere").show();
        // Perform the REST API call.
        $.ajax({
            url: uriBase + "?" + $.param(params),

            // Request headers.
            beforeSend: function(xhrObj){
                xhrObj.setRequestHeader("Content-Type","application/json");
                xhrObj.setRequestHeader("Ocp-Apim-Subscription-Key", subscriptionKey);
            },

            type: "POST",

            // Request body.
            data: '{"url": ' + '"' + sourceImageUrl + '"}',
        })

        .done(function(data) {
            // Show formatted JSON on webpage.
            //$("#responseTextArea").val(JSON.stringify(data, null, 2));
           
            
			tags= JSON.stringify(data);
			document.getElementById("tags").innerHTML = ((data.description.tags).toString()).split(',').join('<br>');
            
            $("#tb").show();
            $("#attendere").css("display", "none");
			
			
        })

        .fail(function(jqXHR, textStatus, errorThrown) {
            // Display error message.
            var errorString = (errorThrown === "") ? "Error. " : errorThrown + " (" + jqXHR.status + "): ";
            errorString += (jqXHR.responseText === "") ? "" : jQuery.parseJSON(jqXHR.responseText).message;
            alert(errorString);
        });
		
    };
</script>

	<div align="center" style="background-color:#000080">
		<a href="index.php">
		<p align="center">
			<font face="Century Gothic, Arial, Helvetica, sans-serif" size="6" color="white">
					<big><big><big><em>GeoPizza</em></big></big></big>
				 <br>
			</font>
		</p>
		</a>
	</div>
	<div align="center" style="background-color:#E0F1FF">
	<?php
    	require("menu.php");
    ?>
    </div>
	
    <div align="center" style="background-color:white">
		
		<table align="center" >
			<tr>
				<td align="center"><br><br>
					<font face="Century Gothic, Arial, Helvetica, sans-serif" size="5" color="blue"><b><em>
							  Analizza l'immagine di una pizza!
					
					</font>
					<font face="Century Gothic, Arial, Helvetica, sans-serif" size="4" color="black">
						<br><br>
						URL dell'immagine da analizzare<br><br><input type="text" name="inputImage" class="textbox2" id="inputImage" value="https://upload.wikimedia.org/wikipedia/commons/a/a3/Eq_it-na_pizza-margherita_sep2005_sml.jpg" />
						<br><br><button onclick="processImage()" style="border:0px;height:36px;border-radius:4px;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;padding:0 43px;font-size:15px;font-weight:bold;outline:none;-webkit-box-shadow:none;box-shadow:none;cursor:pointer;margin-top:0px;vertical-align:middle;text-align:center;background-color:#000080;color:white;">Analizza immagine</button>
					</font>
					<br><br>



					<div id="wrapper" style="width:1020px; display:table;">
					   
						<div id="imageDiv" style="width:420px; display:table-cell;" >
							<font face="Century Gothic, Arial, Helvetica, sans-serif" size="4" color="black" style="display:none" id="txt">
								Source image
							</font>
							<br><br>
							<img id="sourceImage" width="400" />
						</div>
					</div>
					<br><br>
                    <p align="center">
                      <font face="Century Gothic, Arial, Helvetica, sans-serif" size="4" color="black" id="tgs" style="display:none">
                          Image's Tags
                      </font><br>
                      <font face="Century Gothic, Arial, Helvetica, sans-serif" size="4" color="red" id="attendere" style="display:none">
                          <b>ATTENDERE</b><br>
                      </font>
                    </p>
					<table align="center" class="style_table" bgcolor="#E0F1FF" rules="rows" style="display:none" id = "tb">
						<tr>
							<td align="center" width = "150">
								<font face="Century Gothic, Arial, Helvetica, sans-serif" size="4" color="black">
									<p id="tags"><b></b></p>
								</font>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
		<br><br><br>
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


