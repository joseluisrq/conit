<template>
    <div class="form">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="marcoForm">
                        <div class="col-md-12">
                            <h3 class="titulO" style="margin-bottom:20px;"><b>¿Necesitas nuestra ayuda para lograr algo
                                    genial?</b></h3>
                        </div>
                        <div class="col-md-6 imgn">
                            <img src="img/Companiero.png" alt="">
                        </div>
                        <form @submit.prevent="enviarMensaje">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="gruposFI">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="letrasLabel">Nombre</label>
                                            <input v-model="nombre" type="text" class="form-control"
                                                placeholder="Escribe tu nombre" required>
                                        </div>
                                    </div>
                                </div>
                                <br />
                                <div class="col-md-6">
                                    <div class="gruposFD">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="letrasLabel emaiL">Email</label>
                                            <input v-model="email" type="email" class="form-control"
                                                placeholder="Escribe tu email" required>
                                        </div><br />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="gruposFI">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="letrasLabel">Celular</label>
                                            <input v-model="numero" type="tel" class="form-control"
                                                placeholder="Ingresa tu número de contacto" required>
                                        </div><br />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="gruposFD">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="letrasLabel">Empresa</label>
                                            <input v-model="empresa" type="text" class="form-control"
                                                placeholder="Escribe el nombre de tu empresa">
                                        </div><br />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mensajE">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="letrasLabel">Mensaje</label>
                                            <textarea style="width: 95%" v-model="mensaje" type="text"
                                                class="form-control" placeholder="Escribe un mensaje"
                                                required></textarea>
                                        </div><br />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mensajE">
                                        <div class="form-check">
                                            <input v-model="checkbox" type="checkbox" class="form-check-input"
                                                id="exampleCheck1">
                                            <label style="color:#fff" class="form-check-label" for="exampleCheck1">He
                                                leído y acepto los Términos y Condiciones</label>
                                        </div><br />
                                        <div class="alinear">
                                            <button type="submit" class="btn"
                                                style="background-color:#f3ab41; color:#fff;">Enviar
                                                Mensaje</button>
                                            <Loading :cargando="cargando" />
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import emailjs from "@emailjs/browser";
import Loading from './Loading.vue';

export default {
    name: 'FormularioPrincipal',
    data() {
        return {
            nombre: '',
            email: '',
            numero: '',
            empresa: '',
            mensaje: '',
            checkbox: false,
            cargando: false,
        }
    },
    components: {
        Loading,
    },
    methods: {
        limpiarCampos() {
            this.nombre = ''
            this.email = ''
            this.numero = ''
            this.empresa = ''
            this.mensaje = ''
        },
        comprobarCampos(c) {
            let ct = 0
            if (c.nombre == '') ct = 1;
            else if (c.email == '') ct = 1;
            else if (c.numero == '') ct = 1;
            else if (c.mensaje == '') ct = 1;
            else if (c.checkbox == false) ct = 1;

            if (ct == 0) {
                return true;
            } else { return false; }

        },
        enviarMensaje() {
            this.cargando = true;
            let campos = {};
            campos = {
                nombre: this.nombre,
                email: this.email,
                numero: this.numero,
                empresa: this.empresa,
                mensaje: this.mensaje,
                checkbox: this.checkbox,
            }
            if (this.comprobarCampos(campos)) {
                emailjs.init('Q9byHE64YoqDzOmS3');
                var templateParams = {
                    to_nombre: this.nombre,
                    to_email: this.email,
                    to_numero: this.numero,
                    to_empresa: this.empresa,
                    to_mensaje: this.mensaje,
                };

                emailjs.send('service_ouyhmdh', 'template_jmi7cec', templateParams)
                    .then((response) => {
                        console.log(response);
                        this.$swal({
                            position: "center",
                            icon: "success",
                            title: "Correo Enviado",
                            showConfirmButton: false,
                            timer: 1000,
                        });
                    })
                    .catch((err) => {
                        console.error(err);
                    })
                    .finally(() => {
                        this.cargando = false;
                        this.$router.go()
                        this.limpiarCampos();
                    });
            }
            else {
                if (this.checkbox == false) {
                    this.$swal({
                        position: "center",
                        icon: "error",
                        title: "Marque la casilla de Términos y Condiciones",
                        showConfirmButton: false,
                        timer: 2000,
                    });
                } else {
                    this.$swal({
                        position: "center",
                        icon: "error",
                        title: "Datos Incompletos",
                        showConfirmButton: false,
                        timer: 1000,
                    });

                }
                this.cargando = false;
            }



        }
    }
}

</script>
<style scoped>
.marcoForm {
    background-color: #024997;
    padding: 36px;
    margin-bottom: 50px;
}

.form-control {
    display: block;
    width: 70%;
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    border-radius: 0.25rem;
    transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
}

.gruposFI {
    margin-left: 235px;
    margin-right: -235px;
}

.gruposFD {
    margin-left: 100px;
    margin-right: -150px;
}

.letrasLabel {
    padding: 5px 10px;
    color: #fff
}

.mensajE {
    margin-left: 237px;
}

.titulO {
    color: #fff;
    text-align: center;
    margin-bottom: 20px;
}

.imgn img {
    padding: 10px;
    margin: 10px;
    margin-right: -190px;
    width: 350px;
    height: 350px;
    float: left;
}

@media(max-width: 767px) {
    .form-control {
        width: 50%;
    }

    .gruposFI {
        margin-left: -10px;
        margin-right: -310px;
    }

    .gruposFD {
        margin-left: -10px;
        margin-right: -310px;
    }

    .mensajE {
        margin-left: -10px;
        margin-right: -20px;
    }

    .imgn img {
        display: none;
    }

    .marcoForm .mensajE .alinear {
        display: flex;
    }

    .gruposFD .emaiL {
        margin-top: 20px;
    }
}
</style>