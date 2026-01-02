<script setup>
import { Head, Link } from '@inertiajs/vue3';
import { nextTick, onMounted, ref } from 'vue';
import NavLink from '@/Components/NavLink.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';

const TransitionState = ref(false);

onMounted(async () => {
  TransitionState.value = true;
  await nextTick();
});
</script>

<template>
    <Head title="Welcome" />
    <GuestLayout />
    <!-- masthead -->
     <transition name="fade" mode="out-in">
        <section v-if="TransitionState" id="masthead" class="h-screen w-full relative overflow-hidden">
            <div class="min-h-full w-full lg:max-w-[80%] flex flex-col items-start mx-auto gap-10">
                <div class="z-10 relative font-bold title-welcome text-2xl">
                    <span>Hello It's </span>
                    <span id="animatedText" class="text-red-600"></span>
                </div>

                <div class="text-center flex gap-5">
                    <NavLink :href="route('welcome')" :active="route().current('welcome')"><span>Welcome</span></NavLink>
                    <NavLink :href="route('about')" :active="route().current('about')"><span>About</span></NavLink>
                    <NavLink :href="route('uses')" :active="route().current('uses')"><span>Uses</span></NavLink>
                    <NavLink :href="route('contact')" :active="route().current('contact')"><span>Let's talk</span></NavLink>
                </div>
            </div>
        </section>
    </transition>
</template>
