<script setup>
import { ref, onMounted } from 'vue';

const isVisible = ref(false);

onMounted(() => {
  setTimeout(() => {
    isVisible.value = true;
  }, 100);
});
</script>

<template>
  <section
    :class="['mb-24 transition-all duration-700', isVisible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8']"
  >
    <div class="flex flex-col sm:flex-row sm:items-start sm:justify-between gap-10">
      <div class="flex-1">
        <div class="flex items-center gap-2 mb-6">
          <span class="relative flex h-3 w-3">
            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
            <span class="relative inline-flex rounded-full h-3 w-3 bg-emerald-500"></span>
          </span>
          <span class="text-sm text-[rgb(var(--muted))]">Available for new opportunities</span>
        </div>

        <h1 class="text-5xl sm:text-6xl font-bold tracking-tight mb-6">
          Christoper Patino
          <span class="block text-[rgb(var(--muted))] text-3xl sm:text-4xl font-normal mt-2">Software Engineer &amp; Founder</span>
        </h1>

        <p class="text-lg text-[rgb(var(--muted))] max-w-2xl leading-relaxed mb-8">
          Two disciplines inspire me: Software engineering and Data science. Luckily, I've spent the last few years doing both at the same time.
        </p>

        <a
          href="mailto:hello@christoper.dev"
          class="inline-flex items-center gap-2 px-6 py-3 bg-[rgb(var(--foreground))] text-[rgb(var(--background))] rounded-full font-medium hover:opacity-90 transition-opacity"
        >
          Get in touch
          <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25" />
          </svg>
        </a>
      </div>

      <!-- Profile photo -->
      <div class="flex-shrink-0 sm:self-start">
        <div class="w-32 h-32 sm:w-40 sm:h-40 rounded-2xl overflow-hidden border-2 border-[rgb(var(--border))] ring-4 ring-[rgb(var(--background))]">
          <img
            class="w-full h-full object-cover object-top hidden lg:block"
            src="/assets/img/profile.jpg"
            alt="Christoper Patino"
          />
          <img
            class="w-full h-full object-cover object-top lg:hidden"
            src="/assets/img/profile-mobile.jpeg"
            alt="Christoper Patino"
          />
        </div>
      </div>
    </div>
  </section>
</template>
