<template>
    <div class="page-wrapper">
        <!-- 
        <div class="preloader">
            <div class="angular-shape">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    -->
        <MenuPrincipal />
        <section class="wpo-hero-section-1">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-6 col-lg-6">
                        <div class="wpo-hero-section-text">
                            <div class="wpo-hero-title">
                                <h2>
                                    <span>
                                        Soluciones <br />
                                        <font style="color:#f3ab41 ;">Innovadoras</font> <br />
                                        para tu negocio
                                    </span>
                                </h2>
                            </div>
                            <div class="btns">
                                <a class="btn btn-amarillo" href="about.html">Comencemos</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right-vec">
                <div class="right-img">
                    <img src="img/hombre_cohete.png" alt="">
                </div>
                <div class="round-1"></div>
                <div class="round-2"></div>
                <div class="round-3"></div>
                <div class="round-4"></div>
            </div>
        </section>
        <section class="wpo-work-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="section-title-s4">
                            <span>Servicios</span>
                            <h2>¿Sabes lo que estás buscando?</h2>
                            <div class="transparent-text">Crece</div>
                        </div>
                    </div>
                </div>
                <div class="wpo-work-wrap">
                    <div class="row">
                        <div class="col col-lg-3 col-md-6 col-12">
                            <Servicio :data="web" />
                        </div>

                        <div class="col col-lg-3 col-md-6 col-12">
                            <Servicio :data="ecomerce" />
                        </div>
                        
                        <div class="col col-lg-3 col-md-6 col-12">
                            <Servicio :data="socialmedia" />
                        </div>

                        <div class="col col-lg-3 col-md-6 col-12">
                            <div class="wpo-work-iem">
                                <div class="wpo-work-icon-wrap">
                                    <div class="wpo-work-icon">
                                        <div class="text-center">
                                            <img src="img/servicios/app_01.png" width="100px" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="wpo-work-text">
                                    <h4>Apps Móviles</h4>
                                    <a href="#" target="_blank" class="btn btn-amarillo">Te van a llevar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row mt-4">
                        <div class="col col-lg-3 col-md-6 col-12">
                            <Servicio :data="crm" />
                        </div>
                        <div class="col col-lg-3 col-md-6 col-12">
                            <div class="wpo-work-iem">
                                <div class="wpo-work-icon-wrap">
                                    <div class="wpo-work-icon">
                                        <div class="text-center">
                                            <img src="img/servicios/erp_01.png" width="100px" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="wpo-work-text">
                                    <h4>ERP</h4>
                                    <p>Procesos empresariales</p>
                                    <a href="#" target="_blank" class="btn btn-amarillo">Control Total</a>
                                </div>
                            </div>
                        </div>
                        <div class="col col-lg-3 col-md-6 col-12">
                            <div class="wpo-work-iem">
                                <div class="wpo-work-icon-wrap">
                                    <div class="wpo-work-icon">
                                        <div class="text-center">
                                            <img src="img/servicios/facturacion_01.png" width="100px" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="wpo-work-text">
                                    <h4>Facturación</h4>
                                    <p>Electrónica</p>
                                    <a href="#" target="_blank" class="btn btn-amarillo">Emite</a>
                                </div>
                            </div>
                        </div>
                        <div class="col col-lg-3 col-md-6 col-12">
                            <div class="wpo-work-iem">
                                <div class="wpo-work-icon-wrap">
                                    <div class="wpo-work-icon">
                                        <div class="text-center">
                                            <img src="img/servicios/software_01.png" width="100px" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="wpo-work-text">
                                    <h4>Software</h4>
                                    <p>a medida</p>
                                    <a href="#" target="_blank" class="btn btn-amarillo">Sigue creciendo</a>
                                </div>
                            </div>
                        </div>
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
import Servicio from "../components/Servicio.vue";
export default {
    name: "Home",
    data() {
        return {
            web: {
                titulo: "Páginas Web",
                subtitulo: "Te van a contactar",
                imagen: "web_01.png",
                ruta: "paginasweb"
            },
            ecomerce: {
                titulo: "Tiendas Online",
                subtitulo: "Te van a comprar",
                imagen: "store_01.png",
                ruta: "tiendaonline"
            },
            socialmedia: {
                titulo: "Social Media",
                subtitulo: "Te van a ver",
                imagen: "social_01.png",
                ruta: "socialmedia"
            },
            crm: {
                titulo: "CRM",
                subtitulo: "Controla tus leads",
                imagen: "crm_01.png",
                ruta: "crm"
            }
        };
    },
    components: {
        MenuPrincipal,
        FooterPrincipal,
        Servicio
    },
    methods: {
        saludarMetodo(nombre) {
            this.nombre = nombre;
        },
    },
    oncreate: {
        
    },
    created() {
        console.log("hola");
        this.saludarMetodo("Jeyson");
    },
};
</script>

<style>

</style>