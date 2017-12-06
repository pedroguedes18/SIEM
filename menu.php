<?php



	
	session_start(); 

	if (!isset($_SESSION['autenticado']))
			$_SESSION['autenticado'] = false;
		
	if (!isset($_COOKIE['password_aux'])){
		$password_aux = 0;
		setcookie('password_aux', $password_aux, 0,'/');
	}
	
	if (!isset($_COOKIE['username_aux'])){
		$username_aux = 0;
		setcookie('username_aux', $username_aux, 0,'/');
	}
	
	if (!isset($_COOKIE['email_aux'])){
	$email_aux = 0;
	setcookie('email_aux', $email_aux, 0,'/');
	}


	function menu(){
		
		if (session_status() == PHP_SESSION_NONE) {
			session_start();
		}
		
		include("SQL/functions_sql.php");
		

		
		echo '<div class="menu" Align=center>
				<table class="menu" Align=center>
					<tr>
						<td  rowspan="2"> <p align = center> <img src="http://paginas.fe.up.pt/~ee12144/trabalhosSiem/trabalhoPHP-1/Fotos/kombi_menu.png" style="width:60px;height:35px;"> </p> <p class="menu"> <a class= "simple" href = "http://paginas.fe.up.pt/~ee12144/trabalhosSiem/trabalhoPHP-1/index.php" target="_self">KombiWithUs  </a> </p> </td>
						<td> <p class="menu"> <a href="http://paginas.fe.up.pt/~ee12144/trabalhosSiem/trabalhoPHP-1/index.php#AboutUS"> About US  </a> </p>  </td>
						<td> <p class="menu"> <a href="http://paginas.fe.up.pt/~ee12144/trabalhosSiem/trabalhoPHP-1/index.php#Regions"> Regions   </a> </p>  </td>
						<td> <p class="menu"> <a href = "http://paginas.fe.up.pt/~ee12144/trabalhosSiem/trabalhoPHP-1/Tours/Form_ApresentaTours.php" target="_self"> Tours </a> </p> </td>
						<td> <p class="menu"> <a href="http://paginas.fe.up.pt/~ee12144/trabalhosSiem/trabalhoPHP-1/index.php#founders"> Founders </a> </p>  </td>';
						
						
						if($_SESSION['autenticado'] == true){
							$conn = BD_connect();
							
							$admin = check_admin($conn, $_SESSION['userName']);
							BD_disconnect($conn);
							
							if($admin)
								echo '<td> <p class="menu"> 
										<div class="dropdown" style="padding-left: 25px;">
										  <button class="dropbtn">Maintenence</button>
										  <div class="dropdown-content">
											<a href="http://paginas.fe.up.pt/~ee12144/trabalhosSiem/trabalhoPHP-1/Maintenence/Maintenence_Insert.php">Insert Info</a>
											<a href="http://paginas.fe.up.pt/~ee12144/trabalhosSiem/trabalhoPHP-1/Maintenence/Maintenence_remove.php">Remove Info</a>
											<a href="http://paginas.fe.up.pt/~ee12144/trabalhosSiem/trabalhoPHP-1/Maintenence/Maintenence_update.php">Update Info</a> 
										  </div>
										</div>	
							</p> </td>';
						}
						
					
						echo '<td> <p class="menu"> <a href="http://paginas.fe.up.pt/~ee12144/trabalhosSiem/trabalhoPHP-1/index.php#downloads"> Downloads </a> </p> </td>';
						
						if($_SESSION['autenticado'] == false){
							echo "<td> <p class=\"menu\"> <a class=\"SignIn\" href= \"http://paginas.fe.up.pt/~ee12144/trabalhosSiem/trabalhoPHP-1/SignIn.php\"> Sign In </a> </p> </td>";
						}
						else{
							echo ' <td align=center> <p class="menu">
										<div class="dropdown">
										  <button class="dropbtn">'.$_SESSION['userName'].'</button>
										  <div class="dropdown-content">
											<a href="http://paginas.fe.up.pt/~ee12144/trabalhosSiem/trabalhoPHP-1/UserPage.php">My Tours</a>
											<a href="http://paginas.fe.up.pt/~ee12144/trabalhosSiem/trabalhoPHP-1/Logout/acaoLogout.php">Logout </a>
										  </div>
										</div>
									</p> </td>';
							}
					echo '</tr>
				</table>
			</div>';
	}

?>