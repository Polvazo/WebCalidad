<?php 
	function login($mail,$codigo){
		$url = 'https://afternoon-springs-88209.herokuapp.com/api/logins/?filter[where][email]='.$mail.'&filter[where][password]='.$codigo;
		$json = file_get_contents($url);
	 	$array = json_decode($json,true);
	 	//print_r($array);
	  	if (isset($array[0]['cod_usuario'])) {
	  		$valor=true;
	  	}else{
	  		$valor=false;
	  	}
	  	return $valor;
	}
	if (isset($_GET['data']) && $_GET['data']=='close'){
		session_destroy();
		$_SESSION["id"]='';
		header('Location: index.php');
	}
	if (isset($_POST['correo'])) {
		$mail=$_POST['correo'];
		$codigo=$_POST['password'];
		$road = login($mail,$codigo);
		//echo "----->".$road."<br>";
		//echo "----->".$_POST['correo']."<br>";
		//echo "----->".$_POST['password']."<br>";
		if ($road) {
		    header('Location: disponibles.php');
			session_start();
			$_SESSION["id"]=session_id();
		}else{
			echo "
				<script>
				alert('Los datos de ingreso son incorrectos o no existen');
				</script>
			";
		}

	}
?>