<?php
    session_start();
	require("config.php");
	// estraggo le credenziali inserite dal personale
	$password= $_POST["PS"];
	$username= $_POST["CF"];
	$id_pizzeria = $_POST["id_pizzeria"];
    $id = 1;
    /*if((strcmp($password,"user") == 0) && (strcmp($username,"user") == 0))
    	header("Location: home_pizzeria.php?id=0");
	else
    {*/
      $login = "SELECT count(ID) as cnt, ID
                FROM utente
                WHERE username ='".$username."' AND password = '".$password."'";
   
      $risp = mysql_query($login, $db);
      $row = mysql_fetch_array($risp);
	  
	  if ($row['cnt'] >0)
	  {
		$_SESSION['username']=$username;
	    $_SESSION['ID']=$row['ID'];
		if($_SESSION['n_pag']==1)
			header("Location: home_pizzeria.php?id=".$id_pizzeria);
		else
			header("Location: index.php");
	  }
	  else
             header("Location: login.php");
	 
	//}
?>
        