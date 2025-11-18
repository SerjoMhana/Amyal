import { createRouter, createWebHashHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import AboutView from '../views/AboutView.vue'
// import AboutUsView from '../views/AboutUsView.vue'  // Removed about-us page
import ServicesView from '../views/ServicesView.vue'
import TrackShipmentView from '../views/TrackShipmentView.vue'
import ContactUsView from '../views/ContactUsView.vue'
import HistoryView from '../views/HistoryView.vue'
import SupportView from '../views/SupportView.vue'

const router = createRouter({
  history: createWebHashHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: HomeView,
    },
    {
      path: '/about',
      name: 'about',
      component: AboutView,
    },
    /* {
      path: '/about-us',
      name: 'about-us',
      component: AboutUsView,
    }, */  // Removed about-us route
    {
      path: '/about/history',
      name: 'history',
      component: HistoryView,
    },
    {
      path: '/services',
      name: 'services',
      component: ServicesView,
    },
    {
      path: '/services/support',
      name: 'support',
      component: SupportView,
    },
    {
      path: '/track-shipment',
      name: 'track-shipment',
      component: TrackShipmentView,
    },
    {
      path: '/contact-us',
      name: 'contact-us',
      component: ContactUsView,
    },

  ],
  scrollBehavior(to, from, savedPosition) {
    // Always scroll to the top when navigating to a new page
    return { top: 0 }
  }

});

export default router