<template>
  <div class="efecto wpo-service-item">
    <div class="wpo-service-icon">
      <img :src="'img/intereses/'+data.imagen" @click="cambiarRuta(data.ruta)" class="img-fluid" alt=""/>
    </div>
    <div class="wpo-service-text">
    <h2><a style="cursor:pointer" @click="cambiarRuta(data.ruta)">{{data.titulo}}</a></h2>
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

<style scoped>
.efecto{
    box-shadow: 0px 1px 10px rgba(0,0,0,0.2);
    cursor: default;
    transition: all 400ms ease;
}
.efecto:hover{
    box-shadow: 5px 5px 20px rgba(0,0,0,0.4);
    transform: translateY(-5%);
}
</style>