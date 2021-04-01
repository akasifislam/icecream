require('./bootstrap');

import Vue from 'vue'
import Vuex from 'vuex'
// vuex suport
Vue.use(Vuex)
import VueRouter from 'vue-router'

import storeData from '../js/store/index'
const store = new Vuex.Store(
  storeData
)

Vue.use(VueRouter)

import { routes } from './routes';

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('admin-main', require('./components/admin/AdminMaster.vue').default);

// v form 
import { Form, HasError, AlertError } from 'vform'

window.Form = Form;

// sweet alert2 
// ES6 Modules or TypeScript
import Swal from 'sweetalert2'
window.Swal = Swal;
const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
      toast.addEventListener('mouseenter', Swal.stopTimer)
      toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
  })
  window.Toast = Toast

// CommonJS
// const Swal = require('sweetalert2') 







Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)




const router = new VueRouter({
    routes,
    mode: 'history'
})

const app = new Vue({
    el: '#app',
    router,
    store,
});
