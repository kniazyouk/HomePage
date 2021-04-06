<?php
    session_start();

    if(!isset($_SESSION['rol'])){
        header('location: login.php');
    }else{
        if($_SESSION['rol'] != 4 && $_SESSION['rol'] != 1){
            header('location: login.php');
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="../estilos/tenants.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, user-scalable=no,initial-scale=1.0, maximun-scale=1.0, minium-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="refresh" content="5">

    <title>Tenants</title>
    <style type="text/css" media="screen">

    </style>
</head>
<body>
    <div id="contenedor">
        <header>
            <section id="logotipo_tenants">

            </section>
            <section id="tittle_tenants">
                <h1>PB</h1>
            </section>
            <section id="user">
                Hola, Usuario de la PB<br> <?php  ?>
                <a id="logout" href="http://localhost:60/HomePage/views/login.php?cerrar_sesion=1">Logout</a>
            </section>

        </header>
        <div id="conenido">
          <div id="info_tenant">
            <section>

                <h2 id=""><a href="info_store.php">Informacion del inquilino</a></h2>
                <br>

            </section>
          </div>
          <section id="content_tenants">
              <section id="payments">
                  <section id="rent">
                      <!--FECHA DE PAGO, FORMA DE PAGO, TIPO DE PAGO, ANIO Y MES AL QUE CORRESPONDE EL PAGO, MONEDA, MONTO ALQUILER DEL MES, IMPORTE PAGADO, SALDO-->

                      <h3 id="rent_d">Detalles de los pagos de alquiler</h3>

                          <table border="1px" id="table1">
                            <tr>
                              <th>Nº</th>
                              <th>Del Mes</th>
                              <th>Fecha Pago</th>
                              <th>Pago</th>
                              <th>Saldo</th>
                              <th>Forma pago</th>
                              <th>Estado</th>
                            </tr>
                            <!--
                            <select id="state" name="">
                              <option value="NONE">Pagado</option>
                              <option value="NONE">NO Pagado</option>
                            </select>
                            </select>
                            -->
                            <tr>
                              <td>1</td>
                              <!--FECHA-->
                              <th>Marzo 2020</th>
                              <!--FECHA PAGO-->
                              <th>13/08/2020</th>
                              <!--MONTO PAGADO-->
                              <th>696.00</th>
                              <!--SALDO A PAGAR-->
                              <th>00.00</th>
                              <!--FORMA DE PAGO-->
                              <th>Contado</th>
                              <!--ESTADO DEL PAGO-->
                              <th id="state_garz1">Pagado</th>
                            </tr>
                            <tr>
                              <td>2</td>
                              <!--FECHA-->
                              <th>Abril 2020</th>
                              <!--FECHA PAGO-->
                              <th>14/08/2020</th>
                              <!--MONTO PAGADO-->
                              <th>348.00</th>
                              <!--SALDO A PAGAR-->
                              <th>00.00</th>
                              <!--FORMA DE PAGO-->
                              <th>Contado</th>
                              <!--ESTADO DEL PAGO-->
                              <th id="state_garz2">Pagado</th>
                            </tr>
                            <tr>
                              <td>3</td>
                              <!--FECHA-->
                              <th>Mayo 2020</th>
                              <!--FECHA PAGO-->
                              <th>00/00/2020</th>
                              <!--MONTO PAGADO-->
                              <th>00.00</th>
                              <!--SALDO A PAGAR-->
                              <th>348.00</th>
                              <!--FORMA DE PAGO-->
                              <th>Contado</th>
                              <!--ESTADO DEL PAGO-->
                              <th id="state_garz3">NO Pagado</th>
                            </tr>
                            <tr>
                              <td>4</td>
                              <!--FECHA-->
                              <th>Junio 2020</th>
                              <!--FECHA PAGO-->
                              <th>00/00/2020</th>
                              <!--MONTO PAGADO-->
                              <th>00.00</th>
                              <!--SALDO A PAGAR-->
                              <th>348.00</th>
                              <!--FORMA DE PAGO-->
                              <th>Contado</th>
                              <!--ESTADO DEL PAGO-->
                              <th id="state_garz4">NO Pagado</th>
                            </tr>
                            <tr>
                              <td>5</td>
                              <!--FECHA-->
                              <th>Julio 2020</th>
                              <!--FECHA PAGO-->
                              <th>00/00/2020</th>
                              <!--MONTO PAGADO-->
                              <th>00.00</th>
                              <!--SALDO A PAGAR-->
                              <th>348.00</th>
                              <!--FORMA DE PAGO-->
                              <th>Contado</th>
                              <!--ESTADO DEL PAGO-->
                              <th id="state_garz5">NO Pagado</th>
                            </tr>
                            <tr>
                              <td>6</td>
                              <!--FECHA-->
                              <th>Agosto 2020</th>
                              <!--FECHA PAGO-->
                              <th>00/00/2020</th>
                              <!--MONTO PAGADO-->
                              <th>00.00</th>
                              <!--SALDO A PAGAR-->
                              <th>348.00</th>
                              <!--FORMA DE PAGO-->
                              <th>Contado</th>
                              <!--ESTADO DEL PAGO-->
                              <th id="state_garz6">NO Pagado</th>
                            </tr>
                            <tr>
                              <td>7</td>
                              <!--FECHA-->
                              <th>Septiembre 2020</th>
                              <!--FECHA PAGO-->
                              <th>00/00/2020</th>
                              <!--MONTO PAGADO-->
                              <th>00.00</th>
                              <!--SALDO A PAGAR-->
                              <th>348.00</th>
                              <!--FORMA DE PAGO-->
                              <th>Contado</th>
                              <!--ESTADO DEL PAGO-->
                              <th id="state_garz7">NO Pagado</th>
                            </tr>
                            <tr>
                              <td>8</td>
                              <!--FECHA-->
                              <th>Octubre 2020</th>
                              <!--FECHA PAGO-->
                              <th>00/00/2020</th>
                              <!--MONTO PAGADO-->
                              <th>00.00</th>
                              <!--SALDO A PAGAR-->
                              <th>348.00</th>
                              <!--FORMA DE PAGO-->
                              <th>Contado</th>
                              <!--ESTADO DEL PAGO-->
                              <th id="state_garz8">NO Pagado</th>
                            </tr>
                            <tr>
                              <td>9</td>
                              <!--FECHA-->
                              <th>Noviembre 2020</th>
                              <!--FECHA PAGO-->
                              <th>00/00/2020</th>
                              <!--MONTO PAGADO-->
                              <th>00.00</th>
                              <!--SALDO A PAGAR-->
                              <th>00.00</th>
                              <!--FORMA DE PAGO-->
                              <th>Contado</th>
                              <!--ESTADO DEL PAGO-->
                              <th id="state_garz9">NO Pagado</th>
                            </tr>
                            <tr>
                              <td>10</td>
                              <!--FECHA-->
                              <th>Diciembre 2020</th>
                              <!--FECHA PAGO-->
                              <th>00/00/2020</th>
                              <!--MONTO PAGADO-->
                              <th>00.00</th>
                              <!--SALDO A PAGAR-->
                              <th>00.00</th>
                              <!--FORMA DE PAGO-->
                              <th>Contado</th>
                              <!--ESTADO DEL PAGO-->
                              <th id="state_garz10">NO Pagado</th>
                            </tr>
                            <tr>
                              <td>11</td>
                              <!--FECHA-->
                              <th>Enero 2021</th>
                              <!--FECHA PAGO-->
                              <th>00/00/2020</th>
                              <!--MONTO PAGADO-->
                              <th>00.00</th>
                              <!--SALDO A PAGAR-->
                              <th>00.00</th>
                              <!--FORMA DE PAGO-->
                              <th>Contado</th>
                              <!--ESTADO DEL PAGO-->
                              <th id="state_garz11">NO Pagado</th>
                            </tr>
                            <tr>
                              <td>12</td>
                              <!--FECHA-->
                              <th>Febrero 2021</th>
                              <!--FECHA PAGO-->
                              <th>00/00/2020</th>
                              <!--MONTO PAGADO-->
                              <th>00.00</th>
                              <!--SALDO A PAGAR-->
                              <th>00.00</th>
                              <!--FORMA DE PAGO-->
                              <th>Contado</th>
                              <!--ESTADO DEL PAGO-->
                              <th id="state_garz12">NO Pagado</th>
                            </tr>
                          </table>
                  </section>
                  <section id="basic_serv">
                      <h3 id="b_s">Detalles de pagos de servicios basicos (Luz y Agua)</h3>
                          <table border="1px" id="table2">
                            <tr>
                              <th>Nº</th>
                              <th>Del Mes</th>
                              <th>Fecha pago</th>
                              <th>Luz</th>
                              <th>Agua</th>
                              <th>Total Luz/Agua</th>
                              <th>Estado</th>

                            </tr>
                            <tr>
                              <td>1</td>
                              <!--FECHA-->
                              <th>Marzo 2020</th>
                              <!--FECHA PAGO-->
                              <th>14/08/2020</th>
                              <!--MONTO LUZ-->
                              <th>18.60</th>
                              <!--MONTO AGUA-->
                              <th>11.00</th>
                              <!--MONTO TOTAL-->
                              <th>29.6.00</th>
                              <!--ESTADO DEL PAGO-->
                              <th id="state_bs_garz1">Pagado</th>
                            </tr>
                            <tr>
                              <td>2</td>
                              <!--FECHA-->
                              <th>Abril 2020</th>
                              <!--FECHA PAGO-->
                              <th>00/00/2020</th>
                              <!--MONTO LUZ-->
                              <th>00.00</th>
                              <!--MONTO AGUA-->
                              <th>00.00</th>
                              <!--MONTO TOTAL-->
                              <th>00.00</th>
                              <!--ESTADO DEL PAGO-->
                              <th id="state_bs_garz2">Descuento</th>
                            </tr>
                            <tr>
                              <td>3</td>
                              <!--FECHA-->
                              <th>Mayo 2020</th>
                              <!--FECHA PAGO-->
                              <th>00/00/2020</th>
                              <!--MONTO LUZ-->
                              <th>00.00</th>
                              <!--MONTO AGUA-->
                              <th>00.00</th>
                              <!--MONTO TOTAL-->
                              <th>00.00</th>
                              <!--ESTADO DEL PAGO-->
                              <th id="state_bs_garz3">Descuento</th>
                            </tr>
                            <tr>
                              <td>4</td>
                              <!--FECHA-->
                              <th>Junio 2020</th>
                              <!--FECHA PAGO-->
                              <th>00/00/2020</th>
                              <!--MONTO LUZ-->
                              <th>00.00</th>
                              <!--MONTO AGUA-->
                              <th>00.00</th>
                              <!--MONTO TOTAL-->
                              <th>00.00</th>
                              <!--ESTADO DEL PAGO-->
                              <th id="state_bs_garz4">Descuento</th>
                            </tr>
                            <tr>
                              <td>5</td>
                              <!--FECHA-->
                              <th>Julio 2020</th>
                              <!--FECHA PAGO-->
                              <th>00/00/2020</th>
                              <!--MONTO LUZ-->
                              <th>13.40</th>
                              <!--MONTO AGUA-->
                              <th>5.00</th>
                              <!--MONTO TOTAL-->
                              <th>18.40</th>
                              <!--ESTADO DEL PAGO-->
                              <th id="state_bs_garz5">NO Pagado</th>
                            </tr>
                            <tr>
                              <td>6</td>
                              <!--FECHA-->
                              <th>Agosto 2020</th>
                              <!--FECHA PAGO-->
                              <th>00/00/2020</th>
                              <!--MONTO LUZ-->
                              <th>00.00</th>
                              <!--MONTO AGUA-->
                              <th>00.00</th>
                              <!--MONTO TOTAL-->
                              <th>00.00</th>
                              <!--ESTADO DEL PAGO-->
                              <th id="state_bs_garz6">NO Pagado</th>
                            </tr>
                            <tr>
                              <td>7</td>
                              <!--FECHA-->
                              <th>Septiembre 2020</th>
                              <!--FECHA PAGO-->
                              <th>00/00/2020</th>
                              <!--MONTO LUZ-->
                              <th>00.00</th>
                              <!--MONTO AGUA-->
                              <th>00.00</th>
                              <!--MONTO TOTAL-->
                              <th>00.00</th>
                              <!--ESTADO DEL PAGO-->
                              <th id="state_bs_garz7">NO Pagado</th>
                            </tr>
                            <tr>
                              <td>8</td>
                              <!--FECHA-->
                              <th>Octubre 2020</th>
                              <!--FECHA PAGO-->
                              <th>00/00/2020</th>
                              <!--MONTO LUZ-->
                              <th>00.00</th>
                              <!--MONTO AGUA-->
                              <th>00.00</th>
                              <!--MONTO TOTAL-->
                              <th>00.00</th>
                              <!--ESTADO DEL PAGO-->
                              <th id="state_bs_garz8">NO Pagado</th>
                            </tr>
                            <tr>
                              <td>9</td>
                              <!--FECHA-->
                              <th>Noviembre 2020</th>
                              <!--FECHA PAGO-->
                              <th>00/00/2020</th>
                              <!--MONTO LUZ-->
                              <th>00.00</th>
                              <!--MONTO AGUA-->
                              <th>00.00</th>
                              <!--MONTO TOTAL-->
                              <th>00.00</th>
                              <!--ESTADO DEL PAGO-->
                              <th id="state_bs_garz9">NO Pagado</th>
                            </tr>
                            <tr>
                              <td>10</td>
                              <!--FECHA-->
                              <th>Diciembre 2020</th>
                              <!--FECHA PAGO-->
                              <th>00/00/2020</th>
                              <!--MONTO LUZ-->
                              <th>00.00</th>
                              <!--MONTO AGUA-->
                              <th>00.00</th>
                              <!--MONTO TOTAL-->
                              <th>00.00</th>
                              <!--ESTADO DEL PAGO-->
                              <th id="state_bs_garz10">NO Pagado</th>
                            </tr>
                            <tr>
                              <td>11</td>
                              <!--FECHA-->
                              <th>Enero 2021</th>
                              <!--FECHA PAGO-->
                              <th>00/00/2020</th>
                              <!--MONTO LUZ-->
                              <th>00.00</th>
                              <!--MONTO AGUA-->
                              <th>00.00</th>
                              <!--MONTO TOTAL-->
                              <th>00.00</th>
                              <!--ESTADO DEL PAGO-->
                              <th id="state_bs_garz11">NO Pagado</th>
                            </tr>
                            <tr>
                              <td>12</td>
                              <!--FECHA-->
                              <th>Febrero 2021</th>
                              <!--FECHA PAGO-->
                              <th>00/00/2020</th>
                              <!--MONTO LUZ-->
                              <th>00.00</th>
                              <!--MONTO AGUA-->
                              <th>00.00</th>
                              <!--MONTO TOTAL-->
                              <th>00.00</th>
                              <!--ESTADO DEL PAGO-->
                              <th id="state_bs_garz12">NO Pagado</th>
                            </tr>
                          </table>
                  </section>
              </section>
          </section>
        </div>
        <footer>
          Copyright © 2020 KY Inc. Copyright Holder All Rights Reserved.
        </footer>
    </div>
</body>
</html>
