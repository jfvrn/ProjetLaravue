import { createRouter, createWebHistory } from 'vue-router';
import StoryView from '../pages/StoryView.vue';

const routes = [
  {
    path: '/passsages/:id',
    name: 'Passage',
    component: StoryView
  },
  // {
  //   path: '/',
  //   redirect: '/chapitre/1'
  // }
];

const router = createRouter({
  history: createWebHistory(),
  routes
});

export default router;