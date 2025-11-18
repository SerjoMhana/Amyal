<template>
  <section class="py-20" data-aos="fade-up">
    <div class="container mx-auto px-4">
      <div class="text-center mb-16" data-aos="fade-up" data-aos-delay="100">
        <h2 class="text-3xl font-bold text-gray-800 mb-4">الأسئلة والإجابات</h2>
        <p class="text-xl text-gray-600">إليك أهم الأسئلة التي يطرحها عملاؤنا باستمرار.</p>
      </div>
      
      <div class="max-w-4xl mx-auto">
        <!-- FAQ Item 1 -->
        <div class="bg-white rounded-xl shadow-lg mb-4 overflow-hidden" data-aos="fade-up" data-aos-delay="200">
          <div 
            class="flex justify-between items-center p-6 cursor-pointer"
            @click="toggleFAQ(1)"
            data-aos="fade-up" data-aos-delay="250"
          >
            <h3 class="text-xl font-bold text-yellow-500">1. كيف اشترك في أميال؟</h3>
            <div class="text-blue-600 font-bold text-2xl">
              {{ openFAQ === 1 ? '−' : '+' }}
            </div>
          </div>
          <div 
            ref="faq1"
            class="faq-content"
            :class="{ 'faq-open': openFAQ === 1 }"
          >
            <div class="px-6 pb-6" data-aos="fade-up" data-aos-delay="300">
              <p class="text-gray-600">
                قم بزيارة الموقع الرسمي أو أحد فروع أميال وسجّل كتاجر أو عميل، وستحصل على لوحة تحكم خاصة بك.
              </p>
            </div>
          </div>
        </div>
        
        <!-- FAQ Item 2 -->
        <div class="bg-white rounded-xl shadow-lg mb-4 overflow-hidden" data-aos="fade-up" data-aos-delay="300">
          <div 
            class="flex justify-between items-center p-6 cursor-pointer"
            @click="toggleFAQ(2)"
            data-aos="fade-up" data-aos-delay="350"
          >
            <h3 class="text-xl font-bold text-yellow-500">2. كيف أشحن؟</h3>
            <div class="text-blue-600 font-bold text-2xl">
              {{ openFAQ === 2 ? '−' : '+' }}
            </div>
          </div>
          <div 
            ref="faq2"
            class="faq-content"
            :class="{ 'faq-open': openFAQ === 2 }"
          >
            <div class="px-6 pb-6" data-aos="fade-up" data-aos-delay="400">
              <p class="text-gray-600">
                من خلال لوحة التحكم أو التطبيق، يمكنك إدخال تفاصيل الشحنة وسنرسل مندوبًا لاستلامها من عنوانك.
              </p>
            </div>
          </div>
        </div>
        
        <!-- FAQ Item 3 -->
        <div class="bg-white rounded-xl shadow-lg mb-4 overflow-hidden" data-aos="fade-up" data-aos-delay="400">
          <div 
            class="flex justify-between items-center p-6 cursor-pointer"
            @click="toggleFAQ(3)"
            data-aos="fade-up" data-aos-delay="450"
          >
            <h3 class="text-xl font-bold text-yellow-500">3. كيف أتتبع الشحنة؟</h3>
            <div class="text-blue-600 font-bold text-2xl">
              {{ openFAQ === 3 ? '−' : '+' }}
            </div>
          </div>
          <div 
            ref="faq3"
            class="faq-content"
            :class="{ 'faq-open': openFAQ === 3 }"
          >
            <div class="px-6 pb-6" data-aos="fade-up" data-aos-delay="500">
              <p class="text-gray-600">
                ادخل رقم التتبع في صفحة التتبع على الموقع أو التطبيق وستظهر لك حالة الشحنة بالتفصيل.
              </p>
            </div>
          </div>
        </div>
        
        <!-- FAQ Item 4 -->
        <div class="bg-white rounded-xl shadow-lg mb-4 overflow-hidden" data-aos="fade-up" data-aos-delay="500">
          <div 
            class="flex justify-between items-center p-6 cursor-pointer"
            @click="toggleFAQ(4)"
            data-aos="fade-up" data-aos-delay="550"
          >
            <h3 class="text-xl font-bold text-yellow-500">4. متى استلم التسوية المالية؟</h3>
            <div class="text-blue-600 font-bold text-2xl">
              {{ openFAQ === 4 ? '−' : '+' }}
            </div>
          </div>
          <div 
            ref="faq4"
            class="faq-content"
            :class="{ 'faq-open': openFAQ === 4 }"
          >
            <div class="px-6 pb-6" data-aos="fade-up" data-aos-delay="600">
              <p class="text-gray-600">
                نقوم بإجراء التسويات بشكل دوري (يومي أو أسبوعي) حسب الاتفاق مع التاجر.
              </p>
            </div>
          </div>
        </div>
        
        <!-- FAQ Item 5 -->
        <div class="bg-white rounded-xl shadow-lg mb-4 overflow-hidden" data-aos="fade-up" data-aos-delay="600">
          <div 
            class="flex justify-between items-center p-6 cursor-pointer"
            @click="toggleFAQ(5)"
            data-aos="fade-up" data-aos-delay="650"
          >
            <h3 class="text-xl font-bold text-yellow-500">5. اين موقعكم؟</h3>
            <div class="text-blue-600 font-bold text-2xl">
              {{ openFAQ === 5 ? '−' : '+' }}
            </div>
          </div>
          <div 
            ref="faq5"
            class="faq-content"
            :class="{ 'faq-open': openFAQ === 5 }"
          >
            <div class="px-6 pb-6" data-aos="fade-up" data-aos-delay="700">
              <p class="text-gray-600">
                لدينا أكثر من 180 فرعًا داخل ليبيا. لمعرفة الأقرب إليك، راجع صفحة الفروع أو تواصل معنا عبر واتساب.
              </p>
            </div>
          </div>
        </div>
        
        <!-- FAQ Item 6 -->
        <div class="bg-white rounded-xl shadow-lg overflow-hidden" data-aos="fade-up" data-aos-delay="700">
          <div 
            class="flex justify-between items-center p-6 cursor-pointer"
            @click="toggleFAQ(6)"
            data-aos="fade-up" data-aos-delay="750"
          >
            <h3 class="text-xl font-bold text-yellow-500">6. هل توجد خدمة تخزين؟</h3>
            <div class="text-blue-600 font-bold text-2xl">
              {{ openFAQ === 6 ? '−' : '+' }}
            </div>
          </div>
          <div 
            ref="faq6"
            class="faq-content"
            :class="{ 'faq-open': openFAQ === 6 }"
          >
            <div class="px-6 pb-6" data-aos="fade-up" data-aos-delay="800">
              <p class="text-gray-600">
                نعم، نوفر خدمة تخزين مؤقت للتجار وفق خطة زمنية محددة وشروط يتم الاتفاق عليها مسبقًا.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
