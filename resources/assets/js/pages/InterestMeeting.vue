<template>
    <div class="page-wrapper">
        <MenuPrincipal />
        <Titulo titulo="¿Cuándo nos Juntamos?" />
        <section class="junta">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <h3 style="text-align:center; margin-top: 3%;"><b>Cuatro Buenas Razones Para Contactarnos</b>
                        </h3>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="titusA">
                            <h4>Entendemos tus necesidades</h4>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="titusB">
                            <h4>Somos Profesionales</h4>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="titusC">
                            <h4>Trabajamos Contigo</h4>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="titusD">
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


.titusA {

    text-align: center;
    padding: 20px;
    margin-left: 210px;
    margin-right: 90px;
    margin-top: 50px;
    margin-bottom: 20px;
    border-radius: 30px;
    background-color: #f3ab41;
}

.titusB {

    text-align: center;
    padding: 20px;
    margin-left: 90px;
    margin-right: 210px;
    margin-top: 50px;
    margin-bottom: 20px;
    border-radius: 30px;
    background-color: #f3ab41;
}

.titusC {
    text-align: center;
    padding: 20px;
    margin-left: 80px;
    margin-right: 50px;
    margin-top: 20px;
    margin-bottom: 50px;
    border-radius: 30px;
    background-color: #024997;

}

.titusD {
    text-align: center;
    padding: 20px;
    margin-left: 50px;
    margin-right: 80px;
    margin-top: 20px;
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