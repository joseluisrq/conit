<template>
    <div class="page-wrapper">
        <MenuPrincipal />
        <div class="todo">
            <Titulo titulo="Concurso" />
            <section class="contest-section">
                <div class="container-fluid">
                    <div class="infoI">
                        <h4>Información</h4>
                    </div>
                    <div class="formularioD">
                        <h3 style="text-align:center;">Escríbenos</h3>
                        <hr />
                        <form @submit.prevent="enviarMensaje">
                            <div class="form-group">
                                <label for="exampleInputEmail1" style="padding: 5px 10px">Nombre</label>
                                <input v-model="campos.nombre" type="text" class="form-control"
                                    aria-describedby="emailHelp" placeholder="Escribe tu nombre" required>
                            </div><br />
                            <div class="form-group">
                                <label for="exampleInputEmail1" style="padding: 5px 10px">Email</label>
                                <input v-model="campos.email" type="email" class="form-control"
                                    aria-describedby="emailHelp" placeholder="Escribe tu email" required>
                            </div><br />
                            <div class="form-group">
                                <label for="exampleInputEmail1" style="padding: 5px 10px">Celular</label>
                                <input v-model="campos.celular" type="tel" class="form-control"
                                    aria-describedby="emailHelp" placeholder="Ingresa tu número de contacto" required>
                            </div><br />
                            <div class="form-group">
                                <label for="exampleInputEmail1" style="padding: 5px 10px">Empresa</label>
                                <input v-model="campos.empresa" type="text" class="form-control"
                                    aria-describedby="emailHelp" placeholder="Escribe el nombre de tu empresa">
                            </div><br />
                            <div class="form-group">
                                <label for="exampleInputEmail1" style="padding: 5px 10px">¿Cómo quieres tu Página
                                    Web?</label>
                                <textarea v-model="campos.pagina" type="text" class="form-control"
                                    aria-describedby="emailHelp" placeholder="Descríbela" required></textarea>
                            </div><br />

                            <div class="alinear">
                                <button type="submit" class="btn"
                                    style="background-color:#f3ab41; color:#fff;">Inscribirme</button>
                                <Loading :cargando="cargando" />
                            </div>

                        </form><br />
                    </div>
                </div>
            </section>
        </div>
    </div>
</template>
<script>
import emailjs from "@emailjs/browser";
import MenuPrincipal from "../components/Menu.vue";
import FooterPrincipal from "../components/Footer.vue"
import Titulo from "../components/Titulo.vue";
import Loading from "../components/Loading.vue"
export default {
    data() {
        return {
            campos: {
                nombre: '',
                email: '',
                celular: '',
                empresa: '',
                pagina: '',
            },
            cargando: false,
            errores:[]
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
            this.campos = {
                nombre: '',
                email: '',
                celular: '',
                empresa: '',
                pagina: '',
            }
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
            if (this.comprobarCampos(this.campos)) {
                axios
                    .post("/api/participantes/crear", this.campos)
                    .then((response) => {
                        this.limpiarCampos({}),
                        this.$swal({
                            position: "top-end",
                            icon: "success",
                            title: "Fuiste Registrado en el Concurso",
                            showConfirmButton: false,
                            timer: 1000,
                        });
                      
                    })
                    .catch((error) => {
                        this.$swal({
                            position: "top-end",
                            icon: "error",
                            title: "Error de Registro",
                        });
                        if (error.response.status === 422) {
                            this.errores = error.response.data.errors;
                            console.log(this.errores);
                        }
                    })
                    .finally(() => {
                        this.cargando = false;
                    });
            }
            else {
                this.$swal({
                    position: "top-end",
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
h3 {
    color: #fff;
}
.infoI {
    padding-left: 10px;
    padding-top: 50px;
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
</style>