<script setup>
const stacks = ['TALL', 'VILT', 'PyData'];

const skillGroups = [
  {
    label: 'Languages',
    items: ['C++', 'C#', 'Java', 'PHP', 'Python', 'JavaScript']
  },
  {
    label: 'Frontend',
    items: ['HTML', 'CSS', 'Vue.js', 'Alpine.js', 'Tailwind', 'Inertia']
  },
  {
    label: 'Backend',
    items: ['Laravel', 'Livewire', 'Django', 'ASP.NET']
  },
  {
    label: 'Databases',
    items: ['MySQL', 'SQL Server', 'SQLite']
  },
  {
    label: 'DevOps & Cloud',
    items: ['Git', 'GitHub', 'GitHub Actions', 'DigitalOcean', 'AWS', 'Vercel', 'Forge', 'Laravel Cloud']
  },
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
    <div class="space-y-5">
      <div v-for="group in skillGroups" :key="group.label">
        <p class="text-xs text-[rgb(var(--muted))] mb-2">{{ group.label }}</p>
        <div class="flex flex-wrap gap-2">
          <span
            v-for="skill in group.items"
            :key="skill"
            class="px-3 py-1.5 text-sm bg-cyan-500/10 text-cyan-600 dark:text-cyan-400 rounded-lg border border-cyan-500/20"
          >
            {{ skill }}
          </span>
        </div>
      </div>
    </div>
  </section>
</template>
