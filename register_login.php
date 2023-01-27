<?php

  //  session_start();

  //  if(isset($_SESSION['usuario'])){
  //    header("location: bienvenida.php");
  //  }


?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Teachers Directory Website" />
  <meta name="title" property="og:title" content="BuscaProfe" />
  <meta property="og:type" content="Website" />
  <meta name="image" property="og:image" content="https://images.unsplash.com/photo-1581726707445-75cbe4efc586?ixlib=rb-1.2.1&auto=format&fit=crop&w=1055&q=80" />
  <meta name="description" property="og:description" content="Teachers Directory Website" />
  <meta name="author" content="Steven Jack Chung" />
  <link rel="icon" type="image/png" href="assets/icon-zz.png">
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;500;600;700&display=swap"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Lora&family=Roboto+Condensed:wght@400;700&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css"
    integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
  <link rel="stylesheet" href="css/mobile.css">
  <link rel="stylesheet" href="css/nav.css">
  <link rel="stylesheet" media="screen and (min-width: 1024px)" href="css/desktop.css">
    <title>Login y Register</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="css/estilo_registro.css">
</head>
<header class="header">
    <nav class="nav-bar">
      <div class="zz-cont">
        <a href="index.html"><img class="nav-logo" src="assets/buscaprofe_logo.PNG" alt="zz"></a>
      </div>
      <div class="menu">
        <ul class="menu-list">
            <li>
                <a href="index.html"><i class="fas fa-home"></i><span class="d-none">Inicio</span></a>
              </li>
              <li>
                <a href="register_login.php"><i class="fas fa-user"></i><span class="d-none">Mi Cuenta</span></a>
              </li>
              <li>
                <a href="index.html"><i class="fas fa-bars"></i><span class="d-none">Cerrar Sesion</span></a>
              </li>
        </ul>
      </div>
    </nav>
  </header>
<body>

        <main>

            <div class="contenedor__todo">
                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>Inicia sesión para entrar en la página</p>
                        <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                    </div>
                    <div class="caja__trasera-register">
                        <h3>¿Aún no tienes una cuenta?</h3>
                        <p>Regístrate para que puedas iniciar sesión</p>
                        <button id="btn__registrarse">Regístrarse</button>
                    </div>
                </div>

                <!--Formulario de Login y registro-->
                <div class="contenedor__login-register">
                    <!--Login-->
                    <form action="php/login_usuario.php" class="formulario__login" method="POST">
                        <h2>Iniciar Sesión</h2>
                        <input type="text" placeholder="Correo Electronico" name="user_mail" required>
                        <input type="password" placeholder="Contraseña" name="user_password_hash" required>
                        <button>Entrar</button>
                    </form>

                    <!--Register-->
                    <form action="php/registrar.php" class="formulario__register" method="POST">
                        <h2>Regístrarse</h2>
                        <input type="text" placeholder="Nombre completo" name="firstname" required>
                        <input type="text" placeholder="Correo Electronico" name="user_mail" required>
                        <input type="text" placeholder="Usuario" name="user_name" required>
                        <input type="password" placeholder="Contraseña" name="user_password_hash" required>
                        <button>Regístrarse</button>
                    </form>
                </div>
            </div>

        </main>

        <script src="js/script.js"></script>
</body>
</html>