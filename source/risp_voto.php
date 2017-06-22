<?php
	session_start();
    require("controllo_login.php");
	require_once("config.php");
	$_SESSION['n_pag']=0;
	$query= "SELECT * FROM rank WHERE ID_utente='".$_SESSION['ID']."' and voto = -1";
	$row = mysql_query($query,$db);
	while($risp= mysql_fetch_array($row))
	{
		if($_POST[$risp['ID']]!= -1)
		{
			$update= "UPDATE rank SET voto = '".$_POST[$risp['ID']]."' WHERE ID = '".$risp['ID']."'";
			mysql_query($update,$db);
			
		}
	}
	header("Location: voto.php");
?>