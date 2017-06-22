<?php
	session_start();
	require("controllo_login.php");
	require("config.php");
	
	$id_pizzeria= $_POST['id_pizzeria'];
    
    $indirizzo = $_POST["indirizzo"];
  
    
    $query = "insert into rank (voto, ID_utente, ID_pizzeria)
    		  values (-1, ".$_SESSION['ID'].", ".$id_pizzeria.")";
	
	mysql_query($query, $db);
    
    
    
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
    <p align="center">
	<a href = "index.php">
		<font face="Century Gothic, Arial, Helvetica, sans-serif" size="5" color="blue">
        		<big><big><big>La tua comanda</big></big></big>
             <br>
        </font>
		</a>
    </p>
	<br><br><br>
    	
    <table align="center" cellpadding="10" cellspacing="10" class="style_table" bgcolor="#E0F1FF" rules="rows">
    <?php 
	$pizza = $_POST['pizz'];
	$tot=0;
	$i=0;
    foreach($pizza as $pizz) {
		?>
		<tr>
			<td lass="style_table" align="center">
			<font face="Century Gothic, Arial, Helvetica, sans-serif" size="4" color="black">
    	
			
		<?php 
				$i++;
				$query= "SELECT nome, prezzo FROM pizza WHERE ID ='".$pizz."'";
				$row=mysql_query($query, $db);
				$risp= mysql_fetch_array($row);
				$prodotto=$risp['prezzo']* $_POST['P'.$pizz];
				echo $risp['nome'];
		?>
		</font>
		</td>
		<td lass="style_table" align="center">
		<font face="Century Gothic, Arial, Helvetica, sans-serif" size="4" color="black">
    	
		<?php
				echo $_POST['P'.$pizz].' x '.$risp['prezzo']." € = ".$prodotto." € ";
				$tot=$prodotto+$tot;
		?>
		</font>
		</td>
		</tr>
		<?php	
			
        
    }
	?>
	
   
		
        
        
     </table>  
	 <br><br><br>
	 <?php
		if($i>0)
		{?>
     <p align="center">
	 <font face="Century Gothic, Arial, Helvetica, sans-serif" size="4" color="black">
     <big><big><big><em>Totale da pagare = <?php echo $tot;?> €</em></big></big></big>
     <br>
     </font>
     </p>
		<?php }
		else
			echo '<font face="Century Gothic, Arial, Helvetica, sans-serif" size="4" color="black">Non hai selezionato nessuna pizza</font>';
		?>
	 <?php	
		if(strlen($indirizzo)>0)
		{?>
	
			
		
	 
	  <p align="center">
	 <font face="Century Gothic, Arial, Helvetica, sans-serif" size="4" color="black">
     <big><big><big><em>Le pizze saranno consegnate in <?php echo $indirizzo;?></em></big></big></big>
     <br>
     </font>
     </p>
		<?php }
		?>
    <br><br><br>
    
 
   
    <p align="center">
		<a href="voto.php">
		<button style="border:0px;height:50px;border-radius:7px;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;padding:0 43px;font-size:20px;font-weight:bold;outline:none;-webkit-box-shadow:none;box-shadow:none;cursor:pointer;margin-top:10px;vertical-align:middle;text-align:center;background-color:#000080;color:white;">Vota la pizzeria!</button>
		</a>
	</p>
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