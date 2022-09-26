<template>
    <div class="page-wrapper">
        <MenuPrincipal />
        <div class="wpo-breadcumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="wpo-breadcumb-wrap">
                            <h2>Building</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="building-section">
            <div class="col-md-12">
                <img src="img/building.png" alt="">
            </div>
            <div class="section-title-s4" style="margin-top:50px; text-align: center;">
                <h2>En Construcción...</h2>
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
<style>

</style>