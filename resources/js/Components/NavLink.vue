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
        ? 'text-red-600 hover:cursor-pointer underline'
        : 'underline text-blue-600 hover:cursor-pointer',
);

const handleClick = () => {
    router.visit(props.href);
};
</script>

<template>
    <div :class="classes" @click="handleClick">
        <slot />
    </div>
</template>
