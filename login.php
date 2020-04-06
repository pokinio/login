<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Fredoka+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web&display=swap" rel="stylesheet">
    <title>login</title>
</head>
<body>
<?php require 'partials/header.php' ?>
    <h1>Iniciar Sesion</h1>
    <span> or <a href="signup.php">Registrase</a></span>
    <form action="login.php" method="post">
        <center><input type="email" name='email' placeholder='Ingrese su email'> <br>
        <input type="password" name="password" placeholder='Ingrese su contrasenia' id=""><br></center>
        <input type="submit" name="Enviar" value='Enviar' id="">
    </form>
</body>
</html>