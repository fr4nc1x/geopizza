<?php

	session_start();
	$_SESSION['username']= "";
	$_SESSION['ID'] ="";
	header("Location: index.php");
	$_SESSION['n_pag']=0;
?>