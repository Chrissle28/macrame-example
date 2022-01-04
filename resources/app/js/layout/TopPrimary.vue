<template>
    <div
        class="sticky top-0 z-10 h-20 transition-all bg-gray-200 border-b border-gray-400 "
    >
        <div class="container flex items-center justify-between h-full">
            <div class="flex items-baseline space-x-4">
                <div class="text-xl font-medium text-gray-800">Adrian</div>
                <div class="text-sm text-gray">about / members / adrian</div>
            </div>
            <div class="flex space-x-2">
                <button
                    class="flex items-center h-10 px-5 text-sm tracking-widest uppercase border border-black rounded "
                >
                    Reset Changes
                </button>
                <button
                    class="flex items-center h-10 px-5 text-sm tracking-widest text-white uppercase rounded  bg-gradient-to-r from-red to-orange shadow-primary"
                >
                    Save
                </button>
            </div>
        </div>
    </div>
</template>

<script setup lang="ts">
import { ref } from 'vue';

const expanded = ref(false);
</script>
