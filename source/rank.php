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
    	
        </font>
    <br><br><br>
    <br>
    <table align="center" cellpadding="10" cellspacing="10" class="style_table" bgcolor="#E0F1FF" rules="rows">

						<tr>
							<td lass="style_table" align="center">
    <center>
    	<font face="Century Gothic" size="6"><b>Classifica Pizzerie</b></font>
    </center>
    <br><br><br>
    
		<table align="center" cellpadding="10" cellspacing="10" class="style_table" bgcolor="#E0F1FF" rules="rows">

						<tr>
							<td lass="style_table" align="center">
							<font face="Century Gothic" size="4"><b>Posizione</b></font>
							</td>
                            <td lass="style_table" align="center">
								<font face="Century Gothic" size="4"><b>Nome</b></font>
							</td>
                            <td lass="style_table" align="center">
								<font face="Century Gothic" size="4"><b>Telefono</b></font>
							</td>
                            <td lass="style_table" align="center">
								<font face="Century Gothic" size="4"><b>Voti</b></font>
							</td>
                            <td lass="style_table" align="center">
								<font face="Century Gothic" size="4"><b>Stelle</b></font>
							</td>
						</tr>
						
                        <tr>
                        	<td lass="style_table" align="center">
      							
                            </td>
                            <td lass="style_table" align="center">
                            	<font face="Century Gothic" size="4">
                            	
                                </font>
                            </td>
                             <td lass="style_table" align="center">
                            	<font face="Century Gothic" size="4">
                            	
                                </font>
                            </td>
                             <td lass="style_table" align="center">
                            	<font face="Century Gothic" size="4">
                            	
                                </font>
                            </td>
                            <td lass="style_table" align="center">
                            	
                            </td>
                        </tr>
            
					
		</table>
		
	
    <br>
    <br>
    <br>
    <br>
    
    
       <br><br>
       
			</td>
		</tr>
       </table>
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
