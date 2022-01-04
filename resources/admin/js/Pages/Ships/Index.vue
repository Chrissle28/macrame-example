<template>
    <Admin>
        <template v-slot:header>
            <div class="flex justify-between w-full items-center">
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
import { table } from './index';
</script>
