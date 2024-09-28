<template>
    <Head title="Users" />
    <dashboard-layout>
        <Transition
            enter-active-class="transition ease-out duration-300"
            enter-from-class="opacity-0 transform scale-95"
            enter-to-class="opacity-100 transform scale-100"
            leave-active-class="transition ease-in duration-200"
            leave-from-class="opacity-100 transform scale-100"
            leave-to-class="opacity-0 transform scale-95"
        >
            <div v-if="isVisible" class="users-content p-4" key="users">
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
                                <h1 class="text-3xl font-extrabold text-white">Account</h1>
                                <button
                                    @click="returnTo"
                                    class="bg-transparent text-white py-2.5 px-4 rounded-xl font-bold text-md hover:bg-gray-900 hover:text-white"
                                    >
                                    <i class="fa-solid fa-right-from-bracket"></i>
                                </button>
                            </div>
                            <div>
                                <h1 class="text-sm font-normal text-white">List of Account</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-full md:col-span-2 bg-gray-900 rounded-xl p-6 shadow-lg flex flex-col justify-between">
                        <div class="flex items-center mb-4">
                            <div class="py-4 px-4 bg-white/20 rounded-full shadow mr-4">
                                <i class="fa-solid fa-users text-white text-3xl"></i>                            
                            </div>
                            <div>
                                <p class="text-white/80 text-sm">Total Number of Account</p>
                                <h3 class="text-4xl font-bold text-white">13</h3>
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
                                        placeholder="Search account..."
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
                                    Add Account
                                </button>
                                <button class="bg-white text-gray-800 p-2 text-sm rounded-lg shadow hover:bg-gray-100 transition-colors">
                                    <i class="fa-solid fa-envelopes-bulk"></i>
                                </button>
                                <button @click="toggleView" class="bg-white text-gray-800 py-2 px-2.5 rounded-lg text-sm font-medium shadow hover:bg-gray-800 hover:text-white transition-colors">
                                    <i :class="isCardView ? 'fa-solid fa-table-cells' : 'fa-solid fa-table-list'"></i>
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
                        <!-- Card View -->
                        <div v-if="isCardView" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                            <div v-for="account in accounts" :key="account.id" class="bg-white border-l-4 border-gray-900 rounded-xl shadow-md p-4 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                                <!-- Account Details -->
                                 <div class="flex justify-between">
                                    <div class="flex items-center">
                                        <img :src="account.avatar" alt="Avatar" class="w-20 h-20 rounded-lg mr-4">
                                        <div>
                                            <h3 class="font-semibold text-lg leading-tight">{{ account.name }}</h3>
                                            <p class="text-gray-600 text-sm mb-2">{{ account.email }}</p>
                                            <div class="flex justify-end flex-wrap gap-2">
                                            <span class="bg-gray-200 text-gray-900 text-xs font-medium px-2.5 py-0.5 rounded">
                                                {{ account.role }}
                                            </span>
                                            <span class="bg-gray-200 text-gray-900 text-xs font-medium px-2.5 py-0.5 rounded">
                                                {{ account.status }}
                                            </span>
                                        </div>
                                        </div>
                                    </div>
                                    <div>
                                        <Menu as="div" class="relative inline-block text-left">
                                            <MenuButton class="py-2 px-2.5 flex items-center justify-center text-gray-600 rounded-md hover:text-gray-900 transition-colors">
                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                            </MenuButton>
                                            <transition
                                                enter-active-class="transition ease-out duration-100"
                                                enter-from-class="transform opacity-0 scale-95"
                                                enter-to-class="transform opacity-100 scale-100"
                                                leave-active-class="transition ease-in duration-75"
                                                leave-from-class="transform opacity-100 scale-100"
                                                leave-to-class="transform opacity-0 scale-95"
                                            >
                                                <MenuItems class="absolute right-0 w-36 rounded-lg shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none z-10">
                                                    <div class="py-1">
                                                        <MenuItem v-slot="{ active }">
                                                            <a @click="editAccount(account.id)" :class="[active ? 'bg-gray-100 text-gray-900' : 'text-gray-700', 'block px-4 py-2 text-sm cursor-pointer']">
                                                                Edit
                                                            </a>
                                                        </MenuItem>
                                                        <MenuItem v-slot="{ active }">
                                                            <a @click="updateStatus(account.id)" :class="[active ? 'bg-gray-100 text-gray-900' : 'text-gray-700', 'block px-4 py-2 text-sm cursor-pointer']">
                                                                Update Status
                                                            </a>
                                                        </MenuItem>
                                                        <MenuItem v-slot="{ active }">
                                                            <a @click="removeAccount(account.id)" :class="[active ? 'bg-gray-100 text-gray-900' : 'text-gray-700', 'block px-4 py-2 text-sm cursor-pointer']">
                                                                Remove
                                                            </a>
                                                        </MenuItem>
                                                    </div>
                                                </MenuItems>
                                            </transition>
                                        </Menu>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Table View -->
                        <div v-else class="overflow-x-auto bg-white rounded-lg p-4">
                            <table class="min-w-full  overflow-hidden">
                                <thead class="">
                                    <tr>
                                        <th class="px-4 py-2 text-left bg-gray-100 rounded-s-lg">Name</th>
                                        <th class="px-4 py-2 text-left bg-gray-100">Email</th>
                                        <th class="px-4 py-2 text-left bg-gray-100">Role</th>
                                        <th class="px-4 py-2 text-left bg-gray-100">Status</th>
                                        <th class="px-4 py-2 text-left flex justify-center items-center rounded-tr-lg bg-gray-100 rounded-e-lg">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="account in accounts" :key="account.id" class="">
                                        <td class="px-4 py-2">
                                            <div class="flex items-center">
                                                <img :src="account.avatar" alt="Avatar" class="w-8 h-8 rounded-full mr-2">
                                                {{ account.name }}
                                            </div>
                                        </td>
                                        <td class="px-4 py-2">{{ account.email }}</td>
                                        <td class="px-4 py-2">
                                            <span class="bg-gray-200 text-gray-900 text-xs font-medium px-2.5 py-0.5 rounded">
                                                {{ account.role }}
                                            </span>
                                        </td>
                                        <td class="px-4 py-2">{{ account.status }}</td>
                                        <td class="px-4 py-2 flex justify-center items-center">
                                            <Menu as="div" class="relative inline-block text-left">
                                                <MenuButton class="py-2 px-2.5 flex items-center justify-center text-gray-600 rounded-md hover:text-gray-900 transition-colors">
                                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                                </MenuButton>
                                                <transition
                                                    enter-active-class="transition ease-out duration-100"
                                                    enter-from-class="transform opacity-0 scale-95"
                                                    enter-to-class="transform opacity-100 scale-100"
                                                    leave-active-class="transition ease-in duration-75"
                                                    leave-from-class="transform opacity-100 scale-100"
                                                    leave-to-class="transform opacity-0 scale-95"
                                                >
                                                    <MenuItems class="absolute right-0 w-36 rounded-lg shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none z-10">
                                                        <div class="py-1">
                                                            <MenuItem v-slot="{ active }">
                                                                <a @click="editAccount(account.id)" :class="[active ? 'bg-gray-100 text-gray-900' : 'text-gray-700', 'block px-4 py-2 text-sm cursor-pointer']">
                                                                    Edit
                                                                </a>
                                                            </MenuItem>
                                                            <MenuItem v-slot="{ active }">
                                                                <a @click="updateStatus(account.id)" :class="[active ? 'bg-gray-100 text-gray-900' : 'text-gray-700', 'block px-4 py-2 text-sm cursor-pointer']">
                                                                    Update Status
                                                                </a>
                                                            </MenuItem>
                                                            <MenuItem v-slot="{ active }">
                                                                <a @click="removeAccount(account.id)" :class="[active ? 'bg-gray-100 text-gray-900' : 'text-gray-700', 'block px-4 py-2 text-sm cursor-pointer']">
                                                                    Remove
                                                                </a>
                                                            </MenuItem>
                                                        </div>
                                                    </MenuItems>
                                                </transition>
                                            </Menu>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </Transition>
    </dashboard-layout>

