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

        <div class="flex flex-wrap items-center gap-3">
          <a
            href="mailto:hello@christoper.dev"
            class="inline-flex items-center gap-2 px-6 py-3 bg-[rgb(var(--foreground))] text-[rgb(var(--background))] rounded-full font-medium hover:opacity-90 transition-opacity"
          >
            Get in touch
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25" />
            </svg>
          </a>

          <a
            href="https://github.com/christoper-codes"
            target="_blank"
            rel="noopener noreferrer"
            class="inline-flex items-center gap-2 px-6 py-3 bg-transparent border border-[rgb(var(--border))] text-[rgb(var(--foreground))] rounded-full font-medium hover:border-[rgb(var(--muted))] transition-colors"
          >
            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
            </svg>
            GitHub
          </a>
        </div>
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
