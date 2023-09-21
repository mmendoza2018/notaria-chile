<?php 

function plantillaRegistro ( $arrayData ) {
  $plantilla = '<body>
  <div class="container_general" style="width: 100%;">
    <div class="container" style="
    width: 100%;
    margin: 0 auto;
    justify-content: center;
    align-items: center;
    background-color: #f2f2f27f;">

      <div style="width: 100%; display: flex;">
        <div  style="background-color: #cbe3ff; width: 100%; padding: .4rem 0;">
        <h2 style="text-align: center;">Comprobante Reserva de Hora</h2>
        </div>
      </div>

      <div class="container_body" style="
      padding: .3rem; width:100%">
        <h3 style="text-align: center; margin: 5px;"> Estimado(a) usuario: </h3>
        <h4 style="text-align: center;">Ud ha Reservado una Hora en Notaria</h4>

        <h3 style="text-align: center;margin: 5px;">Detalle de su reserva:</h3>
        <div style="text-align: center;">
          <table style="margin: auto;">
            <tr>
              <td style="font-weight: bold;">* Documento:</td>
              <td>'.$arrayData["documento"].'</td>
            </tr>
            <tr>
              <td style="font-weight: bold;">* Fecha:</td>
              <td>'.$arrayData["fecha"].'</td>
            </tr>
            <tr>
              <td style="font-weight: bold;">* Hora:</td>
              <td>'.$arrayData["horario"].'</td>
            </tr>
          </table>
        </div>

        <h3 style="text-align: center;margin: 5px;"> Datos del solicitante</h3>
        <div style="text-align: center;">
          <table style="margin: auto;">
            <tr>
              <td style="font-weight: bold;">* Nombre solicitante:</td>
              <td>'.$arrayData["nombre"].'</td>
            </tr>
            <tr>
              <td style="font-weight: bold;">* Rut: </td>
              <td>'.$arrayData["rut"].'</td>
            </tr>
            <tr>
              <td style="font-weight: bold;">* Telefono: </td>
              <td>'.$arrayData["telefono"].'</td>
            </tr>
            <tr>
              <td style="font-weight: bold;">* Correo:</td>
              <td>'.$arrayData["correo"].'</td>
            </tr>
          </table>
        </div>

        <p style="text-align: center;">
        ** La reserva de hora tendra un tope maximo de 15 minutos, luego de los cuales se anulará si cita **
        </p>
        
        <div style="width: 100%; display: flex;">
        <div  style="background-color: #7ca4d4; width: 100%; padding: .3rem 0; display: flex; justify-content: space-between; align-items: center; padding: 0 1rem;">
        <div style="width: 50%; display:flex; justify-content:start">
          <h2 style="text-align: center;">Comprobante Reserva de Hora</h2>
        </div>

        <div style="width: 50%;display:flex; justify-content: right; text-align:right; margin-left:auto">
          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6f/Logo_of_Twitter.svg/2491px-Logo_of_Twitter.svg.png" width="50" style="text-align:right; margin-left:auto">
        </div>

        </div>
      </div>
      </div>
    </div>
  </div>
</body>';
return $plantilla;
}
