import './bootstrap';

import { createApp } from 'vue';
import App from './App.vue';

import ElementPlus from 'element-plus'
import 'element-plus/dist/index.css'

import {createPinia} from 'pinia';
import router from './router';


const pinia=createPinia();
const app = createApp(App);
app.use(router);

app.use(pinia);


app.use(ElementPlus)

app.mount("#app");
