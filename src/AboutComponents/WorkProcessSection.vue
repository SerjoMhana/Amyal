<template>
  <div class="py-16 bg-gray-50" data-aos="fade-up">
    <div class="container mx-auto px-4">
      <div class="text-center mb-16" data-aos="fade-up" data-aos-delay="100">
        <h2 class="text-3xl font-bold text-gray-800 mb-4" data-aos="fade-up" data-aos-delay="200">آلية العمل</h2>
        <p class="text-gray-600 max-w-3xl mx-auto text-lg" data-aos="fade-up" data-aos-delay="300">
          كيف تعمل أميال على توصيل شحنتك؟
        </p>
        <p class="text-gray-600 max-w-3xl mx-auto text-lg mt-4" data-aos="fade-up" data-aos-delay="400">
          نُنفذ عملية التوصيل من الباب إلى الباب بخطوات منظمة تضمن السرعة، الدقة، والأمان.
        </p>
      </div>

      <!-- Step 1: Card on right, Image on left -->
      <div class="flex flex-col lg:flex-row gap-8 items-center mb-16" data-aos="fade-up" data-aos-delay="200">
        <!-- Left side - Image -->
        <div class="lg:w-1/2 flex justify-center" data-aos="fade-right" data-aos-delay="300">
          <div class=" p-4 " data-aos="zoom-in" data-aos-delay="400">
            <img src="@/assets/Aboutus1-removebg-preview.png" alt="استلام الشحنة" class="w-full h-auto rounded-lg object-contain animate-slide-right">
          </div>
        </div>
        
        <!-- Right side - Card -->
        <div class="lg:w-1/2" data-aos="fade-left" data-aos-delay="300">
          <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-md transition-shadow" data-aos="fade-up" data-aos-delay="400">
            <div class="w-12 h-12 rounded-full bg-blue-100 flex items-center justify-center mb-6" data-aos="zoom-in" data-aos-delay="500">
              <span class="text-blue-600 font-bold text-xl">1</span>
            </div>
            <h3 class="text-xl font-bold text-gray-800 mb-4" data-aos="fade-up" data-aos-delay="600">الخطوة الأولى</h3>
            <p class="text-gray-600" data-aos="fade-up" data-aos-delay="700">
              استلام الشحنة
            </p>
            <p class="text-gray-600 mt-2 text-sm" data-aos="fade-up" data-aos-delay="800">
              يتم استلام الطرد من المتجر أو من العميل، مع إصدار بوليصة شحن رسمية تحتوي على كافة بيانات الشحنة ومعلومات التتبع.
            </p>
          </div>
        </div>
      </div>

      <!-- Step 2: Card on left, Image on right -->
      <div class="flex flex-col lg:flex-row-reverse gap-8 items-center mb-16" data-aos="fade-up" data-aos-delay="300">
        <!-- Right side - Image -->
        <div class="lg:w-1/2 flex justify-center" data-aos="fade-left" data-aos-delay="400">
          <div class=" p-4" data-aos="zoom-in" data-aos-delay="500">
            <img src="@/assets/Aboutus2-removebg-preview.png" alt="الفرز والتوزيع" class="w-full h-auto rounded-lg object-contain animate-slide-right">
          </div>
        </div>
        
        <!-- Left side - Card -->
        <div class="lg:w-1/2" data-aos="fade-right" data-aos-delay="400">
          <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-md transition-shadow" data-aos="fade-up" data-aos-delay="500">
            <div class="w-12 h-12 rounded-full bg-blue-100 flex items-center justify-center mb-6" data-aos="zoom-in" data-aos-delay="600">
              <span class="text-blue-600 font-bold text-xl">2</span>
            </div>
            <h3 class="text-xl font-bold text-gray-800 mb-4" data-aos="fade-up" data-aos-delay="700">الخطوة الثانية</h3>
            <p class="text-gray-600" data-aos="fade-up" data-aos-delay="800">
              الفرز والتوزيع
            </p>
            <p class="text-gray-600 mt-2 text-sm" data-aos="fade-up" data-aos-delay="900">
              تُفرز الشحنات حسب المدينة والوجهة داخل مستودعاتنا، ثم تُسند إلى المندوب المناسب في كل منطقة.
            </p>
          </div>
        </div>
      </div>

      <!-- Step 3: Card on right, Image on left -->
      <div class="flex flex-col lg:flex-row gap-8 items-center mb-16" data-aos="fade-up" data-aos-delay="400">
        <!-- Left side - Image -->
        <div class="lg:w-1/2 flex justify-center" data-aos="fade-right" data-aos-delay="500">
          <div class=" p-4" data-aos="zoom-in" data-aos-delay="600">
            <img src="@/assets/Aboutus3-removebg-preview.png" alt="التتبع والتحديث" class="w-full h-auto rounded-lg object-contain animate-slide-right">
          </div>
        </div>
        
        <!-- Right side - Card -->
        <div class="lg:w-1/2" data-aos="fade-left" data-aos-delay="500">
          <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-md transition-shadow" data-aos="fade-up" data-aos-delay="600">
            <div class="w-12 h-12 rounded-full bg-blue-100 flex items-center justify-center mb-6" data-aos="zoom-in" data-aos-delay="700">
              <span class="text-blue-600 font-bold text-xl">3</span>
            </div>
            <h3 class="text-xl font-bold text-gray-800 mb-4" data-aos="fade-up" data-aos-delay="800">الخطوة الثالثة</h3>
            <p class="text-gray-600" data-aos="fade-up" data-aos-delay="900">
              التتبع والتحديث
            </p>
            <p class="text-gray-600 mt-2 text-sm" data-aos="fade-up" data-aos-delay="1000">
              يتم تحديث حالة الشحنة تلقائيًا في النظام، ويمكن للعميل معرفة كل خطوة من خلال التتبع عبر الموقع الإلكتروني.
            </p>
          </div>
        </div>
      </div>

      <!-- Step 4: Card on left, Image on right -->
      <div class="flex flex-col lg:flex-row-reverse gap-8 items-center" data-aos="fade-up" data-aos-delay="500">
        <!-- Right side - Image -->
        <div class="lg:w-1/2 flex justify-center" data-aos="fade-left" data-aos-delay="600">
          <div class=" p-4" data-aos="zoom-in" data-aos-delay="700">
            <img src="@/assets/Aboutus4-removebg-preview.png" alt="التوصيل للباب" class="w-full h-auto rounded-lg object-contain animate-slide-right">
          </div>
        </div>
        
        <!-- Left side - Card -->
        <div class="lg:w-1/2" data-aos="fade-right" data-aos-delay="600">
          <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-md transition-shadow" data-aos="fade-up" data-aos-delay="700">
            <div class="w-12 h-12 rounded-full bg-blue-100 flex items-center justify-center mb-6" data-aos="zoom-in" data-aos-delay="800">
              <span class="text-blue-600 font-bold text-xl">4</span>
            </div>
            <h3 class="text-xl font-bold text-gray-800 mb-4" data-aos="fade-up" data-aos-delay="900">الخطوة الرابعة</h3>
            <p class="text-gray-600" data-aos="fade-up" data-aos-delay="1000">
              التوصيل للباب
            </p>
            <p class="text-gray-600 mt-2 text-sm" data-aos="fade-up" data-aos-delay="1100">
              يقوم المندوب بتسليم الشحنة مباشرة إلى باب الزبون مع التأكد من الحالة، ويمكن للعميل التواصل مع مركز خدمة العملاء في حال وجود أي استفسارات.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
</script>

<style lang="scss" scoped>
.animate-slide-right {
  animation: slideRightToLeft 3s infinite alternate ease-in-out; /* Adjust duration and timing as needed */
}

@keyframes slideRightToLeft {
  0% {
    transform: translateX(0);
  }
  100% {
    transform: translateX(-10px); /* Moves the image 10px to the left */
  }
}
</style>