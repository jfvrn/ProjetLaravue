import './bootstrap';
import Alpine from 'alpinejs';
import { createApp } from 'vue';
import App from './App.vue';
import { setDefaultHeaders, setDefaultBaseUrl } from '@/utils/fetchJson.js';

const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') ?? '';

window.Alpine = Alpine;

setDefaultHeaders({'X-CSRF-TOKEN': csrfToken});

const urlApi = document.querySelector('meta[name="api-base-url"]')?.getAttribute('content') ?? '';
setDefaultBaseUrl(urlApi);

Alpine.start();
const myApp = createApp(App);
myApp.mount('#app');

