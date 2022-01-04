<template>
    <Admin>
        <template v-slot:header>
            <div class="flex justify-between w-full items-center">
                <div class="text-lg font-bold">{{ ship.data.name }}</div>
                <EditShip :ship="ship.data" />
            </div>
        </template>
        <template v-slot:header-secondary>
            <div class="flex w-full py-2 justify-end space-x-6">
                <DeleteShipAction :ship="ship" />
            </div>
        </template>
        <div class="grid gap-8 grid-cols-12 m-10">
            <div class="col-span-4 bg-white p-8 shadow rounded-sm">
                <div class="font-bold">Online anzeigen</div>
                <Toggle
                    v-model="ship.data.active"
                    @update:modelValue="toggleShip()"
                />
            </div>

            <div class="col-span-12 bg-white pt-9 pb-9 shadow rounded-sm">
                <div class="flex mb-8 px-5 justify-between w-full">
                    <span class="inline-block text-xl font-bold">
                        Fahrplan
                    </span>
                    <CreateCruiseAction :ship="ship" />
                </div>
                <CruisesTable :cruises="ship.data.cruises" />
            </div>
        </div>
    </Admin>
</template>

<script setup lang="ts">
import { Admin } from '@admin/layout';
import { Toggle } from '@macramejs/admin-vue3';
import { Ship } from '@admin/modules/resources';
import DeleteShipAction from './Actions/DeleteShipAction.vue';
import CreateCruiseAction from './Actions/CreateCruiseAction.vue';
import EditShip from './components/EditShip.vue';
import CruisesTable from './components/cruises/CruisesTable.vue';
import { Inertia } from '@inertiajs/inertia';

const props = defineProps({
    ship: {
        type: Object,
        required: true,
    },
});

const toggleShip = async () => {
    try {
        Inertia.post(`/admin/ships/${props.ship.data.id}/toggle-active`);
    } catch (error) {}
};
</script>
