<template>
  <section class="relative py-26 md:py-36 bg-cover bg-center" :style="{ backgroundImage: 'url(' + heroImage + ')' }" data-aos="fade-down">
    <div class="absolute inset-0 bg-black bg-opacity-50" data-aos="fade-in"></div>
    <div class="container mx-auto px-4 relative z-10 text-center text-white" data-aos="zoom-in">
      <h1 class="text-4xl md:text-6xl font-bold mb-6" data-aos="fade-up" data-aos-delay="100">أميال للشحن والتوصيل</h1>
      <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="200">
        حلول شحن موثوقة وسريعة تصل إلى جميع أنحاء ليبيا والعالم
      </p>
      <div class="flex flex-col sm:flex-row justify-center gap-4" data-aos="fade-up" data-aos-delay="300">
        <router-link 
          to="/track-shipment" 
          class="bg-white text-blue-600 hover:bg-gray-100 font-bold py-3 px-8 rounded-lg transition duration-300"
          data-aos="fade-right" data-aos-delay="400"
        >
          تتبع شحنتك الآن
        </router-link>
        <router-link 
          to="/about" 
          class="bg-transparent border-2 border-white hover:bg-white hover:text-blue-600 font-bold py-3 px-8 rounded-lg transition duration-300"
          data-aos="fade-left" data-aos-delay="500"
        >
          اعرف المزيد
        </router-link>
      </div>
    </div>
  </section>
</template>

<script setup>
import heroImage from '@/assets/Hero-Section.jpg'
</script>

<style scoped>
</style>