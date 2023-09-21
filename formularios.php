<?php

// $formulario = $_GET['documento_seleccionado'];

switch ($nombre) {
  case 'Poder administración inmueble':
    echo '<br>

    <h4><b>Datos de quien da el poder</b></h4>
    <br><br>
    <div class="form-group col-md-6 ">
      <label for="name">Nombres</label>
      <input type="text" name="nompropietario" class="form-control" id="nompropietario"  required>
    </div>
    <div class="form-group col-md-6">
      <label for="name">RUT</label>
      <input type="text" class="form-control" name="rutpropietario" id="rutpropietario" required>
    </div>
    <div class="form-group col-md-6">
      <label for="name">Apellido Paterno</label>
      <input type="text" class="form-control" name="paternopropietario" id="paternopropietario"  required>
    </div>
    <div class="form-group col-md-6">
      <label for="name">Email</label>
      <input type="email" class="form-control" name="emailpropietario" id="emailpropietario" required>
    </div>
    <div class="form-group col-md-6">
      <label for="name">Apellido Materno</label>
      <input type="text" class="form-control" name="maternopropietario" id="maternopropietario" required>
    </div>
    <div class="form-group col-md-6">
      <label for="name">Teléfono</label>
      <input type="tel" class="form-control" name="fonopropietario" id="fonopropietario" required>
    </div>

    <br><br><br><br>

    <h4><b>Datos de quien recibirá el poder</b></h4>
    <br><br>
    <div class="form-group col-md-6 ">
      <label for="name">Nombres</label>
      <input type="text" name="nomcomprador" class="form-control" id="nomcomprador"  required>
    </div>
    <div class="form-group col-md-6">
    <label for="name">RUT</label>
    <input type="text" class="form-control" name="rutcomprador" id="rutcomprador" required>
     </div>
    <div class="form-group col-md-6">
      <label for="name">Apellido Paterno</label>
      <input type="text" class="form-control" name="paternocomprador" id="paternocomprador" required>
    </div>
    <div class="form-group col-md-6">
    <label for="name">Email</label>
    <input type="email" class="form-control" name="emailcomprador" id="emailcomprador" required>
    </div>
    <div class="form-group col-md-6">
      <label for="name">Apellido Materno</label>
      <input type="text" class="form-control" name="maternocomprador" id="maternocomprador"  required>
    </div>
    <div class="form-group col-md-6">
      <label for="name">Teléfono</label>
      <input type="tel" class="form-control" name="fonocomprador" id="fonocomprador" required>
    </div>
   
    <br><br><br><br>

            <br><h4><b>Direccion de la propiedad</b></h4>
              <br><br>
              <div class="form-group col-md-6">
          <label for="name">Dirección</label>
          <input type="text" class="form-control" name="direccpropiedad" id="direccpropiedad" required>
        </div>
        <div class="form-group col-md-6">
          <label for="name">Comuna</label>
          <input id="comunapropiedad" type="text" class="form-control" name="comunapropiedad"  required>
        </div>
        <br><br><br><br>';
    break;
  case 'Poder bancario simple - Persona Natural':
    echo '<br>
  
        <h4><b>Datos de quien da el poder</b></h4>
        <br><br>
        <div class="form-group col-md-6 ">
          <label for="name">Nombres</label>
          <input type="text" name="nompropietario" class="form-control" id="nompropietario"  required>
        </div>
        <div class="form-group col-md-6">
          <label for="name">RUT</label>
          <input type="text" class="form-control" name="rutpropietario" id="rutpropietario" required>
        </div>
        <div class="form-group col-md-6">
          <label for="name">Apellido Paterno</label>
          <input type="text" class="form-control" name="paternopropietario" id="paternopropietario"  required>
        </div>
        <div class="form-group col-md-6">
          <label for="name">Email</label>
          <input type="email" class="form-control" name="emailpropietario" id="emailpropietario" required>
        </div>
        <div class="form-group col-md-6">
          <label for="name">Apellido Materno</label>
          <input type="text" class="form-control" name="maternopropietario" id="maternopropietario" required>
        </div>
        <div class="form-group col-md-6">
          <label for="name">Teléfono</label>
          <input type="tel" class="form-control" name="fonopropietario" id="fonopropietario" required>
        </div>
  
        <br><br><br><br>
  
        <h4><b>Datos de quien recibirá el poder</b></h4>
        <br><br>
        <div class="form-group col-md-6 ">
          <label for="name">Nombres</label>
          <input type="text" name="nomcomprador" class="form-control" id="nomcomprador"  required>
        </div>
        <div class="form-group col-md-6">
        <label for="name">RUT</label>
        <input type="text" class="form-control" name="rutcomprador" id="rutcomprador" required>
         </div>
        <div class="form-group col-md-6">
          <label for="name">Apellido Paterno</label>
          <input type="text" class="form-control" name="paternocomprador" id="paternocomprador" required>
        </div>
        <div class="form-group col-md-6">
        <label for="name">Email</label>
        <input type="email" class="form-control" name="emailcomprador" id="emailcomprador" required>
        </div>
        <div class="form-group col-md-6">
          <label for="name">Apellido Materno</label>
          <input type="text" class="form-control" name="maternocomprador" id="maternocomprador"  required>
        </div>
        <div class="form-group col-md-6">
          <label for="name">Teléfono</label>
          <input type="tel" class="form-control" name="fonocomprador" id="fonocomprador" required>
        </div>
  
        <br><br><br><br>';
    break;
  case 'Poder especial SII - Persona Natural':
    echo '<br>
    
          <h4><b>Datos de quien da el poder</b></h4>
          <br><br>
          <div class="form-group col-md-6 ">
            <label for="name">Nombres</label>
            <input type="text" name="nompropietario" class="form-control" id="nompropietario"  required>
          </div>
          <div class="form-group col-md-6">
            <label for="name">RUT</label>
            <input type="text" class="form-control" name="rutpropietario" id="rutpropietario" required>
          </div>
          <div class="form-group col-md-6">
            <label for="name">Apellido Paterno</label>
            <input type="text" class="form-control" name="paternopropietario" id="paternopropietario"  required>
          </div>
          <div class="form-group col-md-6">
            <label for="name">Email</label>
            <input type="email" class="form-control" name="emailpropietario" id="emailpropietario" required>
          </div>
          <div class="form-group col-md-6">
            <label for="name">Apellido Materno</label>
            <input type="text" class="form-control" name="maternopropietario" id="maternopropietario" required>
          </div>
          <div class="form-group col-md-6">
            <label for="name">Teléfono</label>
            <input type="tel" class="form-control" name="fonopropietario" id="fonopropietario" required>
          </div>
    
          <br><br><br><br>
    
          <h4><b>Datos de quien recibirá el poder</b></h4>
          <br><br>
          <div class="form-group col-md-6 ">
            <label for="name">Nombres</label>
            <input type="text" name="nomcomprador" class="form-control" id="nomcomprador"  required>
          </div>
          <div class="form-group col-md-6">
          <label for="name">RUT</label>
          <input type="text" class="form-control" name="rutcomprador" id="rutcomprador" required>
           </div>
          <div class="form-group col-md-6">
            <label for="name">Apellido Paterno</label>
            <input type="text" class="form-control" name="paternocomprador" id="paternocomprador" required>
          </div>
          <div class="form-group col-md-6">
          <label for="name">Email</label>
          <input type="email" class="form-control" name="emailcomprador" id="emailcomprador" required>
          </div>
          <div class="form-group col-md-6">
            <label for="name">Apellido Materno</label>
            <input type="text" class="form-control" name="maternocomprador" id="maternocomprador"  required>
          </div>
          <div class="form-group col-md-6">
            <label for="name">Teléfono</label>
            <input type="tel" class="form-control" name="fonocomprador" id="fonocomprador" required>
          </div>
    
          <br><br><br><br>';
    break;
  case 'Poder especial SII - Persona Jurídica':
    echo '<br>
      
            <h4><b>Datos de quien da el poder</b></h4>
            <br><br>
            <div class="form-group col-md-6 ">
              <label for="name">Nombres</label>
              <input type="text" name="nompropietario" class="form-control" id="nompropietario"  required>
            </div>
            <div class="form-group col-md-6">
              <label for="name">RUT</label>
              <input type="text" class="form-control" name="rutpropietario" id="rutpropietario" required>
            </div>
            <div class="form-group col-md-6">
              <label for="name">Apellido Paterno</label>
              <input type="text" class="form-control" name="paternopropietario" id="paternopropietario"  required>
            </div>
            <div class="form-group col-md-6">
              <label for="name">Email</label>
              <input type="email" class="form-control" name="emailpropietario" id="emailpropietario" required>
            </div>
            <div class="form-group col-md-6">
              <label for="name">Apellido Materno</label>
              <input type="text" class="form-control" name="maternopropietario" id="maternopropietario" required>
            </div>
            <div class="form-group col-md-6">
              <label for="name">Teléfono</label>
              <input type="tel" class="form-control" name="fonopropietario" id="fonopropietario" required>
            </div>
      
            <br><br><br><br>
      
            <h4><b>Datos de quien recibirá el poder</b></h4>
            <br><br>
            <div class="form-group col-md-6 ">
              <label for="name">Nombres</label>
              <input type="text" name="nomcomprador" class="form-control" id="nomcomprador"  required>
            </div>
            <div class="form-group col-md-6">
            <label for="name">RUT</label>
            <input type="text" class="form-control" name="rutcomprador" id="rutcomprador" required>
             </div>
            <div class="form-group col-md-6">
              <label for="name">Apellido Paterno</label>
              <input type="text" class="form-control" name="paternocomprador" id="paternocomprador" required>
            </div>
            <div class="form-group col-md-6">
            <label for="name">Email</label>
            <input type="email" class="form-control" name="emailcomprador" id="emailcomprador" required>
            </div>
            <div class="form-group col-md-6">
              <label for="name">Apellido Materno</label>
              <input type="text" class="form-control" name="maternocomprador" id="maternocomprador"  required>
            </div>
            <div class="form-group col-md-6">
              <label for="name">Teléfono</label>
              <input type="tel" class="form-control" name="fonocomprador" id="fonocomprador" required>
            </div>
      
            <br><br><br><br>';
    break;
  case 'Compraventa de Vehículo':
    echo '<br><h4><b>Datos del Vehiculos</b></h4>
        <br><br>
        <div class="form-group col-md-6 ">
          <label for="name">Vehiculo</label>
          <input type="text" name="vehiculo" placeholder="Ej: Auto/Camioneta/Moto" class="form-control" id="vehiculo"  required>
        </div>
        <div class="form-group col-md-6">
          <label for="name">Marca</label>
          <input type="text" class="form-control" placeholder="Ej: Nissan/Chevrolet" name="marca" id="marca"  required>
        </div>
        <div class="form-group col-md-6">
          <label for="name">Año</label>
          <input type="text" class="form-control" placeholder="Ej: 2015" name="year" id="year" required>
        </div>
        <div class="form-group col-md-6">
          <label for="name">Modelo</label>
          <input type="text" class="form-control" placeholder="Ej: Sentra/Sail" name="modelo" id="modelo" required>
        </div>
        <div class="form-group col-md-6">
          <label for="name">Color</label>
          <input type="text" class="form-control" placeholder="Ej: Rojo/Blanco" name="color" id="color" required>
        </div>
        <div class="form-group col-md-6">
          <label for="name">N° Motor</label>
          <input type="text" class="form-control" id="motor" placeholder="Ej: 987654321" name="motor" required>
        </div>
        <div class="form-group col-md-6">
          <label for="name">N° Chasis</label>
          <input type="text" class="form-control" placeholder="Ej: 1N4M3R0D7C6" name="chasis" id="chasis" required>
        </div>
        <div class="form-group col-md-6">
          <label for="name">Patente</label>
          <input type="text" class="form-control" placeholder="Ej: ZY-XW-99" name="patente" id="patente" required>
        </div>
        <div class="form-group col-md-6">
          <label for="name">El precio de venta es de</label>
          <input type="number" id="precio" placeholder="Ej: 2500000" class="form-control" name="precio" required>
        </div>
        <div class="form-group col-md-6">
          <label for="name">La tasación fiscal es de</label>
          <input type="number" id="tasacion" placeholder="Ej: 2500000" class="form-control" name="tasacion" required>
        </div>
        <br><br><br><br>

        <h4><b>Propietario del Vehículo</b></h4>
        <br><br>
        <div class="form-group col-md-6 ">
          <label for="name">Nombres</label>
          <input type="text" name="nompropietario" class="form-control" id="nompropietario"  required>
        </div>
        <div class="form-group col-md-6">
          <label for="name">Apellido Paterno</label>
          <input type="text" class="form-control" name="paternopropietario" id="paternopropietario"  required>
        </div>
        <div class="form-group col-md-6">
          <label for="name">Apellido Materno</label>
          <input type="text" class="form-control" name="maternopropietario" id="maternopropietario" required>
        </div>
        <div class="form-group col-md-6">
          <label for="name">RUT</label>
          <input type="text" class="form-control" name="rutpropietario" id="rutpropietario" required>
        </div>
        <div class="form-group col-md-6">
          <label for="name">Email</label>
          <input type="email" class="form-control" name="emailpropietario" id="emailpropietario" required>
        </div>
        <div class="form-group col-md-6">
          <label for="name">Teléfono</label>
          <input type="tel" class="form-control" name="fonopropietario" id="fonopropietario" required>
        </div>
        <div class="form-group col-md-6">
          <label for="name">Dirección</label>
          <input type="text" class="form-control" placeholder="Ej: Callejón Putagan N°2, Comuna de Villa Alegre, Región del Maule" name="direcpropietario" id="direcpropietario" required>
        </div>

        <br><br><br><br>

        <h4><b>Comprador del Vehículo</b></h4>
        <br><br>
        <div class="form-group col-md-6 ">
          <label for="name">Nombres</label>
          <input type="text" name="nomcomprador" class="form-control" id="nomcomprador"  required>
        </div>
        <div class="form-group col-md-6">
          <label for="name">Apellido Paterno</label>
          <input type="text" class="form-control" name="paternocomprador" id="paternocomprador" required>
        </div>
        <div class="form-group col-md-6">
        <label for="name">Apellido Materno</label>
        <input type="text" class="form-control" name="maternocomprador" id="maternocomprador"  required>
         </div>
        <div class="form-group col-md-6">
          <label for="name">RUT</label>
          <input type="text" class="form-control" name="rutcomprador" id="rutcomprador" required>
        </div>
        <div class="form-group col-md-6">
        <label for="name">Email</label>
        <input type="email" class="form-control" name="emailcomprador" id="emailcomprador" required>
        </div>
        <div class="form-group col-md-6">
          <label for="name">Teléfono</label>
          <input type="tel" class="form-control" name="fonocomprador" id="fonocomprador" required>
        </div>
        <div class="form-group col-md-6">
          <label for="name">Dirección</label>
          <input type="text" class="form-control" placeholder="Ej: Pasaje Uno N°7645, Comuna de Peñalolen, Región Metropolitana" name="direccomprador" id="direccomprador" required>
        </div>

        <br><br><br><br>';
    break;
  case 'Carta Poder - Vehículo':
    echo '<br>

      <h4><b>Datos de quien da el poder</b></h4>
      <br><br>
      <div class="form-group col-md-6 ">
        <label for="name">Nombres</label>
        <input type="text" name="nompropietario" class="form-control" id="nompropietario"  required>
      </div>
      <div class="form-group col-md-6">
        <label for="name">RUT</label>
        <input type="text" class="form-control" name="rutpropietario" id="rutpropietario" required>
      </div>
      <div class="form-group col-md-6">
        <label for="name">Apellido Paterno</label>
        <input type="text" class="form-control" name="paternopropietario" id="paternopropietario"  required>
      </div>
      <div class="form-group col-md-6">
        <label for="name">Email</label>
        <input type="email" class="form-control" name="emailpropietario" id="emailpropietario" required>
      </div>
      <div class="form-group col-md-6">
        <label for="name">Apellido Materno</label>
        <input type="text" class="form-control" name="maternopropietario" id="maternopropietario" required>
      </div>
      <div class="form-group col-md-6">
        <label for="name">Teléfono</label>
        <input type="tel" class="form-control" name="fonopropietario" id="fonopropietario" required>
      </div>

      <br><br><br><br>

      <h4><b>Datos de quien recibirá el poder</b></h4>
      <br><br>
      <div class="form-group col-md-6 ">
        <label for="name">Nombres</label>
        <input type="text" name="nomcomprador" class="form-control" id="nomcomprador"  required>
      </div>
      <div class="form-group col-md-6">
      <label for="name">RUT</label>
      <input type="text" class="form-control" name="rutcomprador" id="rutcomprador" required>
       </div>
      <div class="form-group col-md-6">
        <label for="name">Apellido Paterno</label>
        <input type="text" class="form-control" name="paternocomprador" id="paternocomprador" required>
      </div>
      <div class="form-group col-md-6">
      <label for="name">Email</label>
      <input type="email" class="form-control" name="emailcomprador" id="emailcomprador" required>
      </div>
      <div class="form-group col-md-6">
        <label for="name">Apellido Materno</label>
        <input type="text" class="form-control" name="maternocomprador" id="maternocomprador"  required>
      </div>
      <div class="form-group col-md-6">
        <label for="name">Teléfono</label>
        <input type="tel" class="form-control" name="fonocomprador" id="fonocomprador" required>
      </div>

      <br><br><br><br>';
    break;
  case 'Carta Poder - Alterar Vehículo':
    echo '<br>

      <h4><b>Datos de quien da el poder</b></h4>
      <br><br>
      <div class="form-group col-md-6 ">
        <label for="name">Nombres</label>
        <input type="text" name="nompropietario" class="form-control" id="nompropietario"  required>
      </div>
      <div class="form-group col-md-6">
        <label for="name">RUT</label>
        <input type="text" class="form-control" name="rutpropietario" id="rutpropietario" required>
      </div>
      <div class="form-group col-md-6">
        <label for="name">Apellido Paterno</label>
        <input type="text" class="form-control" name="paternopropietario" id="paternopropietario"  required>
      </div>
      <div class="form-group col-md-6">
        <label for="name">Email</label>
        <input type="email" class="form-control" name="emailpropietario" id="emailpropietario" required>
      </div>
      <div class="form-group col-md-6">
        <label for="name">Apellido Materno</label>
        <input type="text" class="form-control" name="maternopropietario" id="maternopropietario" required>
      </div>
      <div class="form-group col-md-6">
        <label for="name">Teléfono</label>
        <input type="tel" class="form-control" name="fonopropietario" id="fonopropietario" required>
      </div>

      <br><br><br><br>

      <h4><b>Datos de quien recibirá el poder</b></h4>
      <br><br>
      <div class="form-group col-md-6 ">
        <label for="name">Nombres</label>
        <input type="text" name="nomcomprador" class="form-control" id="nomcomprador"  required>
      </div>
      <div class="form-group col-md-6">
      <label for="name">RUT</label>
      <input type="text" class="form-control" name="rutcomprador" id="rutcomprador" required>
       </div>
      <div class="form-group col-md-6">
        <label for="name">Apellido Paterno</label>
        <input type="text" class="form-control" name="paternocomprador" id="paternocomprador" required>
      </div>
      <div class="form-group col-md-6">
      <label for="name">Email</label>
      <input type="email" class="form-control" name="emailcomprador" id="emailcomprador" required>
      </div>
      <div class="form-group col-md-6">
        <label for="name">Apellido Materno</label>
        <input type="text" class="form-control" name="maternocomprador" id="maternocomprador"  required>
      </div>
      <div class="form-group col-md-6">
        <label for="name">Teléfono</label>
        <input type="tel" class="form-control" name="fonocomprador" id="fonocomprador" required>
      </div>
     
      <br><br><br><br>

      <br><h4><b>Datos del Vehículo</b></h4>
        <br><br>
        <div class="form-group col-md-6 ">
          <label for="name">Tipo de Vehículo</label>
          <input type="text" name="vehiculo" placeholder="Ej: Auto/Camioneta/Moto" class="form-control" id="vehiculo"  required>
        </div>
        <div class="form-group col-md-6">
          <label for="name">Marca</label>
          <input type="text" class="form-control" placeholder="Ej: Nissan/Chevrolet" name="marca" id="marca"  required>
        </div>
        <div class="form-group col-md-6">
          <label for="name">Año</label>
          <input type="text" class="form-control" placeholder="Ej: 2015" name="year" id="year" required>
        </div>
        <div class="form-group col-md-6">
          <label for="name">Modelo</label>
          <input type="text" class="form-control" placeholder="Ej: Sentra/Sail" name="modelo" id="modelo" required>
        </div>
        <div class="form-group col-md-6">
          <label for="name">Color</label>
          <input type="text" class="form-control" placeholder="Ej: Rojo/Blanco" name="color" id="color" required>
        </div>
        <div class="form-group col-md-6">
          <label for="name">Patente</label>
          <input type="text" class="form-control" placeholder="Ej: ZY-XW-99" name="patente" id="patente" required>
        </div>
        <div class="form-group col-md-6">
          <label for="name">N° Motor</label>
          <input type="text" class="form-control" id="motor" placeholder="Ej: 987654321" name="motor" required>
        </div>
        <div class="form-group col-md-6">
          <label for="name">N° Chasis</label>
          <input type="text" class="form-control" placeholder="Ej: 1N4M3R0D7C6" name="chasis" id="chasis" required>
        </div>
        
        <br><br><br><br>';
    break;
  case 'Carta Poder - Placas de Vehículo':
    echo '<br>
      
            <h4><b>Datos de quien da el poder</b></h4>
            <br><br>
            <div class="form-group col-md-6 ">
              <label for="name">Nombres</label>
              <input type="text" name="nompropietario" class="form-control" id="nompropietario"  required>
            </div>
            <div class="form-group col-md-6">
              <label for="name">RUT</label>
              <input type="text" class="form-control" name="rutpropietario" id="rutpropietario" required>
            </div>
            <div class="form-group col-md-6">
              <label for="name">Apellido Paterno</label>
              <input type="text" class="form-control" name="paternopropietario" id="paternopropietario"  required>
            </div>
            <div class="form-group col-md-6">
              <label for="name">Email</label>
              <input type="email" class="form-control" name="emailpropietario" id="emailpropietario" required>
            </div>
            <div class="form-group col-md-6">
              <label for="name">Apellido Materno</label>
              <input type="text" class="form-control" name="maternopropietario" id="maternopropietario" required>
            </div>
            <div class="form-group col-md-6">
              <label for="name">Teléfono</label>
              <input type="tel" class="form-control" name="fonopropietario" id="fonopropietario" required>
            </div>

            <br><br><br><br>

            <h4><b>Datos de quien recibirá el poder</b></h4>
            <br><br>
            <div class="form-group col-md-6 ">
              <label for="name">Nombres</label>
              <input type="text" name="nomcomprador" class="form-control" id="nomcomprador"  required>
            </div>
            <div class="form-group col-md-6">
            <label for="name">RUT</label>
            <input type="text" class="form-control" name="rutcomprador" id="rutcomprador" required>
             </div>
            <div class="form-group col-md-6">
              <label for="name">Apellido Paterno</label>
              <input type="text" class="form-control" name="paternocomprador" id="paternocomprador" required>
            </div>
            <div class="form-group col-md-6">
            <label for="name">Email</label>
            <input type="email" class="form-control" name="emailcomprador" id="emailcomprador" required>
            </div>
            <div class="form-group col-md-6">
              <label for="name">Apellido Materno</label>
              <input type="text" class="form-control" name="maternocomprador" id="maternocomprador"  required>
            </div>
            <div class="form-group col-md-6">
              <label for="name">Teléfono</label>
              <input type="tel" class="form-control" name="fonocomprador" id="fonocomprador" required>
            </div>

            <br><br><br><br>
            <br><h4><b>Datos del Vehículo</b></h4>
              <br><br>
              <div class="form-group col-md-6 ">
                <label for="name">Tipo de Vehículo</label>
                <input type="text" name="vehiculo" placeholder="Ej: Auto/Camioneta/Moto" class="form-control" id="vehiculo"  required>
              </div>
              <div class="form-group col-md-6">
          <label for="name">Patente</label>
          <input type="text" class="form-control" placeholder="Ej: ZY-XW-99" name="patente" id="patente" required>
        </div>
        <br><br><br><br>';
    break;
  case 'Carta Poder - Retirar Vehículo':
    echo '<br>
  
        <h4><b>Datos de quien da el poder</b></h4>
        <br><br>
        <div class="form-group col-md-6 ">
          <label for="name">Nombres</label>
          <input type="text" name="nompropietario" class="form-control" id="nompropietario"  required>
        </div>
        <div class="form-group col-md-6">
          <label for="name">RUT</label>
          <input type="text" class="form-control" name="rutpropietario" id="rutpropietario" required>
        </div>
        <div class="form-group col-md-6">
          <label for="name">Apellido Paterno</label>
          <input type="text" class="form-control" name="paternopropietario" id="paternopropietario"  required>
        </div>
        <div class="form-group col-md-6">
          <label for="name">Email</label>
          <input type="email" class="form-control" name="emailpropietario" id="emailpropietario" required>
        </div>
        <div class="form-group col-md-6">
          <label for="name">Apellido Materno</label>
          <input type="text" class="form-control" name="maternopropietario" id="maternopropietario" required>
        </div>
        <div class="form-group col-md-6">
          <label for="name">Teléfono</label>
          <input type="tel" class="form-control" name="fonopropietario" id="fonopropietario" required>
        </div>

        <br><br><br><br>

        <h4><b>Datos de quien recibirá el poder</b></h4>
        <br><br>
        <div class="form-group col-md-6 ">
          <label for="name">Nombres</label>
          <input type="text" name="nomcomprador" class="form-control" id="nomcomprador"  required>
        </div>
        <div class="form-group col-md-6">
        <label for="name">RUT</label>
        <input type="text" class="form-control" name="rutcomprador" id="rutcomprador" required>
         </div>
        <div class="form-group col-md-6">
          <label for="name">Apellido Paterno</label>
          <input type="text" class="form-control" name="paternocomprador" id="paternocomprador" required>
        </div>
        <div class="form-group col-md-6">
        <label for="name">Email</label>
        <input type="email" class="form-control" name="emailcomprador" id="emailcomprador" required>
        </div>
        <div class="form-group col-md-6">
          <label for="name">Apellido Materno</label>
          <input type="text" class="form-control" name="maternocomprador" id="maternocomprador"  required>
        </div>
        <div class="form-group col-md-6">
          <label for="name">Teléfono</label>
          <input type="tel" class="form-control" name="fonocomprador" id="fonocomprador" required>
        </div>
        <div class="form-group col-md-6">
          <label for="name">Dirección</label>
          <input type="text" class="form-control" name="direccomprador" id="direccomprador" required>
        </div>

        <br><br><br><br>
        <h4><b>Datos del Vehículo</b></h4>
          <br><br>
          <div class="form-group col-md-6 ">
            <label for="name">Tipo de Vehículo</label>
            <input type="text" name="vehiculo" placeholder="Ej: Auto/Camioneta/Moto" class="form-control" id="vehiculo"  required>
          </div>
          <div class="form-group col-md-6">
            <label for="name">Marca</label>
            <input type="text" class="form-control" placeholder="Ej: Nissan/Chevrolet" name="marca" id="marca"  required>
          </div>
          <div class="form-group col-md-6">
            <label for="name">Año</label>
            <input type="text" class="form-control" placeholder="Ej: 2015" name="year" id="year" required>
          </div>
          <div class="form-group col-md-6">
            <label for="name">Modelo</label>
            <input type="text" class="form-control" placeholder="Ej: Sentra/Sail" name="modelo" id="modelo" required>
          </div>
          <div class="form-group col-md-6">
            <label for="name">Color</label>
            <input type="text" class="form-control" placeholder="Ej: Rojo/Blanco" name="color" id="color" required>
          </div>
          <div class="form-group col-md-6">
            <label for="name">Patente</label>
            <input type="text" class="form-control" placeholder="Ej: ZY-XW-99" name="patente" id="patente" required>
          </div>
          <div class="form-group col-md-6">
            <label for="name">N° Motor</label>
            <input type="text" class="form-control" id="motor" placeholder="Ej: 987654321" name="motor" required>
          </div>
          <div class="form-group col-md-6">
            <label for="name">N° Chasis</label>
            <input type="text" class="form-control" placeholder="Ej: 1N4M3R0D7C6" name="chasis" id="chasis" required>
          </div>
          
          <br><br><br><br>

            <h4><b>Lugar donde se encuentra el vehículo</b></h4>
              <br><br>
              <div class="form-group col-md-6">
          <label for="name">Dirección</label>
          <input type="text" class="form-control" name="direccionvehiculo" id="direccionvehiculo" required>
        </div>
        <div class="form-group col-md-6">
          <label for="name">Comuna</label>
          <input id="comunavehiculo" type="text" class="form-control" name="comunavehiculo"  required>
        </div>
        <br><br><br><br>';
    break;
  case 'Declaración Jurada - Carro de Arrastre':
    echo '<br>
  
      <br><h4><b>Datos del Carro de Arrastre</b></h4>
      <br><br>
      <div class="form-group col-md-6 ">
        <label for="name">Tipo de Vehículo</label>
        <input type="text" name="carro" placeholder="Ej: Carro de Arrastre" class="form-control" id="carro"  required>
      </div>
      <div class="form-group col-md-6">
        <label for="name">Marca</label>
        <input type="text" class="form-control" placeholder="Ej: Marca, HECHIZO" name="marca" id="marca">
      </div>
      <div class="form-group col-md-6">
        <label for="name">Año</label>
        <input type="text" class="form-control" placeholder="Ej: 2015" name="year" id="year" required>
      </div>
      <div class="form-group col-md-6">
        <label for="name">Modelo</label>
        <input type="text" class="form-control" placeholder="Ej: Modelo, HECHIZO" name="modelo" id="modelo">
      </div>
      <div class="form-group col-md-6">
        <label for="name">Color</label>
        <input type="text" class="form-control" placeholder="Ej: Rojo/Blanco" name="color" id="color" required>
      </div>
      <div class="form-group col-md-6">
        <label for="name">Patente</label>
        <input type="text" class="form-control" placeholder="Ej: ZY-XW-99" name="patente" id="patente">
      </div>
        <br><br><br><br>';
    break;
  case 'Declaración jurada - Cesantía':
    echo '<br>
    
        <br><h4><b>Fecha de término de contrato </b></h4>
        <br><br>
        <div class="form-group col-md-6 ">
          <label for="name">Cesante desde</label>
          <input type="date" name="fechacesa" class="form-control" id="fechacesa"  required>
        </div>
          <br><br><br><br>';
    break;
  case 'Declaración Jurada - Extravío licencia de conducir':
    echo '<br>
      
          <h4><b>Datos de la licencia </b></h4>
          <br><br>
          <div class="form-group col-md-6">
        <label for="name">Clase de licencia </label>
        <input type="text" class="form-control" placeholder="Ej: A1,A2,B,C" name="clase" id="clase" required>
      </div>
      <div class="form-group col-md-6">
        <label for="name">Municipalidad que otorgó licencia </label>
        <input type="text" class="form-control" placeholder="Ej: Las Condes, Peñalolen" name="municipalidad" id="municipalidad" required>
      </div>
            <br><br><br><br>';
    break;
  case 'Declaración Jurada - Expensas':
    echo '<br>
                
                      <h4><b>Datos de quien da expensas</b></h4>
                      <br><br>
                      <div class="form-group col-md-6 ">
                        <label for="name">Nombres</label>
                        <input type="text" name="nompropietario" class="form-control" id="nompropietario"  required>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="name">RUT</label>
                        <input type="text" class="form-control" name="rutpropietario" id="rutpropietario" required>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="name">Apellido Paterno</label>
                        <input type="text" class="form-control" name="paternopropietario" id="paternopropietario"  required>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="name">Email</label>
                        <input type="email" class="form-control" name="emailpropietario" id="emailpropietario" required>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="name">Apellido Materno</label>
                        <input type="text" class="form-control" name="maternopropietario" id="maternopropietario" required>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="name">Teléfono</label>
                        <input type="tel" class="form-control" name="fonopropietario" id="fonopropietario" required>
                      </div>
          
                      <br><br><br><br>
          
                      <h4><b>Datos de quien recibe expensas</b></h4>
                      <br><br>
                      <div class="form-group col-md-6 ">
                        <label for="name">Nombres</label>
                        <input type="text" name="nomcomprador" class="form-control" id="nomcomprador"  required>
                      </div>
                      <div class="form-group col-md-6">
                      <label for="name">RUT</label>
                      <input type="text" class="form-control" name="rutcomprador" id="rutcomprador" required>
                       </div>
                      <div class="form-group col-md-6">
                        <label for="name">Apellido Paterno</label>
                        <input type="text" class="form-control" name="paternocomprador" id="paternocomprador" required>
                      </div>
                      <div class="form-group col-md-6">
                      <label for="name">Email</label>
                      <input type="email" class="form-control" name="emailcomprador" id="emailcomprador" required>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="name">Apellido Materno</label>
                        <input type="text" class="form-control" name="maternocomprador" id="maternocomprador"  required>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="name">Teléfono</label>
                        <input type="tel" class="form-control" name="fonocomprador" id="fonocomprador" required>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="name">Parentesco</label>
                        <input type="text" class="form-control" name="parentesco" placeholder="Ej: Madre, Padre, hijo" id="parentesco"  required>
                      </div>
                      
          
                      <br><br><br><br>';
    break;
  case 'Declaración Jurada - Ingresos':
    echo '<br>
          
              <h4><b>Datos de ingresos</b></h4>
              <br><br>
              <div class="form-group col-md-6">
            <label for="name">Ingreso mensual aproximado </label>
            <input type="number" class="form-control" placeholder="Ej: 550620" name="ingresos" id="ingresos" required>
          </div>
          <div class="form-group col-md-6">
            <label for="name">Ingreso mensual aproximado (escrito)</label>
            <input type="text" class="form-control" placeholder="Ej: Quinientos cincuenta mil seiscientos veinte " name="ingresoescrito" id="ingresoescrito" required>
          </div>
          <div class="form-group col-md-6">
            <label for="name">Trabajando en</label>
            <input type="text" class="form-control" placeholder="Ej: ventas, aseo, cocina" name="trabajando" id="trabajando" required>
          </div>
                <br><br><br><br>';
    break;
    case 'Declaración Jurada - Redacción propia Persona Natural':
      echo '<br>
                  <h4><b>Redacción propia</b></h4>
                  <br><br>
              <div class="form group col-md-6">
                <label for="name">Vengo a declarar bajo juramento</label>
                <textarea id="declaro" name="declaro" class="form-control" aria-label="With textarea">Que, </textarea>
              </div>
  <br><br><br><br>';
      break;
    case 'Declaración Jurada - Redacción propia Persona Jurídica':
      echo '<br>
                    <h4><b>Datos de la Persona Jurídica</b></h4>
                    <br><br>
                    <div class="form-group col-md-6">
              <label for="name">Nombre de la organización</label>
              <input type="text" class="form-control"  name="organizacion" id="organizacion" required>
            </div>
            <div class="form-group col-md-6">
              <label for="name">Dirección de la entidad</label>
              <input type="text" class="form-control" name="direccempresa" id="direccempresa" required>
            </div>
            <div class="form group col-md-6">
                  <label for="name">Vengo a declarar bajo juramento</label>
                  <textarea id="declaro" name="declaro" class="form-control" aria-label="With textarea">Que, </textarea>
                </div>
            <div class="form-group col-md-6">
              <label for="name">Rut de la entidad</label>
              <input type="text" class="form-control"  name="rutentidad" id="rutentidad" required>
            </div>
                
    <br><br><br><br>';
      break;
  case 'Declaración jurada de soltería CON testigos':
    echo '<br>
          
      <h4><b>Datos de quien declara</b></h4>
      <br><br>
      <div class="form-group col-md-6 ">
        <label for="name">Nombres</label>
        <input type="text" name="nompropietario" class="form-control" id="nompropietario"  required>
      </div>
      <div class="form-group col-md-6">
        <label for="name">RUT</label>
        <input type="text" class="form-control" name="rutpropietario" id="rutpropietario" required>
      </div>
      <div class="form-group col-md-6">
        <label for="name">Apellido Paterno</label>
        <input type="text" class="form-control" name="paternopropietario" id="paternopropietario"  required>
      </div>
      <div class="form-group col-md-6">
        <label for="name">Email</label>
        <input type="email" class="form-control" name="emailpropietario" id="emailpropietario" required>
      </div>
      <div class="form-group col-md-6">
        <label for="name">Apellido Materno</label>
        <input type="text" class="form-control" name="maternopropietario" id="maternopropietario" required>
      </div>
      <div class="form-group col-md-6">
        <label for="name">Teléfono</label>
        <input type="tel" class="form-control" name="fonopropietario" id="fonopropietario" required>
      </div>

      <br><br><br><br>

      <h4><b>Primer testigo</b></h4>
      <br><br>
      <div class="form-group col-md-6 ">
        <label for="name">Nombres</label>
        <input type="text" class="form-control" name="nomtestigo1" id="nomtestigo1"  required>
      </div>
      <div class="form-group col-md-6">
      <label for="name">RUT</label>
      <input type="text" class="form-control" name="ruttestigo1" id="ruttestigo1" required>
       </div>
      <div class="form-group col-md-6">
        <label for="name">Apellido Paterno</label>
        <input type="text" class="form-control" name="paternotestigo1" id="paternotestigo1" required>
      </div>
      <div class="form-group col-md-6">
      <label for="name">Email</label>
      <input type="email" class="form-control" name="emailtestigo1" id="emailtestigo1" required>
      </div>
      <div class="form-group col-md-6">
        <label for="name">Apellido Materno</label>
        <input type="text" class="form-control" name="maternotestigo1" id="maternotestigo1"  required>
      </div>
      <div class="form-group col-md-6">
        <label for="name">Teléfono</label>
        <input type="tel" class="form-control" name="fonotestigo1" id="fonotestigo1" required>
      </div>
      
      <br><br><br><br>

      <h4><b>Segundo testigo</b></h4>
      <br><br>
      <div class="form-group col-md-6 ">
        <label for="name">Nombres</label>
        <input type="text" class="form-control" name="nomtestigo2" id="nomtestigo2"  required>
      </div>
      <div class="form-group col-md-6">
      <label for="name">RUT</label>
      <input type="text" class="form-control" name="ruttestigo2" id="ruttestigo2" required>
       </div>
      <div class="form-group col-md-6">
        <label for="name">Apellido Paterno</label>
        <input type="text" class="form-control" name="paternotestigo2" id="paternotestigo2" required>
      </div>
      <div class="form-group col-md-6">
      <label for="name">Email</label>
      <input type="email" class="form-control" name="emailtestigo2" id="emailtestigo2" required>
      </div>
      <div class="form-group col-md-6">
        <label for="name">Apellido Materno</label>
        <input type="text" class="form-control" name="maternotestigo2" id="maternotestigo2"  required>
      </div>
      <div class="form-group col-md-6">
        <label for="name">Teléfono</label>
        <input type="tel" class="form-control" name="fonotestigo2" id="fonotestigo2" required>
      </div>

      <br><br><br><br>';
    break;
  case 'Declaración Jurada para Personal de la Administración Pública':
    echo '<br>
          
              <h4><b>Datos de entidad Gubernamental</b></h4>
              <br><br>
          <div class="form-group col-md-6">
            <label for="name">Nombre del organismo o entidad gubernamental</label>
            <input type="text" class="form-control"  name="entidad" id="entidad" required>
          </div>
          <div class="form-group col-md-6">
            <label for="name">Ocupando el cargo de</label>
            <input type="text" class="form-control" name="cargo" id="cargo" required>
          </div>
                <br><br><br><br>';
    break;
}
