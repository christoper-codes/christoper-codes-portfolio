<script setup>
import { Head, Link } from '@inertiajs/vue3';
import ChristoperImg from '../../../public/assets/img/christoper.png'
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
        .pause(2000)
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
            <div class="z-10 relative font-bold text-6xl px-5 lg:px-0 leading-[70px] lg:text-9xl lg:leading-[145px] 2xl:text-[150px] 2xl:leading-[170px]">
                <span class="block">Hello</span>
                <span class="block">It's</span>
                <span id="animatedText" class="block text-red-600"></span>
            </div>
        </div>
    </section>

</template>

<style scoped>
.image-overlay::after {
    content: "";
    position: absolute;
    top: 0;
    left: 0px;
    width: 100%;
    height: 100%;
    box-shadow: 200px 31px 229px 200px rgba(0,0,0,0.98) inset;
    -webkit-box-shadow: 200px 31px 229px 200px rgba(0,0,0,0.98) inset;
    -moz-box-shadow: 200px 31px 229px 200px rgba(0,0,0,0.98) inset;
}

@media (max-width: 1536px) {
    .image-overlay::after {
        box-shadow: 200px 37px 63px 86px rgba(0,0,0,0.95) inset;
        -webkit-box-shadow: 200px 37px 113px 106px rgba(0,0,0,0.95) inset;
        -moz-box-shadow: 200px 37px 63px 86px rgba(0,0,0,0.92) inset;
    }
}

@media (max-width: 1024px) {
    .image-overlay::after {
        box-shadow: 200px 37px 63px 86px rgba(0,0,0,0.80) inset;
        -webkit-box-shadow: 200px 37px 113px 106px rgba(0,0,0,0.80) inset;
        -moz-box-shadow: 200px 37px 63px 86px rgba(0,0,0,0.80) inset;
    }
}
</style>
