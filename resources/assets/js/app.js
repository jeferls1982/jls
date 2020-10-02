import 'bootstrap/dist/css/bootstrap.css';
import 'bootstrap-vue/dist/bootstrap-vue.css';
require('./bootstrap');

window.Vue = require('vue');

import router from './router/index';
import store from './vuex/index';




import { BootstrapVue, IconsPlugin } from 'bootstrap-vue';

// Install BootstrapVue
Vue.use(BootstrapVue)
// Optionally install the BootstrapVue icon components plugin
Vue.use(IconsPlugin)

Vue.component('app-component', require('./components/AppComponent.vue'));
Vue.component('date-component', require('./components/horaExtra/DataComponent'));
Vue.component('timeinicio-component', require('./components/horaExtra/HoraInicio'));
Vue.component('timefim-component', require('./components/horaExtra/HoraFim'));
Vue.component('grafico-component', require('./components/horaExtra/Grafico'));

const app = new Vue({
    store,
    router,
    el: '#app'
});
