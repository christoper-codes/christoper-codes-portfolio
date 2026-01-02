<script setup>
import { Head } from '@inertiajs/vue3';
import { nextTick, onMounted, ref } from 'vue';
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
                </div>
            </div>
        </section>
    </transition>
</template>
