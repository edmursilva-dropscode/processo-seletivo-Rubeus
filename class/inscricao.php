<?php
	
	class InscricaoAlunos
	{

		//cadastrar novo aluno
		public static function cadastrarAlunos($nome){
			$sql = MySql::conectar()->prepare("INSERT INTO tb_site_alunos VALUES (null,?)");
			if($sql->execute(array($nome))){
				return true;
			}else{
				return false;
			}
		}	

	} 

?>