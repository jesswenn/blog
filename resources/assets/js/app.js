
// our main file

// Here we impot refering our routes 
// import routes from './routes.js'

/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// Dont kill this line when if you will 
// destroy Bootstrap it is linking the 
// bootstrap.js file 
//in /assets
require('./bootstrap');

// MAybe need to require th SCSS here
// require("!style!css!sass!./file.scss");
// require(['./bootstrap', './dashboard.js']);

Vue.use(Bootstrap);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example', require('./components/Example.vue'));
// Vue.component('about', require('./components/About.vue'));
// Vue.component('blog', require('./components/Blog.vue'));


// //Passig the data it to our VUE instance
const app = new Vue ({
	el: '#app',
	router
});