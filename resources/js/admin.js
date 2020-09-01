import Vue from 'vue';

import View from '@/View.vue'

// vuex
import store from '@/admin/store';

// router
import router from '@/admin/router';

// axios
import axios from '@/utils/axios';
Vue.prototype.$axios = axios;

// cookie
import cookie from 'js-cookie';
Vue.prototype.$cookie = cookie;

new Vue({
    router,
    store,
    render: h => h(View)
}).$mount('#admin');
