/**
 * Template Name: OnePage - v4.9.2
 * Template URL: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/
 * Author: BootstrapMade.com
 * License: https://bootstrapmade.com/license/
 */
(function () {
  "use strict";

  /**
   * Easy selector helper function
   */
  const select = (el, all = false) => {
    el = el.trim();
    if (all) {
      return [...document.querySelectorAll(el)];
    } else {
      return document.querySelector(el);
    }
  };

  /**
   * Easy event listener function
   */
  const on = (type, el, listener, all = false) => {
    let selectEl = select(el, all);
    if (selectEl) {
      if (all) {
        selectEl.forEach((e) => e.addEventListener(type, listener));
      } else {
        selectEl.addEventListener(type, listener);
      }
    }
  };

  /**
   * Easy on scroll event listener
   */
  const onscroll = (el, listener) => {
    el.addEventListener("scroll", listener);
  };

  /**
   * Navbar links active state on scroll
   */
  let navbarlinks = select("#navbar .scrollto", true);
  const navbarlinksActive = () => {
    let position = window.scrollY + 200;
    navbarlinks.forEach((navbarlink) => {
      if (!navbarlink.hash) return;
      let section = select(navbarlink.hash);
      if (!section) return;
      if (
        position >= section.offsetTop &&
        position <= section.offsetTop + section.offsetHeight
      ) {
        navbarlink.classList.add("active");
      } else {
        navbarlink.classList.remove("active");
      }
    });
  };
  window.addEventListener("load", navbarlinksActive);
  onscroll(document, navbarlinksActive);

  /**
   * Scrolls to an element with header offset
   */
  const scrollto = (el) => {
    let header = select("#header");
    let offset = header.offsetHeight;

    let elementPos = select(el).offsetTop;
    window.scrollTo({
      top: elementPos - offset,
      behavior: "smooth",
    });
  };

  /**
   * Toggle .header-scrolled class to #header when page is scrolled
   */
  let selectHeader = select("#header");
  if (selectHeader) {
    const headerScrolled = () => {
      if (window.scrollY > 100) {
        selectHeader.classList.add("header-scrolled");
      } else {
        selectHeader.classList.remove("header-scrolled");
      }
    };
    window.addEventListener("load", headerScrolled);
    onscroll(document, headerScrolled);
  }

  /**
   * Back to top button
   */
  let backtotop = select(".back-to-top");
  if (backtotop) {
    const toggleBacktotop = () => {
      if (window.scrollY > 100) {
        backtotop.classList.add("active");
      } else {
        backtotop.classList.remove("active");
      }
    };
    window.addEventListener("load", toggleBacktotop);
    onscroll(document, toggleBacktotop);
  }

  /**
   * Mobile nav toggle
   */
  on("click", ".mobile-nav-toggle", function (e) {
    select("#navbar").classList.toggle("navbar-mobile");
    this.classList.toggle("bi-list");
    this.classList.toggle("bi-x");
  });

  /**
   * Mobile nav dropdowns activate
   */
  on(
    "click",
    ".navbar .dropdown > a",
    function (e) {
      if (select("#navbar").classList.contains("navbar-mobile")) {
        e.preventDefault();
        this.nextElementSibling.classList.toggle("dropdown-active");
      }
    },
    true
  );

  /**
   * Scrool with ofset on links with a class name .scrollto
   */
  on(
    "click",
    ".scrollto",
    function (e) {
      if (select(this.hash)) {
        e.preventDefault();

        let navbar = select("#navbar");
        if (navbar.classList.contains("navbar-mobile")) {
          navbar.classList.remove("navbar-mobile");
          let navbarToggle = select(".mobile-nav-toggle");
          navbarToggle.classList.toggle("bi-list");
          navbarToggle.classList.toggle("bi-x");
        }
        scrollto(this.hash);
      }
    },
    true
  );

  /**
   * Scroll with ofset on page load with hash links in the url
   */
  window.addEventListener("load", () => {
    if (window.location.hash) {
      if (select(window.location.hash)) {
        scrollto(window.location.hash);
      }
    }
  });

  /**
   * Preloader
   */
  let preloader = select("#preloader");
  if (preloader) {
    window.addEventListener("load", () => {
      preloader.remove();
    });
  }

  /**
   * Initiate glightbox
   */
  const glightbox = GLightbox({
    selector: ".glightbox",
  });

  /**
   * Testimonials slider
   */
  new Swiper(".testimonials-slider", {
    speed: 600,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
    slidesPerView: "auto",
    pagination: {
      el: ".swiper-pagination",
      type: "bullets",
      clickable: true,
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
        spaceBetween: 20,
      },

      1200: {
        slidesPerView: 3,
        spaceBetween: 20,
      },
    },
  });

  /**
   * Porfolio isotope and filter
   */
  window.addEventListener("load", () => {
    let portfolioContainer = select(".portfolio-container");
    if (portfolioContainer) {
      let portfolioIsotope = new Isotope(portfolioContainer, {
        itemSelector: ".portfolio-item",
      });

      let portfolioFilters = select("#portfolio-flters li", true);

      on(
        "click",
        "#portfolio-flters li",
        function (e) {
          e.preventDefault();
          portfolioFilters.forEach(function (el) {
            el.classList.remove("filter-active");
          });
          this.classList.add("filter-active");

          portfolioIsotope.arrange({
            filter: this.getAttribute("data-filter"),
          });
          portfolioIsotope.on("arrangeComplete", function () {
            AOS.refresh();
          });
        },
        true
      );
    }
  });

  /**
   * Initiate portfolio lightbox
   */
  const portfolioLightbox = GLightbox({
    selector: ".portfolio-lightbox",
  });

  /**
   * Portfolio details slider
   */
  new Swiper(".portfolio-details-slider", {
    speed: 400,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      type: "bullets",
      clickable: true,
    },
  });

  /**
   * Animation on scroll
   */
  window.addEventListener("load", () => {
    AOS.init({
      duration: 1000,
      easing: "ease-in-out",
      once: true,
      mirror: false,
    });
  });

  /**
   * Initiate Pure Counter
   */
  new PureCounter();
})();

