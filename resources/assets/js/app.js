import 'bootstrap/dist/css/bootstrap.css';
import 'bootstrap-vue/dist/bootstrap-vue.css';


// CommonJS

require('./bootstrap');

window.Vue = require('vue');

import router from './router/index';
import store from './vuex/index';




import { BootstrapVue, IconsPlugin } from 'bootstrap-vue';
import VueSweetalert2 from 'vue-sweetalert2';

// Install BootstrapVue
Vue.use(BootstrapVue)
// Optionally install the BootstrapVue icon components plugin
Vue.use(IconsPlugin)
Vue.use(VueSweetalert2)



Vue.component('app-component', require('./components/AppComponent.vue'));
Vue.component('date-component', require('./components/horaExtra/DataComponent'));
Vue.component('timeinicio-component', require('./components/horaExtra/HoraInicio'));
Vue.component('timefim-component', require('./components/horaExtra/HoraFim'));
Vue.component('grafico-component', require('./components/horaExtra/Grafico'));
Vue.component('he-component', require('./components/horaExtra/Home'));
Vue.component('navloteria-component', require('./components/loterias/navloterias'));

const app = new Vue({
    store,
    router,
    el: '#app'
});
