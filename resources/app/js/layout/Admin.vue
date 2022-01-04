<template>
    <div class="flex w-screen h-screen max-h-screen">
        <div id="sidebars" class="z-10 flex h-screen shadow">
            <SiedbarPrimary />

            <slot name="sidebarSecondary" />
        </div>
        <main class="relative flex-1 h-screen overflow-y-scroll bg-gray-200">
            <TopPrimary />

            <slot />
        </main>
    </div>
</template>

<script setup lang="ts">
import SiedbarPrimary from './SiedbarPrimary.vue';
import TopPrimary from './TopPrimary.vue';
//
</script>
