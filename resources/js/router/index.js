import { createRouter, createWebHistory } from 'vue-router';
import AboutView from '../views/AboutView.vue';
import ContactView from '../views/ContactView.vue';
import PostsView from '../views/PostsView.vue';
import ExampleComponent from '../components/ExampleComponent.vue';

const routes = [
    {
        path: '/',
        name: 'Home',
        component: ExampleComponent,
    },
    {
        path: '/about',
        name: 'About',
        component: AboutView,
    },
    {
        path: '/contact',
        name: 'Contact',
        component: ContactView,
    },
    {
        path: '/posts',
        name: 'Posts',
        component: PostsView,
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
