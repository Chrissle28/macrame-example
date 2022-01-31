<template>
    <Admin>
        <template v-slot:sidebar-secondary-header>
            <div class="flex items-center space-x-2">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="-2 -2 24 24"
                    width="24"
                    class="w-5 h-5 fill-gray-800"
                >
                    <path
                        d="M16.93 11.998A1 1 0 0 1 17 10h2a1 1 0 0 1 0 2h-.055a9.001 9.001 0 0 1-17.89 0H1a1 1 0 0 1 0-2h2a1 1 0 0 1 .07 1.998A7.005 7.005 0 0 0 9 17.929V7.874A4.002 4.002 0 0 1 10 0a4 4 0 0 1 1 7.874v10.055a7.005 7.005 0 0 0 5.93-5.931zM10 6a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"
                    ></path>
                </svg>
                <span class="inline-block text-xl"> Schiffe </span>
            </div>
            <button
                class="flex items-center justify-center text-white bg-gray-800 rounded-full w-7 h-7"
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="-4.5 -4.5 24 24"
                    class="w-4 h-4 fill-white"
                >
                    <path
                        d="M8.9 6.9v-5a1 1 0 1 0-2 0v5h-5a1 1 0 1 0 0 2h5v5a1 1 0 1 0 2 0v-5h5a1 1 0 1 0 0-2h-5z"
                    ></path>
                </svg>
            </button>
        </template>
        <template v-slot:sidebar-secondary>
            <Nested href="/admin/ships" :items="table.items" />
        </template>
        <template v-slot:topbar-left> Topbar Left </template>
        <template v-slot:topbar-right> Topbar Right </template>
        <template v-slot:header>
            <div class="flex items-center justify-between w-full">
                <div class="text-lg font-bold">Schiffe</div>
                <CreateShip @created="table.loadItems()" />
            </div>
        </template>
        <template v-slot:header-secondary>
            <div class="h-6"></div>
        </template>
        <div class="m-10">
            <ShipsTable />
        </div>
    </Admin>
</template>

<script setup lang="ts">
import { Admin } from '@admin/layout';
import ShipsTable from './components/ShipsTable.vue';
import CreateShip from './components/CreateShip.vue';
import { Nested } from '../../../../../packages/macramejs/admin-vue3';
import { table } from './index';

table.addSortBy('id', 'asc');

table.loadItems();
table.reloadOnChange([table.filters]);
table.reloadOnChange([table.sortBy]);
</script>
