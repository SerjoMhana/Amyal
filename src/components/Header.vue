<template>
  <header class="bg-white shadow-lg sticky top-0 z-50">
    <div class="container mx-auto px-4">
      <div class="flex justify-between items-center h-20">
        <!-- Desktop Navigation - Reordered for RTL -->        
        <!-- Logo - Larger size and without text -->
        <div class="flex-shrink-0 flex items-center">
          <img src="@/assets/logo-01-removebg-preview.png" alt="أميال Logo" class="h-16 w-16 md:h-20 md:w-20" />
        </div>
        
        <nav class="hidden md:flex space-x-1 space-x-reverse">
          <router-link 
            to="/" 
            class="px-4 py-2 rounded-lg text-sm font-medium text-gray-700 hover:text-blue-600 hover:bg-blue-50 transition-all duration-300"
            active-class="text-blue-600 bg-blue-50"
          >
            الرئيسية
          </router-link>
          
          <!-- About Dropdown -->
          <div class="relative group">
            <button class="px-4 py-2 rounded-lg text-sm font-medium text-gray-700 hover:text-blue-600 hover:bg-blue-50 transition-all duration-300 flex items-center">
              عن أميال
              <svg class="mr-1 w-4 h-4 transition-transform duration-300 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
              </svg>
            </button>
            
            <div class="absolute right-0 mt-2 w-56 bg-white rounded-xl shadow-lg py-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-y-2 group-hover:translate-y-0">
              <router-link 
                to="/about/history" 
                class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg mx-2 transition-colors"
                active-class="bg-blue-50 text-blue-600"
              >
                تاريخ أميال
              </router-link>
              <router-link 
                to="/about" 
                class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg mx-2 transition-colors"
                active-class="bg-blue-50 text-blue-600"
              >
                عن الشركة
              </router-link>
              <!-- Removed about-us link -->
            </div>
          </div>
          
          <!-- Services Dropdown -->
          <div class="relative group">
            <button class="px-4 py-2 rounded-lg text-sm font-medium text-gray-700 hover:text-blue-600 hover:bg-blue-50 transition-all duration-300 flex items-center">
              خدمة العملاء
              <svg class="mr-1 w-4 h-4 transition-transform duration-300 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
              </svg>
            </button>
            
            <div class="absolute right-0 mt-2 w-56 bg-white rounded-xl shadow-lg py-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-y-2 group-hover:translate-y-0">
              <router-link 
                to="/services/support" 
                class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg mx-2 transition-colors"
                active-class="bg-blue-50 text-blue-600"
              >
                الدعم الفني
              </router-link>
              <router-link 
                to="/services" 
                class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg mx-2 transition-colors"
                active-class="bg-blue-50 text-blue-600"
              >
                خدماتنا
              </router-link>
            </div>
          </div>
          
          <router-link 
            to="/track-shipment" 
            class="px-4 py-2 rounded-lg text-sm font-medium text-gray-700 hover:text-blue-600 hover:bg-blue-50 transition-all duration-300"
            active-class="text-blue-600 bg-blue-50"
          >
            تتبع الشحنه
          </router-link>
          
          <router-link 
            to="/contact-us" 
            class="px-4 py-2 rounded-lg text-sm font-medium text-gray-700 hover:text-blue-600 hover:bg-blue-50 transition-all duration-300"
            active-class="text-blue-600 bg-blue-50"
          >
            تواصل معنا
          </router-link>
          
          <!-- Professional Login Button -->
          <a 
            href="https://web.amyal.ly/" 
            target="_blank"
            class="px-5 py-2 rounded-lg text-sm font-semibold text-white bg-gradient-to-r from-blue-600 to-indigo-700 hover:from-blue-700 hover:to-indigo-800 transition-all duration-300 flex items-center shadow-md hover:shadow-lg transform hover:-translate-y-0.5"
          >
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
            </svg>
            تسجيل الدخول
          </a>
        </nav>
        
        <!-- Mobile menu button -->
        <div class="md:hidden flex items-center">
          <button 
            @click="toggleMobileMenu" 
            class="inline-flex items-center justify-center p-2 rounded-lg text-gray-700 hover:text-blue-600 hover:bg-blue-50 focus:outline-none transition-colors"
          >
            <svg 
              v-if="!mobileMenuOpen" 
              class="h-6 w-6" 
              fill="none" 
              stroke="currentColor" 
              viewBox="0 0 24 24"
            >
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
            <svg 
              v-else 
              class="h-6 w-6" 
              fill="none" 
              stroke="currentColor" 
              viewBox="0 0 24 24"
            >
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
          </button>
        </div>
      </div>
    </div>
    
    <!-- Mobile Menu - Reordered for RTL -->
    <div v-if="mobileMenuOpen" class="md:hidden bg-white border-t border-gray-100">
      <div class="px-2 pt-2 pb-3 space-y-1">
        <router-link 
          to="/" 
          class="block px-3 py-2 rounded-lg text-base font-medium text-gray-700 hover:text-blue-600 hover:bg-blue-50"
          active-class="text-blue-600 bg-blue-50"
          @click="mobileMenuOpen = false"
        >
          الرئيسية
        </router-link>
        
        <!-- Mobile About Section -->
        <div class="px-3 py-2 rounded-lg text-base font-medium text-gray-700 hover:text-blue-600 hover:bg-blue-50 cursor-pointer" @click="toggleAboutDropdown">
          <div class="flex items-center justify-between">
            عن أميال
            <svg 
              :class="{'rotate-180': aboutDropdownOpen}" 
              class="w-4 h-4 transition-transform duration-300" 
              fill="none" 
              stroke="currentColor" 
              viewBox="0 0 24 24"
            >
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </div>
          
          <div v-if="aboutDropdownOpen" class="mt-2 pr-4 space-y-1">
            <router-link 
              to="/about/history" 
              class="block pl-4 py-2 text-sm text-gray-700 hover:bg-blue-50 rounded-lg"
              active-class="bg-blue-50 text-blue-600"
              @click="mobileMenuOpen = false"
            >
              تاريخ أميال
            </router-link>
            <router-link 
              to="/about" 
              class="block pl-4 py-2 text-sm text-gray-700 hover:bg-blue-50 rounded-lg"
              active-class="bg-blue-50 text-blue-600"
              @click="mobileMenuOpen = false"
            >
              عن الشركة
            </router-link>
            <!-- Removed about-us link -->
          </div>
        </div>
        
        <!-- Mobile Services Section -->
        <div class="px-3 py-2 rounded-lg text-base font-medium text-gray-700 hover:text-blue-600 hover:bg-blue-50 cursor-pointer" @click="toggleServicesDropdown">
          <div class="flex items-center justify-between">
            خدمة العملاء
            <svg 
              :class="{'rotate-180': servicesDropdownOpen}" 
              class="w-4 h-4 transition-transform duration-300" 
              fill="none" 
              stroke="currentColor" 
              viewBox="0 0 24 24"
            >
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </div>
          
          <div v-if="servicesDropdownOpen" class="mt-2 pr-4 space-y-1">
            <router-link 
              to="/services/support" 
              class="block pl-4 py-2 text-sm text-gray-700 hover:bg-blue-50 rounded-lg"
              active-class="bg-blue-50 text-blue-600"
              @click="mobileMenuOpen = false"
            >
              الدعم الفني
            </router-link>
            <router-link 
              to="/services" 
              class="block pl-4 py-2 text-sm text-gray-700 hover:bg-blue-50 rounded-lg"
              active-class="bg-blue-50 text-blue-600"
              @click="mobileMenuOpen = false"
            >
              خدماتنا
            </router-link>
          </div>
        </div>
        
        <router-link 
          to="/track-shipment" 
          class="block px-3 py-2 rounded-lg text-base font-medium text-gray-700 hover:text-blue-600 hover:bg-blue-50"
          active-class="text-blue-600 bg-blue-50"
          @click="mobileMenuOpen = false"
        >
          تتبع الشحنه
        </router-link>
        
        <router-link 
          to="/contact-us" 
          class="block px-3 py-2 rounded-lg text-base font-medium text-gray-700 hover:text-blue-600 hover:bg-blue-50"
          active-class="text-blue-600 bg-blue-50"
          @click="mobileMenuOpen = false"
        >
          تواصل معنا
        </router-link>
        
        <!-- Mobile Login Button -->
        <a 
          href="https://web.amyal.ly/" 
          target="_blank"
          class="block px-3 py-2 rounded-lg text-base font-medium text-white bg-blue-600 hover:bg-blue-700"
          @click="mobileMenuOpen = false"
        >
          تسجيل الدخول
        </a>
      </div>
    </div>
  </header>
</template>

<script setup>
import { ref } from 'vue'

const mobileMenuOpen = ref(false)
const aboutDropdownOpen = ref(false)
const servicesDropdownOpen = ref(false)

const toggleMobileMenu = () => {
  mobileMenuOpen.value = !mobileMenuOpen.value
  // Close dropdowns when mobile menu is closed
  if (!mobileMenuOpen.value) {
    aboutDropdownOpen.value = false
    servicesDropdownOpen.value = false
  }
}

const toggleAboutDropdown = () => {
  aboutDropdownOpen.value = !aboutDropdownOpen.value
}

const toggleServicesDropdown = () => {
  servicesDropdownOpen.value = !servicesDropdownOpen.value
}
</script>

<style lang="scss" scoped>
/* Custom styles for beautiful header */
header {
  backdrop-filter: blur(10px);
  background-color: rgba(255, 255, 255, 0.95);
}

nav a {
  position: relative;
}

nav a::after {
  content: '';
  position: absolute;
  bottom: 0;
  left: 50%;
  transform: translateX(-50%);
  width: 0;
  height: 2px;
  background-color: #3b82f6;
  transition: width 0.3s ease;
}

nav a:hover::after,
nav a.router-link-active::after {
  width: 80%;
}
</style>