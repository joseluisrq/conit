<template>
    <div class="page-wrapper">
        <MenuPrincipal />
        <div class="todo">
            <Titulo titulo="Nuestros Proyectos" />
            <section class="projects-section">
                <div class="container">
                    <div class="section-title-s4" style="margin-top:50px">
                        <h2>Empresas que Confían en Nosotros</h2>
                        <div class="transparent-text">Crece</div>
                    </div>
                    <div class="container">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="marcoImagen centrar">
                                        <a target="_blank" href="https://clinicalosfresnos.com.pe/"><img src="img/Empresas/fresnos.png" alt="" /></a>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="marcoImagen centrar">
                                        <a target="_blank" href="https://cersa.org.pe/"><img src="img/Empresas/cersa.png" alt="" style="width:225px ; height: 75px;" /></a>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="marcoImagen centrar">
                                        <img src="img/Empresas/itec.png" alt="" style="width:225px ; height: 85px;" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="marcoImagen centrar">
                                        <a target="_blank" href="https://campitours.com/es/"><img src="img/Empresas/camp_tours.png" alt="" /></a>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="marcoImagen centrar">
                                        <img src="img/Empresas/chaquicocha.png" alt="" style="width:260px ; height: 80px;" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="marcoImagen centrar">
                                        <a target="_blank" href="https://deturconsultores.com/"><img src="img/Empresas/detur.png" alt="" style="width:260px ; height: 80px;" /></a>
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
export default {
    data() {
        return {

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