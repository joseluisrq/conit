<template>
    <div class="page-wrapper">
        <MenuPrincipal />
        <div class="wpo-breadcumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="wpo-breadcumb-wrap">
                            <h2>Contáctanos</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                            <span
                                ><a href="contact.html"
                                ><img src="img/redes/facebook.png" alt="" /></a
                            ></span>
                            <span
                                ><a href="contact.html"
                                ><img src="img/redes/instagram.png" alt="" /></a
                            ></span>
                            <span
                                ><a href="contact.html"
                                ><img src="img/redes//linkedin.png" alt="" /></a
                            ></span>
                        </li>
                    </ul>
                </div>
                </div>
                <div class="formularioD">
                    <h3 style="text-align:center;">Escríbenos</h3><hr/>
                    <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1" style="padding: 5px 10px">Nombre</label>
                        <input v-model="nombre" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Escribe tu nombre">
                    </div><br/>
                    <div class="form-group">
                        <label for="exampleInputEmail1" style="padding: 5px 10px">Email</label>
                        <input v-model="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Escribe tu email">
                    </div><br/>
                    <div class="form-group">
                        <label for="exampleInputEmail1" style="padding: 5px 10px">Celular</label>
                        <input v-model="numero" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresa tu número de contacto">
                    </div><br/>
                    <div class="form-group">
                        <label for="exampleInputEmail1" style="padding: 5px 10px">Empresa</label>
                        <input v-model="nombreEmpresa" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Escribe el nombre de tu empresa">
                    </div><br/>
                    <div class="form-group">
                        <label for="exampleInputEmail1" style="padding: 5px 10px">Mensaje</label>
                        <textarea v-model="mensaje" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Escribe un mensaje"></textarea>
                    </div><br/>
                    <div class="form-group">
                        <small id="emailHelp" class="form-text text-muted">Nunca compartiremos tu información con alguien más.</small>
                    </div><br/>
                    
                    <button type="submit" class="btn" style="background-color:#f3ab41; color:#fff">Enviar Mensaje</button>
                    </form><br/>
                </div>
            </div>
        </section>
        <FooterPrincipal />
    </div>
</template>
<script>
    import FooterPrincipal from "../components/Footer.vue";
    import MenuPrincipal from "../components/Menu.vue";
export default {
    data(){
    return{
        
    }
},
components: {
    MenuPrincipal,
    FooterPrincipal,
},
campos: {
    nombre:'',
    email:'',
    numero:'',
    nombreEmpresa:'',
    mensaje:''
}
}
</script>
<style>

ul{
    list-style: none;
}

h3{
    color: #fff;
}
.section-contact{
    background-color: rgb(217, 217, 235);
    display: flex;
    justify-content: space-between;
}
.infoI{
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
@media(max-width: 767px){
    .infoI{
        text-align: center;
    }
}

.formularioD{
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
    border: rgb(95, 143, 182) solid 3px;
    border-radius: 20px;
    height: auto;
    color: #fff;
}
@media (max-width: 767px){
    .formularioD{
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

.centrar{
    display:grid;
    align-items: center;
    justify-items: center;
}

</style>