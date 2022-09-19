
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
import dashboard from './components/ExampleComponent.vue'
import Home from './pages/Home.vue'
import Vue from "vue";

const router = new VueRouter({
    mode: 'history',
    routes: [
  
      // dashboard
      {
        path: '/',
        component: Home,
        name: 'example-component'
      },
      {
        path: '/home',
        component: dashboard,
        name: 'dashboard'
      }, 
  
  
  
    ]
  })
  
  const app = new Vue({
    el: '#app',
    data: {
      menu: 'proyectos'
    },
    router,
    components: { App },
  });