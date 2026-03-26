<script setup>
import { Head } from '@inertiajs/vue3';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import Footer from '@/Components/Footer.vue';
import Hero from './Partials/Hero.vue';
import Stack from './Partials/Stack.vue';
import Ventures from './Partials/Ventures.vue';
import Work from './Partials/Work.vue';
import Education from './Partials/Education.vue';
import Source from './Partials/Source.vue';
</script>

<template>
  <Head title="Christoper Patino · Software Engineer" />

  <div class="min-h-screen">
    <GuestLayout />

    <main class="max-w-5xl mx-auto px-6 pt-32 pb-20">
      <Hero />
      <Stack />
      <Ventures />
      <Work />
      <Education />
      <Source />
      <Footer />
    </main>
  </div>
</template>
