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
    <link rel="icon" href="../img/logo.ico">
    <title>Garage Rent Modify DB Form</title>
</head>
<body>
    <div class="container">
      <header>
        <section id="user">
          Hey!, Kniaz Youk<?php  ?><br>
          <a id="back" href="http://localhost:60/HomePage/views/garage/garage.php">Back</a>
          <h1>Garage Rent Modify DB Form</h1>
        </section>
      </header>
      <div id="contentPaymentForm">
        
        <form action="" method="post">

          <div id="grid-content">
            <div id="div-1">
              <label for="">Referal Rent Date</label><br>
              <input type="number" id="rentDate" name="OLDrentDateForm" placeholder="YYYY-MM-DD" required="required">
            </div>

            <div id="div-2">
              <label for="">Paid Amount</label><br>
              <input type="number"  name="NEWpaidAmountForm" id="" placeholder="00.00" required="required">
            </div>

            <div id="div-3">
              <label for="">Balance</label><br>
              <input type="number" name="NEWbalanceForm" id="" placeholder="00.00" required="required">
            </div>

            <div id="div-4">
              <label for="">Way to Pay<label><br>
              <select id="payForm" name="NEWwayToPayForm" required="required">
                <option value="Ninguno"></option>
                <option value="Efectivo">Cash</option>
                <option value="Depo">Depo</option>
              </select>
            </div>
            
            <div id="div-5">
              <label for="">Payment Condition</label><br>
              <select id="state" name="NEWpaymentConditionForm" required="required">
                <option value="NO Pagado">NOT Paid</option>
                <option value="Pagado">Paid</option>
              </select>
            </div>

            <div id="div-6">
              <label for="">Notes</label><br>
              <textarea id="txtA" name="NEWtextAreaForm" rows="4" cols="30" placeholder="Describe any note HERE..."></textarea>
            </div>
          </div>

            <input id="btnRegist" type="submit" name="update" value="Send" onclick="alert('Data sent!')">
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

if(isset($_POST['update'])){
  $OLDfechaRent = $_POST['OLDrentDateForm'];
  $NEWmonto = $_POST['NEWpaidAmountForm'];
  $NEWbalance = $_POST['NEWbalanceForm'];
  $NEWformaPago = $_POST['NEWwayToPayForm'];
  $NEWestado = $_POST['NEWpaymentConditionForm'];
  $NEWnota = $_POST['NEWtextAreaForm'];
 /*
  UPDATE `rentgarage` SET `ID`=[value-1],`rentDate_db`=[value-2],`paidAmount_db`=[value-3],`balanceAmount_db`=[value-4],`wayToPay_db`=[value-5],`paymentCondition_db`=[value-6],`notes_db`=[value-7],`paymentDate_db`=[value-8] WHERE 1

  UPDATE `rentgarage` SET `paidAmount_db`=10,`balanceAmount_db`=0,`wayToPay_db`='Dep',`paymentCondition_db`='Pagado',`notes_db`='Test' WHERE `rentDate_db`=20210410 

  */

  $modifyData = "UPDATE rentgarage SET (`paidAmount_db`=$NEWmonto, `balanceAmount_db`= $NEWbalance, `wayToPay_db`= $NEWformaPago, `paymentCondition_db`= $NEWestado, `notes_db`= $NEWnota) WHERE `rentDate_db`=$OLDfechaRent";


  $executeUpdate = mysqli_query($link, $modifyData);

  if (!$executeUpdate) {
    echo "ERROR EN LA LINEA SQL";
  }

}

?>
