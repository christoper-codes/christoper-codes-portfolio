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
    <transition name="fade" mode="out-in">
        <section v-if="TransitionState">
            <GuestLayout />
        </section>
    </transition>

    <transition name="fade" mode="out-in">
        <section v-if="TransitionState">
            <Hero />
        </section>
    </transition>
</template>
