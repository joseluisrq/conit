<template>
    <div class="page-wrapper">
        <MenuPrincipal />
        <Titulo titulo="¿Cuándo nos Juntamos?" />
        <section class="junta">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 style="text-align:center"><b>Cuatro buenas Razones Para Contactarnos</b></h3>
                    </div>
                    <div class="col-md-3 tits">
                        <h4>Entendemos tus necesidades</h4>
                    </div>
                    <div class="col-md-3 tits">
                        <h4>Somos Profesionales</h4>
                    </div>
                    <div class="col-md-3 tits">
                        <h4>Trabajamos Contigo</h4>
                    </div>
                    <div class="col-md-3 tits">
                        <h4>Nos Gusta Ayudarte</h4>
                    </div>
                </div>
            </div>
        </section>
        <FooterPrincipal />
    </div>
</template>
<script>
import FooterPrincipal from "../components/Footer.vue";
import MenuPrincipal from "../components/Menu.vue";
import Titulo from "../components/Titulo.vue";
export default {
    data() {
        return {

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
.tits{

    text-align:center;
    padding: 15px 15px;
    background-color: aquamarine;
}
</style>