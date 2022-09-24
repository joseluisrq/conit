<template>
  <div class="wpo-service-item">
    <div class="wpo-service-icon">
      <img :src="'img/intereses/'+data.imagen" class="img-fluid" alt="" />
    </div>
    <div class="wpo-service-text">
      <h2><a href="service-single.html">{{data.titulo}}</a></h2>
    </div>
  </div>
</template>

<script>
export default {
  name: "interes",
  props: {
    data: "",
  },
  methods: {
    cambiarRuta(ruta) {
      this.$router.push({ path: ruta });
    },
  },
};
</script>

<style>
</style>