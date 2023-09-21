<!DOCTYPE html>
<!--
Copyright (c) 2020, Cristopher Vera
All rights reserved.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="js/cl.registrosnotariales.validacion.rest.js?v=1"></script>
    </head>
    <body>
        <label for="codigoDocumento">C&oacute;digo documento:</label>
        <input type="text" id="codigoDocumento" name="codigoDocumento"></input>
        <button id="botonConsultar" onclick="ClienteRest.verificar()">Verificar</button>
        <div id="respuesta"></div>
        <iframe id="framePDF" style="display:none;" width="100%" height="500"></iframe>
    </body>
</html>
