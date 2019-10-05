require('./bootstrap');

window.Vue = require('vue');

import DatePicker from 'vuejs-datepicker';

// import ExampleComponent from './components/ExampleComponent.vue';

$('.carousel').carousel();
const app = new Vue({
	el: '#app',
	components: {
		DatePicker
	}
});
