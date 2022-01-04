<template>
    <Tr v-for="(ship, trKey) in table.items" :key="`th-${trKey}`">
        <Td slim>
            <strong>{{ ship.id }}</strong>
        </Td>
        <Td slim>
            {{ ship.name }}
        </Td>
        <Td slim>
            <span
                class="inline-flex py-1 px-4 text-sm rounded-full"
                :class="{ 'bg-green': ship.active, 'bg-red': !ship.active }"
            >
                {{ ship.active ? 'Aktiv' : 'Inaktiv' }}
            </span>
        </Td>
        <Td class="flex justify-end">
            <Link
                class="text-blue underline duration-200 hover:text-blue-600"
                :href="`/admin/ships/${ship.id}`"
                >Schiff anzeigen</Link
            >
        </Td>
    </Tr>
</template>

<script setup lang="ts">
import { Link } from '@inertiajs/inertia-vue3';
import { PropType } from 'vue';
import { Index } from '@macramejs/macrame-vue3';
import { Tr, Td, Button, Badge } from '@macramejs/admin-vue3';
import { Ship } from '@admin/modules/resources';

defineProps({
    table: Object as PropType<Index<Ship>>,
});
</script>
