<?php
	
	class Painel
	{
			
        //valida se o usuario esta logado ou não 
		public static function logado(){
            //valida se existe sessao login
			return isset($_SESSION['login']) ? true : false;
		}
		
		//valida se o usuario fez loggout ou não
		public static function loggout(){
			
			//cookie
			setcookie('lembrar','true',time()-1,'/');

			//define o caminho padrao do site para as contantes para o usuario fazer login novamente
			header('Location: '.INCLUDE_PATH_PAINEL);

			//destroi todas os dados das sessoes
			session_destroy();

		}		

		//carrega paginas do painel de controle 
		public static function carregarPagina(){
			//valida se existe URL
			if(isset($_GET['url'])){
				//recebe URL na variavel
				$url = explode('/',$_GET['url']);
				//valida se existe pagina/arquivo .PHP
				if(file_exists('pages/'.$url[0].'.php')){
					include('pages/'.$url[0].'.php');
				}else{
					//pagina/arquivo .PHP não existe!
					header('Location: '.INCLUDE_PATH_PAINEL);
				}
			}else{
				//pagina/arquivo .PHP não existe, exibe HOME.PHP
				include('pages/home.php');
			}
		}	
		
		//lista todos os registros de uma tabela ou todos os registros com limite de apresentacao pelo campo ID
		public static function selectAll($tabela,$start = null,$end = null){
			if($start == null && $end == null){
				$sql = MySql::conectar()->prepare("SELECT * FROM $tabela ORDER BY id");
			}else{
				$sql = MySql::conectar()->prepare("SELECT * FROM $tabela ORDER BY id LIMIT $start,$end");
			}
			$sql->execute();
			//
			return $sql->fetchAll();

		}		

		//redireciona a url
		public static function redirect($url){
			echo '<script>location.href="'.$url.'"</script>';
			//matar/fechar o comando redirecionamento
			die();
		}	

		//seleciona apenas 1 registro da tabela 
		public static function select($table,$query = '',$arr = ''){
			if($query != false){
				$sql = MySql::conectar()->prepare("SELECT * FROM `$table` WHERE $query");
				$sql->execute($arr);
			}else{
				$sql = MySql::conectar()->prepare("SELECT * FROM `$table`");
				$sql->execute();
			}
			return $sql->fetch();
		}

	}

?>