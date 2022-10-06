<template>
    <div class="page-wrapper">
        <MenuPrincipal />
        <div class="row">
            <Titulo titulo="Concurso CONIT" />
            <section class="contest-section">
                <div class="container-fluid">
                    <div class="infoI">
                        <h2 style="color:#024997">¡Es tu Momento!</h2><br />
                        <p>Participa del sensacional sorteo de una Página Web<br />para tu empresa o proyecto.</p>
                        <h4>¡Sí! es totalmente GRATIS.</h4>
                        <br />
                        <h3 style="color:#024997">Incluye</h3>
                        <div class="cohete">
                            <ul>
                                <li><b>Hosting + Dominio.com</b> por un año.</li>
                            </ul>
                        </div>
                        <br />
                        <p>Tan sólo tienes que seguir los siguientes pasos para participar:</p>
                        <div class="cohete">
                            <ul>
                                <li>Síguenos en nuestro <a href="https://www.facebook.com/conit.pe"
                                        target="_blank"><b>Facebook</b></a> e <a
                                        href="https://www.instagram.com/conit.pe/" target="_blank"><b>Instagram</b></a>.
                                </li>
                                <li>Comparte la publicación del concurso en tus redes sociales y etiquétanos.</li>
                                <li>Además, debes etiquetar a 2 amigos.</li>
                                <li>Regístrate en nuestro formulario.</li>
                            </ul>
                            <br />
                            <p><b>Una vez realizados los pasos, estarás en la lista de participantes.</b></p>
                        </div>
                        <div>
                            <h4>Nuestras Redes Sociales</h4>
                            <ul>
                                <li style="padding: 10px 10px">
                                    <span><a target="_blank" href="https://www.facebook.com/conit.pe"><img
                                                src="img/redes/facebook.png" alt="" /></a></span>
                                    <span><a target="_blank" href="https://www.instagram.com/conit.pe/"><img
                                                src="img/redes/instagram.png" alt="" /></a></span>
                                    <span><a target="_blank" href="https://www.linkedin.com/company/conitpe/about/"><img
                                                src="img/redes//linkedin.png" alt="" /></a></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="formularioD">
                        <h3 style="text-align:center;">Formulario de Registro</h3>
                        <hr />
                        <form @submit.prevent="enviarMensaje">
                            <div class="form-group">
                                <label style="padding: 5px 10px">Nombre</label>
                                <input v-model="nombre" type="text" class="form-control" placeholder="Escribe tu nombre"
                                    required>
                            </div><br />
                            <div class="form-group">
                                <label style="padding: 5px 10px">Email</label>
                                <input v-model="email" type="email" class="form-control" placeholder="Escribe tu email"
                                    required>
                            </div><br />
                            <div class="form-group">
                                <label style="padding: 5px 10px">Celular</label>
                                <input v-model="celular" type="tel" class="form-control"
                                    placeholder="Ingresa tu número de contacto" required>
                            </div><br />
                            <div class="form-group">
                                <label style="padding: 5px 10px">Empresa</label>
                                <input v-model="empresa" type="text" class="form-control"
                                    placeholder="Escribe el nombre de tu empresa">
                            </div><br />
                            <div class="form-group">
                                <label for="exampleInputEmail1" style="padding: 5px 10px">¿Cómo quieres tu Página
                                    Web?</label>
                                <textarea v-model="pagina" type="text" class="form-control" placeholder="Descríbela"
                                    required></textarea>
                            </div><br />
                            <div>
                                <p class="text-center text-white" v-for="(e,index) in errores" :key="index">{{e}}</p>
                            </div>
                            <div class="alinear">
                                <button type="submit" class="btn"
                                    style="background-color:#f3ab41; color:#fff;">Inscribirme</button>
                                <Loading :cargando="cargando" />
                            </div>
                        </form><br />
                    </div>
                    <div class="fecha">
                        <span><b>Sorteo y anuncio del ganador Sábado 22 de octubre a las 4:00 pm</b></span>
                    </div>

                </div>
            </section>
        </div>
        <div class="row mt-4">
            <br /><br />
        </div>
    </div>
