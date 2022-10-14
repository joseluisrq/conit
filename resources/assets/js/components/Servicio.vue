<template >
    <div class="wpo-work-iem mt-4">
        <div class="efectoS wpo-work-icon-wrap">
            <div class="wpo-work-icon">
                <div class="text-center">
                    <img :src="'img/servicios/'+data.imagen" width="100px" alt="">
                </div>
            </div>
        </div>
        <div class="wpo-work-text">
            <h4>{{data.titulo}}</h4>
            <button @click="cambiarRuta(data.ruta)" class="efecto btn btn-amarillo">{{data.subtitulo}}</button>
        </div>
    </div>
</template>
<script>
export default {
    name: "Servicio",
    props: {
        data: ''
    },
    methods: {
        cambiarRuta(ruta) {
            this.$router.push({ path: ruta })
        },
    },
}
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

.efectoS{
    box-shadow: 5px 5px 20px rgba(0, 0, 0, 0.4);
    cursor: default;
}
</style>