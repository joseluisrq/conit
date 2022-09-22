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
        <div class="section-contact">
            <div class="container-fluid">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <h2>CONIT - SOLUCIONES DIGITALES</h2>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="section-info"><br/>
                                        <div class="container">
                                        <div>
                                        <h4>Dirección</h4>
                                        <p>Jr. Dos de Mayo 569/Oficina N°4</p>
                                    </div>
                                    <div>
                                        <div class="cohete">
                                            <h4>Móvil/Whatsapp</h4>
                                            <ul>
                                                <li>910836385</li>
                                                <li>964041249</li>
                                            </ul>
                                        </div>
                                        <div>
                                            <h4>Correo</h4>
                                            <p>info@conit.pe</p>
                                            <h4>Instagram</h4>
                                            <p>@conit.pe</p>
                                            <h4>Facebook</h4>
                                            <p>@conit.pe</p>
                                            <h4>Linkedin</h4>
                                            <p>@conit.pe</p>
                                        </div>
                                        
                                    </div>
                                    <div>
                                        <h4>Horarios</h4>
                                        <p>L-V 8am a 6pm</p>
                                        <p>Sábados: 8:15 am a 6 pm</p>
                                    </div>
                                        </div>
                                    </div>
                                </div>
                                <div claa="col-md-6">
                                    <div class="container">
                                        <h3>Escríbenos un Mensaje</h3>
                                        <form>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nombre</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Escribe tu nombre">
                                        </div><br/>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Escribe tu cmail">
                                        </div><br/>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Celular</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresa tu número de contacto">
                                        </div><br/>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Empresa</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Escribe el nombre de tu empresa">
                                        </div><br/>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Mensaje</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Escribe un mensaje">
                                        </div><br/>
                                        <div class="form-group">
                                            <small id="emailHelp" class="form-text text-muted">Nunca compartiremos tu información con alguien más.</small>
                                        </div><br/>
                                        
                                        <button type="submit" class="btn btn-primary">Enviar</button>
                                    </form><br/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
}
</script>
<style>
    
</style>