<template>
  <section class="py-20" data-aos="fade-up">
    <div class="container mx-auto px-4">
      <div class="max-w-4xl mx-auto">
        <div class="bg-white rounded-2xl shadow-xl p-8 md:p-12" data-aos="fade-up" data-aos-delay="100">
          <div class="text-center mb-10" data-aos="fade-up" data-aos-delay="200">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">تتبع شحنتك</h2>
            <p class="text-gray-600" data-aos="fade-up" data-aos-delay="300">
              أدخل رقم التتبع الخاص بك لمعرفة حالة الشحنة والتفاصيل
            </p>
          </div>
          
          <form class="mb-8" data-aos="fade-up" data-aos-delay="400">
            <div class="flex flex-col md:flex-row gap-4" data-aos="fade-up" data-aos-delay="500">
              <div class="flex-grow" data-aos="fade-up" data-aos-delay="600">
                <input 
                  type="text" 
                  placeholder="أدخل رقم التتبع هنا..." 
                  class="w-full px-6 py-4 rounded-xl border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-gray-700"
                  v-model="trackingNumber"
                  data-aos="fade-up" data-aos-delay="700"
                >
              </div>
              <button 
                type="submit"
                class="px-8 py-4 bg-gradient-to-r from-blue-500 to-blue-700 text-white font-bold rounded-xl hover:from-blue-600 hover:to-blue-800 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1"
                @click.prevent="trackShipment"
                data-aos="fade-up" data-aos-delay="800"
              >
                تتبع الآن
              </button>
            </div>
          </form>
          
          <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-xl p-6 border border-blue-100" data-aos="fade-up" data-aos-delay="900">
            <div class="flex items-start" data-aos="fade-up" data-aos-delay="1000">
              <div class="bg-blue-100 p-3 rounded-lg mr-4" data-aos="zoom-in" data-aos-delay="1100">
                <font-awesome-icon :icon="['fas', 'info-circle']" class="text-blue-600 text-xl" />
              </div>
              <div data-aos="fade-up" data-aos-delay="1200">
                <h3 class="font-bold text-gray-800 mb-2">كيفية الحصول على رقم التتبع؟</h3>
                <p class="text-gray-600">
                  يمكنك العثور على رقم التتبع في رسالة التأكيد التي تم إرسالها إليك عبر البريد الإلكتروني أو الرسائل النصية بعد إنشاء الشحنة.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
import { ref } from 'vue'
import { library } from '@fortawesome/fontawesome-svg-core'
import { faInfoCircle } from '@fortawesome/free-solid-svg-icons'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

library.add(faInfoCircle)

const trackingNumber = ref('')

const trackShipment = () => {
  if (trackingNumber.value.trim()) {
    // Here you would typically make an API call to track the shipment
    console.log('Tracking number:', trackingNumber.value)
    alert(`تتبع الشحنة برقم: ${trackingNumber.value}`)
  } else {
    alert('الرجاء إدخال رقم التتبع')
  }
}
</script>

<style scoped>
</style>