<template>
    <div class="page-wrapper">
        <MenuPrincipal />
        <div class="todo">

            <Titulo titulo="Nosotros" />
            <section class="nosotros">
                <div class="container-fluid">
                    <div class="quienesSomos" style="text-align:center;">
                        <h1><b>¿QUIÉNES SOMOS?</b></h1><br />
                        <h2>Somos CONIT.pe</h2>
                        <p>Brindamos servicios de soluciones digitales, enfocados en impulsar tu Marca y Empresa al
                            éxito con tecnología y medios digitales.</p>
                        <h6>¡Despega tu Negocio!</h6>
                    </div>

                    <div class="why-select-us">
                        <div style="text-align:center;">
                            <h1><b>¿POR QUÉ ELEGIRNOS?</b></h1>
                        </div><br />

                        <div class="container" style="margin-top:30px;">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="efecto imags">
                                        <img class="imgs" src="img/Experiencia.jpg" alt="">
                                        <div class="capa">
                                            <h3>Experiencia</h3>
                                            <p>Contamos con una amplia experiencia en brindar servicios de
                                                Soluciones
                                                Digitales.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="efecto imags">
                                        <img class="imgs" src="img/Analisis.jpg" alt="">
                                        <div class="capa">
                                            <h3>Análisis</h3>
                                            <p>Contamos con una amplia experiencia en brindar servicios de
                                                Soluciones
                                                Digitales.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="efecto imags">
                                        <img class="imgs" src="img/Creatividad.jpg" alt="">
                                        <div class="capa">
                                            <h3>Creatividad</h3>
                                            <p>Realizamos estrategias creativas y visuales para cada uno de
                                                nuestros
                                                proyectos.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <br />
                    <section class="v-e">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="cardI efecto">
                                        <div class="">
                                            <img class="imgs" src="img/Eq.jpg" alt="">
                                            <div class="contenido">
                                                <h3 style="color:#fff;">Equipo</h3>
                                                <p>Contamos con un equipo altamente creativo e innovador.
                                                    Comprometidos en crear oportunidades de valor para impulsar tu marca
                                                    y
                                                    empresa,ofreciendo resultados inmediatos. Basándonos en nuestros 4
                                                    pilares
                                                    de
                                                    acción:</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="EqL cohete">
                                        <ul>
                                            <li>Conectar (Conectamos)</li>
                                            <li>Analizar (Analizamos)</li>
                                            <li>Diseñar (Diseñamos)</li>
                                            <li>Desarrollar (Desarrollamos)</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="cardD efecto">
                                        <figure>
                                            <img src="img/Valores.jpg" alt="" class="tamanio">
                                        </figure>
                                        <div class="contenido">
                                            <h3 style="color:#fff;">Valores</h3>
                                        </div>
                                    </div>
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
.imags {
    position: relative;
    transition: all 500ms ease-out;

}

.imags .capa {
    position: absolute;
    top: 0;
    width: 100%;
    height: 100%;
    background: rgba(1, 46, 56, 0.7);
    transition: all 500ms ease-out;
    opacity: 0;
    visibility: hidden;
    text-align: center;
}

.imags:hover>.capa {
    opacity: 1;
    visibility: visible;
}

.imags:hover>.capa h3 {
    margin-top: 15%;
    margin-bottom: 15px;
}

.imags .capa h3 {
    color: #fff;
    margin-bottom: 120px;
    transition: all 500ms ease-out;
    margin-top: 30px;
}

.imags .capa p {
    color: #fff;
    margin-bottom: 120px;
    transition: all 500ms ease-out;
    margin-top: 15px;
}

@media(max-width: 767px) {
    .imags {
        margin-top: 15px;
    }
}

.efecto {
    box-shadow: 0px 1px 10px rgba(0, 0, 0, 0.2);
    cursor: default;
    transition: all 400ms ease;
}

.efecto:hover {
    box-shadow: 5px 5px 20px rgba(0, 0, 0, 0.4);
    transform: translateY(-5%);
}


.cardI {
    float: right;
    width: 100%;
    margin: 20px;
    border-radius: 6px;
    overflow: hidden;
    background: #fff;
    box-shadow: 0px 1px 10px rgba(0, 0, 0, 0.2);
    cursor: default;
    transition: all 400 ms ease;
}

.cardD {
    float: left;
    width: 100%;
    margin: 20px;
    border-radius: 6px;
    overflow: hidden;
    background: #fff;
    box-shadow: 0px 1px 10px rgba(0, 0, 0, 0.2);
    cursor: default;
    transition: all 400 ms ease;
}

.cardI .tamanio {
    width: 100%;
}

.cardD .tamanio {
    width: 100%;
}

/* sections */

.why-select-us {
    margin-top: 100px;
}

.why-select-us .imgs {
    width: 100%;
}

.v-e .imgs {
    width: 100%;
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
    background-color: #fff;

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

@media(max-width: 767px) {
    .experiencia {
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

@media(max-width: 767px) {
    .valores {
        float: none;
    }
}

.Va {
    margin-top: 15px;
    margin-left: 100px;
    float: right;
}

@media(max-width: 767px) {
    .Va {
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

.Eq {
    margin-top: 30px;
}

@media(max-width: 767px) {
    .Eq {
        margin-left: 25px;
    }

    .EqL {
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

.dp1 {
    margin-right: 150px;
}

.eqp {
    text-align: justify
}

@media(max-width: 767px) {
    .eqp {
        text-align: unset;
    }
}
</style>
