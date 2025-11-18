<template>
  <footer class="bg-white text-gray-700 border-t" dir="rtl">
    <div class="container mx-auto px-4 py-12">
      <div class="grid grid-cols-1 md:grid-cols-4 gap-8 md:gap-24">
        <!-- Logo Column -->
        <div class="md:col-span-1 flex flex-col items-center md:items-start">
          <img src="@/assets/logo-01-removebg-preview.png" alt="أميال Logo" class="h-16 w-16 md:h-20 md:w-20 object-contain" />
          
          <!-- Social Icons below logo -->
          <div class="flex items-center gap-3">
            <a href="tel:0925279000" class="h-10 w-10 inline-flex items-center justify-center rounded-full bg-gray-50 text-gray-700 hover:bg-blue-600 hover:text-white transition">
              <font-awesome-icon :icon="['fas','phone']" class="text-[16px]" />
            </a>
            <a href="https://wa.me/218925279000" target="_blank" rel="noopener" class="h-10 w-10 inline-flex items-center justify-center rounded-full bg-gray-50 text-green-600 hover:bg-green-600 hover:text-white transition">
              <font-awesome-icon :icon="['fab','whatsapp']" class="text-[18px]" />
            </a>
            <a href="#" class="h-10 w-10 inline-flex items-center justify-center rounded-full bg-gray-50 text-blue-600 hover:bg-blue-600 hover:text-white transition">
              <font-awesome-icon :icon="['fab','facebook-f']" class="text-[16px]" />
            </a>
            <a href="#" class="h-10 w-10 inline-flex items-center justify-center rounded-full bg-gray-50 text-pink-600 hover:bg-pink-600 hover:text-white transition">
              <font-awesome-icon :icon="['fab','instagram']" class="text-[18px]" />
            </a>
          </div>
        </div>

        <!-- Contact Us -->
        <div class="md:col-span-1">
          <h3 class="text-lg font-semibold text-blue-500 mb-4">تواصل معنا</h3>
          <ul class="space-y-3">
            <li class="flex items-start gap-3">
              <span class="inline-flex h-6 w-6 items-center justify-center rounded-full bg-blue-100 text-blue-600">
                <!-- location icon -->
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-4 w-4">
                  <path fill-rule="evenodd" d="M11.47 3.84a6.75 6.75 0 0 1 6.69 6.69c0 3.074-1.935 5.86-3.83 7.86a28.79 28.79 0 0 1-2.43 2.262 1.65 1.65 0 0 1-2.08 0 28.79 28.79 0 0 1-2.43-2.262c-1.895-2-3.83-4.786-3.83-7.86a6.75 6.75 0 0 1 6.69-6.69Zm0 9.66a2.97 2.97 0 1 0 0-5.94 2.97 2.97 0 0 0 0 5.94Z" clip-rule="evenodd" />
                </svg>
              </span>
              <div>
                <p class="font-medium">طرابلس - حي الأندلس</p>
                <p class="text-sm text-gray-600">الهاتف: 0925279000 - 0915279000</p>
              </div>
            </li>
            <li class="flex items-start gap-3">
              <span class="inline-flex h-6 w-6 items-center justify-center rounded-full bg-blue-100 text-blue-600">
                <!-- location icon -->
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-4 w-4">
                  <path fill-rule="evenodd" d="M11.47 3.84a6.75 6.75 0 0 1 6.69 6.69c0 3.074-1.935 5.86-3.83 7.86a28.79 28.79 0 0 1-2.43 2.262 1.65 1.65 0 0 1-2.08 0 28.79 28.79 0 0 1-2.43-2.262c-1.895-2-3.83-4.786-3.83-7.86a6.75 6.75 0 0 1 6.69-6.69Zm0 9.66a2.97 2.97 0 1 0 0-5.94 2.97 2.97 0 0 0 0 5.94Z" clip-rule="evenodd" />
                </svg>
              </span>
              <div>
                <p class="font-medium">بنغازي - بوعطني مقابل المعهد الصحي</p>
                <p class="text-sm text-gray-600">الهاتف: 0945276000</p>
              </div>
            </li>
          </ul>
        </div>

        <!-- Our Services -->
        <div class="md:col-span-1">
          <h3 class="text-lg font-semibold text-blue-500 mb-4">خدماتنا</h3>
          <ul class="space-y-3 text-gray-700">
            <li class="flex items-center gap-2">
              <span class="h-1.5 w-1.5 rounded-full bg-blue-600"></span>
              الشحن الداخلي
            </li>
            <li class="flex items-center gap-2">
              <span class="h-1.5 w-1.5 rounded-full bg-blue-600"></span>
              الشحن الدولي
            </li>
            <li class="flex items-center gap-2">
              <span class="h-1.5 w-1.5 rounded-full bg-blue-600"></span>
              تتبع الشحنات
            </li>
            <li class="flex items-center gap-2">
              <span class="h-1.5 w-1.5 rounded-full bg-blue-600"></span>
              التخزين والخدمات اللوجستية
            </li>
          </ul>
        </div>

        <!-- Links -->
        <div class="md:col-span-1">
          <h3 class="text-lg font-semibold text-blue-500 mb-4">روابط</h3>
          <ul class="space-y-3">
            <li>
              <router-link to="/" class="hover:text-blue-600 transition">الرئيسية</router-link>
            </li>
            <li>
              <router-link to="/about-us" class="hover:text-blue-600 transition">من نحن</router-link>
            </li>
            <li>
              <router-link to="/services" class="hover:text-blue-600 transition">خدماتنا</router-link>
            </li>
            <li>
              <router-link to="/track-shipment" class="hover:text-blue-600 transition">تتبع الشحنة</router-link>
            </li>
            <li>
              <router-link to="/contact-us" class="hover:text-blue-600 transition">تواصل معنا</router-link>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div class="border-t bg-white">
      <div class="container mx-auto px-4 py-4 flex flex-col md:flex-row items-center justify-between gap-3" dir="rtl">
        <p class="text-sm text-gray-600">© جميع الحقوق محفوظة</p>
      </div>
    </div>
  </footer>
</template>

<script setup>
</script>

<style scoped>
</style>