const obtenerHorarios = async (elementBtn) => {
  let data = new FormData();
  data.append("fecha", elementBtn.dataset.date);
  data.append("notariaId", elementBtn.dataset.notaria);

  let options = {
    method: "POST",
    body: data,
  };
  const res = await fetch("php/obtener_horarios.php", options);
  const dataResponse = await res.json();

  //referencia al div donde llegara el contenido
  let div = document.getElementById("contentHours");
  let htmlHours = "";

  dataResponse.horarios.forEach((e) => {
    let estalibreClass = e.estado === "libre" ? "btn-success" : "btn-secondary";
    htmlHours += `<a href="#" class="btn btn-sm ${estalibreClass} m-1" onclick="validaHorarioIrFormulario(this)" me-1 mb-2" data-id_horario="${e.idHorario}" data-fecha_select="${dataResponse.data.fecha}" data-notaria ="${dataResponse.data.idNotaria}">${e.horario}</a>`;
  });

  div.innerHTML = htmlHours;
  console.log("response :>> ", dataResponse);
};

const validaHorarioIrFormulario = async (element) => {
  let data = new FormData();
  data.append("fecha", element.dataset.fecha_select);
  data.append("notaria", element.dataset.notaria);
  data.append("horario", element.dataset.id_horario);

  let options = {
    method: "POST",
    body: data,
  };
  const res = await fetch("php/valida_horario.php", options);
  const dataResponse = await res.json();
  if (!dataResponse) {
    const Toast = Swal.mixin({
      toast: true,
      position: "top-end",
      showConfirmButton: false,
      timer: 3000,
      timerProgressBar: true,
      didOpen: (toast) => {
        toast.addEventListener("mouseenter", Swal.stopTimer);
        toast.addEventListener("mouseleave", Swal.resumeTimer);
      },
    });

    Toast.fire({
      icon: "warning",
      title: "Horario no habilitado",
    });
    return;
  }

  //obtener el parametro documento de la URL
  let urlActual = window.location.href;

  // Crea un objeto URL
  let urlAct = new URL(urlActual);

  // Obtén el valor del parámetro "parametro"
  let documentoSeleccionado = urlAct.searchParams.get("documento_seleccionado");

  let url =
    "completar_tramite.php" +
    "?idNotaria=" +
    element.dataset.notaria +
    "&fecha=" +
    element.dataset.fecha_select +
    "&idHorario=" +
    element.dataset.id_horario +
    "&documento_seleccionado=" +
    documentoSeleccionado;

  window.location.href = url;

  console.log("dataResponse :>> ", dataResponse);
};

