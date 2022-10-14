<template>
  <div class="row">
    <div
      class="col-lg-3 col-md-6 col-12"
      v-for="(data, index) in negocio"
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
  name: "negocio",
  data() {
    return {
      negocio: [
        {
          titulo: "Emprendedor",
          imagen: "1_emprendedor.png",
          ruta: "building",
        },
        {
          titulo: "Empresario que recién comienza",
          imagen: "2_empieza.png",
          ruta: "building",
        },
        {
          titulo: "Profesional que representa a una gran empresa",
          imagen: "3_representa.png",
          ruta: "building",
        },
        {
          titulo: "Gerente de mi propio negocio",
          imagen: "4_gerente.png",
          ruta: "building",
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