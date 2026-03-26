<script setup>
const ventures = [
  {
    name: 'Sitetly',
    description: 'SaaS platform for website creation. Build professional websites without code.',
    url: 'https://sitetly.com',
    icon: 'S'
  },
  {
    name: 'Sigrip',
    description: 'SaaS for regulatory compliance NOM-035 and STPS in Mexico.',
    url: 'https://sigrip.christosantos.com',
    icon: 'G'
  }
];
</script>

<template>
  <section class="mb-20">
    <h2 class="text-xs font-semibold uppercase tracking-widest text-[rgb(var(--muted))] mb-6">Ventures</h2>

    <div class="grid sm:grid-cols-2 gap-4">
      <a
        v-for="venture in ventures"
        :key="venture.name"
        :href="venture.url"
        target="_blank"
        rel="noopener noreferrer"
        class="group p-6 rounded-2xl bg-[rgb(var(--card))] border border-[rgb(var(--border))] hover:border-cyan-500/50 transition-all duration-300 hover:shadow-lg hover:shadow-cyan-500/5"
      >
        <div class="flex items-center gap-4 mb-4">
          <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-cyan-500 to-blue-500 flex items-center justify-center text-white font-bold text-lg">
            {{ venture.icon }}
          </div>
          <div>
            <h3 class="font-semibold group-hover:text-cyan-500 transition-colors flex items-center gap-2">
              {{ venture.name }}
              <svg class="w-4 h-4 opacity-0 -translate-x-2 group-hover:opacity-100 group-hover:translate-x-0 transition-all" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25" />
              </svg>
            </h3>
            <span class="text-xs text-[rgb(var(--muted))]">Founder</span>
          </div>
        </div>
        <p class="text-sm text-[rgb(var(--muted))] leading-relaxed">
          {{ venture.description }}
        </p>
      </a>
    </div>
  </section>
</template>
