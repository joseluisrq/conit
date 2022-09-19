<template>
  <div class="page-wrapper">
      <div class="preloader">
            <div class="angular-shape">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
      </div>
      <MenuPrincipal/>
      <section class="wpo-hero-section-1">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-6 col-lg-6">
                        <div class="wpo-hero-section-text">
                            <div class="wpo-hero-title">
                                <h2>
                                    <span>
                                        Soluciones </br>
                                        <font style="color:#f3ab41 ;">Innovadoras</font> </br>
                                        para tu negocio
                                    </span>
                                </h2>
                            </div>
                            <div class="btns">
                                <a class="btn btn-amarillo" href="about.html">Comencemos</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right-vec">
                <div class="right-img">
                    <img src="img/hombre_cohete.png" alt="">
                </div>
                <div class="round-1"></div>
                <div class="round-2"></div>
                <div class="round-3"></div>
                <div class="round-4"></div>
            </div>



      </section>
      
      <FooterPrincipal/>
  </div>
</template>

<script>
import FooterPrincipal from "../components/Footer.vue";
import MenuPrincipal from "../components/Menu.vue";
export default {
  name: "Home",
  data() {
    return {
      titulo: "Home",
      subtitulo: "Servicios",
      nombre: "Jose",
      colaboradores_conit: [
        {
          id: 1,
          nombre: "Jose",
          profesion: "ing",
          tipo: 1,
        },
        {
          id: 2,
          nombre: "Jeyson",
          profesion: "ing",
          tipo: 1,
        },
        {
          id: 3,
          nombre: "Valeria",
          profesion: "admin",
          tipo: 2,
        },
        {
          id: 3,
          nombre: "Edith",
          profesion: "contadora",
          tipo: 3,
        },
      ],
    };
  },
  components: {
    MenuPrincipal,
    FooterPrincipal,
    // TituloPrincipal,
  },
  methods: {
    saludarMetodo(nombre) {
      this.nombre = nombre;
    },
  },
  created() {
    console.log("hola");
    this.saludarMetodo("Jeyson");
  },
};
</script>

<style>
</style>