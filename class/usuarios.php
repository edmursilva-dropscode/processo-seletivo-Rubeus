<?php
	
	class AdminUsuarios
	{

		//cadastrar novo usuario
		public static function cadastrarUsuarios($email,$senha,$nome){
			$sql = MySql::conectar()->prepare("INSERT INTO tb_admin_usuarios VALUES (null,?,?,?)");
			if($sql->execute(array($email,$senha,$nome))){
				return true;
			}else{
				return false;
			}
		}	

	} 

?>