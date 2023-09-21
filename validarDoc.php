<?php
include 'header.php';
?>

<body>
    <main id="main">
        <section id="hero" class="d-flex align-items-center">
            <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-9 text-center">
                        <h1 style="color: #0163ac;" for="codigoDocumento">C&oacute;digo documento:</h1>
                        <br>
                        <input class="form-control" type="text" id="codigoDocumento" name="codigoDocumento"></input>
                        <br>
                        <button class="btn btn-primary" id="botonConsultar" onclick="ClienteRest.verificar()">Verificar</button>
                        <div id="respuesta"></div>
                        <iframe id="framePDF" style="display:none;" width="100%" height="500"></iframe>
                    </div>
                </div>
            </div>
        </section><!-- End Hero -->
    </main><!-- End #main -->
    <main id="main">
</body>

<?php
include 'footer.php';
?>