<script setup>
import { onMounted } from 'vue';

const darkMode = () => {
    const html = document.documentElement.classList;
    if (html.contains('dark')) {
        html.remove('dark');
        localStorage.setItem('theme', 'light');
    } else {
        html.add('dark');
        localStorage.setItem('theme', 'dark');
    }
};

onMounted(() => {
    if (localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark');
    } else {
        document.documentElement.classList.remove('dark');
    }
});
</script>
<template>
    <header class="py-5 lg:py-7 flex items-center justify-start">
        <button @click="darkMode" class="border border-neutral-300 dark:border-neutral-700 rounded-full flex items-center justify-center size-8">
            <svg class="size-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" />
            </svg>
        </button>
    </header>
</template>
