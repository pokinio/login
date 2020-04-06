<?php 

require 'db.php';

$message ='';

if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $sql = "INSERT INTO user (email, password) VALUES (:email, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(':email', $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindValue(':password', $password);;


    if ($stmt->execute()) {
        $message = 'Successfully created new user';
      } else {
        $message = 'Sorry there must have been an issue creating your account';
      }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Fredoka+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/estilos.css">
    <title>singup</title>
</head>
<body>
<?php require 'partials/header.php' ?>

<?php if(!empty($message)):?>
<p><?php $message?></p>
<?php endif;?>


<h1>Registrarse</h1>
<span> or <a href="login.php">Iniciar Sesion</a></span>
<form action="signup.php" method="POST">
    <center>
    
      <input type="text" name="email"  placeholder="Enter your email"><br>
      <input type="password" name="password"  placeholder="Enter your Password"><br>
      <input name="confirm_password" type="password" placeholder="Confirm Password"><br>
      <input type="submit" value="Submit">
    
    </center>
    </form>
</body>
</html>