<template>
  <div class="row">
    <div
      class="col-lg-3 col-md-6 col-12"
      v-for="(data, index) in interes"
      :key="index"
    >
      <div class="efecto wpo-service-item">
        <div class="wpo-service-icon">
          <img
            :src="'img/intereses/' + data.imagen"
            @click="cambiarRuta(data.ruta)"
            class="img-fluid"
            alt=""
          />
        </div>
        <div class="wpo-service-text">
          <h2>
            <a style="cursor: pointer" @click="cambiarRuta(data.ruta)">{{
              data.titulo
            }}</a>
          </h2>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "interes",
  data() {
    return {
      interes: [
        {
          titulo: "¿Quiénes somos?",
          imagen: "1_somos.png",
          ruta: "nosotros",
        },
        {
          titulo: "¿Por qué son los mejores para mí?",
          imagen: "2_mejores.png",
          ruta: "losMejoresParaMi",
        },
        {
          titulo: "¿Por qué tengo que confiar?",
          imagen: "3_confiar.png",
          ruta: "proyectos",
        },
        {
          titulo: "¿Cuándo nos juntamos?",
          imagen: "4_juntarnos.png",
          ruta: "junta",
        },
      ],
    };
  },
  methods: {
    cambiarRuta(ruta) {
      this.$router.push({ path: ruta });
    },
  },
};
</script>

<style scoped>
.efecto {
  box-shadow: 0px 1px 10px rgba(0, 0, 0, 0.2);
  cursor: default;
  transition: all 400ms ease;
}
.efecto:hover {
  box-shadow: 5px 5px 20px rgba(0, 0, 0, 0.4);
  transform: translateY(-5%);
}
</style>