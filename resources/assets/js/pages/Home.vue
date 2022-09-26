<template>
  <div class="page-wrapper">
   
    <MenuPrincipal />
    <section class="wpo-hero-section-1">
      <div class="container">
        <div class="row">
          <div class="col col-xs-6 col-lg-6">
            <div class="wpo-hero-section-text">
              <div class="wpo-hero-title">
                <h2>
                  <span>
                    Soluciones <br />
                    <font style="color: #f3ab41">Innovadoras</font> <br />
                    para tu negocio
                  </span>
                </h2>
              </div>
              <div class="btns">
                <a class="btn btn-amarillo" href="#servicios">Comencemos</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="right-vec">
        <div class="right-img">
          <img src="img/hombre_cohete.png" alt="" />
        </div>
        <div class="round-1"></div>
        <div class="round-2"></div>
        <div class="round-3"></div>
        <div class="round-4"></div>
      </div>
    </section>
    <!-- Seccion Servicios -->
    <section class="wpo-work-section section-padding">
      <div class="container">
        <div class="row" id="servicios">
          <div class="col col-xs-12">
            <div class="section-title-s4">
              <span>Servicios</span>
              <h2>¿Sabes lo que estás buscando?</h2>
              <div class="transparent-text">Crece</div>
            </div>
          </div>
        </div>
        <div class="wpo-work-wrap">
          <!-- Lista de servicios -->
          <div class="row">
            <div
              class="col col-lg-3 col-md-6 col-12"
              v-for="(s, index) in servicios"
              :key="index"
            >
              <Servicio :data="s" />
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Seccion Servicios -->
    <section
      class="wpo-work-section section-padding"
      style="background-color: #eff6fc"
    >
      <div class="container">
        <div class="row">
          <div class="col col-xs-12">
            <div class="section-title-s4">
              <h2>¿Qúe más te interesa saber?</h2>
            </div>
          </div>
        </div>
        <div class="wpo-service-section">
          <div class="row">
            <div
              class="col-lg-3 col-md-6 col-12"
              v-for="(i, index) in interes"
              :key="index"
            >
              <Interes :data="i" />
            </div>
          </div>
        </div>
        <div class="row">
          <h2 class="text-center">¿Necesitas que te guiemos?</h2>
          <div class="col-md-8 text-center">
            <div class="col-auto text-center mt-4">
              <h3 class="mt-4">Te obsequiamos 20 minutos de consultoria</h3>
              <a href="https://api.whatsapp.com/send?phone=910836385&text=Quiero%20agendar%20una%20reuni%C3%B3n" target="_bank" class="btn btn-primary">AGENDAR CONSULTORÍA</a>
            </div>
          </div>
          <div class="col-md-4 text-center">
            <img
              src="img/consultoria.png"
              width="200px"
              class="img-fluid"
              alt=""
            />
          </div>
        </div>
      </div>
    </section>
    <!-- Seccion quien eres -->
    <section class="wpo-work-section section-padding">
      <div class="container">
        <div class="row">
          <div class="col col-xs-12">
            <div class="section-title-s4">
              <h2>¿Quién eres?</h2>
              <p>Cuéntanos, queremos ayudarte</p>
            </div>
          </div>
        </div>
        <div class="wpo-service-section">
          <div class="row">
            <div
              class="col-lg-3 col-md-6 col-12"
              v-for="(i, index) in negocio"
              :key="index"
            >
              <Interes :data="i" />
            </div>
          </div>
        </div>
      </div>
    </section>
    <FooterPrincipal />
  </div>
</template>

<script>
import FooterPrincipal from "../components/Footer.vue";
import MenuPrincipal from "../components/Menu.vue";
import Interes from "../components/Interes.vue";
import Servicio from "../components/Servicio.vue";
import servicios from "../data/services.js";
export default {
  name: "Home",
  data() {
    return {
      servicios: servicios,
      interes: [
        {
          titulo: "¿Quiénes somos?",
          imagen: "1_somos.png",
          ruta: "",
        },
        {
          titulo: "¿Por qué son los mejores para mí?",
          imagen: "2_mejores.png",
          ruta: "",
        },
        {
          titulo: "¿Por qué tengo que confiar?",
          imagen: "3_confiar.png",
          ruta: "",
        },
        {
          titulo: "¿Cuándo nos juntamos?",
          imagen: "4_juntarnos.png",
          ruta: "",
        },
      ],
      negocio: [
        {
          titulo: "Emprendedor",
          imagen: "1_emprendedor.png",
          ruta: "",
        },
        {
          titulo: "Empresario que recién comienza",
          imagen: "2_empieza.png",
          ruta: "",
        },
        {
          titulo: "Profesional que representa a una gran empresa",
          imagen: "3_representa.png",
          ruta: "",
        },
        {
          titulo: "Gerente de mi propio negocio",
          imagen: "4_gerente.png",
          ruta: "",
        },
      ],
    };
  },
  components: {
   MenuPrincipal,
    FooterPrincipal,
    Servicio,
    Interes,
  },
  methods: {},
  created() {},
};
</script>

<style>
</style>