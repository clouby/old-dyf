require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router';

Vue.use(VueRouter);

import VueAxios from 'vue-axios';
import axios from 'axios';

Vuew.use(VueAxios, axios);

Vue.component('examlucple-component', require('./components/ExampleComponent.vue').default);

const router = new VueRouter({
	mode: 'history'
});

const app = new Vue(Vue.util.extend({ router })).$mount('#app');
