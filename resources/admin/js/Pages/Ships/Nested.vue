<template>
    <Draggable
        class="text-black bg-white"
        ghost-class="bg-gray-300"
        tag="div"
        :list="items"
        :group="{ name: 'g1' }"
        item-key="name"
        handle=".handle"
    >
        <template #item="{ element }">
            <div
                class="px-5 bg-white border-b border-gray-400 draggable-wrapper"
            >
                <Disclosure v-slot="{ open }" defaultOpen>
                    <div class="flex justify-between w-full">
                        <div
                            class="flex items-center pr-2 cursor-move text-gray handle"
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
                        <div
                            class="flex items-center justify-between flex-1 py-2 rounded hover:bg-gray-200"
                        >
                            <Link
                                class="flex-1 py-1 cursor-pointer"
                                :href="`${href}/${element.id}`"
                            >
                                {{ element.name }}
                            </Link>
                            <button
                                class="bg-white rounded-xs hover:bg-gray-400"
                            >
                                <svg
                                    width="24"
                                    height="24"
                                    stroke-width="1.5"
                                    viewBox="0 0 24 24"
                                    class="w-4 h-4"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M18 12.5C18.2761 12.5 18.5 12.2761 18.5 12C18.5 11.7239 18.2761 11.5 18 11.5C17.7239 11.5 17.5 11.7239 17.5 12C17.5 12.2761 17.7239 12.5 18 12.5Z"
                                        fill="currentColor"
                                        stroke="currentColor"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                    <path
                                        d="M12 12.5C12.2761 12.5 12.5 12.2761 12.5 12C12.5 11.7239 12.2761 11.5 12 11.5C11.7239 11.5 11.5 11.7239 11.5 12C11.5 12.2761 11.7239 12.5 12 12.5Z"
                                        fill="currentColor"
                                        stroke="currentColor"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                    <path
                                        d="M6 12.5C6.27614 12.5 6.5 12.2761 6.5 12C6.5 11.7239 6.27614 11.5 6 11.5C5.72386 11.5 5.5 11.7239 5.5 12C5.5 12.2761 5.72386 12.5 6 12.5Z"
                                        fill="currentColor"
                                        stroke="currentColor"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                </svg>
                            </button>
                            <div class="flex justify-end w-8">
                                <DisclosureButton
                                    class="p-1 bg-gray-200 hover:bg-gray-400 rounded-xs"
                                    :class="{ 'rotate-180': !open }"
                                    v-if="element.children?.length > 0"
                                >
                                    <svg
                                        width="24"
                                        height="24"
                                        stroke-width="1.5"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="w-3 h-3"
                                    >
                                        <path
                                            d="M6 9L12 15L18 9"
                                            stroke="currentColor"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        />
                                    </svg>
                                </DisclosureButton>
                            </div>
                        </div>
                    </div>
                    <DisclosurePanel class="pl-6">
                        <Nested
                            :href="`${href}/${element.id}`"
                            :items="element.children"
                        />
                    </DisclosurePanel>
                </Disclosure>
            </div>
        </template>
    </Draggable>
</template>

<script setup lang="ts">
import Draggable from 'vuedraggable';
import { Link } from '@inertiajs/inertia-vue3';
import { Disclosure, DisclosureButton, DisclosurePanel } from '@headlessui/vue';
const props = defineProps({
    items: {
        type: Array,
        required: true,
    },
    href: {
        type: String,
        required: true,
    },
});
</script>

<style>
.draggable-wrapper .draggable-wrapper {
    border-bottom: none;
    padding-left: 0;
    padding-right: 0;
}
</style>
