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
    <link rel="stylesheet" type="text/css" href="../../estilos/paymentRentForm.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="">
    <link rel="icon" type="image/png" href="../../img/icon/favicon.png" sizes="32x32">
    <title>Store Registration Payment Form</title>
</head>
<body>
    <div class="container">
      <header>
        <section id="user">
          Hey!, Kniaz Youk<?php  ?><br>
          <a id="back" href="http://localhost:60/HomePage/views/store/store.php">Back</a>
          <!-- <a id="back" href="https://4rent1118.000webhostapp.com/views/store/store.php">Back</a>  -->
          <h1>Store Registration Payment Form</h1>
        </section>
      </header>
      <div id="contentPaymentForm">
        
        <form action="" method="post">

          <div id="grid-content">
            <div id="div-1">
              <label for="">Rent Date</label><br>
              <input type="number" id="rentDate" name="rentDateForm" placeholder="YYYY-MM-DD" required="required">
            </div>

            <div id="div-2">
              <label for="">Paid Amount</label><br>
              <input type="number"  name="paidAmountForm" id="" placeholder="00.00" required="required">
            </div>

            <div id="div-3">
              <label for="">Balance</label><br>
              <input type="number" name="balanceForm" id="" placeholder="00.00" required="required">
            </div>

            <div id="div-4">
              <label for="">Way to Pay/label><br>
              <select id="payForm" name="wayToPayForm" required="required">
                <option value="Ninguna"></option>
                <option value="Efectivo">Cash</option>
                <option value="Depo">Depo</option>
              </select>
            </div>
            
            <div id="div-5">
              <label for="">Payment Condition</label><br>
              <select id="state" name="paymentConditionForm" required="required">
                <option value="Pagado">Paid</option>
                <option value="NO Pagado">NOT Paid</option>
              </select>
            </div>

            <div id="div-6">
              <label for="">Notes</label><br>
              <textarea id="txtA" name="textAreaForm" rows="4" cols="30" placeholder="Describe any note HERE..."></textarea>
            </div>
          </div>

            <input id="btnRegist" type="submit" name="register" value="Send" onclick="alert('Data sent!')">
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

if(isset($_POST['register'])){
  $fechaRent = $_POST['rentDateForm'];
  $monto = $_POST['paidAmountForm'];
  $saldo = $_POST['balanceForm'];
  $formaPago = $_POST['wayToPayForm'];
  $estado = $_POST['paymentConditionForm'];
  $nota = $_POST['textAreaForm'];
 

  $insertData = "INSERT INTO rentstore ( `rentDate_db`, `paidAmount_db`, `balanceAmount_db`, `wayToPay_db`, `paymentCondition_db`, `notes_db`) values ('$fechaRent','$monto','$saldo','$formaPago','$estado', '$nota')";


  $executeInsert = mysqli_query($link, $insertData);

  if (!$executeInsert) {
    echo "ERROR EN LA LINEA SQL";
  }

}

?>
