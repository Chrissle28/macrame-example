<template>
    <Button @click="isOpen = true" sm>Schiff bearbeiten</Button>
    <Modal :open="isOpen" @close="isOpen = false" lg>
        <div class="-m-8 p-8 bg-gray-200">
            <label class="font-bold text-lg block"> Schiff </label>
            <Input v-model="form.name" />
            <!-- TODO: Resume -->
            <div class="flex justify-end mt-6 space-x-2">
                <Button @click="isOpen = false" sm gray>abbrechen</Button>
                <Button @click="submit" sm>Änderungen speichern</Button>
            </div>
        </div>
    </Modal>
</template>

<script setup lang="ts">
import { ref, watchEffect, onMounted, onBeforeMount } from 'vue';
import { Button, Modal, Input } from '@macramejs/admin-vue3';
import { useForm } from '@inertiajs/inertia-vue3';

const props = defineProps({
    ship: {
        type: Object,
        required: true,
    },
});

const form = useForm({
    name: null,
});

onBeforeMount(() => {
    form.name = props.ship.name;
});

const isOpen = ref(false);

const submit = () => {
    form.post(`/admin/ships/${props.ship.id}`, {
        onSuccess: () => {
            isOpen.value = false;
        },
    });
};
</script>
