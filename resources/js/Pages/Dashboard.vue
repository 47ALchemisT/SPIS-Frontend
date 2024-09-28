<template>

    <dashboard-layout>
        <Transition
            enter-active-class="transition ease-out duration-300"
            enter-from-class="opacity-0 transform scale-95"
            enter-to-class="opacity-100 transform scale-100"
            leave-active-class="transition ease-in duration-200"
            leave-from-class="opacity-100 transform scale-100"
            leave-to-class="opacity-0 transform scale-95"
        >
            <div v-if="isVisible" class="dashboard-content p-4" key="dashboard">
                <!-- Your Palakasan Content -->
                <h1 class="text-3xl font-extrabold text-gray-900">Dashboard</h1>
                <p class="text-gray-500 text-sm">Welcome to the Dashboard</p>

                <div class="mt-6">

                </div>
            </div>
        </Transition>
    </dashboard-layout>

</template>

<script setup>
import { ref, onMounted, onBeforeUnmount } from 'vue';
import { Head, router } from '@inertiajs/vue3';
import DashboardLayout from '@/Layouts/DashboardLayout.vue';

const searchQuery = ref('');
const statusFilter = ref('');
const isVisible = ref(false);

const clearSearch = () => {
    searchQuery.value = '';
};
onMounted(() => isVisible.value = true);
onBeforeUnmount(() => isVisible.value = false);
</script>


