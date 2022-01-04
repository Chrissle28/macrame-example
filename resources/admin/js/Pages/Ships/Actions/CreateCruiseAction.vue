<template>
    <Button sm @click="isOpen = true"> Fahrt hinzufügen </Button>
    <Modal :open="isOpen" @close="isOpen = false" sm>
        <h2 class="font-bold text-lg mb-6">Fahrt hinzufügen</h2>
        <DatePicker v-model="range" :columns="2" is-range class="w-full mb-4" />
        <div class="flex justify-end space-x-2 pt-3">
            <Button @click="isOpen = false" gray sm> abbrechen </Button>
            <Button @click="submit()" sm> Fahrt hinzufügen </Button>
        </div>
    </Modal>
</template>

<script setup lang="ts">
import { ref, watchEffect } from 'vue';
import { Button, Modal } from '@macramejs/admin-vue3';
import { Inertia, Method } from '@inertiajs/inertia';
import { DatePicker } from 'v-calendar';
import { useForm } from '@inertiajs/inertia-vue3';

const props = defineProps({
    ship: {
        type: Object,
        required: true,
    },
});

const isOpen = ref(false);

const form = useForm({
    ship_id: props.ship.data.id,
    departure_at: null,
    return_at: null,
});

const range: any = ref({
    start: form.departure_at || null,
    end: form.return_at || null,
});

watchEffect(() => {
    form.departure_at = range.value?.start;
    form.return_at = range.value?.end;
});

const reset = () => {
    form.reset();
    range.value.start = null;
    range.value.end = null;
};

const submit = () => {
    form.post('/admin/cruises', {
        onSuccess: () => {
            reset();
            isOpen.value = false;
        },
    });
};
</script>
