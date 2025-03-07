<script setup>
import { Head, Link } from '@inertiajs/vue3';
import ChristoperImg from '../../../public/assets/img/christoper-hd.png'
import TypeIt from "typeit";
import { onMounted, ref } from 'vue';
import Menu from '@/Components/Menu.vue';
import DarkLayout from '@/Layouts/DarkLayout.vue';

onMounted(() => {
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
        .type("An engineer")
        .pause(2000)
        .delete()
        .pause(1000)
        .type("A full-stack")
        .pause(2000)
        .delete()
        .go();
    }
  }).go();
});
const show = ref(false);
setTimeout(() => {
  show.value = true;
}, 300);
</script>

<template>
    <Head title="Welcome" />
    <Menu />
    <DarkLayout />
    <!-- masthead -->
    <section id="masthead" class="h-screen lg:h-screen w-full bg-black text-white relative overflow-hidden">
        <Transition name="slide-fade">
            <div v-if="show" class="image-overlay w-full lg:w-[50%] h-full bg-cover lg:bg-right right-0 lg:-right-40 absolute" :style="{ backgroundImage: `url(${ChristoperImg})`}"></div>
        </Transition>

        <div class="min-h-full w-full lg:max-w-[80%] flex items-center mx-auto">
            <div class="z-10 relative font-bold text-6xl px-5 md:px-20 lg:px-0 leading-[70px] md:text-8xl lg:text-9xl lg:leading-[145px] title-welcome">
                <span class="block">Hello</span>
                <span class="block">It's</span>
                <span id="animatedText" class="block text-red-600"></span>
            </div>
        </div>
    </section>

</template>
