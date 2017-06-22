<?php
	session_start();
    require("controllo_login.php");
	require_once("config.php");

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

<body style="background-color:#000080">
	<div align="center" style="background-color:#000080">
	<p align="center">
		<font face="Century Gothic, Arial, Helvetica, sans-serif" size="6" color="white">
        		<big><big><big><em>GeoPizza</em></big></big></big>
             <br>
        </font>
    </p>
    </div>
	<div align="center" style="background-color:#E0F1FF">
	<?php
    	require("menu.php");
    ?>
    </div>
	
    <div align="center" style="background-color:white">
    <br><br><br>
 		<table align="center" cellspacing="50">
        	<tr>
            	<td align="center">
					<img src="Image\italia_tipica_ok.png">
                </td>
                <td align="center" width="300">
                	<font face="Century Gothic, Arial, Helvetica, sans-serif" size="4" color="black">
        				<big><big><b>Benvenuto!</b></big></big><br><br><br>
                    <b>GeoPizza</b> e' un servizio per pizzerie, 
                    basato sulla geolocalizzazione dell'utente.
                    Il servizio, in base alla geolocalizzazione,
                    consiglia le pizzerie piu' vicine e inoltre permette di prenotare
                    pizze sia a domicilio che da asporto.
                    </font>
                    <br><br><br>
                	<a href="localization.php">
    				<button style="border:0px;height:50px;border-radius:7px;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;padding:0 43px;font-size:20px;font-weight:bold;outline:none;-webkit-box-shadow:none;box-shadow:none;cursor:pointer;margin-top:10px;vertical-align:middle;text-align:center;background-color:#000080;color:white;">Cerca la pizzeria</button>
					</a>
                </td>
            </tr>
        </table>
    <br><br><br>
 
	<p align="center">
	<font face="Century Gothic, Arial, Helvetica, sans-serif" size="5" color="blue">
        		<b><big>Rank pizzerie</big></b>
             <br>
        </font>
	</p>
	<br><br>
   <table align="center" cellpadding="10" cellspacing="10" class="style_table" bgcolor="#E0F1FF" rules="rows">

						<tr>
							
                            <td lass="style_table" align="center">
								<font face="Century Gothic" size="4"><b>Pizzeria</b></font>
							</td>
                            <td lass="style_table" align="center">
								<font face="Century Gothic" size="4"><b>Il tuo voto</b></font>
							</td>
                            
						</tr>
						<?php

							$query= "SELECT ID_pizzeria, AVG(voto) as media FROM rank WHERE voto > -1 GROUP BY ID_pizzeria ORDER BY media DESC";
							$row = mysql_query($query,$db);
							while($risp= mysql_fetch_array($row))
							{
								?>
							
						
                        <tr>
                        	
                            <td lass="style_table" align="center">
                            	<font face="Century Gothic" size="4">
                            	<?php	
									$query2= "SELECT nome FROM pizzeria WHERE ID='".$risp['ID_pizzeria']."'";
									$risp2= mysql_fetch_array(mysql_query($query2,$db));
									echo $risp2['nome'];
								?>
                                </font>
                            </td>
                             <td lass="style_table" align="center">
                            	<font face="Century Gothic" size="4">
								<?php	
									echo $risp['media'];
								?>
                            	
                                </font>
                            </td>
                            
                        </tr>
							<?php }
							?>
            
					
		</table>
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