</template>
<script>
import MenuPrincipal from "../components/Menu.vue";
import FooterPrincipal from "../components/Footer.vue"
import Titulo from "../components/Titulo.vue";
import Loading from "../components/Loading.vue"
export default {
    data() {
        return {
            nombre: '',
            email: '',
            celular: '',
            empresa: '',
            pagina: '',
            cargando: false,
            errores: []
        }
    },
    components: {
        MenuPrincipal,
        FooterPrincipal,
        Titulo,
        Loading
    },
    methods: {
        limpiarCampos() {
            this.nombre = ''
            this.email = ''
            this.celular = ''
            this.empresa = ''
            this.pagina = ''
        },
        comprobarCampos(c) {
            let ct = 0
            if (c.nombre == '') ct = 1;
            else if (c.email == '') ct = 1;
            else if (c.celular == '') ct = 1;
            else if (c.pagina == '') ct = 1;

            if (ct == 0) {
                return true;
            } else { return false; }

        },
        enviarMensaje() {
            this.cargando = true;
            let campos={};
            campos = {
                nombre: this.nombre,
                email: this.email,
                celular: this.celular,
                empresa: this.empresa,
                pagina: this.pagina,
            }
            if (this.comprobarCampos(campos)) {
                axios
                    .post("/api/participantes/crear", campos)
                    .then((response) => {
                        this.limpiarCampos({}),
                            this.$swal({
                                position: "center",
                                icon: "success",
                                title: "Fuiste Registrado en el Concurso",
                                showConfirmButton: false,
                                timer: 3000,
                            });
                        this.errores = []

                    })
                    .catch((error) => {
                        this.$swal({
                            position: "center",
                            icon: "error",
                            title: "Error de Registro",
                        });
                        if (error.response.status === 422) {
                            this.errores = error.response.data.errors;

                        }
                    })
                    .finally(() => {
                        this.cargando = false;
                    });
            }
            else {
                this.$swal({
                    position: "center",
                    icon: "error",
                    title: "Datos Incompletos",
                    showConfirmButton: false,
                    timer: 1000,
                });
                this.cargando = false;
            }



        }
    }
}
</script>

<style scoped>
.fecha {
    margin-left: -15px;
    position: relative;
    float: Left;
    margin-top: 3px;
}

h3 {
    color: #fff;
}

ul {
    list-style: none;
}

@media(max-width: 767px) {
    ul {
        text-align: justify;
    }
}

.infoI {
    padding-left: 0px;
    padding-top: 35px;
    margin-left: 200px;
    margin-right: 10px;
    margin-top: 50px;
    float: left;
    position: relative;
    width: 45%;
    height: auto;
}

@media(max-width: 767px) {
    .infoI {
        text-align: center;
        margin-left: 97px;
    }
}

.formularioD {
    background-color: #024997;
    padding-top: 20px;
    padding-left: 10px;
    padding-right: 10px;
    padding-bottom: 0px;

    margin-top: 30px;
    /* margin-left: 150px; */
    margin-bottom: 30px;
    position: relative;
    float: Left;
    width: 30%;
    border: rgb(29, 35, 41) solid 3px;
    border-radius: 20px;
    height: auto;
    color: #fff;
}

@media (max-width: 767px) {
    .formularioD {
        padding-top: 20px;
        padding-left: 10px;
        padding-right: 10px;
        padding-bottom: 5px;
        width: 100%;
        border: rgb(22, 107, 177) solid 3px;
        border-radius: 20px;
        height: auto;
    }
}

.centrar {
    display: grid;
    align-items: center;
    justify-items: center;
}

.alinear {
    display: flex;
}

p {
    color: #202325;
}

li {
    color: #202325;
}
</style>