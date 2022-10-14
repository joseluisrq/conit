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
                <a class="navbar-brand" href="#"><img src="img/logo_blanco_400_120.png" alt="" /></a>
              </router-link>
            </div>
          </div>
          <div class="col-lg-9 col-md-6 col-6">
            <div id="navbar" class="collapse navbar-collapse navigation-holder">
              <button class="menu-close"><i class="ti-close"></i></button>
              <ul class="nav navbar-nav mb-2 mb-lg-0">
                <li>
                  <router-link to="/servicios">Servicios</router-link>
                </li>
                <li>
                  <router-link to="/proyectos">Proyectos</router-link>
                </li>
                <li>
                  <router-link to="/nosotros">Nosotros</router-link>
                </li>
                <li>
                  <router-link to="/contacto">Contacto</router-link>
                </li>
                <li style="padding: 35px 20px;">
                  <span>
                    <a target="_blank" href="https://www.facebook.com/conit.pe"
                      ><img src="img/redes/facebook.png" alt="" /></a
                  ></span>
                  <span>
                    <a
                      target="_blank"
                      href="https://www.instagram.com/conit.pe/"
                      ><img src="img/redes/instagram.png" alt="" /></a
                  ></span>
                  <span
                    ><a
                      target="_blank"
                      href="https://www.linkedin.com/company/conitpe/"
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
  name: 'MenuPrincipal',
  mounted() {
    this.toggleMobileNavigation();
  },
  methods: {
    toggleMobileNavigation() {
      var navbar = $(".navigation-holder");
      var openBtn = $(".mobail-menu .open-btn");
      var xbutton = $(".mobail-menu .navbar-toggler");

      openBtn.on("click", function (e) {
        e.stopImmediatePropagation();
        navbar.toggleClass("slideInn");
        xbutton.toggleClass("x-close");
        return false;
      })

      $(window).on("resize", function() {
        toggleClassForSmallNav();
        //smallNavFunctionality();

        clearTimeout($.data(this, 'resizeTimer'));
        $.data(this, 'resizeTimer', setTimeout(function() {
            smallNavFunctionality();
        }, 200));
    });
    }
    
  }

};
</script>

<style scoped>
@media(max-width: 768px) {
  .redesS {
    padding: 35px 20px
  }
}
</style>