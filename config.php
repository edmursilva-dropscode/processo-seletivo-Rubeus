<?php 
    //configuracao de classificacao instanciar as classes     
    include('./class/mysql.php');    
	include('./class/usuarios.php'); 
	include('./class/inscricao.php'); 
?>
<?php 
    
	//trabalhando com sessao para armazenagem de dados   
	session_start(); 
	
	//trabalhando com data e hora de são paulo atual
	date_default_timezone_set('America/Sao_Paulo');      
    
    //define o caminho padrao do site para as contantes
    define('INCLUDE_PATH','http://localhost/RubeusFaculdade/');
	define('INCLUDE_PATH_PAINEL',INCLUDE_PATH); 

	//define o caminho padrao do diretorio /INDEX no site
	define('BASE_DIR_PATH',__DIR__);

	//Conectar com banco de dados
	define('HOST','localhost');
	define('USER','root');
	define('PASSWORD','');
	define('DATABASE','rubeusfaculdade');	

	//variavel/contante da empresa desenvolvedora do site
	define('NOME_EMPRESA','Grupo Rubeus');

	//Funções do painel
	function selecionadoMenu($par){		
		$url = explode('/',@$_GET['url'])[0];
		if($url == $par){
			echo 'class="menu-active"';
		}
	}

	function recoverPost($post){
		if(isset($_POST[$post])){
			echo $_POST[$post];
		}
	}

?> 