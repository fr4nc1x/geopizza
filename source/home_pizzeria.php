<?php
	session_start();
    require("controllo_login.php");
	require("config.php");
	$_SESSION['n_pag']=0;
    $id = $_GET['id'];
	$welcome = "SELECT nome
			   FROM pizzeria
			   WHERE ID ='".$id."'";
   
   $risp=mysql_query($welcome, $db);
   $row = mysql_fetch_array($risp);
   if(strlen($row['nome']) == 0)
   {
		$id = $_POST['id'];
		$welcome = "SELECT nome
					FROM pizzeria
					WHERE ID ='".$id."'";
   
		$risp=mysql_query($welcome, $db);
		$row = mysql_fetch_array($risp);
   }
   
  // echo "ciao ".$row['nome'];
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
    	<?php
        	
            echo 'Benvenuto nella pizzeria <b>'.$row['nome'].'</b>';
        ?>
        </font>
    <br><br><br>
 

        
        <form method="POST" action="risp_ordine.php">
		<input type="hidden" name="id_pizzeria" value="<?php echo $id; ?>" >
    <?php
    	$pizz = "SELECT * 
			     FROM pizza";

                    
        $risp_pizza = mysql_query($pizz,$db);
       
                 
    ?>
    <br>
    <table align="center" cellpadding="10" cellspacing="10" class="style_table" bgcolor="#E0F1FF" rules="rows">

						<tr>
							<td lass="style_table" align="center">
    <center>
    	<font face="Century Gothic" size="4"><b>Indirizzo di consegna</b></font>
    	<input type="text" name="indirizzo" class="textbox">
    </center>
    <br><br><br>
    <center>
		<font face="Century Gothic" size="5"> Menù Pizze</font>
		<hr width=200 color="black">
	</center><br>
    
		<table align="center" cellpadding="10" cellspacing="10" class="style_table" bgcolor="#E0F1FF" rules="rows">

						<tr>
							<td lass="style_table" align="center">
							</td>
                            <td lass="style_table" align="center">
								<font face="Century Gothic" size="4"><b>Nome</b></font>
							</td>
                            <td lass="style_table" align="center">
								<font face="Century Gothic" size="4"><b>Descrizione</b></font>
							</td>
                            <td lass="style_table" align="center">
								<font face="Century Gothic" size="4"><b>Prezzo</b></font>
							</td>
                            <td lass="style_table" align="center">
								<font face="Century Gothic" size="4"><b>Quantità</b></font>
							</td>
						</tr>
						
           <?php
           	  while($row_pizz = mysql_fetch_array($risp_pizza))
              {
           ?>
                        <tr>
                        	<td lass="style_table" align="center">
      							<input type="checkbox" name="pizz[]" value="<?php echo $row_pizz['ID']; ?>">
                            </td>
                            <td lass="style_table" align="center">
                            	<font face="Century Gothic" size="4">
                            	<?php
                                	echo $row_pizz['nome'];
                                ?>
                                </font>
                            </td>
                             <td lass="style_table" align="center">
                            	<font face="Century Gothic" size="4">
                            	<?php
                                	echo $row_pizz['descrizione'];
                                ?>
                                </font>
                            </td>
                             <td lass="style_table" align="center">
                            	<font face="Century Gothic" size="4">
                            	<?php
                                	echo $row_pizz['prezzo'];
                                ?>
                                </font>
                            </td>
                            <td lass="style_table" align="center">
                            	<input type="text" name="<?php echo 'P'.$row_pizz['ID']; ?>" value="1" class="textbox" >
                            </td>
                        </tr>
            <?php
            	}
             ?>
					
		</table>
		
	
    <br>
    <br>
    <br>
    <br>
    
    
       <br><br>
       <center>
      	 <input type="submit" value="Invia" style="border:0px;height:35px;border-radius:7px;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;padding:0 43px;font-size:20px;font-weight:bold;outline:none;-webkit-box-shadow:none;box-shadow:none;cursor:pointer;margin-top:10px;vertical-align:middle;text-align:center;background-color:#000080;color:white;">
       </center>
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





	