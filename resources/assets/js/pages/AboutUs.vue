<template>
    <div class="page-wrapper">
        <MenuPrincipal />
        <div class="todo">
            <div class="wpo-breadcumb-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="wpo-breadcumb-wrap">
                                <h2>Nosotros</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section class="nosotros">
                <div class="container-fluid">
                    <div class="quienesSomos" style="text-align:center">
                        <h1>¿QUIÉNES SOMOS?</h1><br /><br />
                        <h2>Somos CONIT.pe</h2>
                        <p>Brindamos servicios de soluciones digitales, enfocados en impulsar tu Marca y Empresa al
                            éxito con tecnología y medios digitales.</p>
                        <h6>¡Despega tu Negocio!</h6>
                    </div>

                    <div class="why-select-us">
                        <div style="text-align:center">
                            <h1>¿POR QUÉ ELEGIRNOS?</h1>
                        </div><br />
                        <div class="container ">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="experiencia" style="float:left">
                                            <h3 style="color:#fff;">Experiencia</h3>
                                        </div>
                                        <div class="descripcion1 centrar" style="float:right">
                                            <p class="dp1">Contamos con una amplia experiencia en brindar servicios de Soluciones
                                                Digitales.
                                            </p>
                                        </div>
                                    </div>
                                    <br />
                                    <div class="col-md-12" style="margin-top: 2.2rem !important;">
                                        <div class="analisis" style="float:left">
                                            <h3 style="color:#fff;">Análisis</h3>
                                        </div>
                                        <div class="descripcion2 centrar" style="float:right">
                                            <p>Realizamos un análisis minucioso de la marca, y enfocamos nuestros
                                                esfuerzos para encontrar<br/> oportunidades de éxito.</p>
                                        </div>
                                    </div>
                                    <br />
                                    <div class="col-md-12" style="margin-top: 1.3rem !important;">
                                        <div class="creatividad" style="float:left">
                                            <h3 style="color:#fff;">Creatividad</h3>
                                        </div>
                                        <div class="descripcion3 centrar" style="float:right">
                                            <p class="dp3">Realizamos estrategias creativas y visuales para cada uno de nuestros
                                                proyectos.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                    <section class="v-e">
                        <div class="container">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="equipo centrar">
                                            <h3 style="color:#fff;">Equipo</h3>
                                        </div>
                                        <div class="Eq">
                                            <p class="eqp">Contamos con un equipo altamente creativo e innovador. Comprometidos en crear oportunidades de valor para impulsar tu marca y
                                                empresa,ofreciendo resultados inmediatos. Basándonos en nuestros 4
                                                pilares
                                                de
                                                acción:</p>
                                            
                                            <div class="EqL cohete">
                                                <ul>
                                                    <li>Conectar (Conectamos)</li>
                                                    <li>Analizar (Analizamos)</li>
                                                    <li>Diseñar (Diseñamos)</li>
                                                    <li>Desarrollar (Desarrollamos)</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="valores centrar">
                                            <h3 style="color:#fff;">Valores</h3>
                                        </div>
                                        <div class="Va">
                                            <div class="cohete">
                                                <ul>
                                                    <li>Trabajo en equipo</li>
                                                    <li>Responsabilidad</li>
                                                    <li>Compromiso</li>
                                                    <li>Eficiencia </li>
                                                    <li>Eficacia</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="contenido-V-E">

                            </div>
                        </div>
                    </section>



                    <div class="valor-agregado">

                    </div>

                </div>
            </section>
            <FooterPrincipal />
        </div>

    </div>
</template>
<script>
import FooterPrincipal from "../components/Footer.vue";
import MenuPrincipal from "../components/Menu.vue";
export default {
    data() {
        return {

        }
    },
    components: {
        MenuPrincipal,
        FooterPrincipal,
    }
}
</script>
<style scoped>
/* sections */

.why-select-us {
    margin-top: 100px;
}

.v-e {
    margin-top: 50px;
    margin-bottom: 20px;
}

.contenido-V-E {
    display: flex;
    justify-content: space-between;
}

.todo {
    background-color: rgb(217, 217, 235);
    
}

.quienesSomos {
    margin-top: 50px;
}

h6 {
    display: inline-block;
    position: relative;
    color: darkorange;
    font-family: 'Poppins', sans-serif;
}

h6::after {
    content: "";
    position: absolute;
    width: 0px;
    height: 0px;
    background-color: currentColor;
    top: 0.6em;
    right: 0px;
}

.alinear {
    display: flex;
    justify-content: space-between;
}

.experiencia {
    background-color: #f3ab41;
    text-align: center;
    width: 260px;
    margin-right: 15px;
    padding: 10px;
    border-radius: 20px;
    font-family: 'Roboto', sans-serif;
}
@media(max-width: 767px){
    .experiencia{
        margin-left: 40px;
    }
}

.analisis {
    background-color: #f3ab41;
    text-align: center;
    margin-left: 50px;
    margin-right: 15px;
    width: 260px;
    padding: 10px;
    border-radius: 20px;
    font-family: 'Roboto', sans-serif;
}

@media(max-width: 767px) {
    .analisis {
        margin-left: 40px;
    }
}

.creatividad {
    background-color: #f3ab41;
    text-align: center;
    margin-left: 100px;
    margin-right: 15px;
    width: 260px;
    padding: 10px;
    border-radius: 20px;
    font-family: 'Roboto', sans-serif;
}

@media(max-width: 767px) {
    .creatividad {
        margin-left: 40px;
    }
}


.valores {
    background-color: #024997;
    margin-top: 50px;
    margin-right: 0px;
    float: right;
    width: 300px;
    padding: 10px;
    border-radius: 20px;
    font-family: 'Roboto', sans-serif;
}
@media(max-width: 767px){
    .valores{
        float: none;
    }
}
.Va{
    margin-top: 15px;
    margin-left: 100px;
    float: right;
}
@media(max-width: 767px){
    .Va{
        float: none;
        margin-top: 15px;
        margin-left: 38px;
    }
}

.equipo {
    background-color: #024997;
    margin-top: 50px;
    margin-left: 0px;
    width: 300px;
    padding: 10px;
    border-radius: 20px;
    font-family: 'Roboto', sans-serif;
}
.Eq{
    margin-top: 30px;
}
@media(max-width: 767px){
    .Eq{
        margin-left: 25px;
    }
    .EqL{
        margin-left: 15px;
    }
}

.centrar {
    display: grid;
    align-items: center;
    justify-items: center;
}
@media(max-width: 767px) {
    .centrar {
        margin-left: 18px;
    }
}

.cohete {
    margin-top: 20px;
    margin-right: 90px;
}

.descripcion1 {
    margin-top: 15px;
}

@media(max-width: 767px) {
    .descripcion1 {
        text-align: center;
        margin-right: -136px;
    }
}

.descripcion2 {
    margin-top: 5px;
    margin-right: 10px;
}

@media(max-width: 767px) {
    .descripcion2 {
        text-align: center;
        margin-right: 15px;
    }
}

.descripcion3 {
    margin-top: 15px;
    margin-right: 60px;
}

@media(max-width: 767px) {
    .descripcion3 {
        text-align: center;
        margin-right: 15px;
    }
}

.dp1{
    margin-right: 150px;
}

.eqp{
   text-align:justify
}
@media(max-width: 767px){
    .eqp{
        text-align: unset;
    }
}

</style>
