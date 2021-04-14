<?php

    include_once '../../db/database.php';

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
    <link rel="stylesheet" type="text/css" href="../../estilos/admin.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="refresh" content="">
    <link rel="icon" type="image/png" href="../../img/icon/favicon.png" sizes="32x32">
    <title>Admin Form</title>
    <style>
      .dropbtn {
        width: 350px;
        color: rgba(255, 255, 255, 0.8);
        padding: 16px;
        font-size: 35px;
        border: none;
        cursor: pointer;
        background-color: rgba(0, 0, 0, 0.5);
      }
      .dropdown {
        position: relative;
        text-align: center;
      }
      .dropdown-content {
        display: none;
        position: relative;
        background-color: rgba(0, 0, 0, 0.5);
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
      }
      .dropdown-content a {
        color: rgba(255, 255, 255, 0.8);
        padding: 12px 16px;
        text-decoration: none;
        display: inline-block;
        font-size: 30px;
      }
      .dropdown-content a:hover {
        background-color: rgba(0, 0, 0, 0.5);
      }
      .dropdown:hover .dropdown-content {
        display: grid;
        width: auto;
        align-content: space-evenly;
        justify-content: space-evenly;
        grid-template-columns: auto auto; 
        grid-gap: 200px;
      }
      .dropdown:hover .dropbtn {
        background-color: rgba(0, 0, 0, 1);
      }
      @media screen and (max-width: 768px){
        #grid-container-admin{
          margin: 10px;
          display: grid;
          height: 520px;
          align-content: space-evenly;
          justify-content: space-evenly;
          grid-template-columns: auto;
          grid-template-rows: auto auto auto;
          grid-gap: 50px;
          background-color: rgba(0, 0, 0, 0.1);
          padding: 100px 30px 100px 30px;
        }
        .dropbtn {
          font-size: 35px;
          width: 390px;
        }
        .dropdown-content a {
          font-size: 30px;
        }
        .dropdown:hover .dropdown-content {
          grid-gap: 200px;
        }
      }
      @media screen and (max-width: 640px){
        #grid-container-admin{
          display: grid;
          height: 370px;
          align-content: space-evenly;
          justify-content: space-evenly;
          grid-template-columns: auto;
          grid-template-rows: auto auto auto;
          grid-gap: 50px;
          background-color: rgba(0, 0, 0, 0.1);
          padding: 50px 30px 50px 30px;
        }
        .dropbtn {
          font-size: 30px;
          width: 350px;
        }
        .dropdown-content a {
          font-size: 25px;
        }
        .dropdown:hover .dropdown-content {
          grid-gap: 90px;
        }
      }
      @media screen and (max-width: 480px){
        #grid-container-admin{
          display: grid;
          height: 380px;
          align-content: space-evenly;
          justify-content: space-evenly;
          grid-template-columns: auto;
          grid-template-rows: auto auto auto;
          grid-gap: 50px;
          background-color: rgba(0, 0, 0, 0.1);
          padding: 50px 30px 50px 30px;
        }
        #content{
          position: relative;
          height: 505px;
          margin: 0px;
          padding: 15px 15px 15px 15px;
        }
        .dropbtn {
          font-size: 25px;
          width: 240px;
        }
        .dropdown-content a {
          font-size: 20px;
        }
        .dropdown:hover .dropdown-content {
          grid-gap: 30px;
        }
      }
      @media screen and (max-width: 320px){
        .dropbtn {
          font-size: 20px;
        }
        .dropdown-content a {
          font-size: 15px;
        }
        .dropdown:hover .dropdown-content {
          grid-gap: 50px;
        }
        #content{
          position: relative;
          height: 365px;
          margin: 0px;
          padding: 5px 5px 5px 5px;
        }
        #grid-container-admin{
          display: grid;
          height: 300px;
          align-content: space-evenly;
          justify-content: space-evenly;
          grid-template-columns: auto;
          grid-template-rows: auto auto auto;
          grid-gap: 50px;
          background-color: rgba(0, 0, 0, 0.1);
          padding: 25px 10px 25px 10px;
        }
      }
    </style>
    
</head>
<body>
    <div class="container">
      <header>
        <section id="user">
          Hey!, Kniaz Youk<?php  ?><br>
          <a id="back" href="http://localhost:60/HomePage/views/admin.php">Back</a>
          <!--  <a id="back" href="https://4rent1118.000webhostapp.com/views/admin.php">Back</a> -->
          <h1>Administrator</h1>
        </section>
      </header>
      <div id="content">

        <div id="grid-container-admin">
          <div class="dropdown">
            <button class="dropbtn">Garage Leasing</button>
            <div class="dropdown-content">
            <a href="garageRentForm.php">...Rent...</a>
            <a href="garageRentModDBForm.php">Modify DB</a>
            </div>
          </div>
          <div class="dropdown">
            <button class="dropbtn">Garage Services</button>
            <div class="dropdown-content">
            <a href="garageServicesForm.php">Services</a>
            <a href="garageServModDBForm.php">Modify DB</a>
            </div>
          </div>

          <div id="grid-viewOption">
            <a href="garageViewForm.php">Garage View</a>
          </div>
        </div>

        <!-- 
        <div id="grid-container-admin">
          <div id="grid-paymentOption">
            <a href="garageRentForm.php">Garage Rent</a>
          </div>
          <div id="grid-paymentOption">
            <a href="garageServicesForm.php">Garage Services</a>
          </div>
          <div id="grid-viewOption">
            <a href="garageViewForm.php">Garage View</a>
          </div>
        </div>
        -->

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
