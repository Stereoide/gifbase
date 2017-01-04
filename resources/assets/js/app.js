
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import Vue from 'vue';
import VueRouter from 'vue-router';

// 1. Use plugin.
// This installs <router-view> and <router-link>,
// and injects $router and $route to all router-enabled child components
Vue.use(VueRouter);

// 2. Define route components
const Home = { template: '<div>home</div>' };
const Foo = { template: '<div>Foo</div>' };
const Bar = { template: '<div>Bar</div>' };

// 3. Create the router
const router = new VueRouter({
    mode: 'history',
    base: __dirname,
    routes: [
        { path: '/', component: Home },
        { path: '/foo', component: Foo },
        { path: '/bar', component: Bar }
    ]
});


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('upload-modal', require('./components/upload-modal.vue'));
Vue.component('gif-list', require('./components/gif-list.vue'));
Vue.component('gif', require('./components/gif.vue'));
Vue.component('tabs', require('./components/tabs.vue'));
Vue.component('tab', require('./components/tab.vue'));
Vue.component('category-list', require('./components/category-list.vue'));
Vue.component('category', require('./components/category.vue'));

const app = new Vue({
    router,
    el: '#app',
    data: {
        showUploadModal: false,
        navCategories: []
    },
    methods: {
        closeModal() {
            console.log('close');
        },

        fetchNavCategories() {
            var self = this;

            $.getJSON('categories')
                .done(function(categories) {
                    self.navCategories = categories;
                })
                .fail(function() {
                    alert("There has been an error fetching categories..");
                });

        }
    },
    created() {
        this.fetchNavCategories();
    }
})
