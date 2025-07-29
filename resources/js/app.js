import './bootstrap';
import './like';
import './compare';
import {createApp} from 'vue/dist/vue.esm-bundler'
import ModalWindow from "./components/ModalWindow.vue"
import SendCta from "./components/SendCta.vue"
import EmptyModal from "./components/EmptyModal.vue"
import Tap from "./components/Tap.vue"
import SidePanel from "./components/SidePanel.vue"
import Review from './components/Reviews/Review.vue'
import Quiz from './components/Quiz/Quiz.vue'
import Like from './components/Like.vue'
import Compare from './components/Compare.vue'

import ProjectPrice from './components/projects/ProjectPrice.vue'
import { VMaskDirective } from 'v-slim-mask'

import axios from 'axios'
import VueAxios from 'vue-axios'

import fslightbox from 'fslightbox'

import { register } from 'swiper/element/bundle';
register();


import SideMenu from './menues.js';
let side_menue = new SideMenu('#main_side_menue', '.show_menue_button_do');

const global_app = createApp({
    components:{
        ModalWindow,
        EmptyModal,
        SidePanel
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


if (document.getElementById('review_app')) {
    const review_app = createApp({
        components:{
            Review,
        },
    })

    review_app.use(VueAxios, axios)
    review_app.mount("#review_app")
}

if (document.getElementById('project_app')) {
    const project_app = createApp({
        components:{
            ProjectPrice,
        },
    })

    project_app.use(VueAxios, axios)
    project_app.mount("#project_app")
}

if (document.getElementById('cta_app')) {
    const cta_app = createApp({
        components:{
            SendCta,
        },
    })

    cta_app.use(VueAxios, axios)
    cta_app.directive('mask', VMaskDirective)
    cta_app.mount("#cta_app")
}

if (document.getElementById('quiz_app')) {
    const quiz_app = createApp({
        components:{
            Quiz,
        },
        setup() {}
    })

    quiz_app.use(VueAxios, axios)
    quiz_app.directive('mask', VMaskDirective)
    quiz_app.mount("#quiz_app");
}

if (document.getElementById('like_app')) {
    const like_app = createApp({
        components:{
            Like,
        },
        setup() {}
    })

    like_app.use(VueAxios, axios)
    like_app.directive('mask', VMaskDirective)
    like_app.mount("#like_app");
}

if (document.getElementById('compare_app')) {
    const compare_app = createApp({
        components:{
            Compare,
        },
        setup() {}
    })

    compare_app.use(VueAxios, axios)
    compare_app.directive('mask', VMaskDirective)
    compare_app.mount("#compare_app");
}



