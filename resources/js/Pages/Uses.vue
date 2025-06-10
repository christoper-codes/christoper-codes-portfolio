<script setup>
import { Head, Link } from '@inertiajs/vue3';
import { onMounted, ref } from 'vue';
import Menu from '@/Components/Menu.vue';
import LightLayout from '@/Layouts/LightLayout.vue';
import Desk from '../../../public/assets/img/desk.jpg'
import Footer from '@/Components/Footer.vue';
import NavLink from '@/Components/NavLink.vue';

const TransitionState = ref(false);
onMounted(() => {
    TransitionState.value = true;
});
</script>

<template>
    <Head title="Uses" />
    <Menu />
    <LightLayout />
    <!-- About -->
    <transition name="fade" mode="out-in">
        <section v-if="TransitionState" id="about" class="w-full relative overflow-hidden">
            <div class="min-h-full px-5 md:px-20 lg:px-5 lg:max-w-[50%] mt-10 lg:mt-0 py-12 flex  flex-col items-start mx-auto gap-10">
                <div class="text-center flex gap-5 relative z-20">
                    <NavLink :href="route('welcome')" :active="route().current('welcome')"><span>Welcome</span></NavLink>
                    <NavLink :href="route('about')" :active="route().current('about')"><span>About</span></NavLink>
                    <NavLink :href="route('uses')" :active="route().current('uses')"><span>Uses</span></NavLink>
                    <NavLink :href="route('contact')" :active="route().current('contact')"><span>Let's talk</span></NavLink>
                </div>
                <div class="w-full">
                    <h2 class="font-bold text-3xl lg:text-5xl text-gray-700">
                        Uses<br>
                    </h2>

                    <div class="mt-9 text-lg flex flex-col gap-10">
                        <p class="leading-8">
                            I find it both fun and enriching to share with others the tools that make <span class="text-red-500 font-semibold">our lives easier and more productive.</span>
                            Below, I present some of the tools I use daily to achieve my goals and successfully complete my projects.
                        </p>
                    </div>
                    <div class="mt-16 flex items-center justify-center">
                        <img
                            class="mx-auto lg:mx-0 relative h-auto rounded-lg shadow-lg transition-all duration-500 filter grayscale"
                            :src="Desk"
                            alt="Desk"
                        >
                    </div>
                </div>
                <div class="w-full mt-7">
                    <h2 class="font-bold text-xl text-gray-700">Hardware:</h2>
                    <div class="mt-9">
                        <ul class="list-disc list-inside">
                            <li class="mb-5">HP Victus Laptop: 16GB RAM, 1TB SSD, NVIDIA GeForce RTX 3050, AMD Ryzen 7</li>
                            <li class="mb-5">Logitech G305 Mouse</li>
                            <li class="mb-5">Gamecraft Krypton Wired Gaming Keyboard</li>
                            <li class="mb-5">Canon EOS Rebel SL3 Camera</li>
                            <li class="mb-5">Nasa Pro Gamer Desk Chair</li>
                            <li class="mb-5">Onehome Lk-0001 Gaming Desk</li>
                            <li class="mb-5">iPhone XS Max 256GB</li>
                            <li class="mb-5">iPad Air 5th Generation</li>
                        </ul>
                    </div>

                    <h2 class="font-bold text-xl text-gray-700 mt-16">Software:</h2>
                    <div class="mt-9">
                    <ul class="list-disc list-inside">
                        <li class="mb-5">Visual Studio Code is the code editor I commonly use</li>
                        <li class="mb-5">Laravel Herd</li>
                        <li class="mb-5">Postman for API testing</li>
                        <li class="mb-5">TablePlus for database management</li>
                        <li class="mb-5">Microsoft Edge for browsing</li>
                        <li class="mb-5">Slack, Telegram, and Gather for direct messaging</li>
                    </ul>
                    </div>
                    <p class="mt-16">These tools are essential for my work as <span class="text-red-500 font-semibold">a software engineer and my studies</span> in mathematical physics.</p>


                    <h2 class="font-bold text-xl text-gray-700 mt-16">Active at:</h2>
                    <div class="mt-9 flex-col lg:flex-row flex items-center justify-between gap-5 w-full">
                        <a href="https://krodox.com/" target="_blank" class="flex items-center w-full justify-between gap-5 p-5 border cursor-pointer transition-all duration-500">
                            <h3>Krodox</h3>
                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-current w-7 h-auto" viewBox="0 0 24 24">
                                <path d="M19.071 4.929c-3.899-3.898-10.243-3.898-14.143 0-3.898 3.899-3.898 10.244 0 14.143 3.899 3.898 10.243 3.898 14.143 0 3.899-3.9 3.899-10.244 0-14.143zm-3.536 10.607-2.828-2.829-3.535 3.536-1.414-1.414 3.535-3.536-2.828-2.829h7.07v7.072z"></path>
                            </svg>
                        </a>
                        <a href="https://absama.com/index.html" target="_blank" class="flex items-center w-full justify-between gap-5 p-5 border cursor-pointer transition-all duration-500">
                            <h3>Grupo Sama</h3>
                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-current w-7 h-auto" viewBox="0 0 24 24">
                                <path d="M19.071 4.929c-3.899-3.898-10.243-3.898-14.143 0-3.898 3.899-3.898 10.244 0 14.143 3.899 3.898 10.243 3.898 14.143 0 3.899-3.9 3.899-10.244 0-14.143zm-3.536 10.607-2.828-2.829-3.535 3.536-1.414-1.414 3.535-3.536-2.828-2.829h7.07v7.072z"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </transition>
    <Footer />
</template>
