<template>
    <Draggable
        class="mb-2 text-black"
        tag="div"
        :list="items"
        :group="{ name: 'g1' }"
        item-key="name"
        handle=".handle"
    >
        <template #item="{ element }">
            <div class="pl-6">
                <div
                    class="flex justify-between w-full mb-2 bg-white rounded-sm"
                >
                    <div
                        class="
                            flex
                            items-center
                            px-2
                            text-gray-500
                            cursor-move
                            handle
                        "
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            class="w-4 h-4 fill-current"
                            fill="currentColor"
                        >
                            <g>
                                <rect fill="none" height="24" width="24" />
                            </g>
                            <g>
                                <g>
                                    <g>
                                        <path
                                            d="M20,9H4v2h16V9z M4,15h16v-2H4V15z"
                                        />
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <div class="flex justify-between flex-1">
                        <div class="flex-1 py-1 text-blue-800 cursor-pointer">
                            {{ element.name }}
                        </div>
                        <div
                            class="
                                flex
                                items-center
                                px-2
                                text-gray-600
                                cursor-move
                                handle
                            "
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor"
                                class="w-4 h-4"
                                viewBox="0 0 24 24"
                            >
                                <path d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"
                                />
                            </svg>
                        </div>
                    </div>
                </div>
                <Nested :items="element.children" />
            </div>
        </template>
        <template #footer>
            <div role="group" aria-label="Basic example" key="footer">add</div>
        </template>
    </Draggable>
</template>

<script setup lang="ts">
import Draggable from 'vuedraggable';
const props = defineProps({
    items: {
        type: Array,
        required: true,
    },
});
</script>
