

require('./bootstrap');

window.Vue = require('vue').default;

import VueCoreVideoPlayer from 'vue-core-video-player'

Vue.use(VueCoreVideoPlayer);


Vue.component('watchlist', require('./components/WatchList').default);
Vue.component('search', require('./components/Search/Search').default);
Vue.component('pagination', require('laravel-vue-pagination'));


const app = new Vue({
    el: '#app',
});
