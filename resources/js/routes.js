import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);


import Home from './pages/Home.vue';
import Search from './pages/Search.vue';
import AdvSearch from './pages/AdvSearch.vue';
import House from './pages/House.vue';
import Message from './pages/Message.vue';
import Error404 from './pages/Error404.vue';

const router = new VueRouter({
    mode: 'history',
    linkActiveClass: 'active',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/search',
            name: 'search',
            component: Search
        },
        {
            path: '/advsearch',
            name: 'advsearch',
            component: AdvSearch
        },
        {
            path: '/house',
            name: 'house',
            component: House
        },
        {
            path: '/message',
            name: 'message',
            component: Message
        },
        {
            path: '/*',
            name: 'error404',
            component: Error404
        }
    ]
});

export default router;