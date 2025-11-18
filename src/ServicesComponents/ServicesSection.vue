<template>
  <section class="py-20" data-aos="fade-up">
    <div class="container mx-auto px-4">
      <div class="text-center mb-16" data-aos="fade-up" data-aos-delay="100">
        <h2 class="text-3xl font-bold text-gray-800 mb-4">ما نقدمه في أميال</h2>
      </div>
      
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Service 1 -->
        <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border border-gray-100" data-aos="fade-up" data-aos-delay="200">
          <div class="bg-gradient-to-br from-blue-500 to-blue-600 w-16 h-16 rounded-2xl flex items-center justify-center mb-6" data-aos="zoom-in" data-aos-delay="300">
            <font-awesome-icon :icon="['fas', 'truck-fast']" class="text-white text-2xl" />
          </div>
          <h3 class="text-xl font-bold text-gray-800 mb-4" data-aos="fade-up" data-aos-delay="400">توصيل الشحنات</h3>
          <p class="text-gray-600 mb-6 leading-relaxed" data-aos="fade-up" data-aos-delay="500">
            خدمة توصيل سريعة ومضمونة من المتجر إلى باب الزبون في أكثر من 30 مدينة ليبية.
          </p>
          <a href="#" class="inline-flex items-center text-blue-600 font-semibold hover:text-blue-800 transition-colors group" data-aos="fade-up" data-aos-delay="600">
            اكتشف المزيد 
            <font-awesome-icon :icon="['fas', 'arrow-left']" class="mr-2 group-hover:mr-3 transition-all duration-300" />
          </a>
        </div>
        
        <!-- Service 2 -->
        <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border border-gray-100" data-aos="fade-up" data-aos-delay="300">
          <div class="bg-gradient-to-br from-green-500 to-green-600 w-16 h-16 rounded-2xl flex items-center justify-center mb-6" data-aos="zoom-in" data-aos-delay="400">
            <font-awesome-icon :icon="['fas', 'money-bill-wave']" class="text-white text-2xl" />
          </div>
          <h3 class="text-xl font-bold text-gray-800 mb-4" data-aos="fade-up" data-aos-delay="500">الدفع عند الاستلام (COD)</h3>
          <p class="text-gray-600 mb-6 leading-relaxed" data-aos="fade-up" data-aos-delay="600">
            نقوم بتحصيل قيمة الشحنة نقدًا من الزبون وإيداعها في حساب التاجر بشكل دوري.
          </p>
          <a href="#" class="inline-flex items-center text-blue-600 font-semibold hover:text-blue-800 transition-colors group" data-aos="fade-up" data-aos-delay="700">
            اكتشف المزيد 
            <font-awesome-icon :icon="['fas', 'arrow-left']" class="mr-2 group-hover:mr-3 transition-all duration-300" />
          </a>
        </div>
        
        <!-- Service 3 -->
        <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border border-gray-100" data-aos="fade-up" data-aos-delay="400">
          <div class="bg-gradient-to-br from-purple-500 to-purple-600 w-16 h-16 rounded-2xl flex items-center justify-center mb-6" data-aos="zoom-in" data-aos-delay="500">
            <font-awesome-icon :icon="['fas', 'location-dot']" class="text-white text-2xl" />
          </div>
          <h3 class="text-xl font-bold text-gray-800 mb-4" data-aos="fade-up" data-aos-delay="600">تتبع الشحنات</h3>
          <p class="text-gray-600 mb-6 leading-relaxed" data-aos="fade-up" data-aos-delay="700">
            نظام إلكتروني يسمح للزبون والتاجر بتتبع حالة الشحنة لحظة بلحظة.
          </p>
          <a href="#" class="inline-flex items-center text-blue-600 font-semibold hover:text-blue-800 transition-colors group" data-aos="fade-up" data-aos-delay="800">
            اكتشف المزيد 
            <font-awesome-icon :icon="['fas', 'arrow-left']" class="mr-2 group-hover:mr-3 transition-all duration-300" />
          </a>
        </div>
        
        <!-- Service 4 -->
        <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border border-gray-100" data-aos="fade-up" data-aos-delay="500">
          <div class="bg-gradient-to-br from-indigo-500 to-indigo-600 w-16 h-16 rounded-2xl flex items-center justify-center mb-6" data-aos="zoom-in" data-aos-delay="600">
            <font-awesome-icon :icon="['fas', 'gauge-high']" class="text-white text-2xl" />
          </div>
          <h3 class="text-xl font-bold text-gray-800 mb-4" data-aos="fade-up" data-aos-delay="700">لوحة تحكم للتجار</h3>
          <p class="text-gray-600 mb-6 leading-relaxed" data-aos="fade-up" data-aos-delay="800">
            تتيح للتاجر إدارة طلباته، مراجعة المبالغ المستلمة، وتتبع أداء التوصيل.
          </p>
          <a href="#" class="inline-flex items-center text-blue-600 font-semibold hover:text-blue-800 transition-colors group" data-aos="fade-up" data-aos-delay="900">
            اكتشف المزيد 
            <font-awesome-icon :icon="['fas', 'arrow-left']" class="mr-2 group-hover:mr-3 transition-all duration-300" />
          </a>
        </div>
        
        <!-- Service 5 -->
        <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border border-gray-100" data-aos="fade-up" data-aos-delay="600">
          <div class="bg-gradient-to-br from-orange-500 to-orange-600 w-16 h-16 rounded-2xl flex items-center justify-center mb-6" data-aos="zoom-in" data-aos-delay="700">
            <font-awesome-icon :icon="['fas', 'mobile-screen-button']" class="text-white text-2xl" />
          </div>
          <h3 class="text-xl font-bold text-gray-800 mb-4" data-aos="fade-up" data-aos-delay="800">تطبيق المندوبين</h3>
          <p class="text-gray-600 mb-6 leading-relaxed" data-aos="fade-up" data-aos-delay="900">
            تطبيق خاص بالمندوب يسهّل عمليات التوصيل والتحصيل ويعرض المسارات اليومية.
          </p>
          <a href="#" class="inline-flex items-center text-blue-600 font-semibold hover:text-blue-800 transition-colors group" data-aos="fade-up" data-aos-delay="1000">
            اكتشف المزيد 
            <font-awesome-icon :icon="['fas', 'arrow-left']" class="mr-2 group-hover:mr-3 transition-all duration-300" />
          </a>
        </div>
        
        <!-- Service 6 -->
        <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border border-gray-100" data-aos="fade-up" data-aos-delay="700">
          <div class="bg-gradient-to-br from-teal-500 to-teal-600 w-16 h-16 rounded-2xl flex items-center justify-center mb-6" data-aos="zoom-in" data-aos-delay="800">
            <font-awesome-icon :icon="['fas', 'globe']" class="text-white text-2xl" />
          </div>
          <h3 class="text-xl font-bold text-gray-800 mb-4" data-aos="fade-up" data-aos-delay="900">خدمة اشريلي الدولية</h3>
          <p class="text-gray-600 mb-6 leading-relaxed" data-aos="fade-up" data-aos-delay="1000">
            نستلم مشتريات الزبائن من الخارج ونوصلها لهم داخل ليبيا بأسعار مناسبة.
          </p>
          <a href="#" class="inline-flex items-center text-blue-600 font-semibold hover:text-blue-800 transition-colors group" data-aos="fade-up" data-aos-delay="1100">
            اكتشف المزيد 
            <font-awesome-icon :icon="['fas', 'arrow-left']" class="mr-2 group-hover:mr-3 transition-all duration-300" />
          </a>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
import { library } from '@fortawesome/fontawesome-svg-core'
import { 
  faTruckFast, 
  faMoneyBillWave, 
  faLocationDot, 
  faGaugeHigh, 
  faMobileScreenButton, 
  faGlobe,
  faArrowLeft
} from '@fortawesome/free-solid-svg-icons'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

library.add(faTruckFast, faMoneyBillWave, faLocationDot, faGaugeHigh, faMobileScreenButton, faGlobe, faArrowLeft)
</script>

<style scoped>
</style>