<template>
    <Admin sidebarSecondary>
        <template v-slot:sidebar-secondary-header>
            <div class="flex items-center space-x-2">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="-5 -5 24 24"
                    width="24"
                    class="w-6 h-6 fill-gray-800"
                >
                    <path
                        d="M2,6 L6,6 L6,2 L2,2 L2,6 Z M2,8 L2,12 L6,12 L6,8 L2,8 Z M12,6 L12,2 L8,2 L8,6 L12,6 Z M12,8 L8,8 L8,12 L12,12 L12,8 Z M2,0 L12,0 C13.1045695,0 14,0.8954305 14,2 L14,12 C14,13.1045695 13.1045695,14 12,14 L2,14 C0.8954305,14 0,13.1045695 0,12 L0,2 C0,0.8954305 0.8954305,0 2,0 Z"
                    ></path>
                </svg>
                <span class="inline-block text-xl"> Komponenten </span>
            </div>
        </template>
        <template v-slot:sidebar-secondary> Sidebar Secondary </template>
        <template v-slot:topbar-left> Topbar Left </template>
        <template v-slot:topbar-right> Topbar Right </template>
        <BaseTabGroup>
            <template v-slot:tab-list>
                <BaseTab>Buttons</BaseTab>
                <BaseTab>Badges</BaseTab>
                <BaseTab>Checkbox</BaseTab>
                <BaseTab>Modal</BaseTab>
                <BaseTab>Radio</BaseTab>
                <BaseTab>Toggle</BaseTab>
                <BaseTab>Chips</BaseTab>
                <BaseTab>Input</BaseTab>
                <BaseTab>Datepicker</BaseTab>
                <BaseTab>Slider</BaseTab>
                <BaseTab>Wysiwyg</BaseTab>
                <BaseTab>Text</BaseTab>
            </template>
            <BaseTabPanel>
                <Buttons />
            </BaseTabPanel>
            <BaseTabPanel>
                <Badges />
            </BaseTabPanel>
            <BaseTabPanel>
                <Checkboxes />
            </BaseTabPanel>
            <BaseTabPanel>
                <Modal />
            </BaseTabPanel>
            <BaseTabPanel>
                <Radios />
            </BaseTabPanel>
            <BaseTabPanel>
                <Toggles />
            </BaseTabPanel>
            <BaseTabPanel>
                <div class="p-24">
                    <h2>Chips</h2>
                    <div class="flex mb-5 space-x-5">
                        <Chip v-model="toggle" label="Foo" />
                    </div>
                    {{ toggle }}
                </div>
            </BaseTabPanel>
            <BaseTabPanel>
                <div class="p-10">
                    <Input label="Test" v-model="text" /> <br />
                    <br />
                    <Input disabled v-model="text" />
                    {{ text }}
                </div>
            </BaseTabPanel>
            <BaseTabPanel>
                <DatePickers />
            </BaseTabPanel>
            <BaseTabPanel>
                <div class="p-10">
                    <Slider v-model="number" min="0" max="100" />
                    {{ number }}
                </div>
            </BaseTabPanel>
            <BaseTabPanel>
                <Wysiwyg />
            </BaseTabPanel>
            <TextTab />
        </BaseTabGroup>
    </Admin>
</template>

<script lang="ts" setup>
import { Admin } from '@admin/layout';
import {
    Slider,
    Chip,
    BaseTab,
    BaseTabPanel,
    BaseTabGroup,
    Card,
    Input,
} from '../../../../../packages/macramejs/admin-vue3';
import { ref } from 'vue';
import Buttons from './tabs/Buttons.vue';
import Badges from './tabs/Badges.vue';
import Checkboxes from './tabs/Checkboxes.vue';
import Modal from './tabs/Modal.vue';
import Radios from './tabs/Radios.vue';
import Toggles from './tabs/Toggles.vue';
import DatePickers from './tabs/DatePickers.vue';
import TextTab from './tabs/TextTab.vue';
import Wysiwyg from './tabs/Wysiwyg.vue';

const text = ref('');

const number = ref(0);

const toggle = ref(false);
</script>
