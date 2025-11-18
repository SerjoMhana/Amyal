<template>
  <section class="py-16 bg-white relative overflow-hidden" data-aos="fade-up">
    <!-- Animated delivery elements with different shapes -->
    <div class="absolute top-20 -left-10 w-24 h-24 rounded-full bg-blue-200 opacity-20 animate-ping" data-aos="fade-in" data-aos-delay="100"></div>
    
    <div class="absolute bottom-32 right-0 w-32 h-32 rounded-full bg-yellow-200 opacity-15 animate-bounce" data-aos="fade-in" data-aos-delay="200"></div>
    
    <div class="absolute top-1/2 left-10 w-16 h-16 bg-indigo-200 opacity-20 animate-pulse transform rotate-45" data-aos="fade-in" data-aos-delay="300"></div>
    
    <div class="absolute top-1/4 right-20 w-20 h-12 bg-green-200 opacity-20 animate-pulse rounded-lg" data-aos="fade-in" data-aos-delay="400"></div>
    
    <div class="px-0 relative z-10">
      <div class="text-center mb-16" data-aos="fade-up" data-aos-delay="100">
        <h2 class="text-3xl md:text-4xl font-bold text-black mb-4">خدمات أميال</h2>
        <p class="text-gray-600 max-w-2xl mx-auto">
          نقدم مجموعة شاملة من خدمات الشحن والتوصيل لتلبية جميع احتياجاتك
        </p>
      </div>
      
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
        <!-- Service 1 -->
        <div class="bg-white p-8 rounded-2xl text-center hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border-t-4 border-blue-500 shadow-lg" data-aos="fade-up" data-aos-delay="200">
          <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6" data-aos="zoom-in" data-aos-delay="300">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
            </svg>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-3">الشحن الداخلي</h3>
          <p class="text-gray-600">
            خدمات شحن سريعة وآمنة داخل جميع أنحاء ليبيا
          </p>
        </div>
        
        <!-- Service 2 -->
        <div class="bg-white p-8 rounded-2xl text-center hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border-t-4 border-yellow-500 shadow-lg" data-aos="fade-up" data-aos-delay="300">
          <div class="w-16 h-16 bg-yellow-100 rounded-full flex items-center justify-center mx-auto mb-6" data-aos="zoom-in" data-aos-delay="400">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-yellow-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-3">الشحن الدولي</h3>
          <p class="text-gray-600">
            حلول شحن دولية موثوقة إلى جميع أنحاء العالم
          </p>
        </div>
        
        <!-- Service 3 -->
        <div class="bg-white p-8 rounded-2xl text-center hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border-t-4 border-blue-500 shadow-lg" data-aos="fade-up" data-aos-delay="400">
          <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6" data-aos="zoom-in" data-aos-delay="500">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
            </svg>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-3">تتبع الشحنات</h3>
          <p class="text-gray-600">
            نظام متقدم لتتبع الشحنات في الوقت الفعلي
          </p>
        </div>
        
        <!-- Service 4 -->
        <div class="bg-white p-8 rounded-2xl text-center hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border-t-4 border-yellow-500 shadow-lg" data-aos="fade-up" data-aos-delay="500">
          <div class="w-16 h-16 bg-yellow-100 rounded-full flex items-center justify-center mx-auto mb-6" data-aos="zoom-in" data-aos-delay="600">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-yellow-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
            </svg>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-3">التخزين اللوجستي</h3>
          <p class="text-gray-600">
            حلول تخزين وتوزيع متكاملة لمنتجاتك
          </p>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
</script>

<style scoped>
.bg-beige-50 {
  background-color: #fdfdfd;
}
</style>