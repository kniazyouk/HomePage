<?php

    include_once '../db/database.php';

    session_start();


    if(!isset($_SESSION['rol'])){
        header('location: login.php');
    }else{
        if($_SESSION['rol'] != 1){
            header('location: login.php');
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="../estilos/admin.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="refresh" content="">
    <link rel="icon" href="img/logo.ico">
    <title>Admin Form</title>
</head>
<body>
    <div class="container">
      <header>
        <section id="user">
          Hey!, Kniaz Youk<?php  ?><br>
          <a id="logout" href="http://localhost:60/HomePage/views/login.php?cerrar_sesion=1">Logout</a>
          <h1>Administrator</h1>
        </section>
      </header>
      <div id="content">
        <div id="grid-container-admin">
          <div id="grid-option">
            <a href="garage/garage.php">Garage</a>
          </div>  
          <div id="grid-option">
            <a href="store/store.php">Store</a>
          </div>
          <div id="grid-option">
            <a href="PB/pb.php">PB</a>
          </div>
        </div>
      </div>
      <footer>
        <div id="copyright">
          <p>Copyright &copy; 2021 <br> Copyright Holder All Rights Reserved.<br>
              Made by <i>Kniaz Youk</i> Contact us at:
              <a href="#">Privacy</a> * <a href="#">Policy</a>
          </p>        
        </div>
        </footer>
    </div>  
</body>
</html>