const validarFormulario = (idFormulario) => {
  const listaCampos = document.querySelectorAll(
    `#${idFormulario} [data-validate]`
  );
  let validacion = true;

  if (listaCampos.length > 0) {
    listaCampos.forEach((elemento) => {
      const tipoElemento = elemento.getAttribute("type");
      //validamos campos con value
      if (elemento.value === "") {
        validacion = false;
        elemento.style.setProperty("border", "1px solid red");
        setTimeout(() => {
          elemento.style.setProperty("border", "");
        }, 2000);
      }

      //validamos campos tipo checkbox
      if (tipoElemento === "checkbox" && !elemento.checked) {
        validacion = false;
        elemento.style.setProperty("border", "1px solid red");
        setTimeout(() => {
          elemento.style.setProperty("border", "");
        }, 2000);
      }

      //validamos campos tipo radio
      if (tipoElemento === "radio") {
        const name = elemento.getAttribute("name");
        const inputsRadio = document.querySelectorAll(
          `input[type="radio"][name="${name}"]`
        );
        let checked = false;

        inputsRadio.forEach((radio) => {
          if (radio.checked) {
            checked = true;
          }
        });

        if (!checked) {
          validacion = false;
        }
      }
    });
  }
  return validacion;
};

const enviarFormularioReserva = async () => {
  //evitamos el evento por defecto del formulario
  event.preventDefault();
  let valueRut = document.getElementById("inputRut").value;
  if (!validarRut(valueRut)) {
    //alert de aweet alert
    const Toast = Swal.mixin({
      toast: true,
      position: "bottom-end",
      showConfirmButton: false,
      timer: 3000,
      timerProgressBar: true,
      didOpen: (toast) => {
        toast.addEventListener("mouseenter", Swal.stopTimer);
        toast.addEventListener("mouseleave", Swal.resumeTimer);
      },
    });

    Toast.fire({
      icon: "error",
      title: "El rut no es valido",
    });
    return;
  }
  //obtener el parametro documento de la URL
  let urlActual = window.location.href;

  // Crea un objeto URL
  let urlAct = new URL(urlActual);

  // Obtén el valor del parámetro "parametro"
  let documentoSeleccionado = urlAct.searchParams.get("documento_seleccionado");
  let idNotaria = urlAct.searchParams.get("idNotaria");
  let fecha = urlAct.searchParams.get("fecha");
  let idHorario = urlAct.searchParams.get("idHorario");

  let data2 = new FormData();
  data2.append("fecha", fecha);
  data2.append("notaria", idNotaria);
  data2.append("horario", idHorario);

  let options2 = {
    method: "POST",
    body: data2,
  };

  const res2 = await fetch("php/valida_horario.php", options2);
  const dataResponse = await res2.json();
  if (!dataResponse) {
    const Toast = Swal.mixin({
      toast: true,
      position: "top-end",
      showConfirmButton: false,
      timer: 3000,
      timerProgressBar: true,
      didOpen: (toast) => {
        toast.addEventListener("mouseenter", Swal.stopTimer);
        toast.addEventListener("mouseleave", Swal.resumeTimer);
      },
    });

    Toast.fire({
      icon: "warning",
      title: "Horario no habilitado",
    });
    return;
  }

  //invocamos la funcion
  if (!validarFormulario("formReserva")) {
    //alert de aweet alert
    const Toast = Swal.mixin({
      toast: true,
      position: "bottom-end",
      showConfirmButton: false,
      timer: 3000,
      timerProgressBar: true,
      didOpen: (toast) => {
        toast.addEventListener("mouseenter", Swal.stopTimer);
        toast.addEventListener("mouseleave", Swal.resumeTimer);
      },
    });

    Toast.fire({
      icon: "error",
      title: "Complete todos los campos",
    });
    return;
  }

  //peticion para enviar data
  let data = new FormData(document.getElementById("formReserva"));
  data.append("idNotaria", idNotaria);
  data.append("documento_seleccionado", documentoSeleccionado);
  data.append("fecha", fecha);
  data.append("idHorario", idHorario);

  let options = {
    method: "POST",
    body: data,
  };

  let res = await fetch("php/agregar_reserva.php", options);
  let response = await res.json();

  if (response) {
    Swal.fire({
      position: "center",
      icon: "success",
      title: "Se registro su reserva",
      text: "Revise su correo",
      showConfirmButton: false,
      timer: 1500,
    });
    setTimeout(() => {
      let url = "gracias.php";

      window.location.href = url;
    }, 2000);
  } else {
    Swal.fire({
      position: "center",
      icon: "error",
      title: "Ocurrio un error",
      showConfirmButton: false,
      timer: 3000,
    });
  }
};

function formatearRut(input) {
  let valor = input.value.replace(/\D/g, ""); // Eliminar caracteres no numéricos
  const dv = valor.slice(-1); // Obtener el dígito verificador
  const rutSinDv = valor.slice(0, -1); // Obtener el rut sin el dígito verificador

  valor = rutSinDv + "-" + dv; // Agregar el guión y el dígito verificador
  input.value = valor;
}

// Ejemplo de uso:
const inputRut = document.getElementById("inputRut"); // Reemplaza "inputRut" con el ID de tu input
if (inputRut !== null) {
  inputRut.addEventListener("input", () => {
    formatearRut(inputRut);
  });
}

