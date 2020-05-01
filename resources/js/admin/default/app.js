require('./bootstrap');
// Global
require ("./modules/bootstrap");
require ("./modules/theme");
require ("./modules/feather");
require ("./modules/moment");
require ("./modules/sidebar");
require ("./modules/user-agent");

// Forms
require ("./modules/datetimepicker");

// Charts
require("./modules/chartjs");

// Maps
//require("./modules/vector-maps");

// Vue
window.Vue= require('vue');

// Chamada de componente do vuejs
Vue.component('example-component', require('./components/ExampleComponent.vue').default);


const app = new Vue({
    el: '#app',
});
