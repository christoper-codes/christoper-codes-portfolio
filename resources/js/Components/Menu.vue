<script setup>
import NavLink from '@/Components/NavLink.vue';
import { menuState } from '@/composables/menuState';
const year = new Date().getFullYear();
</script>

<template>
    <div>
        <transition name="fade" mode="out-in">
            <div v-if="menuState" @click="menuState = !menuState" class="fixed inset-0 bg-black bg-opacity-50 z-20 backdrop-blur-sm"></div>
        </transition>
        <transition name="slide" mode="out-in">
            <div v-if="menuState" class="bg-slate-50 fixed top-0 left-0 h-full w-[100%] md:w-[50%] lg:w-[43%] xl:w-[35%] z-30 text-gray-500">
                <div class="h-full w-full flex flex-col items-start justify-between py-7 px-5">
                    <div @click="menuState = !menuState" class="p-1 border-2 cursor-pointer">
                        <svg class="w-8 h-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                    </div>
                    <div class="w-full text-center flex flex-col gap-7 2xl:gap-9 text-2xl 2xl:text-3xl">
                        <NavLink :href="route('welcome')" :active="route().current('welcome')"><span>Welcome</span></NavLink>
                        <NavLink  :active="route().current()"><span>About</span></NavLink>
                        <NavLink :href="route()" :active="route().current()"><span>Uses</span></NavLink>
                        <NavLink :href="route()" :active="route().current()"><span>Let's talk</span></NavLink>
                    </div>
                    <div class="flex items-center justify-center gap-3 flex-col w-full">
                        <div class="flex items-center gap-4">
                            <a href="https://x.com/christopercodes" target="_blank" class="hover:-translate-y-1 transition-transform duration-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-auto" viewBox="0 0 1200 1227" fill="none"><g clip-path="url(#clip0_1_2)"><path d="M714.163 519.284L1160.89 0H1055.03L667.137 450.887L357.328 0H0L468.492 681.821L0 1226.37H105.866L515.491 750.218L842.672 1226.37H1200L714.137 519.284H714.163ZM569.165 687.828L521.697 619.934L144.011 79.6944H306.615L611.412 515.685L658.88 583.579L1055.08 1150.3H892.476L569.165 687.854V687.828Z" fill="black"/></g><defs><clipPath id="clip0_1_2"><rect width="1200" height="1227" fill="black"/></clipPath></defs></svg>
                            </a>
                            <a href="https://github.com/christoper-codes" target="_blank" class="hover:-translate-y-1 transition-transform duration-500">
                                <svg id="Layer_1" class="w-7  h-auto" version="1.1" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><path class="st0" d="M256,32C132.3,32,32,134.8,32,261.7c0,101.5,64.2,187.5,153.2,217.9c11.2,2.1,15.3-5,15.3-11.1   c0-5.5-0.2-19.9-0.3-39.1c-62.3,13.9-75.5-30.8-75.5-30.8c-10.2-26.5-24.9-33.6-24.9-33.6c-20.3-14.3,1.5-14,1.5-14   c22.5,1.6,34.3,23.7,34.3,23.7c20,35.1,52.4,25,65.2,19.1c2-14.8,7.8-25,14.2-30.7c-49.7-5.8-102-25.5-102-113.5   c0-25.1,8.7-45.6,23-61.6c-2.3-5.8-10-29.2,2.2-60.8c0,0,18.8-6.2,61.6,23.5c17.9-5.1,37-7.6,56.1-7.7c19,0.1,38.2,2.6,56.1,7.7   c42.8-29.7,61.5-23.5,61.5-23.5c12.2,31.6,4.5,55,2.2,60.8c14.3,16.1,23,36.6,23,61.6c0,88.2-52.4,107.6-102.3,113.3   c8,7.1,15.2,21.1,15.2,42.5c0,30.7-0.3,55.5-0.3,63c0,6.1,4,13.3,15.4,11C415.9,449.1,480,363.1,480,261.7   C480,134.8,379.7,32,256,32z"/></g></svg>
                            </a>
                        </div>
                        <div class="text-center w-full text-xs 2xl:text-sm">© {{ year }} Christoper Patiño. This website is open source.</div>
                    </div>
                </div>
            </div>
        </transition>
    </div>
</template>