</template>

<script setup>
import { Menu, MenuButton, MenuItem, MenuItems } from '@headlessui/vue'
import { ChevronDownIcon } from '@heroicons/vue/20/solid'
import { ref, onMounted, onBeforeUnmount } from 'vue';
import { Head, router } from '@inertiajs/vue3';
import DashboardLayout from '@/Layouts/DashboardLayout.vue';

const searchQuery = ref('');
const statusFilter = ref('');
const isVisible = ref(false);
const isCardView = ref(true);
const accounts = ref([
    { id: 1, name: 'John Doe', email: 'john@example.com', role: 'Facilitator', status: 'Active', avatar: 'https://via.placeholder.com/40' },
    { id: 2, name: 'Jane Smith', email: 'jane@example.com', role: 'Facilitator', status: 'Inactive', avatar: 'https://via.placeholder.com/40' },
    { id: 3, name: 'Bob Johnson', email: 'bob@example.com', role: 'Facilitator', status: 'Active', avatar: 'https://via.placeholder.com/40' },
    { id: 4, name: 'Alice Brown', email: 'alice@example.com', role: 'Facilitator', status: 'Active', avatar: 'https://via.placeholder.com/40' },
    { id: 5, name: 'Charlie Green', email: 'charlie@example.com', role: 'Facilitator', status: 'Inactive', avatar: 'https://via.placeholder.com/40' },
    { id: 6, name: 'David White', email: 'david@example.com', role: 'Facilitator', status: 'Active', avatar: 'https://via.placeholder.com/40' },
    { id: 7, name: 'Eve Blue', email: 'eve@example.com', role: 'Facilitator', status: 'Active', avatar: 'https://via.placeholder.com/40' },
    { id: 8, name: 'Frank Purple', email: 'frank@example.com', role: 'Facilitator', status: 'Inactive', avatar: 'https://via.placeholder.com/40' },
    { id: 9, name: 'Grace Orange', email: 'grace@example.com', role: 'Facilitator', status: 'Active', avatar: 'https://via.placeholder.com/40' },
    { id: 10, name: 'Henry Red', email: 'henry@example.com', role: 'Facilitator', status: 'Active', avatar: 'https://via.placeholder.com/40' },
    // Add more mock data as needed
]);

const clearSearch = () => {
    searchQuery.value = '';
};

const toggleView = () => {
    isCardView.value = !isCardView.value;
};

const editAccount = (id) => {
    // Implement edit functionality
    console.log(`Editing account with id: ${id}`);
};

const updateStatus = (id) => {
    // Implement status update functionality
    console.log(`Updating status for account with id: ${id}`);
};

const removeAccount = (id) => {
    // Implement remove functionality
    console.log(`Removing account with id: ${id}`);
};

onMounted(() => setTimeout(() => isVisible.value = true));
onBeforeUnmount(() => isVisible.value = false);
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
