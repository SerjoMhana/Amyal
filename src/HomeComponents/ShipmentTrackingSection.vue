<template>
  <section class="py-0 bg-white relative" data-aos="fade-up">
    <div class="px-0">
      <div class="flex flex-col lg:flex-row min-h-screen">
        <!-- Image on the left - flush with left, top, and bottom -->
        <div class="lg:w-1/2 -ml-4 -mt-0 -mb-0" data-aos="fade-right" data-aos-delay="100">
          <img 
            src="@/assets/shipment-tracking.jpg" 
            alt="Shipment Tracking" 
            class="w-full h-full object-cover"
            onerror="this.style.display='none'"
          />
        </div>
        
        <!-- Content on the right - centered vertically -->
        <div class="lg:w-1/2 flex items-center justify-center p-8 md:p-12 relative" data-aos="fade-left" data-aos-delay="200">
          <!-- Title at top right with yellow text and large size -->
          <div class="absolute top-12 right-8 text-yellow-300 font-bold text-3xl md:text-4xl" data-aos="fade-down" data-aos-delay="300">
            تتبع شحنتك بسهولة مع أميال
          </div>
          
          <div class="w-full max-w-lg">
            <p class="text-gray-600 mb-5 text-right" data-aos="fade-up" data-aos-delay="400">
              يمكنك الآن تتبع شحنتك مباشرة باستخدام رقم التتبع الذي تم تزويدك به. كل ما عليك فعله هو إدخال الرقم في النموذج المجاور وسيتم عرض معلومات الشحنة وآخر التحديثات لحظيًا.
            </p>
            
            <div class="flex flex-col md:flex-row gap-4 mb-8 mt-8" data-aos="fade-up" data-aos-delay="500">
              <input 
                type="text" 
                placeholder="أدخل رقم التتبع" 
                class="flex-grow px-6 py-4 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                data-aos="fade-up" data-aos-delay="600"
              />
              <button class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-4 px-8 rounded-lg transition duration-300 whitespace-nowrap" data-aos="fade-up" data-aos-delay="700">
                تتبع الآن
              </button>
            </div>
            
            <p class="text-gray-600 mb-8 text-right" data-aos="fade-up" data-aos-delay="800">
              نظامنا يغطي جميع المدن الليبية، ويمكنك معرفة حالة الشحنة بدقة من استلامها وحتى التسليم.
            </p>
            
            <!-- Contact link at the bottom -->
            <div class="mt-24 text-center" data-aos="fade-up" data-aos-delay="900">
              <p class="text-gray-600">
                هل تواجه مشكلة؟ 
                <a href="/contact-us" class="text-blue-600 hover:underline font-medium">تواصل معنا</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
</script>

<style scoped>
</style>