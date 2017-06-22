<?php
	require_once("config.php");
	//session_start();
    
    $ok = 0;
                
    if(strlen($_SESSION['username']) > 0)
        $ok = 1;    
    else
    	$ok = 0;
?>