import Vue from 'vue';
import Vuex from 'vuex';
import axios from '@/utils/axios';
import cookie from 'js-cookie';

Vue.use(Vuex);
Vuex.Store.prototype.$axios = axios;
Vuex.Store.prototype.$cookie = cookie;

const store = new Vuex.Store({
    strict: true,
    modules: {}
});

export default store;
