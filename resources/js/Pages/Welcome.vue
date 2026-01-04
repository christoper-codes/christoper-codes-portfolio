<script setup>
import { Head } from '@inertiajs/vue3';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import Footer from '@/Components/Footer.vue';
import Hero from './Partials/Hero.vue';
import Stack from './Partials/Stack.vue';
import Work from './Partials/Work.vue';
import Education from './Partials/Education.vue';
import Source from './Partials/Source.vue';
</script>

<template>
    <Head title="Welcome" />
    <main class="min-h-full w-full lg:max-w-2xl flex flex-col items-start mx-auto">
        <GuestLayout />
        <div class="space-y-16 mt-10">
            <Hero />
            <Source />
            <Stack />
            <Work />
            <Education />
            <Footer />
        </div>
    </main>
</template>
