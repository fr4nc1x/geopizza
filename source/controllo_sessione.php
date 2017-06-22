<?php
	session_start();
	require_once("config.php");
	$_SESSION['n_pag']=1;
	
    $ID_pizzeria=$_GET['id'];
	if(strlen($_SESSION['username']) > 0) 
		header("Location: home_pizzeria.php?id=".$ID_pizzeria);
    else
    	header("Location: login.php?id=".$ID_pizzeria);
	
	//echo $ID_pizzeria;
	
		
?>