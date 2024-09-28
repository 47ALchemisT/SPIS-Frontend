<template>
    <Head title="Palakasan" />
    <dashboard-layout>
        <transition
            enter-active-class="transition ease-out duration-300"
            enter-from-class="opacity-0 transform scale-95"
            enter-to-class="opacity-100 transform scale-100"
            leave-active-class="transition ease-in duration-200"
            leave-from-class="opacity-100 transform scale-100"
            leave-to-class="opacity-0 transform scale-95"
        >
            <div  v-show="isVisible" class="palakasan-content p-4" key="palakasan">
                <div class="grid grid-cols-7 gap-5">
                    <div class="bg-image rounded-xl col-span-5 shadow-md">
                        <nav class="flex mb-5" aria-label="Breadcrumb">

                            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                                <li class="inline-flex items-center">
                                    <a href="/dashboard" class="inline-flex items-center text-sm font-medium text-white hover:text-blue-600">
                                        <svg class="w-3 h-3 mr-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
                                        </svg>
                                        Dashboard
                                    </a>
                                </li>
                                <li>
                                    <div class="flex items-center">
                                        <svg class="w-3 h-3 text-white mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                        </svg>
                                        <a href="/palakasan" class="ml-1 text-sm font-medium text-white hover:text-blue-600 md:ml-2">Tournaments</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="flex items-center">
                                        <svg class="w-3 h-3 text-white mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                        </svg>
                                        <a href="/palakasan/palakasanView" class="ml-1 text-sm font-medium text-white hover:text-blue-600 md:ml-2">Palakasan View</a>
                                    </div>
                                </li>
                                <li aria-current="page">
                                    <div class="flex items-center">
                                        <svg class="w-3 h-3 text-white mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                        </svg>
                                        <span class="ml-1 text-sm font-medium text-white md:ml-2">Basketball</span>
                                    </div>
                                </li>
                            </ol>
                        </nav>
                        <div class="mt-28">
                            <div class="flex items-center gap-3">
                                <h1 class="text-3xl font-extrabold text-white">Venue</h1>
                                <button
                                    @click="returnTo"
                                    class="bg-transparent text-white py-2.5 px-4 rounded-xl font-bold text-md hover:bg-gray-900 hover:text-white"
                                    >
                                    <i class="fa-solid fa-right-from-bracket"></i>
                                </button>
                            </div>
                            <div>
                                <h1 class="text-sm font-normal text-white">List of Venue</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-full md:col-span-2 bg-gray-900 rounded-xl p-6 shadow-lg flex flex-col justify-between">
                        <div class="flex items-center mb-4">
                            <div class="py-4 px-4 bg-white/20 rounded-full shadow mr-4">
                                <i class="fa-solid fa-map-location-dot text-white text-3xl"></i>                            
                            </div>
                            <div>
                                <p class="text-white/80 text-sm">Total Number of Venue</p>
                                <h3 class="text-4xl font-bold text-white">6</h3>
                            </div>
                        </div>
                        <div>
                            <div class="w-full bg-white/20 rounded-full h-4 mb-2">
                            <div class="bg-white h-4 rounded-full" style="width: 10%"></div>
                            </div>
                            <p class="text-sm text-white/80">10% Complete</p>
                        </div>
                    </div>
                </div>

                <div class=" grid grid-cols-5 gap-3 mt-5">
                    <!--Utility-->
                    <div class="col-span-5">
                        <div class="flex justify-between items-center">
                            <div class="">
                                <!-- Search Input -->
                                <div class="relative">
                                    <input
                                        v-model="searchQuery"
                                        type="text"
                                        placeholder="Search sport..."
                                        class="w-64 px-3 py-2 bg-white shadow-sm border border-gray-300 focus:border-gray-900 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-gray-800 transition-all duration-300"
                                    >
                                    <button
                                        v-if="searchQuery"
                                        @click="clearSearch"
                                        class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-gray-600 transition-colors duration-200"
                                    >
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="flex items-center space-x-2.5">
                                <button @click="openModal" class="bg-gray-900 text-white py-2 px-4 rounded-lg text-sm font-medium shadow hover:bg-gray-800 transition-colors">
                                    Add
                                </button>
                                <button class="bg-white text-gray-800 p-2 text-sm rounded-lg shadow hover:bg-gray-100 transition-colors">
                                    <i class="fa-solid fa-envelopes-bulk"></i>
                                </button>
                                <Menu as="div" class="relative inline-block text-left">
                                    <MenuButton class="inline-flex items-center justify-center w-full rounded-lg shadow px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">
                                    Sort
                                    <ChevronDownIcon class="-mr-1 ml-2 h-5 w-5" aria-hidden="true" />
                                    </MenuButton>
                                    <transition
                                    enter-active-class="transition ease-out duration-100"
                                    enter-from-class="transform opacity-0 scale-95"
                                    enter-to-class="transform opacity-100 scale-100"
                                    leave-active-class="transition ease-in duration-75"
                                    leave-from-class="transform opacity-100 scale-100"
                                    leave-to-class="transform opacity-0 scale-95"
                                    >
                                    <MenuItems class="origin-top-right absolute z-10 right-0 mt-2 w-36 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none">
                                        <div class="py-1">
                                        <MenuItem v-slot="{ active }">
                                            <a href="#" :class="[active ? 'bg-gray-100 text-gray-900' : 'text-gray-700', 'block px-4 py-2 text-sm']">
                                            Default
                                            </a>
                                        </MenuItem>
                                        <MenuItem v-slot="{ active }">
                                            <a href="#" :class="[active ? 'bg-gray-100 text-gray-900' : 'text-gray-700', 'block px-4 py-2 text-sm']">
                                            A-Z
                                            </a>
                                        </MenuItem>
                                        <MenuItem v-slot="{ active }">
                                            <a href="#" :class="[active ? 'bg-gray-100 text-gray-900' : 'text-gray-700', 'block px-4 py-2 text-sm']">
                                            Z-A
                                            </a>
                                        </MenuItem>
                                        </div>
                                    </MenuItems>
                                    </transition>
                                </Menu>
                            </div>
                        </div>
                    </div>
                    <!-- main content -->
                    <div class="col-span-5 mt-2">
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
                            <div v-for="venue in venues" :key="venue.name" class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 flex flex-col">
                                <div class="relative h-48 sm:h-56 lg:h-64">
                                    <img :src="venue.image" 
                                        class="w-full h-full object-cover" 
                                        :alt="venue.name">
                                    <div class="absolute top-0 right-0 bg-gray-900 text-white px-3 py-1 m-2 rounded-full text-xs font-semibold">
                                        <i class="fas fa-users mr-1"></i>{{ venue.capacity }}
                                    </div>
                                </div>
                                <div class="p-5 flex-grow flex flex-col justify-between">
                                    <div>
                                        <h2 class="text-gray-800 text-xl font-bold mb-2">{{ venue.name }}</h2>
                                        <p class="text-gray-600 text-sm mb-4">{{ venue.description }}</p>
                                    </div>
                                    <div class="flex items-center justify-between mt-auto">
                                        <span class="text-gray-500 text-sm flex items-center">
                                            <i class="fas fa-map-marker-alt mr-2 text-gray-400"></i>{{ venue.location }}
                                        </span>
                                        <button class="bg-gray-900 text-white px-4 py-2 rounded-lg text-sm font-medium hover:bg-gray-800 transition-colors">
                                            View Details
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Modal-->
                <Modal :isVisible="isModalVisible" title="Add new venue" @close="closeModal">
                    <!-- Modal content here (unchanged) -->
                </Modal>
            </div>
        </transition>
    </dashboard-layout>

