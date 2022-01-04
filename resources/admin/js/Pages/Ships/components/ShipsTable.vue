<template>
    <Index :table="table">
        <template v-slot:search>
            <div class="flex justify-between">
                <Search
                    class="w-full"
                    :table="table"
                    placeholder="Schiffe durchsuchen"
                />
            </div>
        </template>
        <Table :table="table">
            <template v-slot:thead>
                <ShipsTableHead :table="table" />
            </template>
            <template v-slot:tbody>
                <ShipsTableBody :table="table" />
            </template>
        </Table>
        <!--<div class="grid grid-cols-12 gap-6 px-6">
            <div
                v-for="ship in table.items"
                class="
                    rounded-lg
                    bg-gray-200
                    p-6
                    col-span-4
                    flex
                    justify-between
                "
                :class="{
                    'opacity-50': !ship.active,
                }"
            >
                {{ ship.name }}
                <Toggle
                    v-model="ship.active"
                    @update:modelValue="toggleShip(ship)"
                />
            </div>
        </div>-->
    </Index>
</template>

<script setup lang="ts">
import { Index, Table, Search, Toggle } from '@macramejs/admin-vue3';
import { Ship } from '@admin/modules/resources';
import { Inertia } from '@inertiajs/inertia';
import { table } from './../index';
import ShipsTableBody from './ShipsTableBody.vue';
import ShipsTableHead from './ShipsTableHead.vue';

table.addSortBy('id', 'asc');

table.loadItems();
table.reloadOnChange([table.filters]);
table.reloadOnChange([table.sortBy]);
</script>
