<?php
	
    //configuracao geral      
	include('./config.php'); 
	include('./class/painel.php'); 
	
    //valida login 
	if(Painel::logado() == false){
		include('login.php');
	}else{
		include('main.php');
	}      

?>  