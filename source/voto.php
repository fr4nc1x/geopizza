<?php
	session_start();
    require("controllo_login.php");
	require_once("config.php");
	$_SESSION['n_pag']=0;
	
	
?>
<html>
<head>
	<title>GeoPizza</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
	<link rel="stylesheet" href="style.css" type="text/css">
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

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
    
    	<br><br><br>
    
    	<font face="Century Gothic, Arial, Helvetica, sans-serif" size="6" color="black">
			Le tue pizzerie
        </font>
    <br><br><br>
    <br>
    
    <br><br><br>
        <form action="risp_voto.php" method="POST">
		<table align="center" cellpadding="10" cellspacing="10" class="style_table" bgcolor="#E0F1FF" rules="rows">

						<tr>
							
                            <td lass="style_table" align="center">
								<font face="Century Gothic" size="4"><b>Nome</b></font>
							</td>
                            <td lass="style_table" align="center">
								<font face="Century Gothic" size="4"><b>Il tuo voto</b></font>
							</td>
                            
						</tr>
						<?php
							$query= "SELECT ID_pizzeria, ID FROM rank WHERE ID_utente='".$_SESSION['ID']."' and voto = -1";
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
								<select name="<?php echo $risp['ID']; ?>">
								  <option value="-1" selected="selected"></option>
								  <option value="0">0</option>
								  <option value="1">1</option>
								  <option value="2">2</option>
								  <option value="3">3</option>
								  <option value="4">4</option>
								  <option value="5">5</option>
								</select>
                            	
                                </font>
                            </td>
                            
                        </tr>
							<?php }
							?>
            
					
		</table>
		<input type="submit" value="Vota" style="border:0px;height:50px;border-radius:7px;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;padding:0 43px;font-size:20px;font-weight:bold;outline:none;-webkit-box-shadow:none;box-shadow:none;cursor:pointer;margin-top:10px;vertical-align:middle;text-align:center;background-color:#000080;color:white;">

		</form>
		
	

        
        
        
        
        
    <br><br><br>
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
