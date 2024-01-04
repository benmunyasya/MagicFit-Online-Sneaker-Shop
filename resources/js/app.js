import './bootstrap';
import { createApp } from 'vue';
import App from './App.vue';
import router from './router';
import CoreuiVue from '@coreui/vue'
import ElementPlus from 'element-plus'
import 'element-plus/dist/index.css'

import {createPinia} from 'pinia';
const app = createApp(App);
app.use(router);
const pinia=createPinia();
app.use(pinia);

app.use(CoreuiVue)
app.use(ElementPlus)

app.mount("#app");
