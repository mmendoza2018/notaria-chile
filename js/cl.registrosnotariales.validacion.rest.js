/* 
 * Copyright (c) 2020, Cristopher Vera
 * All rights reserved.
 */

/**
 * Objeto que hace de cliente del servicio REST.
 * @type ClienteRest
 */
var ClienteRest = {
    /**
     * Comprueba el codigo ingresado en el campo #codigoDocumento en el servicio
     * REST de validación. Si no encuentra el documento, intenta en el repositorio.
     * @returns {undefined}
     */
    verificar: function () {
        /**
         * Reiniciar iframe?
         */
        $('#framePDF').css({display: 'none'});
        $('#framePDF').removeAttr('src');
        /**
         * Parametros consulta.
         */
        var urlValidacion = 'https://validacion.registrosnotariales.cl:8181/rest/api/verificar/';
        var urlRepositorio = 'https://repositorio.registrosnotariales.cl:8181/rest/api/verificar/';
        var notaria = 'Informatica_PCM';
        var codigo = $('#codigoDocumento').val().trim();
        var urlConsultaValidacion = urlValidacion + notaria + '/' + codigo;
        var urlConsultaRepositorio = urlRepositorio + codigo;
        /**
         * Generar consulta.
         */
        var inclAJS = true;
        var request = new XMLHttpRequest();
        /**
         * Cuando se reciba la respuesta.
         */
        request.onreadystatechange = function () {
            /**
             * Cuando cambia de estado el request.
             */
            if (request.readyState === 4) {
                /**
                 * Si el resultado es OK (o status 200).
                 */
                if (request.status === 200) {
                    /**
                     * Parsear respuesta JSON.
                     */
                    var json = JSON.parse(request.responseText);
                    /**
                     * Si la respuesta es un error del servicio.
                     */
                    if (json['error']) {
                        if(inclAJS){
                            console.log('Probando en AJS.');
                            request.open('GET', urlConsultaRepositorio);
                            request.send();
                        }else{
                            /**
                             * Mostrar el mensaje de error en el div #respuesta.
                             */
                            $('#respuesta').html(json['mensaje']);
                        }
                    } else {
                        /**
                         * Si es la URL del archivo, mostrarlo en el iframe #framePDF.
                         */
                        $('#respuesta').html('');
                        $('#framePDF').attr('src', json['url']);
                        $('#framePDF').css({display: 'block'});
                    }
                } else {
                    /**
                     * Si no, ocurrio un error en la consulta.
                     * Mostrar un mensaje de error en el div #respuesta.
                     */
                    $('#respuesta').html("Error al verificar.");
                }
            } else {
                /**
                 * Cambio de estado pero no se ha recibido respuesta.
                 * Mostrar un mensaje mientras en el div #respuesta.
                 */
                $('#respuesta').html("Consultando...");
            }
        };
        request.open('GET', urlConsultaValidacion);
        request.send();
    }
};