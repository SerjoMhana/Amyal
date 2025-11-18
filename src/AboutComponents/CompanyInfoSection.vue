<template>
  <div class="py-16 bg-white" data-aos="fade-up">
    <div class="container mx-auto px-4">
      <div class="flex flex-col md:flex-row items-center gap-12">
        <div class="md:w-1/2" data-aos="fade-right" data-aos-delay="100">
          <h2 class="text-3xl font-bold text-gray-800 mb-6" data-aos="fade-up" data-aos-delay="200">من نحن</h2>
          <p class="text-gray-600 text-lg mb-6" data-aos="fade-up" data-aos-delay="300">
            تأسست شركة أميال في عام 2016، كأول شركة ليبية تقدم خدمات شحن احترافية إلكترونية تغطي كافة المدن الليبية.
          </p>
          <p class="text-gray-600 text-lg mb-6" data-aos="fade-up" data-aos-delay="400">
            نقدم حلولًا متكاملة للتوصيل من الباب إلى الباب، ونوفر تتبعًا دقيقًا لكل شحنة باستخدام أحدث المنظومات.
          </p>
          <p class="text-gray-600 text-lg" data-aos="fade-up" data-aos-delay="500">
            نعمل بشراكة استراتيجية مع أكثر من 1200 عميل داخل وخارج ليبيا، ونقدم خدماتنا في أكثر من 7 دول.
          </p>
        </div>
        <div class="md:w-1/2 grid grid-cols-2 gap-6" data-aos="fade-left" data-aos-delay="200">
          <!-- Company Image -->
          <div class="col-span-2 flex justify-center mb-8" data-aos="fade-up" data-aos-delay="300">
            <img src="@/assets/AboutUs.jpg" alt="صورة الشركة" class="rounded-xl w-full h-64 object-cover" data-aos="zoom-in" data-aos-delay="400">
          </div>
          <div class="bg-blue-50 p-8 rounded-xl text-center" data-aos="fade-up" data-aos-delay="500">
            <div class="text-4xl font-bold text-blue-600 mb-2" data-aos="fade-up" data-aos-delay="600">8+</div>
            <div class="text-gray-700 font-medium" data-aos="fade-up" data-aos-delay="700">سنوات من الخبرة</div>
          </div>
          <div class="bg-blue-50 p-8 rounded-xl text-center" data-aos="fade-up" data-aos-delay="600">
            <div class="text-4xl font-bold text-blue-600 mb-2" data-aos="fade-up" data-aos-delay="700">1200+</div>
            <div class="text-gray-700 font-medium" data-aos="fade-up" data-aos-delay="800">شريك استراتيجي</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import companyImage from '@/assets/AboutUs.jpg'
</script>

<style lang="scss" scoped>
</style>