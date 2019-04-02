require('./bootstrap');

import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import Navigation from './views/Navigation'
import Software from './views/Software'
import Contact from './views/Contact'
import MyWork from './views/MyWork'

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/', 
            name: 'mywork', 
            component: MyWork,  
            
        },
        {
            path: '/software',
            name: 'software',
            component: Software,
        },
        {
            path: '/contact',
            name: 'contact',
            component: Contact,
        },
    ],
    scrollBehavior (to, from, savedPosition) {
        return { x: 0, y: 0 }
    },
});

const app = new Vue({
    el: '#app',
    components: { Navigation },
    router,
});