<template >
    <div class="wpo-work-iem">
        <div class="wpo-work-icon-wrap">
            <div class="wpo-work-icon">
                <div class="text-center">
                    <img :src="'img/servicios/'+data.imagen" width="100px" alt="">
                </div>
            </div>
        </div>
        <div class="wpo-work-text">
            <h4>{{data.titulo}}</h4>
            <button @click="cambiarRuta(data.ruta)" class="btn btn-amarillo">{{data.subtitulo}}</button>
        </div>
    </div>
</template>
<script>
export default {
    name: "Servicio",
  props: {
    data:''
  },
  methods: {
    cambiarRuta(ruta) {
        this.$router.push({ path:ruta })
    },
},
}
</script>
<style >
    
</style>