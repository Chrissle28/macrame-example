<template>
    <Tr>
        <Th :table="table">ID</Th>
        <Th :table="table">Name</Th>
        <Th :table="table">Status</Th>
    </Tr>
</template>

<script setup lang="ts">
import { PropType } from 'vue';
import { Index } from '@macramejs/macrame-vue3';
import { Tr, Th } from '@macramejs/admin-vue3';

defineProps({
    table: Object as PropType<Index>,
});
</script>
