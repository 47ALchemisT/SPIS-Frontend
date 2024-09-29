<template>
    <Head title="Palakasan" />
    <FacilitatorLayout>
        <transition
            enter-active-class="transition ease-out duration-300"
            enter-from-class="opacity-0 transform scale-95"
            enter-to-class="opacity-100 transform scale-100"
            leave-active-class="transition ease-in duration-200"
            leave-from-class="opacity-100 transform scale-100"
            leave-to-class="opacity-0 transform scale-95"
        >
            <div  v-show="isVisible" class="palakasan-content p-4" key="palakasan">
                <nav class="flex mb-4" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 md:space-x-3">
                        <li class="inline-flex items-center">
                            <a href="/dashboard" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600">
                                <svg class="w-3 h-3 mr-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
                                </svg>
                                Dashboard
                            </a>
                        </li>
                        <li aria-current="page">
                            <div class="flex items-center">
                                <svg class="w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                </svg>
                                <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2">Players</span>
                            </div>
                        </li>
                    </ol>
                </nav>

                <!-- Your Palakasan Content -->
                 <div class="flex justify-between items-center">
                    <div class="flex items-center gap-3">
                        <h1 class="text-3xl font-extrabold text-gray-900">Players</h1>

                        <button
                            @click="returnTo"
                            class="bg-transparent text-gray-900 py-2.5 px-4 rounded-xl font-bold text-md hover:bg-gray-900 hover:text-white"
                            >
                            <i class="fa-solid fa-right-from-bracket"></i>
                        </button>

                    </div>
                 </div>

                <div class=" grid grid-cols-5 gap-3 mt-3">
                    <!--Utility-->
                    <div class="col-span-5">
                        <div class="flex justify-between items-center">
                            <div class=" flex gap-2 items-center">
                                <!-- Search Input -->
                                <div class="relative">
                                    <input
                                        v-model="searchQuery"
                                        type="text"
                                        placeholder="Search player..."
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
                                <!--filter-->
                                <div class="relative inline-block text-left">
                                    <button
                                    @click="toggleDropdown"
                                    type="button"
                                    class="inline-flex items-center justify-center w-full px-4 py-2 text-sm font-medium text-gray-900 bg-white rounded-lg shadow focus:outline-none"
                                    >
                                    Filter
                                    <svg class="w-3 h-3 ml-2 -mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor">
                                        <path d="M3.9 54.9C10.5 40.9 24.5 32 40 32l432 0c15.5 0 29.5 8.9 36.1 22.9s4.6 30.5-5.2 42.5L320 320.9 320 448c0 12.1-6.8 23.2-17.7 28.6s-23.8 4.3-33.5-3l-64-48c-8.1-6-12.8-15.5-12.8-25.6l0-79.1L9 97.3C-.7 85.4-2.8 68.8 3.9 54.9z"/>
                                    </svg>
                                    </button>
                                    
                                    <transition
                                    enter-active-class="transition ease-out duration-100"
                                    enter-from-class="transform opacity-0 scale-95"
                                    enter-to-class="transform opacity-100 scale-100"
                                    leave-active-class="transition ease-in duration-75"
                                    leave-from-class="transform opacity-100 scale-100"
                                    leave-to-class="transform opacity-0 scale-95"
                                    >
                                    <div
                                        v-if="isOpen"
                                        class="absolute right-0 w-48 mt-2 origin-top-right bg-white rounded-lg shadow z-50 ring-1 ring-black ring-opacity-5"
                                    >
                                        <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
                                        <div
                                            v-for="option in options"
                                            :key="option.value"
                                            class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                                        >
                                            <input
                                            :id="option.value"
                                            v-model="selectedOption"
                                            name="radio-option"
                                            type="radio"
                                            :value="option.value"
                                            class="w-4 h-4 text-gray-900 border-gray-300 focus:outline-none focus:ring-gray-900"
                                            />
                                            <label :for="option.value" class="ml-3 block text-sm font-medium text-gray-700">
                                            {{ option.label }}
                                            </label>
                                        </div>
                                        </div>
                                    </div>
                                    </transition>
                                </div>
                            </div>
                            <div class="flex items-center space-x-2.5">
                                <button class="bg-gray-900 text-white py-2 px-2.5 text-sm rounded-lg shadow hover:bg-gray-900/90 transition-colors">
                                    <i class="fa-solid fa-print mr-1"></i>
                                     Generate Report
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
                    <div class="col-span-5">
                        <!-- Card View -->
                        <div v-if="isCardView" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                            <div v-for="account in accounts" :key="account.id" class="bg-white rounded-xl shadow-md p-4 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
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
                                                <MenuItems class="absolute right-0 w-36 rounded-lg shadow-lg z-50 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none">
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

                <!--Modal-->
                <Modal :isVisible="isModalVisible" title="Add new venue" @close="closeModal">
                    <!-- Modal content here (unchanged) -->
                </Modal>
            </div>
        </transition>
    </FacilitatorLayout>

</template>

<script setup>
import { Menu, MenuButton, MenuItem, MenuItems } from '@headlessui/vue'
import { ChevronDownIcon } from '@heroicons/vue/20/solid'
import { ref, onMounted } from 'vue';
import { Head, router } from '@inertiajs/vue3';
import FacilitatorLayout from '@/Layouts/FacilitatorLayout.vue';
import Modal from '@/Components/Modal.vue';

const searchQuery = ref('');
const isVisible = ref(false);
const isModalVisible = ref(false);
const isCardView = ref(true);

const clearSearch = () => {
    searchQuery.value = '';
};

const toggleView = () => {
    isCardView.value = !isCardView.value;
};

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
//filter btn
const isOpen = ref(false)
const selectedOption = ref('option2')
const options = [
  { value: 'option1', label: 'All' },
  { value: 'option2', label: 'Option 2' },
  { value: 'option3', label: 'Option 3' }
]

const toggleDropdown = () => {
  isOpen.value = !isOpen.value
}
</script>

<style scoped>
</style>
