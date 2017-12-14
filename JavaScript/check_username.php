<?php

	// 	Zona de includes
		include("../SQL/functions_sql.php");
		
		$username = $_REQUEST["q"];
		
		// 	Ligação à base de dados
			$conn = BD_connect();
								
			$utilizador = check_username($conn, $username);	// retorna 1 se existir ou zero se não existir
		
		//	Fecho da conexao 'a bdd
			BD_disconnect($conn);
			
			if( $utilizador == 1)
				echo "Username already exists";
			
	
?>