<?php

    include_once '../../db/database.php';

    session_start();


    if(!isset($_SESSION['rol'])){
        header('location: ../login.php');
    }else{
        //IF THE ROLE IS NOT 2 AND OLSO NOT 1, GO BACK TO LOGIN
        if($_SESSION['rol'] != 2 && $_SESSION['rol'] != 1){
            header('location: ../login.php');
        }
    }    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="../../estilos/viewForm.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="refresh" content="">
    <link rel="icon" href="../img/logo.ico">
    <title>Inqulino del Garage</title>
</head>
<body>
    <div class="container">
      <header>
        <section id="user">
          Hola, Inquilino del Garage<?php  ?><br>
          <a id="logout" href="http://localhost:60/HomePage/views/login.php?cerrar_sesion=1">Salir</a>
          <h1>Formulario de Vista</h1>
        </section>
      </header>
      <div id="content">
        <section id="rentDueAmount">      
          <div id="bubbleRentDueBalance">
            <h2>Pago Pendiente de Alquiler</h2>   
            <table>
              <tr>
                <th>Calendas</th>
                <!--<th>Monto Pagado</th>-->
                <th>Balance</th>
                <!--<th>Forma de pago</th>-->
                <th>Estado</th>
                <th>Notas</th>
                <!--<th>Fecha de Modificacion</th>-->
                <!--<th>FAC</th>-->
                <?php

                  $db = new Database();
                  if (!$db) {
                    echo "Error at the connection";
                  }

                  //FECH ALL DATA FROM TALBE RENTGARAGE
                  //NAMED PLACEHOLDER
                  $query = $db->connect()->prepare('SELECT * FROM rentgarage WHERE 
                  paymentCondition_db = :paymentCondition');
                  //BINDPARAM
                  $paymentCondition = "NO Pagado";
                  $query->bindParam(':paymentCondition', $paymentCondition);
                  $query->execute();
                  
                  while ($x = $query->fetch(PDO::FETCH_ASSOC)) {
                    $calendas = $x['rentDate_db'];
                    //$monto = $x['paidAmount_db'];
                    $balance = $x['balanceAmount_db'];
                    $tipoPago = $x['wayToPay_db'];
                    $estado = $x['paymentCondition_db'];
                    $notas = $x['notes_db'];
                    $fechaPago = $x['paymentDate_db'];
                    //$FAC = $x['attach_db'];
                ?>    
                    <tr>
                      <td><?php echo $calendas; ?></td>
                      <!--<td><?php echo $monto; ?></td>-->
                      <td><?php echo $balance; ?></td>
                      <!--<td><?php echo $tipoPago; ?></td>-->
                      <td><?php echo $estado; ?></td>
                      <td><?php echo $notas; ?></td>
                      <!--<td><?php echo $fechaPago; ?></td>-->      
                    </tr>  
                  <?php  
                  }
                  ?>                
              </tr>
            </table>
          </div>
        </section>

        <section id="servicesDueAmount">
          <div id="bubbleServiceDueBalance">
            <h2>Pago pendiente de Servicios Basicos</h2>
            <table>
              <tr>
                <th>Calendas</th>
                <th>Balance Luz</th>
                <th>Balance Agua</th>
                <th>Estado</th>
                <th>Notas</th>
                <!--<th>Fecha de Modificacion</th>-->
                <!--<th>FAC</th>-->
                <?php

                  $db = new Database();
                  if (!$db) {
                    echo "Error at the connection";
                  }

                  //FECH ALL DATA FROM TALBE RENTGARAGE
                  //NAMED PLACEHOLDER
                  $query = $db->connect()->prepare('SELECT * FROM servicegarage WHERE 
                  paymentCondition_db = :paymentCondition');
                  //BINDPARAM
                  $paymentCondition = "NO Pagado";
                  $query->bindParam(':paymentCondition', $paymentCondition);
                  $query->execute();
                  
                  while ($x = $query->fetch(PDO::FETCH_ASSOC)) {
                    $calendas = $x['servDate_db'];
                    $balanceLight = $x['balanceLightAmount_db'];
                    $balanceWater = $x['balanceWaterAmount_db'];
                    $estado = $x['paymentCondition_db'];
                    $notas = $x['notes_db'];
                    $fechaPago = $x['paymentDate_db'];
                    //$FAC = $x['attach_db'];
                ?>    
                    <tr>
                      <td><?php echo $calendas; ?></td>
                      <td><?php echo $balanceLight; ?></td>
                      <td><?php echo $balanceWater; ?></td>
                      <td><?php echo $estado; ?></td>
                      <td><?php echo $notas; ?></td>
                      <!--<td><?php echo $fechaPago; ?></td>-->      
                    </tr>  
                  <?php  
                  }
                  ?>                
              </tr>
            </table>
          </div>
        </section>
        <section id="paymentHistory">
          <div id="rentPaymentHistory">        
            <h2>Historial de Pagos de alquiler</h2>
            <table>
                <tr>
                  <th>Calendas</th>
                  <th>Monto Pagado</th>
                  <th>Balance</th>
                  <th>Forma de pago</th>
                  <th>Estado</th>
                  <th>Notas</th>
                  <th>Fecha de Modificacion</th>
                  <!--<th>FAC</th>-->
                  <?php

                    $db = new Database();
                    if (!$db) {
                      echo "Error at the connection";
                    }

                    //FECH ALL DATA FROM TALBE RENTGARAGE
                    //NAMED PLACEHOLDER
                    $query = $db->connect()->prepare('SELECT * FROM rentgarage');
                    //BINDPARAM
                    $paymentCondition = "NO Pagado";
                    $query->bindParam(':paymentCondition', $paymentCondition);
                    $query->execute();
                    
                    while ($x = $query->fetch(PDO::FETCH_ASSOC)) {
                      $calendas = $x['rentDate_db'];
                      $monto = $x['paidAmount_db'];
                      $balance = $x['balanceAmount_db'];
                      $tipoPago = $x['wayToPay_db'];
                      $estado = $x['paymentCondition_db'];
                      $notas = $x['notes_db'];
                      $fechaPago = $x['paymentDate_db'];
                      //$FAC = $x['attach_db'];
                  ?>    
                      <tr>
                        <td><?php echo $calendas; ?></td>
                        <td><?php echo $monto; ?></td>
                        <td><?php echo $balance; ?></td>
                        <td><?php echo $tipoPago; ?></td>
                        <td><?php echo $estado; ?></td>
                        <td><?php echo $notas; ?></td>
                        <td><?php echo $fechaPago; ?></td>      
                      </tr>  
                    <?php  
                    }
                    ?>                
                </tr>
              </table>
            </div>
            <div id="servPaymentHistory">
              <h2>Historial de Pagos de Servicios</h2>
              <table>
                <tr>
                  <th>Calendas</th>
                  <th>Balance Luz</th>
                  <th>Balance Agua</th>
                  <th>Estado</th>
                  <th>Notas</th>
                  <th>Fecha de Modificacion</th>
                  <!--<th>FAC</th>-->
                  <?php

                    $db = new Database();
                    if (!$db) {
                      echo "Error at the connection";
                    }

                    //FECH ALL DATA FROM TALBE RENTGARAGE
                    //NAMED PLACEHOLDER
                    $query = $db->connect()->prepare('SELECT * FROM servicegarage ');
                    //BINDPARAM
                    $paymentCondition = "NO Pagado";
                    $query->bindParam(':paymentCondition', $paymentCondition);
                    $query->execute();
                    
                    while ($x = $query->fetch(PDO::FETCH_ASSOC)) {
                      $calendas = $x['servDate_db'];
                      $balanceLight = $x['balanceLightAmount_db'];
                      $balanceWater = $x['balanceWaterAmount_db'];
                      $estado = $x['paymentCondition_db'];
                      $notas = $x['notes_db'];
                      $fechaPago = $x['paymentDate_db'];
                      //$FAC = $x['attach_db'];
                  ?>    
                      <tr>
                        <td><?php echo $calendas; ?></td>
                        <td><?php echo $balanceLight; ?></td>
                        <td><?php echo $balanceWater; ?></td>
                        <td><?php echo $estado; ?></td>
                        <td><?php echo $notas; ?></td>
                        <td><?php echo $fechaPago; ?></td>      
                      </tr>  
                    <?php  
                    }
                    ?>                
                </tr>
              </table>

            </div>
        </section>
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
