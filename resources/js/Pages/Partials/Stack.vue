<script setup>
const stacks = ['TALL', 'VILT', 'PyData'];

const skills = [
  'C++', 'C#', 'Java', 'PHP', 'Python', 'JavaScript',
  'SQL', 'Laravel', 'Livewire', 'Django', 'ASP.NET', 'Vue.js', 'Tailwind'
];
</script>

<template>
  <!-- Stacks -->
  <section class="mb-20">
    <h2 class="text-xs font-semibold uppercase tracking-widest text-[rgb(var(--muted))] mb-6">Stacks</h2>
    <div class="flex flex-wrap gap-3">
      <span
        v-for="stack in stacks"
        :key="stack"
        class="px-4 py-2 text-sm font-medium bg-[rgb(var(--card))] border border-[rgb(var(--border))] rounded-full"
      >
        {{ stack }}
      </span>
    </div>
  </section>

  <!-- Skills -->
  <section class="mb-20">
    <h2 class="text-xs font-semibold uppercase tracking-widest text-[rgb(var(--muted))] mb-6">Skills</h2>
    <div class="flex flex-wrap gap-2">
      <span
        v-for="skill in skills"
        :key="skill"
        class="px-3 py-1.5 text-sm bg-cyan-500/10 text-cyan-600 dark:text-cyan-400 rounded-lg border border-cyan-500/20"
      >
        {{ skill }}
      </span>
    </div>
  </section>
</template>
