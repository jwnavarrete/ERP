require('./bootstrap');

window.Vue = require('vue');

Vue.component('my-thoughts-component', require('./components/MyThoughtsComponent.vue'));
Vue.component('form-component', require('./components/FormComponent.vue'));
Vue.component('thought-component', require('./components/ThoughtComponent.vue'));


import { TableComponent, TableColumn } from 'vue-table-component';
import vPagination from 'vue-plain-pagination'


Vue.component('v-pagination', vPagination);

Vue.component('table-component', TableComponent);
Vue.component('table-column', TableColumn);

Vue.component('listar-usuarios-component', require('./components/seguridad/usuarios/listar.vue'));

const app = new Vue({
    el: '#app'
});
