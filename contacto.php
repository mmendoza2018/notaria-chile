<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
  <div class="container" data-aos="fade-up">
    <div class="section-title">
      <h2>Contacto</h2>
    </div>
    <div class="row">
      <div class="col-lg-5 d-flex align-items-stretch">
        <div class="info">
          <div class="address">
            <i class="bi bi-geo-alt"></i>
            <h4>Localización:</h4>
            <p>Santiago, Chile.</p>
          </div>

          <div class="email">
            <i class="bi bi-envelope"></i>
            <h4>Email:</h4>
            <p>Carlospardo@gesnot.cl</p>
          </div>

          <div class="phone">
            <i class="bi bi-phone"></i>
            <h4>Telefono:</h4>
            <p>+56 226965552 - +569 98791715</p>
          </div>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3329.322662550533!2d-70.65550268509183!3d-33.44089920440751!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662c5a42756d9c7%3A0x65d0ad09c04543d8!2sAgustinas%201185%2C%208340418%20Santiago%2C%20Regi%C3%B3n%20Metropolitana!5e0!3m2!1ses!2scl!4v1673884743767!5m2!1ses!2scl" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
        </div>
      </div>
      <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
        <form id="formContacto" onsubmit="enviarFormularioContacto()" class="php-email-form">
          <div class="row">
            <div class="form-group col-md-6">
              <label for="name">Nombre</label>
              <input type="text" name="nombres" data-validate class="form-control">
            </div>
            <div class="form-group col-md-6">
              <label for="name">Email</label>
              <input type="email" class="form-control" value="prueba@gmail.com" data-validate name="email">
            </div>
            <div class="form-group">
              <label for="name">Asunto</label>
              <input type="text" class="form-control" data-validate name="asunto">
            </div>
            <div class="form-group">
              <label for="name">Mensajes</label>
              <textarea class="form-control" name="mensaje" data-validate rows="10"></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Cargando...</div>
              <div class="error-message"></div>
              <div class="sent-message">Tu mensaje ha sido enviado. ¡Gracias!</div>
            </div>
            <div class="text-center"><button class="btn btn-primary" type="submit">Enviar mensaje</button></div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section><!-- End Contact Section -->