<?php 

	include("con_db.php");

		$firstname = $_POST['firstname'];
		$user_mail = $_POST['user_mail'];
		$user_name = $_POST['user_name'];
		$user_password_hash = $_POST['user_password_hash'];
		//Encriptamiento de password
		$user_password_hash = hash('sha512', $user_password_hash);
		$fecha_reg = date("d/m/y"); 

		//insersion de datos
		$consulta = "INSERT INTO users (firstname, user_mail, user_name, user_password_hash, fecha_reg) VALUES ('$firstname','$user_mail','$user_name','$user_password_hash','$fecha_reg')";

		//verificar que correo no se repita en base de datos
		$verificar_correo = mysqli_query($conex, "SELECT * FROM users WHERE user_mail = '$user_mail' ");

		if (mysqli_num_rows($verificar_correo) > 0){
			echo'
				<script>
					alert("Este correo ya esta registrado, intenta con otro diferente.");
					window.location = "../register_login.php"
				</script>
			';
			exit();
		}

		//Verificar que usuario no se repita
		$verificar_usuario = mysqli_query($conex, "SELECT * FROM users WHERE user_name='$user_name'");

		if(mysqli_num_rows($verificar_usuario) > 0 ){
			echo'
				<script>
					alert("Este usuario ya esta registrado, intenta con otro diferente.");
					window.location = "../register_login.php"
				</script>
			';
			exit();
		}

		$resultado = mysqli_query($conex,$consulta);

		if ($resultado) {
			echo '
				<script>
					alert("Usuario almacenado correctamente.");
					window.location = "../register_login.php";
				</script>
			';
		}else{
			echo '
				<script>
					alert("Intentelo nuevamente, usuario no almacenado.");
					window.location = "../register_login.php";
				</script>
			';
		}
	mysqli_close($conex);
?>