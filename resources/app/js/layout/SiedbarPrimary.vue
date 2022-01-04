<template>
    <div
        class="flex flex-col justify-between h-screen transition-all bg-white border-r border-gray-400 "
        :class="{
            'w-[77px]': !expanded,
            'w-[250px]': expanded,
        }"
    >
        <header class="flex items-center justify-between h-20 px-4 py-7">
            <div class="relative flex items-center w-full h-10 overflow-hidden">
                <div>
                    <div class="w-36">
                        <img src="./macrame_logo.png" alt="" />
                    </div>
                </div>
            </div>
        </header>
        <nav class="flex-1">
            <section class="p-4 space-y-2">
                <div
                    class="mb-3 text-sm tracking-widest uppercase transition-opacity  text-gray"
                    :class="{
                        'opacity-100': expanded,
                        'opacity-0': !expanded,
                    }"
                >
                    Website
                </div>
                <Link
                    href="#"
                    class="flex items-center rounded  hover:bg-orange hover:bg-opacity-20"
                >
                    <div
                        class="
                            w-[44px]
                            min-w-[44px]
                            h-[44px]
                            rounded
                            bg-orange bg-opacity-20
                            hover:bg-opacity-50
                            flex
                            items-center
                            justify-center
                            text-red
                        "
                    >
                        <svg
                            width="24"
                            height="24"
                            stroke-width="1.5"
                            viewBox="0 0 24 24"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                            class="w-5 h-5"
                        >
                            <path
                                d="M7 2L16.5 2L21 6.5V19"
                                stroke="currentColor"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            />
                            <path
                                d="M3 20.5V6.5C3 5.67157 3.67157 5 4.5 5H14.2515C14.4106 5 14.5632 5.06321 14.6757 5.17574L17.8243 8.32426C17.9368 8.43679 18 8.5894 18 8.74853V20.5C18 21.3284 17.3284 22 16.5 22H4.5C3.67157 22 3 21.3284 3 20.5Z"
                                stroke="currentColor"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            />
                            <path
                                d="M14 8.4V5.35355C14 5.15829 14.1583 5 14.3536 5C14.4473 5 14.5372 5.03725 14.6036 5.10355L17.8964 8.39645C17.9628 8.46275 18 8.55268 18 8.64645C18 8.84171 17.8417 9 17.6464 9H14.6C14.2686 9 14 8.73137 14 8.4Z"
                                fill="currentColor"
                                stroke="currentColor"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            />
                        </svg>
                    </div>
                    <div
                        v-if="expanded"
                        class="flex-1 pl-3 font-semibold tracking-wider"
                    >
                        Seiten
                    </div>
                </Link>
                <Link
                    href="#"
                    class="flex items-center rounded hover:bg-gray-300"
                >
                    <div
                        class="
                            w-[44px]
                            min-w-[44px]
                            h-[44px]
                            rounded
                            hover:bg-opacity-50
                            flex
                            items-center
                            justify-center
                        "
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="-2 -3 24 24"
                            class="w-5 h-5 fill-black"
                        >
                            <path
                                d="M7.116 10.749L6 1.948l-1.116 8.8H1c-.552 0-1-.437-1-.976a.99.99 0 0 1 1-.978h2.116l.9-7.086C4.15.636 5.15-.124 6.245.008c.91.11 1.626.81 1.739 1.7l.899 7.086h1.974L12 16.04l1.142-7.245H19c.552 0 1 .438 1 .978s-.448.977-1 .977h-4.142l-.881 5.587a1.978 1.978 0 0 1-1.672 1.634c-1.092.165-2.113-.567-2.282-1.634l-.88-5.587H7.115z"
                            ></path>
                        </svg>
                    </div>
                    <div
                        v-if="expanded"
                        class="flex-1 pl-3 font-semibold tracking-wider"
                    >
                        Seiten
                    </div>
                </Link>
            </section>
            <section class="p-4">
                <div
                    class="mb-3 text-sm tracking-widest uppercase transition-opacity  text-gray"
                    :class="{
                        'opacity-100': expanded,
                        'opacity-0': !expanded,
                    }"
                >
                    Website
                </div>
                <Link
                    href="#"
                    class="flex items-center rounded hover:bg-gray-300"
                >
                    <div
                        class="
                            w-[44px]
                            min-w-[44px]
                            h-[44px]
                            rounded
                            hover:bg-opacity-50
                            flex
                            items-center
                            justify-center
                        "
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="-2 -4 24 24"
                            class="w-5 h-5 fill-black"
                        >
                            <path
                                d="M2,4 L2,14 L18,14 L18,4 L2,4 Z M3,3 C3.55228475,3 4,2.55228475 4,2 C4,1.44771525 3.55228475,1 3,1 C2.44771525,1 2,1.44771525 2,2 C2,2.55228475 2.44771525,3 3,3 Z M6,3 C6.55228475,3 7,2.55228475 7,2 C7,1.44771525 6.55228475,1 6,1 C5.44771525,1 5,1.44771525 5,2 C5,2.55228475 5.44771525,3 6,3 Z M2,0 L18,0 C19.1045695,0 20,0.8954305 20,2 L20,14 C20,15.1045695 19.1045695,16 18,16 L2,16 C0.8954305,16 0,15.1045695 0,14 L0,2 C0,0.8954305 0.8954305,0 2,0 Z"
                            ></path>
                        </svg>
                    </div>
                    <div
                        v-if="expanded"
                        class="flex-1 pl-3 font-semibold tracking-wider"
                    >
                        Seiten
                    </div>
                </Link>
                <Link
                    href="#"
                    class="flex items-center rounded hover:bg-gray-300"
                >
                    <div
                        class="
                            w-[44px]
                            min-w-[44px]
                            h-[44px]
                            rounded
                            hover:bg-opacity-50
                            flex
                            items-center
                            justify-center
                        "
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="-2 -4 24 24"
                            class="w-5 h-5 fill-black"
                        >
                            <path
                                d="M2,4 L2,14 L18,14 L18,4 L2,4 Z M3,3 C3.55228475,3 4,2.55228475 4,2 C4,1.44771525 3.55228475,1 3,1 C2.44771525,1 2,1.44771525 2,2 C2,2.55228475 2.44771525,3 3,3 Z M6,3 C6.55228475,3 7,2.55228475 7,2 C7,1.44771525 6.55228475,1 6,1 C5.44771525,1 5,1.44771525 5,2 C5,2.55228475 5.44771525,3 6,3 Z M2,0 L18,0 C19.1045695,0 20,0.8954305 20,2 L20,14 C20,15.1045695 19.1045695,16 18,16 L2,16 C0.8954305,16 0,15.1045695 0,14 L0,2 C0,0.8954305 0.8954305,0 2,0 Z"
                            ></path>
                        </svg>
                    </div>
                    <div
                        v-if="expanded"
                        class="flex-1 pl-3 font-semibold tracking-wider"
                    >
                        Seiten
                    </div>
                </Link>
            </section>
        </nav>
        <footer class="flex items-center justify-center py-6">
            <button
                class="flex items-center justify-center bg-gray-300 rounded  w-9 h-9"
                @click="expanded = !expanded"
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="-2.5 -2.5 24 24"
                    class="w-4 h-4 fill-current"
                >
                    <path
                        d="M8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12zm6.32-1.094l3.58 3.58a1 1 0 1 1-1.415 1.413l-3.58-3.58a8 8 0 1 1 1.414-1.414z"
                    ></path>
                </svg>
            </button>
        </footer>
    </div>
</template>

<script setup lang="ts">
import { ref } from 'vue';
import { Link } from '@inertiajs/inertia-vue3';

const expanded = ref(false);
</script>
