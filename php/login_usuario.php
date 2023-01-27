<?php

    session_start();

    include("con_db.php");

    $user_mail = $_POST['user_mail'];
    $user_password_hash = $_POST['user_password_hash'];

    $validar_login = mysqli_query ($conex, "SELECT * FROM users WHERE user_mail = '$user_mail' and user_password_hash = '".md5($user_password_hash)."'");
    
    if(mysqli_num_rows($validar_login) > 0){
        $_SESSION['usuario'] = $user_mail;
        echo'
            <script>
                alert("Accediste Correctamente '.$user_mail.'.");
                window.location = "../bienvenida.php"
            </script>
        ';
    }else{
        echo '
            <script>
                alert("Usuario no existe, porfavor verifica que estes registrado.");
                window.location = "../register_login.php"
            </script>
        ';
        exit();
    }

?>