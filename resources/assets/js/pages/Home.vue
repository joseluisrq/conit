<template>
  <div class="row">
    <div class="col-md-12">
      <TituloPrincipal :titulo="titulo" :subtitulo="subtitulo" />
    </div>
    <div class="col-md-12">
      <h1>Hola {{ nombre }}</h1>
      <button class="btn btn-danger" @click="saludarMetodo('Valeria')">
        Siguiente
      </button>
      <div>
        <span v-for="(c, index) in colaboradores_conit" :key="index">
          <h1 v-if="c.tipo == 1">Hola Ingeniero {{ c.nombre }}</h1>
          <h1 v-else-if="c.tipo == 2">Hola licenciada {{ c.nombre }}</h1>
          <h1 v-else>Hola {{ c.nombre }}</h1>

          <h4 class="text-info" v-show="c.profesion == 'ing'" v-text="c"></h4>
        </span>
      </div>
    </div>
    <div class="col-md-12">
      <FooterPrincipal />
    </div>
  </div>
</template>

<script>
import FooterPrincipal from "../components/Footer.vue";
import TituloPrincipal from "../components/Titulo.vue";
export default {
  name: "Home",
  data() {
    return {
      titulo:'Home',
      subtitulo:'Servicios',
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
    FooterPrincipal,
    TituloPrincipal,
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