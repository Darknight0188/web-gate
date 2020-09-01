import axios from 'axios';

const instance = axios.create({
    baseURL: process.env.APP_URL + '/api',
    headers: {
        Accept: 'application/json',
        'Content-Type': 'application/json; charset=utf-8'
    }
});

instance.defaults.headers.post['Content-Type'] =
    'application/x-www-form-urlencoded';
instance.defaults.headers.get['Content-Type'] = 'application/json';

instance.interceptors.request.use(conf => {
    return conf;
});

function onResponse(response) {
    return response;
}

function onError(error) {
    return Promise.reject(error);
}

instance.interceptors.response.use(onResponse, onError);

export default instance;
