<template>
  <section class="py-16 bg-gray-50" data-aos="fade-up">
    <div class="container mx-auto px-4">
      <div class="flex flex-col lg:flex-row gap-12">
        <!-- Contact Form -->
        <div class="lg:w-1/2" data-aos="fade-right">
          <h2 class="text-3xl font-bold text-gray-800 mb-8" data-aos="fade-up" data-aos-delay="100">إرسال رسالة</h2>
          <form @submit.prevent="submitForm" class="space-y-6" data-aos="fade-up" data-aos-delay="200">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6" data-aos="fade-up" data-aos-delay="300">
              <div data-aos="fade-up" data-aos-delay="400">
                <label for="name" class="block text-gray-700 mb-2">الاسم الكامل</label>
                <input 
                  type="text" 
                  id="name" 
                  v-model="form.name"
                  class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                  placeholder="أدخل اسمك الكامل"
                  required
                >
              </div>
              <div data-aos="fade-up" data-aos-delay="500">
                <label for="email" class="block text-gray-700 mb-2">البريد الإلكتروني</label>
                <input 
                  type="email" 
                  id="email" 
                  v-model="form.email"
                  class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                  placeholder="أدخل بريدك الإلكتروني"
                  required
                >
              </div>
            </div>
            
            <div data-aos="fade-up" data-aos-delay="600">
              <label for="phone" class="block text-gray-700 mb-2">رقم الهاتف</label>
              <input 
                type="tel" 
                id="phone" 
                v-model="form.phone"
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                placeholder="أدخل رقم هاتفك"
              >
            </div>
            
            <div data-aos="fade-up" data-aos-delay="700">
              <label for="subject" class="block text-gray-700 mb-2">الموضوع</label>
              <input 
                type="text" 
                id="subject" 
                v-model="form.subject"
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                placeholder="أدخل موضوع رسالتك"
              >
            </div>
            
            <div data-aos="fade-up" data-aos-delay="700">
              <label for="message" class="block text-gray-700 mb-2">الرسالة</label>
              <textarea 
                id="message" 
                v-model="form.message"
                rows="6" 
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                placeholder="اكتب رسالتك هنا..."
                required
              ></textarea>
            </div>
            
            <button 
              type="submit" 
              class="bg-blue-700 hover:bg-blue-800 text-white font-bold py-3 px-8 rounded-lg transition duration-300"
              data-aos="fade-up" data-aos-delay="800"
            >
              إرسال الرسالة
            </button>
          </form>
        </div>
        
        <!-- Contact Information -->
        <div class="lg:w-1/2" data-aos="fade-left">
          <div class="bg-white p-6 rounded-xl shadow-md h-full" data-aos="fade-up" data-aos-delay="100">
            <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center" data-aos="fade-up" data-aos-delay="200">معلومات التواصل</h2>
            
            <div class="space-y-6">
              <!-- Phone Information -->
              <div class="pb-4 border-b border-gray-100" data-aos="fade-up" data-aos-delay="300">
                <h3 class="text-lg font-semibold text-blue-700 mb-3 flex items-center" data-aos="fade-up" data-aos-delay="400">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                  </svg>
                  الهاتف
                </h3>
                <p class="text-gray-600 text-sm mb-3" data-aos="fade-up" data-aos-delay="500">نحن متواجدون لخدمتكم طوال أيام الأسبوع</p>
                <div class="space-y-2" data-aos="fade-up" data-aos-delay="600">
                  <p class="text-base font-medium text-gray-800">0925279000 - 0915279000</p>
                  <p class="text-base font-medium text-gray-800">0945276000 (فرع بنغازي)</p>
                </div>
              </div>
              
              <!-- Email Information -->
              <div class="pb-4 border-b border-gray-100" data-aos="fade-up" data-aos-delay="700">
                <h3 class="text-lg font-semibold text-blue-700 mb-3 flex items-center" data-aos="fade-up" data-aos-delay="800">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                  </svg>
                  البريد الإلكتروني
                </h3>
                <p class="text-gray-600 text-sm mb-3" data-aos="fade-up" data-aos-delay="900">سيقوم فريق الدعم بالرد خلال 24 ساعة</p>
                <p class="text-base font-medium text-gray-800" data-aos="fade-up" data-aos-delay="1000">info@amyal.ly</p>
              </div>
              
              <!-- Office Hours -->
              <div data-aos="fade-up" data-aos-delay="1100">
                <h3 class="text-lg font-semibold text-blue-700 mb-3 flex items-center" data-aos="fade-up" data-aos-delay="1200">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>
                  ساعات العمل
                </h3>
                <div class="space-y-2" data-aos="fade-up" data-aos-delay="1300">
                  <p class="text-gray-700 text-sm">الأحد - الخميس: 8:00 صباحاً - 4:00 مساءً</p>
                  <p class="text-gray-700 text-sm">الجمعة - السبت: 10:00 صباحاً - 2:00 مساءً</p>
                </div>
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

// Form data
const form = ref({
  name: '',
  email: '',
  phone: '',
  subject: '',
  message: ''
})

// Submit form method
const submitForm = async () => {
  try {
    const formData = new FormData()
    
    // Append form data
    for (const key in form.value) {
      formData.append(key, form.value[key])
    }
    
    // Send request to PHP backend
    const response = await fetch('/send_email.php', {
      method: 'POST',
      body: formData
    })
    
    const result = await response.json()
    
    if (result.success) {
      alert('تم إرسال رسالتك بنجاح.')
      // Reset form
      form.value = {
        name: '',
        email: '',
        phone: '',
        subject: '',
        message: ''
      }
    } else {
      alert('حدث خطأ أثناء إرسال رسالتك: ' + result.message)
    }
  } catch (error) {
    console.error('Error submitting form:', error)
    alert('حدث خطأ أثناء إرسال رسالتك. يرجى المحاولة مرة أخرى.')
  }
}
</script>

<style scoped>
/* Add any specific styles here if needed */
</style>