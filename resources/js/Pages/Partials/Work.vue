<script setup>
const workExperience = [
  {
    period: '2025 - Present',
    role: 'Backend Developer',
    company: 'Krodox LLC',
    location: 'Miami, USA'
  },
  {
    period: '2024 - 2025',
    role: 'FullStack Developer',
    company: 'Sama S.A. de C.V.',
    location: 'Xalapa, Mexico'
  },
  {
    period: '2023 - 2024',
    role: 'Backend Developer',
    company: 'Gigante de los azulejos',
    location: 'Veracruz, Mexico'
  },
    {
    period: '2020 - Present',
    role: 'Principal Engineer',
    company: 'Freelancer',
    location: 'Ver, México'
  },
];
</script>

<template>
  <section class="mb-20">
    <h2 class="text-xs font-semibold uppercase tracking-widest text-[rgb(var(--muted))] mb-6">Experience</h2>

    <div class="space-y-1">
      <div
        v-for="(job, index) in workExperience"
        :key="index"
        class="group flex items-start gap-6 p-4 -mx-4 rounded-xl hover:bg-[rgb(var(--card))] transition-colors"
      >
        <span class="text-sm text-[rgb(var(--muted))] font-mono w-32 flex-shrink-0 pt-0.5">
          {{ job.period }}
        </span>
        <div>
          <h3 class="font-medium group-hover:text-cyan-500 transition-colors">
            {{ job.role }}
          </h3>
          <p class="text-sm text-[rgb(var(--muted))]">
            {{ job.company }} · {{ job.location }}
          </p>
        </div>
      </div>
    </div>
  </section>
</template>