import { ref, nextTick } from 'vue'

const openFAQ = ref(null)
const faq1 = ref(null)
const faq2 = ref(null)
const faq3 = ref(null)
const faq4 = ref(null)
const faq5 = ref(null)
const faq6 = ref(null)

const getFaqRef = (index) => {
  switch (index) {
    case 1: return faq1
    case 2: return faq2
    case 3: return faq3
    case 4: return faq4
    case 5: return faq5
    case 6: return faq6
    default: return null
  }
}

const toggleFAQ = (index) => {
  if (openFAQ.value === index) {
    // Close the currently open FAQ
    const faqRef = getFaqRef(index)
    if (faqRef && faqRef.value) {
      const content = faqRef.value
      content.style.maxHeight = content.scrollHeight + 'px'
      setTimeout(() => {
        content.style.maxHeight = '0'
        content.style.opacity = '0'
        content.style.paddingTop = '0'
        content.style.paddingBottom = '0'
      }, 10)
    }
    openFAQ.value = null
  } else {
    // Close the previously open FAQ if any
    if (openFAQ.value !== null) {
      const prevFaqRef = getFaqRef(openFAQ.value)
      if (prevFaqRef && prevFaqRef.value) {
        const prevContent = prevFaqRef.value
        prevContent.style.maxHeight = '0'
        prevContent.style.opacity = '0'
        prevContent.style.paddingTop = '0'
        prevContent.style.paddingBottom = '0'
      }
    }
    
    // Open the clicked FAQ
    openFAQ.value = index
    nextTick(() => {
      const faqRef = getFaqRef(index)
      if (faqRef && faqRef.value) {
        const content = faqRef.value
        content.style.maxHeight = '0'
        content.style.opacity = '0'
        setTimeout(() => {
          content.style.transition = 'all 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94)'
          content.style.maxHeight = content.scrollHeight + 'px'
          content.style.opacity = '1'
          content.style.paddingTop = ''
          content.style.paddingBottom = ''
        }, 10)
      }
    })
  }
}
</script>

<style scoped>
.faq-content {
  max-height: 0;
  opacity: 0;
  overflow: hidden;
  transition: all 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
  padding-top: 0;
  padding-bottom: 0;
}

.faq-open {
  max-height: 1000px;
  opacity: 1;
  padding-top: 0;
  padding-bottom: 1.5rem;
}
</style>