<template>
    <tbody>
        <tr
            v-for="(cruise, trKey) in table"
            class="hover:bg-gray-500 odd:bg-gray-100"
            :key="`th-${trKey}`"
        >
            <td class="px-5 py-4">
                <strong>{{ cruise.id }}</strong>
            </td>
            <td class="px-5 py-4">
                {{ cruise.departure_at.readable_date }}
            </td>
            <td class="px-5 py-4">
                {{ cruise.return_at.readable_date }}
            </td>
        </tr>
    </tbody>
</template>

<script setup lang="ts">
import { PropType } from 'vue';
import { Tr, Td } from '@macramejs/admin-vue3';
import { Cruise } from '@admin/modules/resources';

defineProps({
    table: Object as PropType<Cruise[]>,
});
</script>

<style scoped>
td {
    @apply py-5 pl-6 pr-6;
}
</style>
