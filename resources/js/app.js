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
// filterjs support 
import { filter } from './filter'

Vue.use(VueRouter)

import { routes } from './routes';

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('admin-main', require('./components/admin/AdminMaster.vue').default);

// v form 
import { Form, HasError, AlertError } from 'vform'

window.Form = Form;

// sweet alert2 
import { sweetToast } from './sweetToast'








Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)




const router = new VueRouter({
    routes,
    mode: 'hash'
})

const app = new Vue({
    el: '#app',
    router,
    store,
});
