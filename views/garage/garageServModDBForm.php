<?php

  $host = 'localhost';
  $db = 'HomeDB1118';
  $user = 'kniazyouk';
  $password = 'Longclaw/Ghost';
  
  $link = mysqli_connect($host, $user, $password, $db);

  if (!$link) {
    echo "Error at the connection";
  }

?>

  
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="../../estilos/paymentServiceForm.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="">
    <link rel="icon" href="../img/logo.ico">
    <title>Garage Services Modify Form</title>
</head>
<body>
    <div class="container">
      <header>
        <section id="user">
          Hey!, Kniaz Youk<?php  ?><br>
          <a id="back" href="http://localhost:60/HomePage/views/garage/garage.php">Back</a>
          <h1>Garage Services Modify Form</h1>
        </section>
      </header>
      <div id="contentPaymentForm">
        
        <form action="" method="post">
          <div id="grid-content">
            <div id="div-1">
              <label for="">Services Date</label><br>
              <input type="number" id="serviceDate" name="serviceDateForm" placeholder="YYYY-MM-DD" required="required">
            </div>

            <div id="div-3">
              <label for="">Balance Light</label><br>
              <input type="text" name="balanceLightForm" id="" placeholder="00.00" required="required">
            </div>
            <div id="div-4">
              <label for="">Balance Water</label><br>
              <input type="text" name="balanceWaterForm" id="" placeholder="00.00" required="required">
            </div>

            <div id="div-5">
              <label for="">Payment Condition</label><br>
              <select id="state" name="paymentConditionForm" required="required">
                <option value="NO Pagado">NOT Paid</option>
                <option value="Pagado">Paid</option>
              </select>
            </div>

            <div id="div-6">
              <label for="">Notes</label><br>
              <textarea id="txtA" name="textAreaForm" rows="4" cols="30" placeholder="Describe any note HERE..."></textarea>
            </div>
          </div>

            <input id="btnServ" type="submit" name="registServ" value="Send" onclick="alert('Service Added')">
        </form>
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

<?php

if(isset($_POST['registServ'])){
  $fechaServ = $_POST['serviceDateForm'];
  $balanceLuz = $_POST['balanceLightForm'];
  $balanceAgua = $_POST['balanceWaterForm'];
  $estado = $_POST['paymentConditionForm'];
  $nota = $_POST['textAreaForm'];
 

  $insertData = "INSERT INTO servicegarage ( `servDate_db`, `balanceLightAmount_db`,`balanceWaterAmount_db`, `paymentCondition_db`, `notes_db`) values ('$fechaServ','$balanceLuz','$balanceAgua','$estado', '$nota')";


  $executeInsert = mysqli_query($link, $insertData);

  if (!$executeInsert) {
    echo "ERROR EN LA LINEA SQL";
  }

}

?>
