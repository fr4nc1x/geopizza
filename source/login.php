<?php
	session_start();
    require("controllo_login.php");
	$ID_pizzeria=$_GET['id'];
	
?>
<html>
<head>
	<title>GeoPizza</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="style2.css">
	<link rel="stylesheet" href="style.css" type="text/css">
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript" src="controllo_registrazione.js"> 	            
    </script>
    

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
   
        
    
	<center>
		<font face="Century Gothic" size="5"> <big><b>Login</b></big> </font><br><br>
		<hr width=450 color="black">
        <font face="Century Gothic" size="3"> Effettua il login per poter usufruire del servizio.<br>
        <b>Nota bene</b>: Puoi usare le credenziali dell'ultente di prova:<br>
        Username: <b>user</b> <br>
        Password: <b>user</b>
        </font>
		<hr width=450 color="black">
	</center><br><br>
	<form method="POST" action="risp_login.php">
		<input type="hidden" name="id_pizzeria" value="<?php echo $ID_pizzeria;?>">
		<table align="center" cellpadding="4" cellspacing="10" class="style_table" bgcolor="#E0F1FF">

						<tr>
							<td lass="style_table" align="right">
								<font face="Century Gothic" size="4">Username</font>
							</td>
							<td lass="style_table" >
								<input type="text" name="CF" class="textbox">
							</td>
						</tr>
						<tr>
							<td lass="style_table" align="right">
								<font face="Century Gothic" size="4" >Password</font>
							</td>
							<td lass="style_table">
								<input type="password" name="PS" class="textbox">
							</td>
						</tr>
                        <tr>
                        	<td>
                            </td>
                            <td>
                            	<input type="submit" value="Accedi" style="border:0px;height:35px;border-radius:7px;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;padding:0 43px;font-size:20px;font-weight:bold;outline:none;-webkit-box-shadow:none;box-shadow:none;cursor:pointer;margin-top:10px;vertical-align:middle;text-align:center;background-color:#000080;color:white;">
                            </td>
                        </tr>
					
		</table>
		
	</form>
	<br>
    <font face="Century Gothic" size="3">Oppure<br><br><input type="submit" value="Registrati" id="Bottreg" style="border:0px;height:35px;border-radius:7px;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;padding:0 43px;font-size:20px;font-weight:bold;outline:none;-webkit-box-shadow:none;box-shadow:none;cursor:pointer;margin-top:10px;vertical-align:middle;text-align:center;background-color:#000080;color:white;">
                            
        
        
        
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
    
    
    
    <!--  -------------------------- REGISTRAZIONE -----------------------------  -->
                    
                    <div style="height:0px;width:0px;position:absolute;/*opacity:.9*/; filter: alpha(opacity=100);" id="divreg" class="style_table">
                            <table align="center">
                                <tr>
                                    <td align="center" width="150">
                                        
                                    </td>
                                    <td align="center" width="250">
                                        <font face="Century Gothic, Arial, Helvetica, sans-serif" size="6" style="display:none" id="textregistra" align="center">Registrati su GeoPizza</font>	
                                    </td>
                                    <td align="right" width="150">
                                        <input type="image" src="img/elimina.png" style="display:none" id="indietro" height="20px" width="20px">
                                    </td>
                                </tr>
                            </table>
                            
                            <br/>
                            
                            <table align="center" style="display:none" id="tab">
                                <tr>
                                    <td align="right" width="190">
                                        Nome
                                    </td>
                                    <td width="100">					
                                        <input type="text" name="nome" id="nome" class="textbox" data-idx="0">
                                    </td>
                                    <td width="250">
                                        <label id="lb" style="display:none"></label>
                                        <img src="img/V5.png" style="display:none" width="20" id="img">
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right">
                                        Cognome 
                                    </td>
                                    <td>
                                        <input type="text" name="cognome" class="textbox" id="cognome" data-idx="1">
                                    </td>
                                    <td>
                                        <label id="lb1" style="display:none"></label>
                                        <img src="img/V5.png" style="display:none" width="20" id="img1">
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right">
                                        Sesso 
                                    </td>
                                    <td>
                                        <input type="radio" name="sesso" value="M" id="xxx" checked="checked"> M 
                                       <input type="radio" name="sesso" value="F" id="xxx1"> F
                                    </td>
                                    <td>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right">
                                        Data di nascita 
                                    </td>
                                    <td>
                                        <input type="date" class="textbox" name="data" id="data" data-idx="2">
                                    </td>
                                    <td>
                                        <label id="lb3" style="display:none"></label>
                                        <img src="img/V5.png" style="display:none" width="20" id="img3">
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right">
                                        Email 
                                    </td>
                                    <td>
                                        <input type="text" class="textbox" name="email" id="email" data-idx="3">
                                    </td>
                                    <td>
                                        <label id="lb4" style="display:none"></label>
                                        <img src="img/V5.png" style="display:none" width="20" id="img4">
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right"> 
                                        Conferma email 
                                    </td>
                                    <td>
                                        <input type="text" class="textbox" name="emailconf" id="emailconf" data-idx="4">
                                    </td>
                                    <td>
                                        <label id="lb5" style="display:none"></label>
                                        <img src="img/V5.png" style="display:none" width="20" id="img5">
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right"><b>
                                        Username <b>
                                    </td>
                                    <td>
                                        <input type="text" class="textbox" name="username" id="username" data-idx="5">
                                    </td>
                                    <td>
                                        <label id="lb7" style="display:none"></label>
                                        <img src="img/V5.png" style="display:none" width="20" id="img7">
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right"><b>
                                        Password <b>
                                    </td>
                                    <td>
                                        <input type="password" class="textbox" name="pass"id="pass" data-idx="6">
                                    </td>
                                    <td>
                                        <label id="lb8" style="display:none"></label>
                                        <img src="img/V5.png" style="display:none" width="20" id="img8">
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right">
                                        Conferma password 
                                    </td>
                                    <td>
                                        <input type="password" class="textbox" name="passconf" id="passconf" data-idx="7">
                                    </td>
                                    <td>
                                        <label id="lb9" style="display:none"></label>
                                        <img src="img/V5.png" style="display:none" width="20" id="img9">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    </td>
                                    <td align="center">
                                        <input type="submit" value="Registrati" id="registra" style="border:0px;height:35px;border-radius:7px;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;padding:0 43px;font-size:20px;font-weight:bold;outline:none;-webkit-box-shadow:none;box-shadow:none;cursor:pointer;margin-top:10px;vertical-align:middle;text-align:center;background-color:#000080;color:white;">
                                    </td>
                                </tr>
                            </table>
                    </div>
      <!-- ------------------------ FINE REGISTRAZIONE -------------------------- -->
    
    
    
    
    
</body>

</html>









<?php
	$id = $_GET['id'];
?>

