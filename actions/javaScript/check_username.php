<?php

	// 	Zona de includes
		include_once('../../config/init.php');
		include_once($BASE_DIR.'database/SignIn/signIn.php');

		$username = $_REQUEST["q"];


		$utilizador = checkUsersame($username);	// retorna 1 se existir ou zero se não existir

		if( $utilizador['count'] == 1)
			echo "Username already exists";
?>
