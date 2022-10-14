<template>
    <div class="page-wrapper">
        <MenuPrincipal />
        <Titulo titulo="¿Cuándo nos Juntamos?" />
        <section class="junta">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 style="text-align:center; margin-top: 3%;"><b>Cuatro Buenas Razones Para Contactarnos</b>
                        </h3>
                    </div>
                    
                    <div class="col-md-3">
                        <div class="efecto titusA">
                            <h4>Entendemos tus Necesidades</h4>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="efecto titusB">
                            <h4>Somos Profesionales</h4>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="efecto titusA">
                            <h4>Trabajamos Contigo</h4>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="efecto titusB">
                            <h4>Nos Gusta Ayudarte</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
    box-shadow: 0px 1px 10px rgba(0,0,0,0.2);
    cursor: default;
    transition: all 400ms ease;
}
.efecto:hover{
    box-shadow: 5px 5px 20px rgba(0,0,0,0.4);
    transform: translateY(-5%);
}

.titusA {

    text-align: center;
    padding: 20px;
    margin-left: 30px;
    margin-right: 30px;
    margin-top: 50px;
    margin-bottom: 50px;
    border-radius: 30px;
    background-color: #f3ab41;
}


.titusB {

    text-align: center;
    padding: 20px;
    margin-left: 35px;
    margin-right: 35px;
    margin-top: 50px;
    margin-bottom: 50px;
    border-radius: 30px;
    background-color: #024997;
}

h4 {
    color: #fff
}
@media(max-width: 767px) {
    .titusA {
        margin-left: 0px;
        margin-right: 0px;
        margin-bottom: 20px;
    }

    .titusB {
        margin-left: 0px;
        margin-right: 0px;
        margin-top: 20px;
        margin-bottom: 20px;
    }

    .titusC {
        margin-left: 0px;
        margin-right: 0px;
        margin-bottom: 20px;
    }

    .titusD {
        margin-left: 0px;
        margin-right: 0px;
        margin-bottom: 50px;
    }
}
</style>