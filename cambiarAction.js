    function cambiarAction() {
      var tipoDocumento = document.getElementById("documento_seleccionado").value;
      var formulario = document.getElementById("formulario");

      if (tipoDocumento === "15") {
        formulario.action = "documentosPDF/adminInmueblepdf.php";
      } else if (tipoDocumento === "40") {
        formulario.action = "documentosPDF/adminPublicapdf.php";
      } else if (tipoDocumento === "28") {
        formulario.action = "documentosPDF/CarroArrastrepdf.php";
      } else if (tipoDocumento === "29") {
        formulario.action = "documentosPDF/cesantiapdf.php";
      } else if (tipoDocumento === "25") {
        formulario.action = "documentosPDF/compraVentapdf.php";
      } else if (tipoDocumento === "32") {
        formulario.action = "documentosPDF/expensaspdf.php";
      } else if (tipoDocumento === "33") {
        formulario.action = "documentosPDF/extravioConducirpdf.php";
      } else if (tipoDocumento === "34") {
        formulario.action = "documentosPDF/ingresospdf.php";
      } else if (tipoDocumento === "15") {
        formulario.action = "documentosPDF/pbs_pNaturalpdf.php";
      } else if (tipoDocumento === "20") {
        formulario.action = "documentosPDF/peSII_pjpdf.php";
      } else if (tipoDocumento === "19") {
        formulario.action = "documentosPDF/peSII_pnpdf.php";
      } else if (tipoDocumento === "22") {
        formulario.action = "documentosPDF/poderAlterarpdf.php";
      } else if (tipoDocumento === "23") {
        formulario.action = "documentosPDF/poderPlacaspdf.php";
      } else if (tipoDocumento === "24") {
        formulario.action = "documentosPDF/poderRetirarpdf.php";
      } else if (tipoDocumento === "21") {
        formulario.action = "documentosPDF/poderVehiculo.php";
      } else if (tipoDocumento === "37") {
        formulario.action = "documentosPDF/redaccionPJpdf.php";
      } else if (tipoDocumento === "36") {
        formulario.action = "documentosPDF/redaccionPNpdf.php";
      } else if (tipoDocumento === "38") {
        formulario.action = "documentosPDF/solteraCONpdf.php";
      } else if (tipoDocumento === "39") {
        formulario.action = "documentosPDF/solteraSINpdf.php";
      } else if (tipoDocumento === "26") {
        formulario.action = "documentosPDF/cResidenciapdf.php";
      } else if (tipoDocumento === "27") {
        formulario.action = "documentosPDF/alcoholespdf.php";
      } else if (tipoDocumento === "30") {
        formulario.action = "documentosPDF/donantepdf.php";
      } else if (tipoDocumento === "31") {
        formulario.action = "documentosPDF/noDonantepdf.php";
      } else if (tipoDocumento === "35") {
        formulario.action = "documentosPDF/noPPpdf.php";
      }
    }
