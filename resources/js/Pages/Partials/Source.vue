<script setup>
import TypeIt from "typeit";
import { onMounted, ref } from "vue";

const copy = ref(false);
const copyCommand = () => {
    copy.value = true;
    const command = "gh repo clone christoper-codes/christoper-codes-portfolio";
    navigator.clipboard.writeText(command)
        .then(() => {
            setTimeout(() => {
                copy.value = false;
            }, 1500);
        });
}

onMounted(() => {
    new TypeIt("#animatedText", {
        speed: 75,
        loop: true,
        breakLines: false,
        afterComplete: (instance) => {
        instance
            .pause(1000)
            .type("gh repo clone christoper-codes/christoper-codes-portfolio")
            .pause(7000)
            .delete()
            .go();
        }
    }).go();
});
</script>

<template>
    <section id="template">
        <h2 class="text-2xl uppercase mb-5">Open Source</h2>

        <main>
            <div class="flex items-center gap-3 bg-neutral-100 dark:bg-neutral-900 p-5 rounded-2xl border border-neutral-200 dark:border-neutral-800">
                <div class="w-full">
                    <code id="animatedText"></code>
                </div>
                <button @click="copyCommand" class="inline bg-neutral-200 dark:bg-neutral-800 border border-neutral-300 dark:border-neutral-700 p-2 rounded-lg text-center">
                    <svg v-if="!copy" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 7.5V6.108c0-1.135.845-2.098 1.976-2.192.373-.03.748-.057 1.123-.08M15.75 18H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08M15.75 18.75v-1.875a3.375 3.375 0 0 0-3.375-3.375h-1.5a1.125 1.125 0 0 1-1.125-1.125v-1.5A3.375 3.375 0 0 0 6.375 7.5H5.25m11.9-3.664A2.251 2.251 0 0 0 15 2.25h-1.5a2.251 2.251 0 0 0-2.15 1.586m5.8 0c.065.21.1.433.1.664v.75h-6V4.5c0-.231.035-.454.1-.664M6.75 7.5H4.875c-.621 0-1.125.504-1.125 1.125v12c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V16.5a9 9 0 0 0-9-9Z" /></svg>
                    <svg v-else xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6"><path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" /></svg>
                </button>
            </div>
        </main>
    </section>
</template>
