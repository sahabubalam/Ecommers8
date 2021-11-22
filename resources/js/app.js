 require('./bootstrap');

//  import { createApp } from 'vue'

// import example from './components/ExampleComponent.vue';
import Vue from 'vue'
window.axios=require('axios');

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

const app = new Vue({
    el: '#app'
});

// const app = createApp({});
// // registers our HelloWorld component globally
//  app.component('example-component', example);


// // mount the app to the DOM
// app.mount('#app');
