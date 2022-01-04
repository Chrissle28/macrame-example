<template>
    <Head>
        <title>Home</title>
        <meta name="description" content="description" />
    </Head>
    <pre>{{ page }}</pre>
</template>

<script setup lang="ts">
import { Head } from '@inertiajs/inertia-vue3';
const props = defineProps({
    mainNavigation: {
        type: Array,
        required: true,
    },
    page: {
        type: Object,
        required: true,
    },
});
</script>
