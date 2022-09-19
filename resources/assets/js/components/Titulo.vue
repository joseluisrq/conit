<template>
  <div>
    <h1 class="text-center rojo">{{ titulo }}</h1>
    <h4  class="text-center">{{ subtitulo }}</h4>
  </div>
</template>

<script>
export default {
  name: "TituloPrincipal",
  props: {
    titulo: "",
    subtitulo: "",
  },
};
</script>

<style scoped>
    .rojo{
        color:red;
    }
</style>