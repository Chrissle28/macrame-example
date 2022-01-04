<template>
    <Admin>
        <template v-slot:sidebarSecondary>
            <SiedbarSecondary>
                <template v-slot:header>
                    <div
                        class="flex items-baseline text-xl font-medium text-gray-800 "
                    >
                        Seiten
                    </div>
                    <button
                        class="flex items-center justify-center text-white bg-gray-800 rounded-full  w-7 h-7"
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
                <Nested :items="items" />
            </SiedbarSecondary>
        </template>
        <TabGroup>
            <TabList
                class="
                    border-b border-gray-400
                    text-gray
                    sticky
                    bg-gray-200
                    top-[80px]
                    z-10
                "
            >
                <div
                    class="container flex text-sm font-medium tracking-widest uppercase "
                >
                    <Tab v-slot="{ selected }" as="template"
                        ><div
                            class="
                                px-2
                                py-1.5
                                cursor-pointer
                                hover:text-gray-800
                            "
                            :class="{
                                'text-black border-b border-black': selected,
                            }"
                        >
                            Content
                        </div></Tab
                    >
                    <Tab v-slot="{ selected }" as="template"
                        ><div
                            class="
                                px-2
                                py-1.5
                                cursor-pointer
                                hover:text-gray-800
                            "
                            :class="{
                                'text-black border-b border-black': selected,
                            }"
                        >
                            Meta
                        </div></Tab
                    >
                    <Tab v-slot="{ selected }" as="template"
                        ><div
                            class="
                                px-2
                                py-1.5
                                cursor-pointer
                                hover:text-gray-800
                            "
                            :class="{
                                'text-black border-b border-black': selected,
                            }"
                        >
                            Settings
                        </div></Tab
                    >
                </div>
            </TabList>
            <TabPanels>
                <TabPanel>
                    <div
                        class="
                            container
                            flex
                            items-center
                            justify-end
                            h-7
                            text-sm
                            tracking-widest
                            text-gray
                            sticky
                            bg-[#EEF0F5]
                            z-10
                            top-[111px]
                        "
                    >
                        Content
                    </div>
                    <div class="relative flex">
                        <div class="flex-1">
                            <div class="container">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Soluta, adipisci. Voluptas
                                    maiores, nobis vel laboriosam dolorem
                                    voluptatibus soluta dolore omnis quibusdam
                                    totam quis quisquam provident, distinctio
                                    rem quasi commodi magni.
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Soluta, adipisci. Voluptas
                                    maiores, nobis vel laboriosam dolorem
                                    voluptatibus soluta dolore omnis quibusdam
                                    totam quis quisquam provident, distinctio
                                    rem quasi commodi magni.
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Soluta, adipisci. Voluptas
                                    maiores, nobis vel laboriosam dolorem
                                    voluptatibus soluta dolore omnis quibusdam
                                    totam quis quisquam provident, distinctio
                                    rem quasi commodi magni.
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Soluta, adipisci. Voluptas
                                    maiores, nobis vel laboriosam dolorem
                                    voluptatibus soluta dolore omnis quibusdam
                                    totam quis quisquam provident, distinctio
                                    rem quasi commodi magni.
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Soluta, adipisci. Voluptas
                                    maiores, nobis vel laboriosam dolorem
                                    voluptatibus soluta dolore omnis quibusdam
                                    totam quis quisquam provident, distinctio
                                    rem quasi commodi magni.
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Soluta, adipisci. Voluptas
                                    maiores, nobis vel laboriosam dolorem
                                    voluptatibus soluta dolore omnis quibusdam
                                    totam quis quisquam provident, distinctio
                                    rem quasi commodi magni.
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Soluta, adipisci. Voluptas
                                    maiores, nobis vel laboriosam dolorem
                                    voluptatibus soluta dolore omnis quibusdam
                                    totam quis quisquam provident, distinctio
                                    rem quasi commodi magni.
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Soluta, adipisci. Voluptas
                                    maiores, nobis vel laboriosam dolorem
                                    voluptatibus soluta dolore omnis quibusdam
                                    totam quis quisquam provident, distinctio
                                    rem quasi commodi magni.
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Soluta, adipisci. Voluptas
                                    maiores, nobis vel laboriosam dolorem
                                    voluptatibus soluta dolore omnis quibusdam
                                    totam quis quisquam provident, distinctio
                                    rem quasi commodi magni.
                                </p>
                            </div>
                        </div>
                        <aside class="relative w-[233px] bg-white shadow">
                            <div
                                class="
                                    sticky
                                    top-[140px]
                                    overflow-y-scroll
                                    divide-y divide-gray-400 divide-solid
                                    text-md
                                "
                                id="sidebar-right"
                            >
                                <div class="px-5 py-2">foo</div>
                                <div class="px-5 py-2">foo</div>
                            </div>
                        </aside>
                    </div>
                </TabPanel>
                <TabPanel>Content 2</TabPanel>
                <TabPanel>
                    <div class="relative flex">
                        <div class="flex-1">
                            <div class="container">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Soluta, adipisci. Voluptas
                                    maiores, nobis vel laboriosam dolorem
                                    voluptatibus soluta dolore omnis quibusdam
                                    totam quis quisquam provident, distinctio
                                    rem quasi commodi magni.
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Soluta, adipisci. Voluptas
                                    maiores, nobis vel laboriosam dolorem
                                    voluptatibus soluta dolore omnis quibusdam
                                    totam quis quisquam provident, distinctio
                                    rem quasi commodi magni.
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Soluta, adipisci. Voluptas
                                    maiores, nobis vel laboriosam dolorem
                                    voluptatibus soluta dolore omnis quibusdam
                                    totam quis quisquam provident, distinctio
                                    rem quasi commodi magni.
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Soluta, adipisci. Voluptas
                                    maiores, nobis vel laboriosam dolorem
                                    voluptatibus soluta dolore omnis quibusdam
                                    totam quis quisquam provident, distinctio
                                    rem quasi commodi magni.
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Soluta, adipisci. Voluptas
                                    maiores, nobis vel laboriosam dolorem
                                    voluptatibus soluta dolore omnis quibusdam
                                    totam quis quisquam provident, distinctio
                                    rem quasi commodi magni.
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Soluta, adipisci. Voluptas
                                    maiores, nobis vel laboriosam dolorem
                                    voluptatibus soluta dolore omnis quibusdam
                                    totam quis quisquam provident, distinctio
                                    rem quasi commodi magni.
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Soluta, adipisci. Voluptas
                                    maiores, nobis vel laboriosam dolorem
                                    voluptatibus soluta dolore omnis quibusdam
                                    totam quis quisquam provident, distinctio
                                    rem quasi commodi magni.
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Soluta, adipisci. Voluptas
                                    maiores, nobis vel laboriosam dolorem
                                    voluptatibus soluta dolore omnis quibusdam
                                    totam quis quisquam provident, distinctio
                                    rem quasi commodi magni.
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Soluta, adipisci. Voluptas
                                    maiores, nobis vel laboriosam dolorem
                                    voluptatibus soluta dolore omnis quibusdam
                                    totam quis quisquam provident, distinctio
                                    rem quasi commodi magni.
                                </p>
                            </div>
                        </div>
                        <aside class="relative w-[233px] bg-white shadow">
                            <div
                                class="
                                    sticky
                                    top-[117px]
                                    overflow-y-scroll
                                    divide-y divide-gray-400 divide-solid
                                    text-md
                                "
                                id="sidebar-right"
                            >
                                <div class="px-5 py-2">foo</div>
                                <div class="px-5 py-2">foo</div>
                            </div>
                        </aside>
                    </div>
                </TabPanel>
            </TabPanels>
        </TabGroup>
    </Admin>
</template>

<script setup lang="ts">
import { watch, ref } from 'vue';
import { Inertia } from '@inertiajs/inertia';
import Admin from '../../layout/Admin.vue';
import Nested from './Nested.vue';
import SiedbarSecondary from '@app/layout/SiedbarSecondary.vue';
import { TabGroup, TabList, Tab, TabPanels, TabPanel } from '@headlessui/vue';
const props = defineProps({
    mainNavigation: {
        type: Array,
        required: true,
    },
    // layout,
});

const items = ref(props.mainNavigation);

watch(
    () => items.value,
    value => {
        Inertia.post('/lists/sort', value as any);
    },
    { deep: true }
);
</script>

<style>
#sidebar-right {
    height: calc(100vh - 140px);
}
</style>
