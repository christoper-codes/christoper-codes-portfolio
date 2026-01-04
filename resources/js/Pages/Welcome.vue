<script setup>
import { Head } from '@inertiajs/vue3';
import { onMounted, ref } from 'vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import Hero from './Partials/Hero.vue';
import Stack from './Partials/Stack.vue';
import Work from './Partials/Work.vue';
import Education from './Partials/Education.vue';

const TransitionState = ref(false);

onMounted(() => {
  TransitionState.value = true;
});
</script>

<template>
    <Head title="Welcome" />
    <main class="min-h-full w-full lg:max-w-2xl flex flex-col items-start mx-auto">
        <GuestLayout />
        <div class="space-y-16 mt-10">
            <Hero />
            <Stack />
            <Work />
            <Education />
        </div>
    </main>
</template>
