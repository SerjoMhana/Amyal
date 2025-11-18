<template>
  <section class="py-20 bg-gray-10 relative overflow-hidden" data-aos="fade-up">
    <!-- Animated delivery elements with different shapes -->
    <div class="absolute top-16 right-0 w-20 h-20 rounded-full bg-blue-200 opacity-20 animate-bounce" data-aos="fade-in" data-aos-delay="100"></div>
    
    <div class="absolute bottom-24 left-0 w-28 h-28 rounded-full bg-yellow-200 opacity-15 animate-ping" data-aos="fade-in" data-aos-delay="200"></div>
    
    <div class="absolute top-2/3 right-16 w-14 h-14 bg-indigo-200 opacity-20 animate-pulse transform rotate-45" data-aos="fade-in" data-aos-delay="300"></div>
    
    <div class="absolute top-1/3 left-24 w-24 h-16 bg-green-200 opacity-20 animate-pulse rounded-lg" data-aos="fade-in" data-aos-delay="400"></div>
    
    <div class="px-0 relative z-10">
      <div class="text-center mb-16" data-aos="fade-up" data-aos-delay="100">
        <h2 class="text-3xl md:text-4xl font-bold text-black mb-4">إنجازاتنا</h2>
        <p class="text-gray-600 max-w-2xl mx-auto">
          سنوات من الخبرة والتميز في مجال الشحن والتوصيل
        </p>
      </div>
      
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
        <div class="bg-white p-8 rounded-2xl shadow-lg text-center transform transition duration-500 hover:scale-105" data-aos="fade-up" data-aos-delay="200">
          <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6" data-aos="zoom-in" data-aos-delay="300">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
          </div>
          <div class="text-5xl font-bold text-blue-600 mb-3" ref="experienceRef">0</div>
          <div class="text-gray-700 font-medium">سنوات الخبرة</div>
        </div>
        
        <div class="bg-white p-8 rounded-2xl shadow-lg text-center transform transition duration-500 hover:scale-105" data-aos="fade-up" data-aos-delay="300">
          <div class="w-16 h-16 bg-yellow-100 rounded-full flex items-center justify-center mx-auto mb-6" data-aos="zoom-in" data-aos-delay="400">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-yellow-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
            </svg>
          </div>
          <div class="text-5xl font-bold text-yellow-500 mb-3" ref="shipmentsRef">0</div>
          <div class="text-gray-700 font-medium">شحنة يومياً</div>
        </div>
        
        <div class="bg-white p-8 rounded-2xl shadow-lg text-center transform transition duration-500 hover:scale-105" data-aos="fade-up" data-aos-delay="400">
          <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mx-auto mb-6" data-aos="zoom-in" data-aos-delay="500">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
          </div>
          <div class="text-5xl font-bold text-indigo-600 mb-3" ref="branchesRef">0</div>
          <div class="text-gray-700 font-medium">فرع في جميع أنحاء ليبيا</div>
        </div>
        
        <div class="bg-white p-8 rounded-2xl shadow-lg text-center transform transition duration-500 hover:scale-105" data-aos="fade-up" data-aos-delay="500">
          <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6" data-aos="zoom-in" data-aos-delay="600">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
            </svg>
          </div>
          <div class="text-5xl font-bold text-green-500 mb-3" ref="satisfactionRef">0%</div>
          <div class="text-gray-700 font-medium">رضا العملاء</div>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
import { ref, onMounted } from 'vue'

const experienceRef = ref(null)
const shipmentsRef = ref(null)
const branchesRef = ref(null)
const satisfactionRef = ref(null)

// Target values for counters
const targetValues = {
  experience: 15,
  shipments: 5000,
  branches: 25,
  satisfaction: 99
}

// Function to animate counters
const animateCounter = (element, start, end, duration) => {
  let startTimestamp = null
  const step = (timestamp) => {
    if (!startTimestamp) startTimestamp = timestamp
    const progress = Math.min((timestamp - startTimestamp) / duration, 1)
    const value = Math.floor(progress * (end - start) + start)
    
    if (element) {
      if (end === 99) {
        element.textContent = value + '%'
      } else {
        element.textContent = value + (end > 1000 ? '+' : '')
      }
    }
    
    if (progress < 1) {
      window.requestAnimationFrame(step)
    }
  }
  window.requestAnimationFrame(step)
}

// Function to check if element is in viewport
const isInViewport = (element) => {
  const rect = element.getBoundingClientRect()
  return (
    rect.top >= 0 &&
    rect.left >= 0 &&
    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
  )
}

// Handle scroll event to trigger animations
const handleScroll = () => {
  if (experienceRef.value && isInViewport(experienceRef.value)) {
    animateCounter(experienceRef.value, 0, targetValues.experience, 2000)
    animateCounter(shipmentsRef.value, 0, targetValues.shipments, 2000)
    animateCounter(branchesRef.value, 0, targetValues.branches, 2000)
    animateCounter(satisfactionRef.value, 0, targetValues.satisfaction, 2000)
    
    // Remove event listener after animation starts
    window.removeEventListener('scroll', handleScroll)
  }
}

onMounted(() => {
  // Add scroll event listener
  window.addEventListener('scroll', handleScroll)
  
  // Check if already in viewport on page load
  setTimeout(() => {
    handleScroll()
  }, 500)
})
</script>

<style scoped>
</style>