<template>
    <Tr v-for="(ship, trKey) in table.items" :key="`th-${trKey}`">
        <Td slim>
            <strong>{{ ship.id }}</strong>
        </Td>
        <Td slim>
            {{ ship.name }}
        </Td>
        <Td slim>
            <Badge :variant="ship.active ? 'green' : 'red'">{{
                ship.active ? 'Aktiv' : 'Inaktiv'
            }}</Badge>
        </Td>
        <Td class="flex justify-end">
            <Button text :href="`/admin/ships/${ship.id}`"
                >Schiff anzeigen</Button
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
