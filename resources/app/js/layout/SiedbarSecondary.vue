<template>
    <div
        class="
            flex flex-col
            justify-between
            h-screen
            bg-white
            w-[320px]
            border-r border-gray-400
        "
    >
        <header
            class="flex items-center justify-between h-20 px-5 border-b border-gray-400 "
        >
            <slot name="header" />
        </header>
        <nav class="flex-1">
            <slot />
        </nav>
    </div>
</template>

<script setup lang="ts">
import { ref } from 'vue';

const expanded = ref(false);
</script>
