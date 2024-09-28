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
                <!-- Breadcrumbs -->
                <nav class="flex mb-5" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 md:space-x-3">
                        <li class="inline-flex items-center">
                            <a href="/dashboard" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600">
                                <svg class="w-3 h-3 mr-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
                                </svg>
                                Dashboard
                            </a>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <svg class="w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                </svg>
                                <a href="/palakasan" class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2">Tournaments</a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <svg class="w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                </svg>
                                <a href="/palakasan/palakasanView" class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2">Palakasan View</a>
                            </div>
                        </li>
                        <li aria-current="page">
                            <div class="flex items-center">
                                <svg class="w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                </svg>
                                <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2">Basketball</span>
                            </div>
                        </li>
                    </ol>
                </nav>

                <!-- Your Palakasan Content -->
                 <div class="flex justify-between items-center">
                    <div class="flex items-center gap-3">
                        <h1 class="text-3xl font-extrabold text-gray-900">Swimming</h1>

                        <button
                            @click="returnTo"
                            class="bg-transparent text-gray-900 py-2.5 px-4 rounded-xl font-bold text-md hover:bg-gray-900 hover:text-white"
                            >
                            <i class="fa-solid fa-right-from-bracket"></i>
                        </button>

                    </div>
                 </div>

                <div class=" grid grid-cols-5 gap-3">
                    <div class="col-span-5 flex justify-between items-center">
                        <div class="flex justify-between items-center w-full ">
                            <div class="">
                                <div class="flex gap-2">
                                    <p class="text-gray-800 text-md font-semibold">Major</p>
                                    <p class="text-gray-800 text-md font-semibold">-</p>
                                    <p class="text-gray-800 text-md font-semibold">Men's Swimming</p>
                                    <p class="text-gray-800 text-md font-bold">-</p>
                                    <p class="text-gray-800 text-md font-bold">Free for All</p>
                                </div>
                                <div >
                                    <!-- Add the progress bar here -->
                                    <div class="w-full bg-gray-200 rounded-full h-2.5 mt-1.5">
                                        <div class="bg-gray-900 h-2.5 rounded-full" style="width: 100%"></div>
                                    </div>
                                    <p class="text-xs text-gray-600 mt-0.5">Sport Progress: 100%</p>
                                </div>

                            </div>
                            <!-- Facilatator -->
                            <div class="flex items-center gap-2">
                                <div class="flex gap-1">
                                    <button class="group relative items-center text-gray-500 px-2.5 py-1.5 rounded-lg text-sm font-semibold hover:text-gray-900 hover:border-gray-900">
                                        <i class="fa-solid fa-print text-lg"></i>                                        
                                    </button>
                                    <button class="group relative items-center text-gray-500 px-2.5 py-1.5 rounded-lg text-sm font-semibold hover:text-gray-900 hover:border-gray-900">
                                        <i class="fa-solid fa-map-location-dot text-lg"></i>                                        
                                    </button>
                                    <button class="group relative items-center text-gray-500 px-2.5 py-1.5 rounded-lg text-sm font-semibold hover:text-gray-900 hover:border-gray-900">
                                        <i class="fa-solid fa-envelopes-bulk text-lg"></i>                                        
                                    </button>
                                </div>
                                <p class="text-gray-400 text-3xl">|</p> 
                                <div class="flex gap-2 items-center">
                                    <div>
                                        <p class="text-gray-800 text-md font-bold">James Bryan</p>
                                        <p class="text-gray-600 text-sm text-end">Facilatator</p>
                                    </div>
                                    <div>
                                        <img src="../assets/zoro.jpg" alt="basketball" class="w-12 h-12 rounded-lg object-cover   ">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- main content -->
                    <div class="col-span-5 space-y-4">
                        <div class="grid grid-cols-3 gap-4">
                            <div class="bg-white rounded-2xl p-5 shadow-lg">
                                <h2 class="text-gray-900 text-xl font-bold mb-4">Categories</h2>
                                <div class="flex flex-wrap gap-2">
                                    <span v-for="category in swimmingCategories" :key="category" 
                                          class="text-sm font-medium py-1.5 px-3 bg-gray-100 text-gray-700 rounded-full hover:bg-gray-900 hover:text-white transition duration-300 ease-in-out cursor-pointer">
                                        {{ category }}
                                    </span>
                                </div>
                            </div>
                            <div class="bg-white rounded-2xl p-5 shadow-lg col-span-2">
                                <div class="flex justify-between items-center mb-4">
                                    <h2 class="text-gray-900 text-xl font-bold">Record</h2>
                                    <p class="text-gray-500 text-sm">Team records on each category</p>
                                </div>
                                <div class="space-y-4">
                                    <div v-for="(team, index) in ['Fenris - Tartaros', 'Team Alpha', 'Team Omega']" :key="index" class="flex justify-between items-center p-3 hover:bg-gray-50 rounded-lg transition duration-300 ease-in-out">
                                        <span class="text-gray-800 text-sm font-medium">{{ team }}</span>
                                        <div class="flex gap-2">
                                            <div class="py-2 px-2.5 bg-yellow-100 rounded-lg"><i class="fa-solid fa-medal text-yellow-600"></i></div>
                                            <div class="py-2 px-2.5 bg-gray-100 rounded-lg"><i class="fa-solid fa-medal text-gray-400"></i></div>
                                            <div class="py-2 px-2.5 bg-amber-100 rounded-lg"><i class="fa-solid fa-medal text-amber-700"></i></div>
                                            <div class="py-2 px-2.5 bg-gray-900 text-white rounded-lg"><span class="text-xs font-bold">4th</span></div>
                                            <div class="py-2 px-2.5 bg-gray-900 text-white rounded-lg"><span class="text-xs font-bold">5th</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white rounded-2xl p-5 shadow-lg">
                            <div class="flex justify-between items-center mb-6">
                                <h2 class="text-gray-900 text-xl font-bold">Final Result</h2>
                                <p class="text-gray-500 text-sm">Team final result in swimming</p>
                            </div>
                            <div class="flex justify-center gap-8">
                                <div v-for="(rank, index) in ['2nd', '1st', '3rd']" :key="index" 
                                     class="bg-gradient-to-br from-gray-900 to-gray-700 text-white rounded-2xl p-6 text-center w-1/4 transform hover:scale-105 transition duration-300 ease-in-out">
                                    <span class="text-3xl font-bold">{{ rank }}</span>
                                    <p class="mt-2 text-lg">Team {{ ['Alpha', 'Beta', 'Gamma'][index] }}</p>
                                    <p class="text-sm text-gray-300 mt-2">{{ 100 - (index * 20) }} points</p>
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <div v-for="category in ['100m Freestyle', '200m Butterfly', '4x100m Relay', '50m Backstroke']" :key="category" class="bg-white rounded-2xl p-6 shadow-lg">
                                <div class="flex justify-between items-center">
                                    <div>
                                        <h2 class="text-gray-900 text-lg font-bold">{{ category }}</h2>
                                        <p class="text-gray-500 text-sm mb-4">Swimming Category</p>    
                                    </div>
                                    <div>
                                        <p class="text-gray-500 text-sm mb-4">8:00 AM - 10:00 AM</p>    
                                    </div>
                                </div>
                                <div class="space-y-3">
                                    <div v-for="(position, index) in ['1st Place', '2nd Place', '3rd Place']" :key="index" 
                                         class="flex justify-between items-center p-3 hover:bg-gray-50 rounded-lg transition duration-300 ease-in-out">
                                        <span class="text-gray-700">{{ ['Team X', 'Team Y', 'Team Z'][index] }}</span>
                                        <span class="text-sm font-medium px-3 py-1.5 rounded-lg" :class="{
                                            'bg-yellow-100 text-yellow-800': index === 0,
                                            'bg-gray-100 text-gray-800': index === 1,
                                            'bg-amber-100 text-amber-800': index === 2
                                        }">{{ position }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </transition>
    </dashboard-layout>

</template>

<script setup>
import { ref, reactive, onMounted } from 'vue';
import { Head, router } from '@inertiajs/vue3';
import DashboardLayout from '@/Layouts/DashboardLayout.vue';

const searchQuery = ref('');

const clearSearch = () => {
    searchQuery.value = '';
};
//route to palakasan
const isVisible = ref(false);
onMounted(() => isVisible.value = true);

const returnTo = () => {
    isVisible.value = false;
    requestAnimationFrame(() => router.visit('/palakasan/palakasanView'));
};

const swimmingCategories = [
    '100m Freestyle',
    '50m Freestyle',
    '25m Freestyle',
    '100m Breaststroke',
    '50m Butterfly',
    '25m Backstroke',
    '100m Medley'
];
</script>

<style scoped>
.medal-bronze-bg {
    background-color: #ffe7ce;
}


</style>

