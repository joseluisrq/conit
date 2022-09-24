<template>
  <header id="header" class="wpo-site-header wpo-header-style-1">
    <nav class="navigation navbar navbar-expand-lg navbar-light">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-lg-3 col-md-3 col-3 d-lg-none dl-block">
            <div class="mobail-menu">
              <button type="button" class="navbar-toggler open-btn">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar first-angle"></span>
                <span class="icon-bar middle-angle"></span>
                <span class="icon-bar last-angle"></span>
              </button>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-6">
            <div class="navbar-header">
              <router-link to="/">
                <a class="navbar-brand" href="#"
                ><img src="img/logo_blanco_400_120.png" alt=""
              /></a>
              </router-link>
            </div>
          </div>
          <div class="col-lg-6 col-md-1 col-1">
            <div id="navbar" class="collapse navbar-collapse navigation-holder">
              <button class="menu-close"><i class="ti-close"></i></button>
              <ul class="nav navbar-nav mb-2 mb-lg-0">
                <li><router-link to="/#servicios">Servicios</router-link></li>
                <li><a href="contact.html">Proyectos</a></li>
                <li><router-link to="/nosotros">Nosotros</router-link></li>
                <li><router-link to="/contacto">Contacto</router-link></li>
                  
                
                
                <li style="padding: 35px 20px">
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
            <!-- end of nav-collapse -->
          </div>
        </div>
      </div>
      <!-- end of container -->
    </nav>
  </header>
</template>

<script>
export default {
    name:'MenuPrincipal'
};
</script>

<style>
</style>