<template>
    <div class="page-wrapper">
        <MenuPrincipal />
        <Titulo titulo="¿Por Qué Tengo que Confiar?" />


        <FooterPrincipal />
    </div>
</template>
<script>
import FooterPrincipal from "../components/Footer.vue";
import MenuPrincipal from "../components/Menu.vue";
import Titulo from "../components/Titulo.vue";
export default {
    data(){
        return{

        }
    },
    components: {
        MenuPrincipal,
        FooterPrincipal,
        Titulo
    },
}
</script>
<style scoped>
    
</style>