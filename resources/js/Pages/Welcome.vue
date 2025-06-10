<script setup>
import { Head, Link } from '@inertiajs/vue3';
import TypeIt from "typeit";
import { nextTick, onMounted, ref } from 'vue';
import LightLayout from '@/Layouts/LightLayout.vue';
import NavLink from '@/Components/NavLink.vue';

const TransitionState = ref(false);

onMounted(async () => {
  TransitionState.value = true;
  await nextTick();

  new TypeIt("#animatedText", {
    speed: 75,
    loop: true,
    breakLines: false,
    afterComplete: (instance) => {
      instance
        .pause(1000)
        .type("Christoper")
        .pause(2000)
        .delete()
        .pause(1000)
        .type("an engineer")
        .pause(2000)
        .delete()
        .pause(1000)
        .type("a full-stack")
        .pause(2000)
        .delete()
        .go();
    }
  }).go();
});
</script>

<template>
    <Head title="Welcome" />
    <LightLayout />
    <!-- masthead -->
     <transition name="fade" mode="out-in">
        <section v-if="TransitionState" id="masthead" class="h-screen w-full relative overflow-hidden">
            <div class="min-h-full w-full lg:max-w-[80%] flex flex-col items-center justify-center text-center mx-auto gap-5 text-xl">
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
