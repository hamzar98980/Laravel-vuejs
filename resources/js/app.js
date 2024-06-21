
import './bootstrap';
import { createApp } from 'vue';



import ExampleComponent from './components/ExampleComponent.vue';
import FrontendLayout from './components/FrontendLayout.vue';
import router from './router';

const app = createApp(FrontendLayout);

app.use(router);
app.mount('#app');
