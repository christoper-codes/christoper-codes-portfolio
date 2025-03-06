<script setup>
import { menuState } from '@/composables/menuState';
</script>

<template>
    <div class="fixed z-10 top-5 md:top-14 left-1/2 transform -translate-x-1/2 w-[90%] md:w-[80%] flex items-center gap-9">
        <svg @click="menuState = !menuState" fill="none" class="w-8 md:w-14 lg:w-8 2xl:w-10 h-auto cursor-pointer text-white" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M4 6C4 5.44772 4.44772 5 5 5H19C19.5523 5 20 5.44772 20 6C20 6.55228 19.5523 7 19 7H5C4.44772 7 4 6.55228 4 6Z" fill="currentColor"/><path d="M4 18C4 17.4477 4.44772 17 5 17H19C19.5523 17 20 17.4477 20 18C20 18.5523 19.5523 19 19 19H5C4.44772 19 4 18.5523 4 18Z" fill="currentColor"/><path d="M5 11C4.44772 11 4 11.4477 4 12C4 12.5523 4.44772 13 5 13H13C13.5523 13 14 12.5523 14 12C14 11.4477 13.5523 11 13 11H5Z" fill="currentColor"/></svg>
    </div>
</template>