</template>

<script setup>
import { Menu, MenuButton, MenuItem, MenuItems } from '@headlessui/vue'
import { ChevronDownIcon } from '@heroicons/vue/20/solid'
import { ref, onMounted } from 'vue';
import { Head, router } from '@inertiajs/vue3';
import DashboardLayout from '@/Layouts/DashboardLayout.vue';
import Modal from '@/Components/Modal.vue';

const searchQuery = ref('');
const isVisible = ref(false);
const isModalVisible = ref(false);

const clearSearch = () => {
    searchQuery.value = '';
};

const returnTo = () => {
    isVisible.value = false;
    requestAnimationFrame(() => router.visit('/palakasan/palakasanView'));
};

const getImageUrl = (name) => {
    return new URL(`../assets/${name}`, import.meta.url).href;
};

const venues = ref([
    {
        name: 'Basketball Court',
        description: 'Our largest venue with a state-of-the-art facility for various sports events. Features include modern seating, excellent acoustics, and top-notch amenities for athletes and spectators alike.',
        location: 'MSU Naawan Basketball Court',
        capacity: '10,000',
        image: getImageUrl('basketball-court.jpg')
    },
    {
        name: 'TSAC',
        description: 'A world-class swimming facility with Olympic-size pools, diving platforms, and spectator seating. Ideal for swimming competitions and water sports events.',
        location: 'Aquatic Center',
        capacity: '5,000',
        image: getImageUrl('TSAC.jpg')
    },
    {
        name: 'Oval Field',
        description: 'A modern indoor court perfect for basketball tournaments and other indoor sports. Features include climate control and high-quality flooring.',
        location: 'MSU Naawan Oval Field',
        capacity: '3,000',
        image: getImageUrl('Oval.jpg')
    },
    {
        name: 'Oval Field',
        description: 'A modern indoor court perfect for basketball tournaments and other indoor sports. Features include climate control and high-quality flooring.',
        location: 'MSU Naawan Oval Field',
        capacity: '3,000',
        image: getImageUrl('Oval.jpg')
    },
    // Add more venues as needed
]);

const openModal = () => {
    isModalVisible.value = true;
};

const closeModal = () => {
    isModalVisible.value = false;
};

const submitPalakasan = () => {
    // Add your form submission logic here
    // For example, you might want to send the data to the server

    // Close the modal after submission
    closeModal();
};

onMounted(() => {
    isVisible.value = true;
});
</script>

<style scoped>
.bg-image {
    background-image: 
        linear-gradient(to right, rgba(0,0,0,0.8), rgba(0,0,0,0)),
        url('../assets/naawan.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    padding: 20px;
}
</style>
