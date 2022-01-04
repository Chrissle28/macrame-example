<template>
    <Button red sm @click="isOpen = true"> Löschen </Button>
    <Modal :open="isOpen" @close="isOpen = false" sm>
        <h2 class="font-bold">Schiff löschen?</h2>
        <div class="text-gray text-sm">Das Schiff wird gelöscht</div>
        <div class="flex justify-end space-x-2 pt-3">
            <Button @click="isOpen = false" gray sm> abbrechen </Button>
            <Button @click="submit()" red sm> Schiff löschen </Button>
        </div>
    </Modal>
</template>

<script setup lang="ts">
import { ref } from 'vue';
import { Button, Modal } from '@macramejs/admin-vue3';
import { Inertia, Method } from '@inertiajs/inertia';
const props = defineProps({
    ship: {
        type: Object,
        required: true,
    },
});

const isOpen = ref(false);

const submit = () => {
    Inertia.visit(`/admin/ships/${props.ship.data.id}`, {
        method: Method.DELETE,
    });
};
</script>
