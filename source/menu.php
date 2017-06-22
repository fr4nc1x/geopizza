
<table align="center" cellspacing="10">
		<tr>
        	<td align="center" width="250">
              <font face="Century Gothic, Arial, Helvetica, sans-serif" size="4" color="black">
					  
                      <?php
                          if($ok == 1)
                          {
							  ?>
							  <b> Utente:</b>
							  <?php
                              echo $_SESSION['username'];
                  
                          }
                          else
                          {
                          ?>
                          <a href="login.php">Login/Registrati</a>
                          <?php
                          }
                      ?>
              </font>
            </td>
			<?php
			  if($ok == 1){
				  ?>
            <td align="center" width="250">
			
			
                    
			  
            	<a href="index.php">
            	<font face="Century Gothic, Arial, Helvetica, sans-serif" size="4" color="black">
                	Home
                </font>
                </a>
			
            </td>
			 <td align="center" width="250">
			
			
                    
			  
            	<a href="voto.php">
            	<font face="Century Gothic, Arial, Helvetica, sans-serif" size="4" color="black">
                	Vota pizzeria
                </font>
                </a>
			
            </td>
			<td align="center" width="250">
					 <a href="logout.php">
					<font face="Century Gothic, Arial, Helvetica, sans-serif" size="4" color="black">
                   Logout
					</font>
					</a>
			
            </td>
			<td align="center" width="250">
					 <a href="vision.php">
					<font face="Century Gothic, Arial, Helvetica, sans-serif" size="4" color="black">
                   Prossimamente
					</font>
					</a>
			
            </td>
				<?php
			  }
			  ?>
           </tr>
          </table>