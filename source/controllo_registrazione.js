				function enableButton(check)
                {
                    var cont=0;
                    var i=0;
                    while(i<check.length)
                    {
                    	if(check[i])
                        	cont++;
                    	i++;
                    }
					//$("#registra").removeAttr("disabled");
                    /*if(cont==8)
                    	$("#registra").removeAttr("disabled");
                    else
                    	$("#registra").attr("disabled", true);*/
                
                }
                //FUNZIONE CHE CONTROLLA IL FORMATO DELLA EMAIL
                function isEmail(email)
                {
                   var email_regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i;
                   return email_regex.test(email);
                }
                //CONTROLLO REGISTRAZIONE
			$(document).ready(function(){
            	var size_w = $(window).width()/2 - 225;
                var size_h = $(window).height()/4 - 100;
            	//FUNZIONE ANIMATE PULSANTE REGISTRA
				$("#Bottreg").click(function(){
                	if (($(window).width()>=1024)) 
						$("#divreg").animate({left:size_w,top:size_h,height:'+=520px',width:'+=530px'});
                     else
                      	$("#divreg").animate({left:size_w,top:size_h,height:'+=520px',width:'+=530px'});
                    $("#divreg").css("background-color","#E0F1FF");
					$("#tab").show();
					$("#indietro").show();
					$("#textregistra").show();					
					$("#Bottreg").hide();
                    $("#divreg").css("z-index","20");
                    $("#cent").css("z-index","10");
                    $("#latdestr").css("z-index","10");
                    $("#latsinis").css("z-index","10");
                    
				});
				//FUNZIONE ANIMATE PULSANTE REGISTRA CHIUSURA
				$("#indietro").click(function(){
                	/*------- RIUMUOVE TUTTE LE SCRITTE MESSE NELLE TEXT */
                	$("#nome").val('');
                    $("#cognome").val('');
                    $("#data").val('');
                    $("#email").val('');
                    $("#emailconf").val('');
                    $("#username").val('');
                    $("#pass").val('');
                    $("#passconf").val('');
                    /*-------------------------------------------------- 
                    -------------------RIUMUOVE LE img 'V' E I COMMENTI DI ERRORE -------------*/
                    $("#img").css("display", "none");
                    $("#lb").css("display", "none");
                    $("#img1").css("display", "none");
                    $("#lb1").css("display", "none");
                    $("#img3").css("display", "none");
                    $("#lb3").css("display", "none");
                    $("#img4").css("display", "none");
                    $("#lb4").css("display", "none");
                    $("#img5").css("display", "none");
                    $("#lb5").css("display", "none");
                    $("#img7").css("display", "none");
                    $("#lb7").css("display", "none");
                    $("#img8").css("display", "none");
                    $("#lb8").css("display", "none");
                    $("#img9").css("display", "none");
                    $("#lb9").css("display", "none");                    
                    /*---------------------------------------------------------------------------*/
                    $("#img").css("display", "none");
					$("#divreg").animate({left:'0px',top:'0px',height:'-=520px',width:'-=530px'});   
					$("#tab").hide();
					$("#indietro").hide();
					$("#textregistra").hide();					
					$("#Bottreg").show();
                    $("#cent").show();
                    $("#latdestr").show();
                    $("#latsinis").show();
                    
				});
                
               	check_dati = [false,false,false,false,false,false,false,false];
                var string_error = "CAMPO OBBLIGATORIO";
                
                
                
                
                $("#nome").blur(function(){
                	if($("#nome").val()==''){
                       	check_dati[$('#nome').data('idx')] = false;
                        $("#img").css("display", "none");
                    	$("#lb").css("display", "inline");
                        $("#lb").text(string_error);
                    }
                    else{
                       	check_dati[$('#nome').data('idx')] = true;
                        $("#img").css("display", "inline");
                    	$("#lb").css("display", "none");
                    }
                    enableButton(check_dati);
                });
                
                $("#cognome").blur(function(){
                	if($("#cognome").val()==''){
                    	check_dati[$('#cognome').data('idx')] = false;
                        $("#img1").css("display", "none");
                    	$("#lb1").css("display", "inline");
                        $("#lb1").text(string_error);
                    }
                    else{
                    	check_dati[$('#cognome').data('idx')] = true;
                        $("#img1").css("display", "inline");
                    	$("#lb1").css("display", "none");
                    }
                    enableButton(check_dati);
               	});
                
                $("#data").blur(function(){
                	if($("#data").val()==''){
                    	check_dati[$('#data').data('idx')] = false;
                        $("#img3").css("display", "none");
                    	$("#lb3").css("display", "inline");
						$("#lb3").text(string_error);
                    }
                    else{
                    	check_dati[$('#data').data('idx')] = true;
                        $("#img3").css("display", "inline");
                    	$("#lb3").css("display", "none");
                    }
                    enableButton(check_dati);
                });
                
                $("#email").blur(function(){
                	 if(isEmail($(this).val())){
                    	check_dati[$('#email').data('idx')] = true;
                        $("#img4").css("display", "inline");
                    	$("#lb4").css("display", "none");
                    }
                    else{
                    	if($(this).val()==''){
                        	$("#lb4").text(string_error);
                            $("#lb4").css("display", "inline");
                         	$("#img4").css("display", "none");
                         }
                         else{
                    		check_dati[$('#email').data('idx')] = false;
                            $("#lb4").text("FORMATO EMAIL NON VALIDO");
                            $("#lb4").css("display", "inline");
                         	$("#img4").css("display", "none");
                        }
                    }
                    enableButton(check_dati);
               	});
                
                $("#emailconf").blur(function(){
                	 if(isEmail($(this).val()) && $(this).val()==$("#email").val()){
                    	check_dati[$('#emailconf').data('idx')] = true;
                        $("#img5").css("display", "inline");
                    	$("#lb5").css("display", "none");
                    }
                    else{
                    	check_dati[$('#emailconf').data('idx')] = false;
                        $("#lb5").text("LE EMAIL NON COINCIDONO");
						$("#img5").css("display", "none");
                    	$("#lb5").css("display", "inline");
                    }
                    enableButton(check_dati);
               	});
                
                $("#username").blur(function(){
                	if($("#username").val()=='' || $("#username").val().length<5){
                    	check_dati[$('#username').data('idx')] = false;
                        $("#img7").css("display", "none");
                    	$("#lb7").css("display", "inline");
                        $("#lb7").text(string_error);
                    }
                    else
                    {
                    	$.post("verifica_UserName.php", {nome: $("#username").val()}, function(risposta) {
						if (risposta == 0){
                    		check_dati[$('#username').data('idx')] = true;
                             $("#img7").css("display", "inline");
                    		 $("#lb7").css("display", "none");
                        }
                        else{
                        	check_dati[$('#username').data('idx')] = false;
                            $("#img7").css("display", "none");
                    		$("#lb7").css("display", "inline");
                            $("#lb7").text("USERNAME PRESENTE!");
                        }
                    	});
                    }
                    enableButton(check_dati);
               	});
                
                $("#pass").blur(function(){
                	$("#lb8").text("INSERISCI MIN 8 CARATTERI, MAX 16");
                    $("#lb8").css("display", "inline");
                    $("#img8").css("display", "none");
             		if (($("#pass").val() == "")){ 
                    	check_dati[$('#pass').data('idx')] = false;
                        $("#lb8").text(string_error);
                        $("#lb8").css("display", "inline");
                        $("#img8").css("display", "none");
                    }
                    else
                    	if($("#pass").val().length >= 8 && $("#pass").val().length <= 16 ){
                    		check_dati[$('#pass').data('idx')] = true;
                            $("#img8").css("display", "inline");
                    		$("#lb8").css("display", "none");
                        }
                        else{
                            check_dati[$('#pass').data('idx')] = false;
                        }
                    enableButton(check_dati);
               	});
                
                $("#passconf").blur(function(){
                	if (($("#passconf").val() == "")) {
                    	check_dati[$('#passconf').data('idx')] = false;
                        $("#lb9").text(string_error);
                        $("#img9").css("display", "none");
                    	$("#lb9").css("display", "inline");
                    }
                    else
                    {
                    	if($("#passconf").val().length >= 8 && $("#passconf").val().length <= 16 
                        	&& $("#passconf").val() == $("#pass").val())                             
                        {
                    		check_dati[$('#passconf').data('idx')] = true;
                            $("#img9").css("display", "inline");
                    		$("#lb9").css("display", "none");
                        }
                        else{
                            check_dati[$('#passconf').data('idx')] = false;
                            $("#lb9").text("LE PASSWORD NON COINCIDONO");
                            $("#img9").css("display", "none");
                    		$("#lb9").css("display", "inline");
                        }
                    }
                    enableButton(check_dati);
                });
               
               
				$("#registra").click(function(){
                	var sex;
                    if($('#xxx').attr('checked'))
                    	sex='M';
                    else
                        sex='F';
                	$.post("registrazione.php", { 	nome: $("#nome").val(),
                    								cognome: $("#cognome").val(),
                                                    sesso: sex,
                                                 	data: $("#data").val(),
                                                 	email: $("#email").val(),
                                                 	username: $("#username").val(),
                                                 	passw: $("#pass").val(),                   
                    						 }, 
                                             function(risposta) {
                                                 
												/*------- RIUMUOVE TUTTE LE SCRITTE MESSE NELLE TEXT */
												$("#nome").val('');
												$("#cognome").val('');
												$("#data").val('');
												$("#email").val('');
												$("#emailconf").val('');
												$("#username").val('');
												$("#pass").val('');
												$("#passconf").val('');
												/*-------------------------------------------------- 
												-------------------RIUMUOVE LE img 'V' E I COMMENTI DI ERRORE -------------*/
												$("#img").css("display", "none");
												$("#lb").css("display", "none");
												$("#img1").css("display", "none");
												$("#lb1").css("display", "none");
												$("#img3").css("display", "none");
												$("#lb3").css("display", "none");
												$("#img4").css("display", "none");
												$("#lb4").css("display", "none");
												$("#img5").css("display", "none");
												$("#lb5").css("display", "none");
												$("#img7").css("display", "none");
												$("#lb7").css("display", "none");
												$("#img8").css("display", "none");
												$("#lb8").css("display", "none");
												$("#img9").css("display", "none");
												$("#lb9").css("display", "none");                    
												/*---------------------------------------------------------------------------*/
												$("#img").css("display", "none");
												$("#divreg").animate({left:'0px',top:'0px',height:'-=520px',width:'-=530px'});   
												$("#tab").hide();
												$("#indietro").hide();
												$("#textregistra").hide();					
												$("#Bottreg").show();
												$("#cent").show();
												$("#latdestr").show();
												$("#latsinis").show();
												
											
                                                 if(risposta)
                                                    alert("Account attivato!"); 
                                                  else
                                                	alert("Errore nella creazione dell'account!");
                                             });
                   // $("#registra").attr("disabled",true);
                });
                
                
                
				
          });
