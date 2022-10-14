<template>
    <div class="page-wrapper">
        <MenuPrincipal />
        <Titulo titulo="¿Por Qué Son Los Mejores Para Mí?" />
        <div class="container fluid">
            <section class="Informacion-Inicial" style="margin-top:2%">
                <div class="row">
                    <div class="col-md-6">
                        <div class="cajaInfo">
                            <h3 class="titI"><b>Por la Innovación</b></h3><br />
                            <span class="infoP">Si en un año estás desactualizado, estás fuera del juego. El mundo
                                cambia rápido y el
                                mundo digital mucho más.
                                Para brindarte un servicio rentable siempre vamos un paso adelante a la
                                tendencia.</span>
                        </div>
                    </div>
                    <div class="col-md-6 imgEnf">
                        <img src="img/Innovacion.jpg" alt="" class="efecto imagenCircular">
                    </div>
                </div>
                <div class="row">
                    <div class="col order-sm-2">
                        <div class="cajaInfo">
                            <h3 class="titD"><b>Por el trabajo en equipo</b></h3><br />
                            <span class="infoP">Muchos cerebros son mejores que uno (tú eres parte del equipo) con una
                                sola misión, de
                                dar
                                un
                                servicio rentable.
                                No nos enfocamos en los entregables, sino en hacer que tu inversión sea rentable.</span>
                        </div>
                    </div>
                    <div class="col order-sm-1 imgEnf">
                        
                            <img src="img/Equipo.jpg" alt="" class="efecto imagenCircular">
                       
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="cajaInfo">
                            <h3 class="titI"><b>Por nuestro enfoque</b></h3><br />
                            <span class="infoP">Es CRO que significa optimización de la tasa de conversión. Lo que
                                significa, que el
                                costo
                                de
                                un cliente/ cliente potencial
                                será lo menor posible, y así podrás tener más utilidades.</span>
                        </div>
                    </div>
                    <div class="col-md-6 imgEnf">
                        <img src="img/Enfoque.jpg" alt="" class="efecto imagenCircular">
                    </div>
                </div>
            </section>
            <br />
            <section class="Metodologias">
                <div class="row">
                    <h2 style="text-align:center"><b>¿Cómo lo hacemos?</b></h2>
                    <div id="DTH" class="col-md-6">
                        <div class="TH">
                            <h3 style="text-align:center ; color:#fff">Design Thinking</h3>
                            <span class="infoM">La manera de entender lo que un usuario necesita, y según eso planteamos
                                las mejores
                                soluciones.</span>
                        </div>
                    </div>
                    <div id="SCRUM" class="col-md-6">
                        <div class="SC">
                            <h3 style="text-align:center; color:#fff">SCRUM</h3>
                            <span class="infoM">Así aseguramos que tu proyecto va en buen camino, y entendemos qué más
                                podemos
                                mejorar.</span>
                        </div>
                    </div>
                </div>
            </section>
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
.efecto{
    box-shadow: 5px 5px 20px rgba(0, 0, 0, 0.4);
}
.imgEnf {
    display: flex;
    /*centrar de manera horizontal*/
    justify-content: center;
    /*centrar de manera vertical*/
    align-items: center;
}

@media(max-width: 767px) {
    .pasarAbajo .imagenCircular {
        float: right;
    }
}

.titD {
    text-align: right;
}

.titI {
    text-align: left;
}

@media(max-width: 767px) {
    .titD {
        text-align: center;
    }

    .titI {
        text-align: center;
    }
}

.imagenCircular {
    width: 300px;
    height: 300px;
    border-radius: 50%;
    
}

.Metodologias {
    margin-top: 50px;
}

.TH {
    margin-top: 60px;
    margin-left: 40px;
    margin-right: 40px;
    margin-bottom: 40px;
    border-radius: 30px;
    padding: 20px 58px;
    background-color: #024997;
}

.SC {
    margin-top: 60px;
    margin-left: 50px;
    margin-right: 40px;
    margin-bottom: 40px;
    border-radius: 30px;
    padding: 20px 58px;
    background-color: #f3ab41;
}

.cajaInfo {
    margin-top: 85px;
    margin-left: 61px;
    margin-right: 61px;
    margin-bottom: 85px;
}
@media(max-width: 767px) {
    .cajaInfo{
        margin-left:10px;
        margin-right:10px;
        text-align: justify;
    }
}

.infoM {
    color: #fff;
    text-align: justify;
}

.infoP {
    text-align: justify;
    color: #000;
    font-size: 120%;
}


.innovacion {
    display: flex;
}
</style>