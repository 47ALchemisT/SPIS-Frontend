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
                                <h1 class="text-3xl font-extrabold text-white">Points</h1>
                                <button
                                    @click="returnTo"
                                    class="bg-transparent text-white py-2.5 px-4 rounded-xl font-bold text-md hover:bg-gray-900 hover:text-white"
                                    >
                                    <i class="fa-solid fa-right-from-bracket"></i>
                                </button>
                            </div>
                            <div>
                                <h1 class="text-sm font-normal text-white">Pointing system</h1>
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
                                <button  class="bg-gray-900 text-white py-2 px-4 rounded-lg text-sm font-medium shadow hover:bg-gray-800 transition-colors">
                                    <i class="fa-solid fa-plus mr-2"></i>
                                    Point System
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
                        <!-- Pointing System -->
                        <div class="max-w-4xl ">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div v-for="(points, category) in pointsData" :key="category" class="bg-white rounded-xl border-l-4 border-gray-900 shadow-md p-6 space-y-4">
                                    <div class="flex justify-between items-center">
                                        <h3 class="font-semibold text-lg text-gray-800">{{ category }} Points</h3>
                                        <button @click="openModal(category)" class="inline-flex items-center px-3 py-2.5 shadow-sm text-sm leading-4 font-medium rounded-md text-white bg-gray-900 hover:bg-gray-900/90 ">
                                            Create
                                        </button>
                                    </div>
                                    <ul class="space-y-2">
                                        <li v-for="(point, index) in points" :key="index" class="flex justify-between items-center py-2 px-3 bg-gray-50 rounded-md">
                                            <span class="text-gray-700">{{ point.rank }}</span>
                                            <div class="flex items-center space-x-2">
                                            <span class="text-gray-600 font-medium">{{ point.points }} points</span>
                                                <button @click="openModal(category, index)" class="text-gray-400 hover:text-gray-500">
                                                    <svg class="w-4 h-4 ml-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                                                </button>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Modal -->
                            <div v-if="showModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full flex items-center justify-center">
                            <div class="bg-white p-5 rounded-lg shadow-xl max-w-md w-full">
                                <h3 class="text-lg font-medium mb-4">{{ isEditing ? 'Edit' : 'Add' }} Point</h3>
                                <form @submit.prevent="savePoint">
                                <div class="space-y-4">
                                    <div>
                                        <label for="rank" class="block text-sm font-medium text-gray-700">Rank</label>
                                        <input type="text" id="rank" v-model="currentPoint.rank" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                    </div>
                                    <div>
                                        <label for="points" class="block text-sm font-medium text-gray-700">Points</label>
                                        <input type="number" id="points" v-model="currentPoint.points" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                    </div>
                                </div>
                                <div class="mt-5 sm:mt-6 sm:grid sm:grid-cols-2 sm:gap-3 sm:grid-flow-row-dense">
                                    <button type="submit" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-indigo-600 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:col-start-2 sm:text-sm">
                                    Save
                                    </button>
                                    <button @click="closeModal" type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:col-start-1 sm:text-sm">
                                    Cancel
                                    </button>
                                </div>
                                </form>
                            </div>
                            </div>
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
import { ref, onMounted, onBeforeUnmount,  reactive, computed  } from 'vue';
import { Head, router } from '@inertiajs/vue3';
import DashboardLayout from '@/Layouts/DashboardLayout.vue';

const searchQuery = ref('');
const isVisible = ref(false);
const isCardView = ref(true);
// ... existing refs ...


const clearSearch = () => {
    searchQuery.value = '';
};

const toggleView = () => {
    isCardView.value = !isCardView.value;
};
const pointsData = reactive({
  Major: [
    { rank: '1st',  points: 100 },
    { rank: '2nd',  points: 90 },
  ],
  Minor: [
    { rank: '1st',  points: 50 },
    { rank: '2nd',points: 45 },
  ],
});

const showModal = ref(false);
const currentCategory = ref('');
const currentIndex = ref(-1);
const currentPoint = reactive({ rank: '',  points: 0 });

const isEditing = computed(() => currentIndex.value !== -1);

const openModal = (category, index = -1) => {
  currentCategory.value = category;
  currentIndex.value = index;
  if (index === -1) {
    Object.assign(currentPoint, { rank: '',  points: 0 });
  } else {
    Object.assign(currentPoint, pointsData[category][index]);
  }
  showModal.value = true;
};

const closeModal = () => {
  showModal.value = false;
};

const savePoint = () => {
  if (isEditing.value) {
    pointsData[currentCategory.value].splice(currentIndex.value, 1, { ...currentPoint });
  } else {
    pointsData[currentCategory.value].push({ ...currentPoint });
  }
  closeModal();
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