function validarRut(rut) {
  // Formato: 12345678-9 o 12.345.678-9
  rut = rut.replace(/[.-]/g, ""); // Elimina puntos y guiones
  if (!/^[0-9]{7,8}[0-9kK]{1}$/.test(rut)) return false;

  const dv = rut.slice(-1).toUpperCase();
  const num = rut.slice(0, -1);

  let suma = 0;
  let multiplicador = 2;

  for (let i = num.length - 1; i >= 0; i--) {
    suma += parseInt(num.charAt(i), 10) * multiplicador;
    multiplicador = multiplicador === 7 ? 2 : multiplicador + 1;
  }

  const dvEsperado = 11 - (suma % 11);
  const dvCalculado = dvEsperado === 10 ? "K" : dvEsperado.toString();

  return dv === dvCalculado;
}

const enviarFormularioContacto = async () => {
  //evitamos el evento por defecto del formulario
  event.preventDefault();
  //invocamos la funcion
  if (!validarFormulario("formContacto")) {
    //alert de aweet alert
    const Toast = Swal.mixin({
      toast: true,
      position: "bottom-end",
      showConfirmButton: false,
      timer: 3000,
      timerProgressBar: true,
      didOpen: (toast) => {
        toast.addEventListener("mouseenter", Swal.stopTimer);
        toast.addEventListener("mouseleave", Swal.resumeTimer);
      },
    });

    Toast.fire({
      icon: "error",
      title: "Complete todos los campos",
    });
    return;
  }

  //peticion para enviar data
  let data = new FormData(document.getElementById("formContacto"));

  let options = {
    method: "POST",
    body: data,
  };
  let res = await fetch("php/contacto_mail.php", options);
  let response = await res.json();

  if (response) {
    Swal.fire({
      position: "center",
      icon: "success",
      title: "Se registro su reserva",
      text: "Revise su correo",
      showConfirmButton: false,
      timer: 3000,
    });
  } else {
    if (response) {
      Swal.fire({
        position: "center",
        icon: "error",
        title: "Ocurrio un error",
        showConfirmButton: false,
        timer: 2000,
      });
    }
  }
};

const buscarReserva = async () => {
  event.preventDefault();
  if (!validarFormulario("formBuscarReserva")) {
    const Toast = Swal.mixin({
      toast: true,
      position: "bottom-end",
      showConfirmButton: false,
      timer: 3000,
      timerProgressBar: true,
      didOpen: (toast) => {
        toast.addEventListener("mouseenter", Swal.stopTimer);
        toast.addEventListener("mouseleave", Swal.resumeTimer);
      },
    });

    Toast.fire({
      icon: "error",
      title: "Complete todos los campos",
    });
    return;
  }
  let formulario = document.getElementById("formBuscarReserva");
  let data = new FormData(formulario);
  let options = {
    method: "post",
    body: data,
  };
  const res = await fetch("php/buscar_reserva.php", options);
  const response = await res.json();

  if (response[0]) {
    $("#reservaModal").modal("show");

    const {
      codigo,
      documento,
      fecha,
      hora,
      nombre,
      rut,
      telefono,
      correo,
      idReserva,
    } = response[1];

    document.getElementById("codigoAnularRe").innerHTML = codigo;
    document.getElementById("documentoAnularRe").innerHTML = documento;
    document.getElementById("fechaAnularRe").innerHTML = fecha;
    document.getElementById("horaAnularRe").innerHTML = hora;
    document.getElementById("nombreAnularRe").innerHTML = nombre;
    document.getElementById("rutAnularRe").innerHTML = rut;
    document.getElementById("telefonoAnularRe").innerHTML = telefono;
    document.getElementById("correoAnularRe").innerHTML = correo;

    document.getElementById("btnAnular").dataset.id_anular = idReserva;
  } else {
    Swal.fire({
      position: "center",
      icon: "error",
      title: "No hay reservas coincidentes",
      showConfirmButton: false,
      timer: 2000,
    });
  }
};

const anularReserva = async (element) => {
  let data = new FormData();
  data.append("idReserva", element.dataset.id_anular);

  let options = {
    method: "POST",
    body: data,
  };
  const res = await fetch("php/anular_reserva.php", options);
  const response = await res.json();

  if (response) {
    $("#reservaModal").modal("hide");
    Swal.fire({
      position: "center",
      icon: "success",
      title: "Se cancelo su reserva",
      showConfirmButton: false,
      timer: 3000,
    });
  } else {
    if (response) {
      Swal.fire({
        position: "center",
        icon: "error",
        title: "Ocurrio un error",
        showConfirmButton: false,
        timer: 2000,
      });
    }
  }
};
