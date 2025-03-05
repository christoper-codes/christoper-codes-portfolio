<script setup>
import { computed } from 'vue';
import { Link, router } from '@inertiajs/vue3';
import { menuState } from '@/composables/menuState';

const props = defineProps({
    href: {
        type: String,
        required: true,
    },
    active: {
        type: Boolean,
    },
});

const classes = computed(() =>
    props.active
        ? 'text-red-600 hover:cursor-pointer'
        : 'hover:text-red-600 transition-all duration-500 hover:cursor-pointer',
);

const handleClick = () => {
    menuState.value = !menuState.value;
    setTimeout(() => {
        router.visit(props.href);
    }, 300);
};
</script>

<template>
    <div :class="classes" @click="handleClick">
        <slot />
    </div>
</template>
