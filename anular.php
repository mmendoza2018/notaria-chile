<?php
include 'header.php';
?>

<body>
  <!-- ======= Header ======= -->
  <main id="main">
    <br><br>
    <section id="" class="d-flex align-items-center">
      <div class="col-lg-4 col-md-6 d-flex mt-4 margin-left mx-auto border shadow" data-aos="zoom-in" data-aos-delay="200" style=" border: solid 5px;">
        <div class="icon-box iconbox-red col-12" style="padding:15px 15px 15px 15px">

        <div class="text-center">
          <div class="center">
            <img src="assets/img/cancelar.png" alt="" width="50px">
          </div>
          <br>
          <h4>Anular Hora</h4>
          <h6>Accede con tu RUT y número de reserva</h6>
          <br>
        </div>
          <form id="formBuscarReserva" onsubmit="buscarReserva()">
            <div class="form-group">
              <label for="rut">RUT</label>  
              <input type="text" class="form-control" data-validate value="69785946-2" name="rut" id="inputRut" maxlength="12">
            </div>
            <div class="form-group">
              <label for="rut" style="text-align: left;">N° reserva</label>
              <input class="form-control" type="text" name="codigoReserva" data-validate style="margin-top:10px">
            </div>
            <br>
            <button type="submit" name="btn-valida-rut" id="btn-valida-rut" class="btn btn-danger">Buscar</button>
          </form>
        </div>
      </div>
      <br>
    </section>


    <!-- Modal -->
    <div class="modal fade" id="reservaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body">
            <div class="container_general" style="width: 100%;">
              <div class="container" style="
    width: 100%;
    margin: 0 auto;
    justify-content: center;
    align-items: center;
    background-color: #f2f2f27f;">

                <div style="width: 100%; display: flex;">
                  <div style="background-color: #cbe3ff; width: 100%; padding: .4rem 0;">
                    <h4 style="text-align: center;">Comprobante Reserva de Hora</h4>
                  </div>
                </div>

                <div class="" style="
      padding: .3rem; width:400px; margin: 10px auto; border: 2px solid blue;">
                  <h5 style="text-align: center; margin: 5px; font-weight: bold; margin: 7px 0;"> Estimado(a) usuario: </h5>
                  <h6 style="text-align: center;">Ud ha Reservado una Hora en Notaria</h6>
                  <div style="text-align:center">
                    <h5 style="margin-bottom:5px">N° Reserva</h5>
                    <div style="background-color:skyblue; text-transform: uppercase; width: 150px;padding:5px; font-size:16px;border-radius:20px; margin:auto;margin-bottom:8px" id="codigoAnularRe">
                      
                    </div>
                  </div>

                  <h5 style="text-align: center;margin: 5px; font-weight: bold; margin: 7px 0;">Detalle de su reserva:</h5>
                  <div style="text-align: center;">
                    <table style="margin: auto;width:100%"">
            <tr style=" text-align:left">
                      <td style="font-weight: bold;">* Documento:</td>
                      <td id="documentoAnularRe"></td>
                      </tr>
                      <tr style="text-align:left">
                        <td style="font-weight: bold;">* Fecha:</td>
                        <td id="fechaAnularRe"></td>
                      </tr>
                      <tr style="text-align:left">
                        <td style="font-weight: bold;">* Hora:</td>
                        <td id="horaAnularRe"></td>
                      </tr>
                    </table>
                  </div>

                  <h5 style="text-align: center;margin: 5px; font-weight: bold; margin: 7px 0;"> Datos del solicitante</h5>
                  <div style="text-align: center;">
                    <table style="margin: auto; width:100%">
                      <tr style="text-align:left">
                        <td style="font-weight: bold;">* Nombre solicitante:</td>
                        <td id="nombreAnularRe"></td>
                      </tr>
                      <tr style="text-align:left">
                        <td style="font-weight: bold;">* Rut: </td>
                        <td id="rutAnularRe"></td>
                      </tr>
                      <tr style="text-align:left">
                        <td style="font-weight: bold;">* Telefono: </td>
                        <td id="telefonoAnularRe"></td>
                      </tr>
                      <tr style="text-align:left">
                        <td style="font-weight: bold;">* Correo:</td>
                        <td id="correoAnularRe"></td>
                      </tr>
                    </table>
                  </div>

                  <p style="text-align: center; margin-top: 7px;">
                    ** La reserva de hora tendra un tope maximo de 15 minutos, luego de los cuales se anulará si cita **
                  </p>

                  <div style="width: 100%; display: flex;">
                    <div style="background-color: #7ca4d4; width: 100%; padding: .3rem 0; display: flex; justify-content: space-between; align-items: center; padding: 0 1rem;">
                      <div style="width: 50%; display:flex; justify-content:start">
                        <h5 style="text-align: center;">Comprobante Reserva de Hora</h3>
                      </div>

                      <div style="width: 50%;display:flex; justify-content: right; text-align:right; margin-left:auto">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6f/Logo_of_Twitter.svg/2491px-Logo_of_Twitter.svg.png" width="50" style="text-align:right; margin-left:auto">
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" id="btnAnular" class="btn btn-primary" onclick="anularReserva(this)" data-id_anular>Anular reserva</button>
          </div>
        </div>
      </div>
    </div>
    <!-- ======= Contact Section ======= -->
    <?php
    include 'contacto.php'
    ?>
    <!-- End Contact Section -->
    <!-- ======= Footer ======= -->
    <footer id="footer">

      <div class="container d-md-flex py-4">

        <div class="me-md-auto text-center text-md-start">
          <div class="copyright">
            &copy; Copyright <strong><span>GesNot</span></strong>. Todos los derechos reservados
          </div>
        </div>
        <div class="social-links text-center text-md-right pt-3 pt-md-0">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <script src="assets/js/main.js"></script>
</body>
<!-- Template Main JS File -->