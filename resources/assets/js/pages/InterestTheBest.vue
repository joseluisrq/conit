<template>
    <div class="page-wrapper">
        <MenuPrincipal />
        <Titulo titulo="¿Por Qué Son Los Mejores Para Mí?" />
        <div class="container fluid">
            <div class="row">
                <div class="col-md-6">
                    <h3>Por la Innovación</h3>
                    <span>Si en un año estás desactualizado, estás fuera del juego. El mundo cambia rápido y el
                        mundo digital mucho más.
                        Para brindarte un servicio rentable siempre vamos un paso adelante a la
                        tendencia.</span>
                </div>
                <div class="col-md-6">
                    <h3>imagen</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h3>imagen</h3>
                </div>
                <div class="col-md-6">
                    <h3>Por el trabajo en equipo</h3>
                    <span>Muchos cerebros son mejores que uno (tú eres parte del equipo) con una sola misión, de dar un
                        servicio rentable.
                        No nos enfocamos en los entregables, sino en hacer que tu inversión sea rentable.</span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h3>Por nuestro enfoque</h3>
                    <span>Es CRO que significa optimización de la tasa de conversión. Lo que significa, que el costo de
                        un cliente/ cliente potencial
                        será lo menor posible, y así podrás tener más utilidades.</span>
                </div>
                <div class="col-md-6">
                    <h3>imagen</h3>
                </div>
            </div>
        </div>

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
.innovacion {
    display: flex;
}
</style>