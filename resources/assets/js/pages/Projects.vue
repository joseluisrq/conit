<template>
    <div class="page-wrapper">
        <MenuPrincipal />
        <div class="todo">
            <Titulo titulo="Nuestros Proyectos" />
            <section class="projects-section">
                <div class="container">
                    <div class="section-title-s4" style="margin-top:50px">
                        <h2>Empresas que Confían en Nosotros</h2>
                    </div>
                    <div class="container">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-4" v-for="e in empresas" :key="e.id">
                                    <div class="marcoImagen centrar">
                                        <a target="_blank" :href="e.url"><img :src="e.img" alt="" class="img-fluid"  /></a>
                                    </div>
                                </div>
                               
                            </div>
                        </div>

                    </div>
                    <div class="section-title-s4" style="margin-top:50px">
                        <h4><b>¡Súmate a trabajar con Nosotros!</b></h4>
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
import Titulo from "../components/Titulo.vue";
import clientes from "../data/clientes.js";
export default {
    data() {
        return {
           empresas:clientes
        }
    },
    components: {
    MenuPrincipal,
    FooterPrincipal,
    Titulo
}
}
</script>
<style scoped>
.todo {
    background-color: #fff;
}

.proy {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1;
}

.marcoImagen {
    width: 225px;
    height: 225px;
}

.centrar {
    display: grid;
    align-items: center;
    margin-left: 50px;
}

@media(max-width: 767px) {
    .centrar {
        margin-left: 50px;
    }
}


</style>