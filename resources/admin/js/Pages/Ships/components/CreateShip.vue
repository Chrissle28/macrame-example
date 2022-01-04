<template>
    <Button @click="isOpen = true" sm>Schiff hinzufügen</Button>
    <Modal :open="isOpen" @close="isOpen = false" sm>
        <div class="-m-8 p-8 bg-gray-200">
            <label class="font-bold text-lg block"> Schiff </label>
            <Input v-model="form.name" />
            <div class="flex justify-end mt-6">
                <Button @click="submit">Schiff speichern</Button>
            </div>
        </div>
    </Modal>
</template>

<script setup lang="ts">
import { ref, defineEmits } from 'vue';
import { Button, Modal, Input } from '@macramejs/admin-vue3';
import { useForm } from '@inertiajs/inertia-vue3';

const emit = defineEmits(['created']);

const isOpen = ref(false);
const form = useForm({
    name: null,
});

const reset = () => {
    form.reset();
};

const submit = () => {
    form.post('/admin/ships', {
        onSuccess: () => {
            reset();
            isOpen.value = false;
            emit('created');
        },
    });
};
</script>
