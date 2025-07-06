import './bootstrap';
import {createApp} from 'vue/dist/vue.esm-bundler'
import ModalWindow from "./components/ModalWindow.vue"
import EmptyModal from "./components/EmptyModal.vue"
import Tap from "./components/Tap.vue"
import Review from './components/Reviews/Review.vue'
import { VMaskDirective } from 'v-slim-mask'

import axios from 'axios'
import VueAxios from 'vue-axios'

import { register } from 'swiper/element/bundle';
register();


import SideMenu from './menues.js';
// let side_menue = new SideMenu('#main_side_menue', '.show_menue_button');

const global_app = createApp({
    components:{
        ModalWindow,
        EmptyModal,
    },
    setup() {}
})

global_app.use(VueAxios, axios)
global_app.directive('mask', VMaskDirective)
global_app.mount("#global_app");

const steps_app  = createApp({
    components:{
        Tap,
        EmptyModal,
    },
    setup() {}
})

steps_app.mount("#steps_app");



const review_app = createApp({
    components:{
        Review,
    },
})

review_app.use(VueAxios, axios)
review_app.mount("#review_app")
