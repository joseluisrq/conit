
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import VueRouter from 'vue-router'
Vue.use(VueRouter)


//Vue Select
import vSelect from 'vue-select'
Vue.component('v-select', vSelect)
import 'vue-select/dist/vue-select.css';

//Alert2
import VueSweetalert2 from 'vue-sweetalert2';
import 'sweetalert2/dist/sweetalert2.min.css';
Vue.use(VueSweetalert2);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

//Rutas
import App from './components/App.vue'
import pageweb from './pages/services/PageWeb.vue'
import Home from './pages/Home.vue'
import Contact from './pages/Contact.vue'
import AboutUs from './pages/AboutUs.vue'
import Projects from './pages/Projects.vue'
import ecomerce from './pages/services/E-Comerce.vue'
import socialmedia from './pages/services/SocialMedia.vue'
import Servicios from './pages/Servicios.vue'
import crm from './pages/services/CRM.vue'
import building from './pages/Building.vue'
import concurso from './pages/Contest.vue'
import interestTheBest from './pages/InterestTheBest.vue'
import interestTrust from './pages/InterestTrust.vue'
import interestMeeting from './pages/InterestMeeting.vue'
import Vue from "vue";

const router = new VueRouter({
    mode: 'history',
    routes: [
  
      
      // dashboard
      {
        path: '/',
        component: Home,
        name: 'Home',
        meta: { Auth: false, title: 'CONIT - Soluciones Digitales'}
      },
      {
        path: '/servicios',
        component: Servicios,
        name: 'servicios',
        meta: { Auth: false, title: 'CONIT - Servicios'}
      },
      {
        path: '/contacto',
        component: Contact,
        name: 'contacto',
        meta: { Auth: false, title: 'CONIT - Contacto'}
      },
      {
        path: '/nosotros',
        component: AboutUs,
        name: 'nosotros',
        meta: { Auth: false, title: 'CONIT - Nosotros'}
      },
      {
        path: '/proyectos',
        component: Projects,
        name: 'proyectos',
        meta: { Auth: false, title: 'CONIT - Proyectos'}
      },
      {
        path: '/paginasweb',
        component: pageweb,
        name: 'paginasweb',
        meta: { Auth: false, title: 'CONIT - P??ginas Web'}
      },
      {
        path: '/tiendaonline',
        component: ecomerce,
        name: 'tiendaonline',
        meta: { Auth: false, title: 'CONIT - E-Comerce'}
      }, 
      {
        path: '/socialmedia',
        component: socialmedia,
        name: 'socialmedia',
        meta: { Auth: false, title: 'CONIT - Social Media'}
      },
      {
        path: '/crm',
        component: crm,
        name: 'crm',
        meta: { Auth: false, title: 'CONIT - CRM'}
      },
      {
        path: '/building',
        component: building,
        name: 'building',
        meta: { Auth: false, title: 'CONIT - En Construcci??n'}
      },
      {
        path: '/concurso',
        component: concurso,
        name: 'concurso',
        meta: { Auth: false, title: 'CONIT - Concurso'}
      },
      {
        path: '/losMejoresParaMi',
        component: interestTheBest,
        name: 'losMejoresParaMi',
        meta: { Auth: false, title: 'CONIT - ??Por qu?? son los mejores para m???'}
      },
      {
        path: '/confianza',
        component: interestTrust,
        name: 'confianza',
        meta: { Auth: false, title: 'CONIT - ??Por qu?? tengo que confiar?'}
      },
      {
        path: '/junta',
        component: interestMeeting,
        name: 'junta',
        meta: { Auth: false, title: 'CONIT - ??Cu??ndo nos juntamos?'}
      }        

    ],
    scrollBehavior (to, from, savedPosition) {
      return {x:0,y:0}
    }
    
    
  })
  router.beforeEach((to, from, next) => {
    document.title = to.meta.title;
    next();
  });
  const app = new Vue({
    el: '#app',
    data: {
      menu: 'proyectos'
    },
    router,
    components: { App },
  });