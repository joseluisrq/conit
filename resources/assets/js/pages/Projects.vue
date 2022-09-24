<template>
    <div class="page-wrapper">
        <MenuPrincipal />
        <div class="todo">
            <div class="wpo-breadcumb-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="wpo-breadcumb-wrap">
                                <h2>Nuestros Proyectos</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section class="projects-section">
                <div class="container">
                    <div class="tit" style="text-align:center">
                        <h1>EMPRESAS QUE CONFÍAN EN NOSOTROS</h1>
                    </div>
                    <div class="proyectos" style="text-align:center">
                        <h3>PROYECTOS QUE LOGRAMOS JUNTOS</h3>
                        <div class="proy">
                            <div class="fresnos">

                            </div>
                            <div class="cersa">

                            </div>
                            <div class="itec">

                            </div>
                            <div class="campinia-tours">

                            </div>
                            <div class="chaquicocha">

                            </div>
                        </div>
                    </div>


                </div>
            </section>
            <FooterPrincipal />
        </div>
    </div>
</template>
<script>
import MenuPrincipal from "../components/Menu.vue";
import FooterPrincipal from "../components/Footer.vue"
export default {
    data() {
        return {

        }
    },
    components: {
        MenuPrincipal,
        FooterPrincipal
    }
}
</script>
<style>
.todo {
    background-color: rgb(217, 217, 235);
}

.proy {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1;
}
</style>