<template>
  <section class="relative py-16 md:py-24 bg-cover bg-center" :style="{ backgroundImage: 'url(' + heroImage + ')' }" data-aos="fade-down">
    <div class="absolute inset-0 bg-black bg-opacity-50" data-aos="fade-in"></div>
    <div class="px-0 relative z-10 text-center text-white" data-aos="zoom-in">
      <h1 class="text-3xl md:text-5xl font-bold mb-4 md:mb-6" data-aos="fade-up" data-aos-delay="100">أميال للشحن والتوصيل</h1>
      <p class="text-lg md:text-xl mb-6 md:mb-8 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="200">
        حلول شحن موثوقة وسريعة تصل إلى جميع أنحاء ليبيا والعالم
      </p>
      <div class="flex flex-col sm:flex-row justify-center gap-3 md:gap-4" data-aos="fade-up" data-aos-delay="300">
        <router-link 
          to="/track-shipment" 
          class="bg-white text-blue-600 hover:bg-gray-100 font-bold py-2 px-6 rounded-lg transition duration-300 text-sm md:text-base"
          data-aos="fade-right" data-aos-delay="400"
        >
          تتبع شحنتك الآن
        </router-link>
        <router-link 
          to="/about" 
          class="bg-transparent border-2 border-white hover:bg-white hover:text-blue-600 font-bold py-2 px-6 rounded-lg transition duration-300 text-sm md:text-base"
          data-aos="fade-left" data-aos-delay="500"
        >
          اعرف المزيد
        </router-link>
      </div>
      
      <!-- Login Section -->
      <div class="mt-8" data-aos="fade-up" data-aos-delay="600">
        <p class="text-lg mb-4">هل لديك حساب؟ سجل دخولك الآن</p>
        <a 
          href="https://web.amyal.ly/" 
          target="_blank"
          class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-lg transition duration-300 text-sm md:text-base"
        >
          تسجيل الدخول إلى حسابك
        </a>
      </div>
    </div>
  </section>
</template>

<script setup>
import heroImage from '@/assets/Hero-Section.jpg'
</script>

<style scoped>
</style>