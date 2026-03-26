<script setup>
const education = [
  {
    title: 'Master in Data Science',
    institution: 'Germany',
    period: '2026 - Present',
    status: 'In Progress'
  },
  {
    title: 'Software Engineering and Computer Networks',
    institution: 'University of the Valley of Mexico (UVM)',
    period: '2022 - 2026',
    status: 'Completed'
  },
  {
    title: 'Oracle Database SQL Certified Associate',
    institution: 'Oracle',
    period: '2025',
    status: 'Certified'
  }
];
</script>

<template>
  <section class="mb-20">
    <h2 class="text-xs font-semibold uppercase tracking-widest text-[rgb(var(--muted))] mb-6">Education</h2>

    <div class="space-y-1">
      <div
        v-for="(edu, index) in education"
        :key="index"
        class="group flex items-start gap-6 p-4 -mx-4 rounded-xl hover:bg-[rgb(var(--card))] transition-colors"
      >
        <span class="text-sm text-[rgb(var(--muted))] font-mono w-32 flex-shrink-0 pt-0.5">
          {{ edu.period }}
        </span>
        <div class="flex-1">
          <div class="flex items-center gap-3 flex-wrap">
            <h3 class="font-medium group-hover:text-cyan-500 transition-colors">
              {{ edu.title }}
            </h3>
            <span
              v-if="edu.status === 'In Progress'"
              class="px-2 py-0.5 text-xs font-medium bg-amber-500/10 text-amber-600 dark:text-amber-400 rounded-full animate-pulse"
            >
              {{ edu.status }}
            </span>
            <span
              v-else-if="edu.status === 'Certified'"
              class="px-2 py-0.5 text-xs font-medium bg-emerald-500/10 text-emerald-600 dark:text-emerald-400 rounded-full"
            >
              {{ edu.status }}
            </span>
          </div>
          <p class="text-sm text-[rgb(var(--muted))]">{{ edu.institution }}</p>
        </div>
      </div>
    </div>
  </section>
</template>
