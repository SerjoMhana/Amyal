<template>
  <div class="py-16 bg-gray-50" data-aos="fade-up">
    <div class="container mx-auto px-4">
      <div class="text-center mb-16" data-aos="fade-up" data-aos-delay="100">
        <h2 class="text-3xl font-bold text-gray-800 mb-4" data-aos="fade-up" data-aos-delay="200">لماذا تختار أميال؟</h2>
        <p class="text-gray-600 max-w-3xl mx-auto text-lg" data-aos="fade-up" data-aos-delay="300">
          نحن لا نقدم مجرد خدمات شحن، بل نمنحك منظومة متكاملة من الاحترافية، الأمان، والسرعة مدعومة بخبرة وابتكار تقني.
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Value 1 -->
        <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-md transition-shadow" data-aos="fade-up" data-aos-delay="200">
          <div class="w-12 h-12 rounded-full bg-blue-100 flex items-center justify-center mb-6" data-aos="zoom-in" data-aos-delay="300">
            <span class="text-blue-600 font-bold text-xl">1</span>
          </div>
          <h3 class="text-xl font-bold text-gray-800 mb-4" data-aos="fade-up" data-aos-delay="400">خبرة ممتدة منذ 2016</h3>
          <p class="text-gray-600" data-aos="fade-up" data-aos-delay="500">
            من أوائل شركات الشحن في ليبيا التي وضعت قواعد واضحة للتوصيل وأسعار ثابتة، مع أكثر من 8 سنوات من الخبرة الميدانية.
          </p>
          <!-- Experience Icon -->
          <div class="mt-6 flex justify-center" data-aos="fade-up" data-aos-delay="600">
            <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center shadow-lg">
              <font-awesome-icon :icon="['fas', 'award']" class="text-yellow-400 text-2xl" />
            </div>
          </div>
        </div>

        <!-- Value 2 -->
        <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-md transition-shadow" data-aos="fade-up" data-aos-delay="300">
          <div class="w-12 h-12 rounded-full bg-blue-100 flex items-center justify-center mb-6" data-aos="zoom-in" data-aos-delay="400">
            <span class="text-blue-600 font-bold text-xl">2</span>
          </div>
          <h3 class="text-xl font-bold text-gray-800 mb-4" data-aos="fade-up" data-aos-delay="500">التغطية الشاملة</h3>
          <p class="text-gray-600" data-aos="fade-up" data-aos-delay="600">
            نصل إلى جميع المدن الليبية دون استثناء عبر شبكة واسعة من مندوبي التوصيل تزيد عن 120 مندوبًا موزعين جغرافيًا.
          </p>
          <!-- Coverage Icon -->
          <div class="mt-6 flex justify-center" data-aos="fade-up" data-aos-delay="700">
            <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center shadow-lg">
              <font-awesome-icon :icon="['fas', 'map-marker-alt']" class="text-yellow-400 text-2xl" />
            </div>
          </div>
        </div>

        <!-- Value 3 -->
        <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-md transition-shadow" data-aos="fade-up" data-aos-delay="400">
          <div class="w-12 h-12 rounded-full bg-blue-100 flex items-center justify-center mb-6" data-aos="zoom-in" data-aos-delay="500">
            <span class="text-blue-600 font-bold text-xl">3</span>
          </div>
          <h3 class="text-xl font-bold text-gray-800 mb-4" data-aos="fade-up" data-aos-delay="600">نظام تتبع ذكي</h3>
          <p class="text-gray-600" data-aos="fade-up" data-aos-delay="700">
            منظومة إلكترونية متقدمة تتيح لك متابعة الشحنات لحظيًا، مع إمكانية التتبع عبر الإنترنت من أي مكان في العالم.
          </p>
          <!-- Tracking Icon -->
          <div class="mt-6 flex justify-center" data-aos="fade-up" data-aos-delay="800">
            <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center shadow-lg">
              <font-awesome-icon :icon="['fas', 'location-arrow']" class="text-yellow-400 text-2xl" />
            </div>
          </div>
        </div>

        <!-- Value 4 -->
        <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-md transition-shadow" data-aos="fade-up" data-aos-delay="500">
          <div class="w-12 h-12 rounded-full bg-blue-100 flex items-center justify-center mb-6" data-aos="zoom-in" data-aos-delay="600">
            <span class="text-blue-600 font-bold text-xl">4</span>
          </div>
          <h3 class="text-xl font-bold text-gray-800 mb-4" data-aos="fade-up" data-aos-delay="700">أمان وموثوقية</h3>
          <p class="text-gray-600" data-aos="fade-up" data-aos-delay="800">
            نحرص على توصيل الشحنات بكل دقة واهتمام، مع تغليف وحماية مضمونة، وإبلاغ العميل بتفاصيل كل مرحلة.
          </p>
          <!-- Security Icon -->
          <div class="mt-6 flex justify-center" data-aos="fade-up" data-aos-delay="900">
            <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center shadow-lg">
              <font-awesome-icon :icon="['fas', 'shield-alt']" class="text-yellow-400 text-2xl" />
            </div>
          </div>
        </div>

        <!-- Value 5 -->
        <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-md transition-shadow" data-aos="fade-up" data-aos-delay="600">
          <div class="w-12 h-12 rounded-full bg-blue-100 flex items-center justify-center mb-6" data-aos="zoom-in" data-aos-delay="700">
            <span class="text-blue-600 font-bold text-xl">5</span>
          </div>
          <h3 class="text-xl font-bold text-gray-800 mb-4" data-aos="fade-up" data-aos-delay="800">حلول دفع مرنة</h3>
          <p class="text-gray-600" data-aos="fade-up" data-aos-delay="900">
            ندعم طرق دفع إلكتروني متنوعة مثل سداد، تداول، ادفعلي، والبطاقات المصرفية، لتناسب مختلف شركائنا.
          </p>
          <!-- Payment Icon -->
          <div class="mt-6 flex justify-center" data-aos="fade-up" data-aos-delay="1000">
            <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center shadow-lg">
              <font-awesome-icon :icon="['fas', 'credit-card']" class="text-yellow-400 text-2xl" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
</script>

<style lang="scss" scoped>
</style>