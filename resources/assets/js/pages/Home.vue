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
                <router-link class="btn btn-amarillo" to="/servicios"
                  >Comencemos</router-link
                >
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
              <h2>¿Qué más te interesa saber?</h2>
            </div>
          </div>
        </div>
        <div class="wpo-service-section">
          <Interes />
        </div>
        <div class="row">
          <h2 class="text-center">¿Necesitas que te guiemos?</h2>
          <div class="col-md-8 text-center">
            <div class="col-auto text-center mt-4">
              <h3 class="mt-4">Te obsequiamos 20 minutos de consultoria</h3>
              <a
                href="https://api.whatsapp.com/send?phone=51910836385&text=Quiero%20agendar%20una%20reuni%C3%B3n"
                target="_bank"
                class="btn btn-primary"
                >AGENDAR CONSULTORÍA</a
              >
            </div>
          </div>
          <div class="col-md-4 text-center">
            <img
              src="img/consultoria.png"
              width="200px"
              class="efecto img-fluid"
              alt=""
            />
          </div>
        </div>
      </div>
    </section>
    <!-- Seccion quien eres -->
    <!-- <section class="wpo-work-section section-padding">
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
          <Negocio />
        </div>
      </div>
    </section> -->
    <FormularioPrincipal />
    <!-- <Comentarios /> -->
    <FooterPrincipal />
  </div>
</template>

<script>
import Comentarios from "../components/Comments.vue";
import FormularioPrincipal from "../components/Form.vue";
import FooterPrincipal from "../components/Footer.vue";
import MenuPrincipal from "../components/Menu.vue";
import Interes from "../components/Interes.vue";
import Negocio from "../components/Negocio.vue";
import Servicio from "../components/Servicio.vue";
import servicios from "../data/services.js";
export default {
  name: "Home",
  data() {
    return {
      servicios: servicios,
    };
  },
  components: {
    MenuPrincipal,
    FooterPrincipal,
    Servicio,
    Negocio,
    Interes,
    FormularioPrincipal,
    Comentarios,
  },
  methods: {},
  created() {},
};
</script>

<style scoped>
.efecto {
  box-shadow: 5px 5px 20px rgba(0, 0, 0, 0.4);
  cursor: default;
  transition: all 400ms ease;
}
</style>