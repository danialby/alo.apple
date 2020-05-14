/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))
import Vuelidate from 'vuelidate';
Vue.use(
  Vuelidate
 );
 import VueLoaders from 'vue-loaders';
 Vue.use(VueLoaders);


Vue.component('reqform', require('./components/requestForm.vue').default);
Vue.component('stcheck', require('./components/StatusCheck.vue').default);
// Vue.component('ts', require('./components/treeselect.vue').default);




import VuePersianDatetimePicker from 'vue-persian-datetime-picker';
Vue.component('date-picker', VuePersianDatetimePicker);
Vue.use(VuePersianDatetimePicker, {
    name: 'a-date-picker',
    props: {
      inputFormat: 'YYYY-MM-DD',
      format: 'jYYYY-jMM-jDD',
      editable: false,
      inputClass: 'form-control myinputB',
      placeholder: 'تاریخ...',
      altFormat: 'YYYY-MM-DD',
      color: '#00acc1',
      autoSubmit: true,
      //...
      //... And whatever you want to set as default
      //...
    },
  });

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


const app = new Vue({
    el: '#app',
    // render: h => h(reqform)
});
