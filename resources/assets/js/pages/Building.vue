<template>
    <div class="page-wrapper">
        <MenuPrincipal />
        <div class="wpo-breadcumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="wpo-breadcumb-wrap">
                            <h2>Página No Disponible</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="building-section">
            <div class="section-title-s4" style="margin-top:50px; margin-bottom: 0px; text-align: center;">
                <h2>En Construcción...</h2>
            </div>
            <div class="col-md-12 imgn">
                <img src="img/construyendo.png" alt="">
            </div>
        </section>
        <FooterPrincipal />
    </div>
</template>
<script>
import MenuPrincipal from "../components/Menu.vue";
import FooterPrincipal from "../components/Footer.vue";
export default {
    data() {
        return {
        }
    },
    components: {
        MenuPrincipal,
        FooterPrincipal,
    },
}
</script>
<style scoped>
.imgn {
    display: flex;
    /*centrar de manera horizontal*/
    justify-content: center;
    /*centrar de manera vertical*/
    align-items: center;
}

.imgn img {
    width: 350px;
    height: 350px;
}
</style>