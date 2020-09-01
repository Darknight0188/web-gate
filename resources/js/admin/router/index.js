import Vue from 'vue';
import VueRouter from 'vue-router';

const routes = [
    {
        path: '/',
        name: 'dashboard',
        component: () => import('@/admin/pages/a01')
    }
];

Vue.use(VueRouter);
const router = new VueRouter({
    mode: 'history',
    routes,
    linkActiveClass: ''
});

export default router;
