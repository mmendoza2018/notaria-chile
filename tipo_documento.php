<?php
include 'header.php';
?>

<body>

    <br><br>
    <!-- ======= Breadcrumbs ======= -->
    <div class="container">
        <br><br>
        <div class="d-flex flex-row-reverse align-items-center">

            <a href="javascript:history.back()">Volver a pagina anterior</a>
        </div> <!---AQUI-->
    </div>
    <br><br>
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->

        <center>
            <div class="texto-formateado">
                <strong>
                    <h2>DOCUMENTOS DISPONIBLES PARA TI: </h2>
                </strong>
            </div>
        </center>
        <section>
            <div class="row justify-content-stretch">
                <div class="col-lg-3 col-md-6 d-flex justify-content-center mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                    <form method="post" action="mostrar.php?tipo_documento=Autorización">
                        <fieldset disabled>
                            <!-- <a href="mostrar.php?tipo_documento=Autorización"> -->
                            <input type="hidden" name="formulario1_completado" value="true">
                            <div class="btn btn-light card border-primary mb-3" style="width: 20rem; height: 12rem; ">
                                <div class="card-body texto-formateado" data-aos="zoom-in" data-aos-delay="200">
                                    <br>
                                    <h5 class="v" style="color: #444444"><strong><img src="assets/img/iconos/autorizacion.png" alt="Icono de Autorización" style="height: 3.5rem; margin-right: 2.5rem; display: inline-block; vertical-align: middle;">Autorización</strong></h5>
                                    <br>
                                    <!-- <h6 class="btn btn-primary">Ver documentos...</h6> -->
                                    <button class="btn btn-primary" type="submit">Ver documentos...</button>
                                </div>
                            </div>
                            <!-- </a> -->
                        </fieldset>
                    </form>
                </div>

                <div class="col-lg-3 col-md-6 d-flex justify-content-center mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                    <form method="post" action="mostrar.php?tipo_documento=Contratos">
                        <fieldset disabled>
                            <!-- <a href="mostrar.php?tipo_documento=Contratos"> -->
                            <input type="hidden" name="formulario1_completado" value="true">
                            <div class="btn btn-light card border-primary mb-3" style="width: 20rem; height: 12rem; ">
                                <div class="card-body texto-formateado" data-aos="zoom-in" data-aos-delay="200">
                                    <br>
                                    <h5 class="v" style="color: #444444"><strong><img src="assets/img/iconos/contrato.png" alt="Icono de Autorización" style="height: 3.5rem; margin-right: 2.5rem; display: inline-block; vertical-align: middle;">Contratos</strong></h5>
                                    <br>
                                    <!-- <h6 class="btn btn-primary">Ver mas información...</h6> -->
                                    <button class="btn btn-primary" type="submit">Ver documentos...</button>
                                </div>
                            </div>
                            <!-- </a> -->
                        </fieldset>
                    </form>
                </div>
                <div class="col-lg-3 col-md-6 d-flex justify-content-center mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                    <form method="post" action="mostrar.php?tipo_documento=3">
                        <!-- <a href="mostrar.php?tipo_documento=Declaración"> -->
                        <input type="hidden" name="formulario1_completado" value="true">
                        <div class="btn btn-light card border-primary mb-3" style="width: 20rem; height: 12rem; ">
                            <div class="card-body texto-formateado" data-aos="zoom-in" data-aos-delay="200">
                                <br>
                                <h5 class="v" style="color: #444444"><strong><img src="assets/img/iconos/declaracion.png" alt="Icono de Autorización" style="height: 3.5rem; margin-right: 2.5rem; display: inline-block; vertical-align: middle;">Declaración</strong></h5>
                                <br>
                                <button class="btn btn-primary" type="submit">Ver documentos...</button>
                            </div>
                        </div>
                        <!-- </a> -->
                    </form>
                </div>
                <div class="col-lg-3 col-md-6 d-flex justify-content-center mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                    <form method="post" action="mostrar.php?tipo_documento=Laborales">
                        <fieldset disabled>
                            <!-- <a href="mostrar.php?tipo_documento=Laborales"> -->
                            <input type="hidden" name="formulario1_completado" value="true">
                            <div class="btn btn-light card border-primary mb-3" style="width: 20rem; height: 12rem; ">
                                <div class="card-body texto-formateado" data-aos="zoom-in" data-aos-delay="200">
                                    <br>
                                    <h5 class="v" style="color: #444444"><strong><img src="assets/img/iconos/laboral.png" alt="Icono de Autorización" style="height: 3.5rem; margin-right: 2.5rem; display: inline-block; vertical-align: middle;">Laboral</strong></h5>
                                    <br>
                                    <!-- <h6 class="btn btn-primary">Ver mas información...</h6> -->
                                    <button class="btn btn-primary" type="submit">Ver documentos...</button>
                                </div>
                            </div>
                            <!-- </a> -->
                        </fieldset>
                    </form>
                </div>
                <div class="col-lg-3 col-md-6 d-flex justify-content-center mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                    <form method="post" action="mostrar.php?tipo_documento=Poder">
                        <!-- <a href="mostrar.php?tipo_documento=Poder"> -->
                        <input type="hidden" name="formulario1_completado" value="true">
                        <div class="btn btn-light card border-primary mb-3" style="width: 20rem; height: 12rem; ">
                            <div class="card-body texto-formateado" data-aos="zoom-in" data-aos-delay="200">
                                <br>
                                <h5 class="v" style="color: #444444"><strong><img src="assets/img/iconos/acuerdo.png" alt="Icono de Autorización" style="height: 3.5rem; margin-right: 2.5rem; display: inline-block; vertical-align: middle;">Poderes</strong></h5>
                                <br>
                                <button class="btn btn-primary" type="submit">Ver documentos...</button>
                            </div>
                        </div>
                        <!-- </a> -->
                    </form>
                </div>
                <div class="col-lg-3 col-md-6 d-flex justify-content-center mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                    <form method="post" action="mostrar.php?tipo_documento=Mandatos">
                        <fieldset disabled>
                            <!-- <a href="mostrar.php?tipo_documento=Mandatos"> -->
                            <input type="hidden" name="formulario1_completado" value="true">
                            <div class="btn btn-light card border-primary mb-3" style="width: 20rem; height: 12rem; ">
                                <div class="card-body texto-formateado" data-aos="zoom-in" data-aos-delay="200">
                                    <br>
                                    <h5 class="v" style="color: #444444"><strong><img src="assets/img/iconos/veredicto.png" alt="Icono de Autorización" style="height: 3.5rem; margin-right: 2.5rem; display: inline-block; vertical-align: middle;">Mandatos</strong></h5>
                                    <br>
                                    <!-- <h6 class="btn btn-primary">Ver mas información...</h6> -->
                                    <button class="btn btn-primary" type="submit">Ver documentos...</button>
                                </div>
                            </div>
                            <!-- </a> -->
                        </fieldset>
                    </form>
                </div>
                <div class="col-lg-3 col-md-6 d-flex justify-content-center mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                    <form method="post" action="mostrar.php?tipo_documento=Vehículos">
                        <!-- <a href="mostrar.php?tipo_documento=Vehículos"> -->
                        <input type="hidden" name="formulario1_completado" value="true">
                        <div class="btn btn-light card border-primary mb-3" style="width: 20rem; height: 12rem; ">
                            <div class="card-body texto-formateado" data-aos="zoom-in" data-aos-delay="200">
                                <br>
                                <h5 class="v" style="color: #444444"><strong><img src="assets/img/iconos/seguro-de-coche.png" alt="Icono de Autorización" style="height: 3.5rem; margin-right: 2.5rem; display: inline-block; vertical-align: middle;">Vehículos</strong></h5>
                                <br>
                                <!-- <h6 class="btn btn-primary">Ver mas información...</h6> -->
                                <button class="btn btn-primary" type="submit">Ver documentos...</button>
                            </div>
                        </div>
                        <!-- </a> -->
                    </form>
                </div>
                <div class="col-lg-3 col-md-6 d-flex justify-content-center mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                    <form method="post" action="mostrar.php?tipo_documento=Empresas">
                        <fieldset disabled>
                            <!-- <a href="mostrar.php?tipo_documento=Empresas"> -->
                            <input type="hidden" name="formulario1_completado" value="true">
                            <div class="btn btn-light card border-primary mb-3" style="width: 20rem; height: 12rem; ">
                                <div class="card-body texto-formateado" data-aos="zoom-in" data-aos-delay="200">
                                    <br>
                                    <h5 class="v" style="color: #444444"><strong><img src="assets/img/iconos/empresa.png" alt="Icono de Autorización" style="height: 3.5rem; margin-right: 2.5rem; display: inline-block; vertical-align: middle;">Empresas</strong></h5>
                                    <br>
                                    <button class="btn btn-primary" type="submit">Ver documentos...</button>
                                </div>
                            </div>
                            <!-- </a> -->
                        </fieldset>
                    </form>
                </div>
            </div>
        </section>

        <!-- ======= Contact Section ======= -->
        <?php
        include 'contacto.php';
        include 'footer.php';
        ?>
        <!-- End Contact Section -->

</body>