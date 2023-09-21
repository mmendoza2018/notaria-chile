<?php include 'head.php'; ?>

<body>

  <div class=" col-12 col-sm-12 col-md-6 col-lg-3" style="border: 5px solid #2e435b; background-color:#f1f5fd; border-radius:10px">
    <div class="container text-center" style="background-color:#cbe3ff;">
      <div class="row align-items-start" >
        <div class="col-3 p-2 mb-2 align-self-center">
          <img src="assets/img/reserva-notaria.png" alt="" width="150">
        </div>
        <div class="col-sm-9 p-3 align-self-center">
          <h2>Comprobante Reserva de Hora</h2>
        </div>
      </div>
    </div>
    <div>
      <h4>Estimado(a) usuario:</h4>
      <p>Ud ha Reservado una Hora en Notaria  <!-- <?php echo $nombrenot; ?> --></p>
      <h4>Detalle de su reserva:</h4>
      <ul>
        <li>Documento seleccionado:   <!--<?php echo $nombre  ?>--></li>
        <li>Fecha:   <!--<?php echo $fecha_formateada; ?>--> </li>
        <li>Hora:   <!--<?php echo $hora; ?>--></li>
      </ul>
      <h3>Datos del solicitante</h3>
      <ul>
        <li>Nombre solicitante:   <!--<?php echo $nombres  ?><?php echo $apellidop  ?><?php echo $apellidom  ?>--></li>
        <li>Rut:   <!--<?php echo $rut; ?>--> </li>
        <li>Telefono: +56   <!--<?php echo $telefono; ?>--></li>
        <li>Correo:   <!--<?php echo $email; ?>--></li>
      </ul>
    </div>
    <P style="text-align:center;  font-style: oblique">** La reserva de hora tendra un tope maximo de 15 minutos, luego de los cuales se anulará si cita **</P>
    <div class="text-center" style="background-color:#7ca4d4;" >
      <div class="row align-items-center">
        <div class="col-sm-8 mb-2 text-start"  style="margin-top:15px; margin-left:10px">
          <h6>Atentamente</h6>
          <h5 style="font-weight: bold;">ReservaNotaria</h5>
        </div>
        <div class="col-sm-3 align-self-center" >
          <img src="assets/img/Logo-Final-Gesnot.png" alt="" width="70">
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>