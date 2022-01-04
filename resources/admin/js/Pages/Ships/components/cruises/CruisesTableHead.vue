<template>
    <thead
        class="
            pb-2
            pl-6
            font-light
            bg-white
            border-b
            text-gray
            border-gray-300
            slim
        "
    >
        <tr class="text-left">
            <th class="px-5 py-4">ID</th>
            <th class="px-5 py-4">Hinfahrt</th>
            <th class="px-5 py-4">Rückfahrt</th>
        </tr>
    </thead>
</template>

<script setup lang="ts">
import { PropType } from 'vue';
import { Cruise } from '@admin/modules/resources';
import { Tr, Th } from '@macramejs/admin-vue3';

defineProps({
    table: Object as PropType<Cruise[]>,
});
</script>

<style scoped>
td {
    @apply py-5 pl-6 pr-6;
}
</style>
