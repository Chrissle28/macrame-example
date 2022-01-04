<template>
    <table class="table-auto w-full">
        <CruisesTableHead :table="cruises" />
        <CruisesTableBody :table="cruises" />
    </table>
</template>

<script setup lang="ts">
import { Index, Table, Search, Toggle } from '@macramejs/admin-vue3';
import { Cruise } from '@admin/modules/resources';
import CruisesTableBody from './CruisesTableBody.vue';
import CruisesTableHead from './CruisesTableHead.vue';
import { defineProps, PropType } from 'vue';

const props = defineProps({
    cruises: {
        type: Array as PropType<Array<Cruise>>,
        required: true,
    },
});
</script>
