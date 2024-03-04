import Vue from 'vue';
import HelloWorldComponent from './components/HelloWorldComponent';
const app = new Vue({
el: '#app',
render: h => h(HelloWorldComponent)
});