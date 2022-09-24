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
                        <h1>¿QUIÉNES SOMOS?</h1><br />
                        <h2>Somos CONIT.pe</h2>
                        <p>Brindamos servicios de soluciones digitales, enfocados en impulsar tu Marca y Empresa al
                            éxito con tecnología y medios digitales.</p>
                        <h6>¡Despega tu Negocio!</h6>
                    </div>

                    <div class="why-select-us">
                        <div style="text-align:center">
                            <h1>¿Por qué Elegirnos?</h1>
                        </div><br />
                        <div class="container ">
                            <div class="ex">
                                <div class="experiencia">
                                    <h3 style="color:#fff;">Experiencia</h3>
                                </div>
                                <div class="centrar">
                                    <p>Contamos con una amplia experiencia en brindar servicios de Soluciones Digitales.</p>
                                </div>
                            </div>
                            <br />
                            <div class="an">
                                <div class="analisis">
                                    <h3 style="color:#fff;">Análisis</h3>
                                </div>
                                <div class="centrar">
                                    <p>Realizamos un análisis minucioso de la marca, y enfocamos nuestros esfuerzos para
                                    encontrar oportunidades de éxito.</p>
                                </div>
                            </div>
                            <br />
                            <div class="cr">
                                <div class="creatividad">
                                    <h3 style="color:#fff;">Creatividad</h3>
                                </div>
                                <div class="centrar">
                                    <p>Realizamos estrategias creativas y visuales para cada uno de nuestros proyectos.</p>
                                </div>
                            </div>

                        </div>

                    </div>

                    <section class="v-e">
                        <div class="valores-equipo alinear">
                            <div class="equipo centrar">
                                <h3 style="color:#fff;">Equipo</h3>
                            </div>
                            <div class="valores centrar">
                                <h3 style="color:#fff;">Valores</h3>
                            </div>
                        </div>
                        <div class="contenido-V-E">
                            <div class="Eq">
                                <p>Contamos con un equipo altamente creativo e innovador.</p>
                                <p>Comprometidos en crear oportunidades de valor para impulsar tu marca y
                                    empresa,<br />ofreciendo resultados inmediatos. Basándonos en nuestros 4 pilares de
                                    acción:</p>
                                <div class="cohete">
                                    <ul>
                                        <li>Conectar (Conectamos)</li>
                                        <li>Analizar (Analizamos)</li>
                                        <li>Diseñar (Diseñamos)</li>
                                        <li>Desarrollar (Desarrollamos)</li>
                                    </ul>
                                </div>
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
<style>
/* sections */

.why-select-us {
    margin-top: 50px;
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
    ;
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

.analisis {
    background-color: #f3ab41;
    text-align: center;
    margin-left: 100px;
    margin-right: 15px;
    width: 260px;
    padding: 10px;
    border-radius: 20px;
    font-family: 'Roboto', sans-serif;
}

.creatividad {
    background-color: #f3ab41;
    text-align: center;
    margin-left: 200px;
    margin-right: 15px;
    width: 260px;
    padding: 10px;
    border-radius: 20px;
    font-family: 'Roboto', sans-serif;
}


.valores {
    background-color: #024997;
    margin-top: 50px;
    margin-left: 0px;
    width: 300px;
    padding: 10px;
    border-radius: 20px;
    font-family: 'Roboto', sans-serif;
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

.centrar{
    display: grid;
    align-items: center;
    justify-items: center;
}

.cohete {
    margin-top: 20px;
    margin-right: 90px;
}

.ex{
    display: flex;
}
.an{
    display: flex;
}
.cr{
    display: flex;
}
</style>
