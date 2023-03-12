import { createApp } from 'vue'
import App from './App.vue'
import VueSmoothScroll from 'vue3-smooth-scroll'

createApp(App).use(VueSmoothScroll, {offset: -100}).mount('#app')
