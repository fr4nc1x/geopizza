<?php
	session_start();
    require("controllo_login.php");
	require("config.php");
	$_SESSION['n_pag']=0;
    
  
    $query = "INSERT INTO utente (nome, cognome, datanascita, sesso, username, password, email)
    			   VALUES ('$_POST[nome]','$_POST[cognome]','$_POST[data]','$_POST[sesso]', '$_POST[username]','$_POST[passw]', '$_POST[email]')";
    mysql_query($query,$db);
    

    
    
    
    
    //INVIO EMAIL
    $nomesito = "GeoPizza";
	$webmaster = "The GeoPizza's staff";


	$oggetto = "Registrazione su ".$nomesito."...";
	$message = "Caro/a ".$_POST['nome'].", complimenti! Ti sei registrato/a sul database di $nomesito .  
                Per fare il login accedi con i seguenti parametri:
                Username: ".$_POST['username']."
                Password: ".$_POST['passw']."
                Prima però attiva il tuo account cliccando qui -> http://geopizza.azurewebsites.net



    Grazie,
    $webmaster";
    $youremail= $_POST['email'];
    if(mail($_POST['email'], $oggetto, $message, "From: $nomesito <$youremail>\nX-Mailer:PHP/" . phpversion()))
    	echo true;
       else
        echo false;
    
    
    
    
    //echo true;
                   
            
?>