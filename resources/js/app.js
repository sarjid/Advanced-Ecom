

require('./bootstrap');

window.Vue = require('vue').default;


Vue.component('send-message', require('./components/SendMessage.vue').default);
Vue.component('chat-component', require('./components/Chat.vue').default);

const app = new Vue({
    el: '#app',
});
