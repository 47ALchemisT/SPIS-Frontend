<template>
    <Head title="Palakasan" />
    <dashboard-layout>
        <Transition
            enter-active-class="transition ease-out duration-300"
            enter-from-class="opacity-0 transform scale-95"
            enter-to-class="opacity-100 transform scale-100"
            leave-active-class="transition ease-in duration-200"
            leave-from-class="opacity-100 transform scale-100"
            leave-to-class="opacity-0 transform scale-95"
        >
            <div v-if="isVisible" class="palakasan-content p-4" key="palakasan">
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
                                <h1 class="text-3xl font-extrabold text-white">Tournaments</h1>
                                <button
                                    @click="returnTo"
                                    class="bg-transparent text-white py-2.5 px-4 rounded-xl font-bold text-md hover:bg-gray-900 hover:text-white"
                                    >
                                    <i class="fa-solid fa-right-from-bracket"></i>
                                </button>
                            </div>
                            <div>
                                <h1 class="text-sm font-normal text-white">List of Tournaments</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-full md:col-span-2 bg-gray-900 rounded-xl p-6 shadow-lg flex flex-col justify-between">
                        <div class="flex items-center mb-4">
                            <div class="py-4 px-[22px] bg-white/20 rounded-full shadow mr-4">
                                <i class="fa-solid fa-file-lines text-white text-3xl"></i>                            
                            </div>
                            <div>
                                <p class="text-white/80 text-sm">Total Number of Palakasan</p>
                                <h3 class="text-4xl font-bold text-white">2</h3>
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

                <!-- Your Palakasan Content -->
                <div class="mt-5">
                    <!--Utility-->
                    <div class="lg:col-span-8">

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
                                    Create
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
                                    <MenuItems class="origin-top-right absolute right-0 mt-2 w-36 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none">
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
                    <div class="mt-5">
                        <div class="grid grid-cols-1 gap-4">
                            <!-- Palakasan Card -->
                            <div class="bg-white p-4 rounded-xl shadow flex justify-between">
                                <div class="flex gap-3">
                                    <img src="../assets/1c44db523f02877b62b1479213beaef0.jpg" class="w-24 h-24 rounded-lg object-cover" alt="">
                                    <div class="mt-1">
                                        <p class="text-gray-500 text-xs">Sept 13, 2025 - Sept 18, 2025 <span class="ml-2 text-yellow-500 bg-yellow-100 px-2 py-1 rounded-lg text-xs">In progress</span></p>

                                        <h2 class="text-2xl font-extrabold text-gray-800 mt-2">Palakasan 2024</h2>
                                        <p class="text-gray-500 text-md font-semibold">Theme: Fairytail 🔥</p>
                                    </div>
                                </div>
                                <div class="flex flex-col justify-between">
                                    <button @click="navigateToPalakasanView" class="bg-gray-900 text-white flex items-center gap-3 px-4 py-2.5 rounded-lg text-sm font-medium hover:bg-gray-900/90 transition-colors">
                                        <span class="flex items-center">
                                        View Palakasan
                                        </span>
                                        <i class="fa-solid fa-arrow-up-right-from-square"></i>                                    
                                    </button>
                                </div>
                            </div>

                            <div class="bg-white p-4 rounded-xl shadow flex gap-2 justify-between">
                                <div class="flex gap-3">
                                    <img src="../assets/zoro.jpg" class="w-24 h-24 rounded-lg object-cover" alt="">
                                    <div class="mt-1">
                                        <p class="text-gray-500 text-xs">Sept 13, 2025 - Sept 18, 2025 <span class="ml-2 text-yellow-500 bg-yellow-100 px-2 py-1 rounded-lg text-xs">In progress</span></p>

                                        <h2 class="text-2xl font-extrabold text-gray-800 mt-2">Palakasan 2025</h2>
                                        <p class="text-gray-500 text-md font-semibold">Theme: One Piece 🏝️</p>
                                        
                                    </div>
                                </div>
                                <div class="flex flex-col justify-between">
                                    <button @click="navigateToPalakasanView" class="bg-gray-900 text-white flex items-center gap-3 px-4 py-2.5 rounded-lg text-sm font-medium hover:bg-gray-900/90 transition-colors">
                                        <span class="flex items-center">
                                        View Palakasan
                                        </span>
                                        <i class="fa-solid fa-arrow-up-right-from-square"></i>                                    
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- end main content -->
                     <!--Modals-->
                    <Modal :isVisible="isModalVisible" title="Create new Palakasan" @close="closeModal">
                        <div class="relative flex flex-col rounded-xl bg-transparent">
                            <form  @submit.prevent="submitPalakasan"  class="mb-2 ">
                                <div class="mb-3 flex flex-col gap-3">
                                    <div class="w-full ">
                                        <label class="block mb-2 text-sm text-slate-600">
                                        Year
                                        </label>
                                        <input type="text" class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow" placeholder="Input this years theme" />
                                    </div>
                                    <div class="w-full ">
                                        <label class="block mb-2 text-sm text-slate-600">
                                        Theme
                                        </label>
                                        <input type="text" class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow" placeholder="Your Email" />
                                    </div>
                                </div>

                                <label for="date-range-picker" class="text-gray-500 text-sm mt-3">Date Range</label>
                                <div id="date-range-picker" date-rangepicker class="flex items-center w-full mt-2">
                                    <div class="relative w-full">
                                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                            </svg>
                                        </div>
                                        <input id="datepicker-range-start" name="start" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date start">
                                    </div>
                                    <span class="mx-4 text-gray-500">to</span>
                                    <div class="relative w-full">
                                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                            </svg>
                                        </div>
                                        <input id="datepicker-range-end" name="end" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date end">
                                    </div>
                                </div>
                                <div class="flex justify-end mt-4">
                                    <button type="submit" class="group relative items-center text-white bg-gray-900  px-2.5 py-2 rounded-lg text-md overflow-hidden transition-all duration-300 hover:pr-[2rem] hover:bg-gray-900 hover:text-white hover:border-gray-900">
                                        <span class="text-sm">Create Palakasan</span>
                                        <span class="absolute text-sm right-0 top-1/2 transform -translate-y-1/2 opacity-0 group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap pr-2.5">
                                            <i class="fa-solid fa-check-double"></i>
                                        </span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </Modal>
                </div>
            </div>
        </Transition>
    </dashboard-layout>

</template>

<script setup>
import { Menu, MenuButton, MenuItem, MenuItems } from '@headlessui/vue'
import { ChevronDownIcon } from '@heroicons/vue/20/solid'
import { ref, onMounted } from 'vue';
import { Head, router } from '@inertiajs/vue3';
import DashboardLayout from '@/Layouts/DashboardLayout.vue';
import Modal from '@/Components/Modal.vue'; 

//Modal
const isModalVisible = ref(false);
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
//end Modal

const searchQuery = ref('');
const statusFilter = ref('');
const isVisible = ref(false);

const clearSearch = () => {
    searchQuery.value = '';
};
//route to palakasan view
const navigateToPalakasanView = () => {
    isVisible.value = false;
    requestAnimationFrame(() => router.visit('/palakasan/palakasanView'));
};

onMounted(() => {
    isVisible.value = true;
});
//end route to palakasan view
</script>

<style scoped>
.bg-image {
    background-image: 
        linear-gradient(to right, rgba(0,0,0,1), rgba(0,0,0,0)),
        url('../assets/palakasan.png');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    padding: 20px;
}
</style>


