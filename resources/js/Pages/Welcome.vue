<script setup>
import { Head } from '@inertiajs/vue3';
import { onMounted, ref } from 'vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import Hero from './Partials/Hero.vue';

const TransitionState = ref(false);

onMounted(() => {
  TransitionState.value = true;
});
</script>

<template>
    <Head title="Welcome" />
    <main class="min-h-full w-full lg:max-w-3xl flex flex-col items-start mx-auto">
        <GuestLayout />
        <Hero />
    </main>
</template>
