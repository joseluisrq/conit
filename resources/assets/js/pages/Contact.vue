<template>
    <div class="page-wrapper">
        <MenuPrincipal />
        <Titulo titulo="Contáctanos" />
        <section class="section-contact">
            <div class="container-fluid">
                <div class="infoI">
                    <h4>Dirección</h4>
                    <p style="padding: 5px 10px">Jr. Dos de Mayo 569/Oficina N°4</p>
                    <h4>Móvil/Whatsapp</h4>
                    <ul style="padding: 5px 10px">
                        <li>910836385</li>
                        <li>964041249</li>
                    </ul>
                    <h4>Correo</h4>
                    <p style="padding: 5px 10px">info@conit.pe</p>
                    <div>
                        <h4>Redes Sociales</h4>
                        <ul>
                            <li style="padding: 10px 10px">
                                <span><a target="_blank" href="https://www.facebook.com/conit.pe"><img src="img/redes/facebook.png" alt="" /></a></span>
                                <span><a target="_blank" href="https://www.instagram.com/conit.pe/"><img src="img/redes/instagram.png" alt="" /></a></span>
                                <span><a target="_blank" href="https://www.linkedin.com/company/conitpe/about/"><img src="img/redes//linkedin.png" alt="" /></a></span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="formularioD">
                    <h3 style="text-align:center;">Escríbenos</h3>
                    <hr />
                    <form @submit.prevent="enviarMensaje">
                        <div class="form-group">
                            <label for="exampleInputEmail1" style="padding: 5px 10px">Nombre</label>
                            <input v-model="campos.nombre" type="text" class="form-control" aria-describedby="emailHelp"
                                placeholder="Escribe tu nombre" required>
                        </div><br />
                        <div class="form-group">
                            <label for="exampleInputEmail1" style="padding: 5px 10px">Email</label>
                            <input v-model="campos.email" type="email" class="form-control" aria-describedby="emailHelp"
                                placeholder="Escribe tu email" required>
                        </div><br />
                        <div class="form-group">
                            <label for="exampleInputEmail1" style="padding: 5px 10px">Celular</label>
                            <input v-model="campos.numero" type="number" class="form-control"
                                aria-describedby="emailHelp" placeholder="Ingresa tu número de contacto" required>
                        </div><br />
                        <div class="form-group">
                            <label for="exampleInputEmail1" style="padding: 5px 10px">Empresa</label>
                            <input v-model="campos.empresa" type="text" class="form-control"
                                aria-describedby="emailHelp" placeholder="Escribe el nombre de tu empresa">
                        </div><br />
                        <div class="form-group">
                            <label for="exampleInputEmail1" style="padding: 5px 10px">Mensaje</label>
                            <textarea v-model="campos.mensaje" type="text" class="form-control"
                                aria-describedby="emailHelp" placeholder="Escribe un mensaje" required></textarea>
                        </div><br />
                        <div class="form-group">
                            <small id="emailHelp" class="form-text text-white">Nunca compartiremos tu información con
                                alguien más.</small>
                        </div><br />
                        <div class="alinear">
                            <button type="submit" class="btn" style="background-color:#f3ab41; color:#fff;">Enviar
                            Mensaje</button>
                            <Loading :cargando="cargando" />
                        </div>
                        
                    </form><br />
                </div>
            </div>
        </section>
        <FooterPrincipal />
    </div>
</template>
<script>
import emailjs from "@emailjs/browser";
import FooterPrincipal from "../components/Footer.vue";
import MenuPrincipal from "../components/Menu.vue";
import Loading from "../components/Loading.vue"
import Titulo from "../components/Titulo.vue";
export default {
    data() {
        return {
            campos: {
                nombre: '',
                email: '',
                numero: '',
                empresa: '',
                mensaje: '',
            },
            cargando: false,
        }
    },
    components: {
    MenuPrincipal,
    FooterPrincipal,
    Loading,
    Titulo
},
    methods: {
        limpiarCampos() {
            this.campos = {
                nombre: '',
                email: '',
                numero: '',
                empresa: '',
                mensaje: '',
            }
        },
        comprobarCampos(c) {
            let ct = 0
            if (c.nombre == '') ct = 1;
            else if (c.email == '') ct = 1;
            else if (c.numero == '') ct = 1;
            else if (c.mensaje == '') ct = 1;

            if (ct == 0) {
                return true;
            } else { return false; }

        },
        enviarMensaje() {
            this.cargando = true;
            if (this.comprobarCampos(this.campos)) {
                emailjs.init('Q9byHE64YoqDzOmS3');
                var templateParams = {
                    to_nombre: this.campos.nombre,
                    to_email: this.campos.email,
                    to_numero: this.campos.numero,
                    to_empresa: this.campos.empresa,
                    to_mensaje: this.campos.mensaje,
                };

                emailjs.send('service_ouyhmdh', 'template_jmi7cec', templateParams)
                    .then((response) => {
                        console.log(response);
                        this.$swal({
                            position: "top-end",
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
                        this.limpiarCampos();
                    });
            }
            else{
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
ul {
    list-style: none;
}

h3 {
    color: #fff;
}

.section-contact {
    background-color: rgb(217, 217, 235);
    display: flex;
    justify-content: space-between;
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