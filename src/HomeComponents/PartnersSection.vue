<template>
  <section class="py-20 bg-gradient-to-r from-blue-600 to-indigo-700 text-white" data-aos="fade-up">
    <div class="container mx-auto px-4">
      <div class="max-w-4xl mx-auto text-center">
        <div class="inline-block p-4 bg-white bg-opacity-20 rounded-full mb-6" data-aos="zoom-in" data-aos-delay="100">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
          </svg>
        </div>
        
        <h2 class="text-4xl md:text-5xl font-bold mb-6" data-aos="fade-up" data-aos-delay="200">انضم إلى شركاء أميال</h2>
        <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto text-blue-100" data-aos="fade-up" data-aos-delay="300">
          كن جزءاً من شبكة شحن موثوقة واحترافية تغطي جميع أنحاء ليبيا والعالم
        </p>
        
        <div class="flex flex-col sm:flex-row justify-center gap-6 mb-12" data-aos="fade-up" data-aos-delay="400">
          <div class="flex items-center justify-center gap-3" data-aos="fade-up" data-aos-delay="500">
            <svg class="w-6 h-6 text-green-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span class="text-xl">شبكة توزيع واسعة</span>
          </div>
          <div class="flex items-center justify-center gap-3" data-aos="fade-up" data-aos-delay="600">
            <svg class="w-6 h-6 text-green-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span class="text-xl">دعم فني متخصص</span>
          </div>
          <div class="flex items-center justify-center gap-3" data-aos="fade-up" data-aos-delay="700">
            <svg class="w-6 h-6 text-green-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span class="text-xl">أسعار تنافسية</span>
          </div>
        </div>
        
        <router-link 
          to="/contact-us" 
          class="inline-block bg-white text-blue-600 hover:bg-gray-100 font-bold py-5 px-10 rounded-xl transition duration-300 transform hover:scale-105 text-xl shadow-2xl"
          data-aos="zoom-in" data-aos-delay="800"
        >
          تواصل معنا الآن
        </router-link>
      </div>
    </div>
  </section>
</template>

<script setup>
</script>

<style scoped>
</style>