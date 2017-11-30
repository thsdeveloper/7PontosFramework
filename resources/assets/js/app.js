
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import ElementUI from 'element-ui'
import 'element-ui/lib/theme-chalk/index.css'
Vue.use(ElementUI)

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));

/** Carrinho de compra **/
Vue.component('details-cart', require('./components/DetailsCart.vue'));
Vue.component('shopping-cart', require('./components/ShoppingCart.vue'));
Vue.component('button-purchase', require('./components/ButtonPurchase.vue'));

const app = new Vue({
    el: '#app'
});
