import './assets/main.css'
import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
import 'animate.css';
import 'flowbite'
import "preline/preline"
import AOS from 'aos'
import 'aos/dist/aos.css'
import { library } from '@fortawesome/fontawesome-svg-core'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'
import { faPhone, faAward, faMapMarkerAlt, faLocationArrow, faShieldAlt, faCreditCard } from '@fortawesome/free-solid-svg-icons'
import { faFacebookF, faInstagram, faWhatsapp } from '@fortawesome/free-brands-svg-icons'

const app = createApp(App)

library.add(faPhone, faFacebookF, faInstagram, faWhatsapp, faAward, faMapMarkerAlt, faLocationArrow, faShieldAlt, faCreditCard)

app.use(router)
app.component('font-awesome-icon', FontAwesomeIcon)

// Initialize AOS
AOS.init({
  duration: 1000,
  once: false,
  mirror: false,
  offset: 120,
  delay: 0,
  easing: 'ease-out-back'
  // Removed disable: 'mobile' to ensure animations work on mobile
})

app.mount('#app')