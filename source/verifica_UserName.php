<?php
	session_start();
    require("controllo_login.php");

	require("config.php");
    $_SESSION['n_pag']=0;
    $username = $_POST['nome'];
    
	$query="SELECT count(*) AS 'tot'
			FROM utente
			WHERE username= '".$username."'";   
            
	$ris=mysql_query($query);
    
	$row = mysql_fetch_array($ris);
    
	if ($row['tot'] == 0)      
        echo 0;
	else    
    	echo 1;
	
?>