<script setup>
import { Head, Link } from '@inertiajs/vue3';
import { onMounted, ref } from 'vue';
import Menu from '@/Components/Menu.vue';
import LightLayout from '@/Layouts/LightLayout.vue';
import Desk from '../../../public/assets/img/hd-image.jpg'
import Footer from '@/Components/Footer.vue';
import NavLink from '@/Components/NavLink.vue';

const TransitionState = ref(false);
onMounted(() => {
    TransitionState.value = true;
});
</script>

<template>
    <Head title="About" />
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
                        Hi there,
                        <span class="mt-1 lg:mt-2 block">It's Christoper Patiño.</span>
                    </h2>

                    <div class="mt-9 text-lg flex flex-col gap-10">
                        <p class="leading-8">
                            Currently, my passion is building web applications with<span class="text-red-500 font-semibold"> Laravel, Livewire, Vue and Tailwind.</span>
                            I'm also deeply interested in data science.
                            I'm based in the beautiful state of Veracruz in Mexico, home of Mexican tequila.
                        </p>
                        <p class="leading-8">
                            <span class="text-red-500 font-semibold">I am passionate about</span> open-source software, privacy, best practices, open standards, clean code, and exceptional user and developer experiences.
                        </p>
                        <p class="leading-8">
                            When I'm not coding, I enjoy shooting sports, fishing, reading cosmic horror books, listening to rock music, and being a fan of black T-shirts.
                        </p>
                    </div>
                </div>
                <div class="w-full mt-7">
                    <h2 class="font-bold text-xl text-gray-700">Some interesting projects I've worked on include:</h2>
                    <div class="mt-9">
                        <ul class="list-disc list-inside">
                            <li class="mb-5">A governmental application focused on reporting citizen incidents.</li>
                            <li class="mb-5">A GRP for managing budget keys and tenders.</li>
                            <li class="mb-5">An ERP SaaS for enterprise branch management.</li>
                            <li class="mb-5">A governmental SaaS application for tracking news related to political figures.</li>
                        </ul>
                    </div>
                    <h2 class="font-bold text-xl text-gray-700 mt-20">Active at:</h2>
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
