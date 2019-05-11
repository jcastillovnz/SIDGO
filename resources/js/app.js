require('./bootstrap');

import Vue from 'vue'
import VueRouter from 'vue-router'
Vue.use(VueRouter)


import Vuex from 'vuex'
Vue.use(Vuex)

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */
Vue.component('tablero', require('./components/home/tablero.vue').default);
Vue.component('indicadores', require('./components/home/indicadores.vue').default);
Vue.component('tabla-liquidadoras', require('./components/tablas/liquidadores.vue').default);
Vue.component('tabla-usuarios', require('./components/tablas/usuarios.vue').default);
Vue.component('createuser', require('./components/user/create.vue').default);
Vue.component('createliquidadora', require('./components/liquidadora/create.vue').default);



import App from './views/App'
import home from './views/home'
import cuenta from './views/mi-cuenta'
import configuracion from './views/configuracion'
import liquidadora from './views/liquidadora'




const store = new Vuex.Store ({
state :{

numeroglobal:'numeroglobal',
liquidadoras: []

},


mutations:{
getliquidadoras () {
var url = '/getliquidadoras';
axios.get(url).then(response => {
this.state.liquidadoras =  response.data;

});

}
,

disminuir (state, n) {

alert("HOLA GLOBAL");

}

}
});






const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: home
        },
        {
            path: '/mi-cuenta',
            name: 'mi-cuenta',
            component: cuenta,
        },
        {
            path: '/configuracion',
            name: 'configuracion',
            component: configuracion,
        },
        {
             path: '/liquidadora/:id',
            name: 'liquidadora',
           
            component: liquidadora,
        },




    ],
});

const app = new Vue({
    el: '#app',
    store: store,
    components: { App },
    router,
});











