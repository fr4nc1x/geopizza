  <?php
  
		 $db_host = "eu-cdbr-azure-west-b.cloudapp.net";
         $db_user = "bbdfc8d883dbe3";
         $db_password = "205fa4eb";
         $db_name = "geopizza";
         $db = mysql_connect($db_host, $db_user, $db_password);
         if ($db == FALSE) die ("Errore nella connessione");
         mysql_select_db($db_name, $db) or die ("Errore nella selezione del database.");
		 
	?>