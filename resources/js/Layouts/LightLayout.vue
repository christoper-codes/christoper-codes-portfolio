<script setup>
import Logo from '../../../public/assets/img/logo.png'
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <div class="fixed hidden z-10 top-10 lg:top-14 left-1/2 transform -translate-x-1/2 w-[90%] lg:w-[80%] lg:flex items-center gap-5">
        <Link :href="route('welcome')">
            <img class="w-9 2xl:w-10 h-auto" :src="Logo" alt="logo image">
        </Link>
    </div>
    <div class="bg-white/50 backdrop-blur-md fixed top-0 z-10 w-full px-4 md:px-20 py-5 flex items-center justify-between lg:hidden">
        <Link :href="route('welcome')">
            <img class="w-[26px] h-auto" :src="Logo" alt="logo image">
        </Link>
    </div>
</template>
