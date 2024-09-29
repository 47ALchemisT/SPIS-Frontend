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
                        <li>
                            <div class="flex items-center">
                                <svg class="w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                </svg>
                                <a href="/palakasan" class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2">Sports</a>
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
                        <h1 class="text-3xl font-extrabold text-gray-900">Basketball</h1>

                        <button
                            @click="returnTo"
                            class="bg-transparent text-gray-900 py-2.5 px-4 rounded-xl font-bold transition-all text-md hover:bg-gray-900 hover:text-white"
                            >
                            <i class="fa-solid fa-right-from-bracket"></i>
                        </button>

                    </div>
                 </div>
                 

                <div class=" grid grid-cols-5 gap-3">
                    <!--Utility-->
                    <div class="col-span-5">
                        <div class="flex justify-between items-center">
                            <div class=" flex gap-2 items-center">
                                <div class="col-span-5 flex justify-between items-center">
                                    <div class="flex justify-between items-center w-full ">
                                    <div class="">
                                        <div class="flex gap-2">
                                            <p class="text-gray-800 text-sm font-semibold">Major</p>
                                            <p class="text-gray-800 text-sm font-semibold">-</p>
                                            <p class="text-gray-800 text-sm font-semibold">Women's Basketball</p>                                    
                                            <p class="text-gray-800 text-sm font-bold">-</p>
                                            <p class="text-gray-800 text-sm font-bold">Single Elimination</p>
                                        </div>
                                        <div >
                                            <!-- Add the progress bar here -->
                                            <div class="w-72 bg-white rounded-full h-2.5 mt-1.5">
                                                <div class="bg-gray-900 h-2.5 rounded-full" style="width: 10%"></div>
                                            </div>
                                            <p class="text-xs text-gray-600 mt-1">Sport Progress: 10%</p>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>

                            </div>
                            <div class="flex items-center space-x-2.5">
                                <button class="bg-gray-900 text-white py-2 px-2.5 text-sm rounded-lg shadow hover:bg-gray-900/90 transition-colors">
                                    <i class="fa-solid fa-print mr-1"></i>
                                    Report
                                </button>
                                <button class="bg-white text-gray-800 p-2 text-sm rounded-lg shadow hover:bg-gray-100 transition-colors">
                                    <i class="fa-solid fa-envelopes-bulk"></i>
                                </button>

                            </div>
                        </div>
                    </div>
                    <!-- main content -->
                    <div class="col-span-5">
                        <div class="col-span-5 bg-transparent rounded-xl flex gap-4 w-full bg-white p-4">
                            <div class=" w-full">
                                <div class="flex justify-between">
                                    <div class="flex gap-2.5">
                                        <button class="bg-white text-gray-800 py-2 px-2.5 border-2 text-sm rounded-lg  hover:bg-gray-100 transition-colors">
                                            <i class="fa-solid fa-map-location-dot"></i>
                                        </button>
                                        <button class="bg-gray-900 text-white py-2 px-3 text-sm rounded-lg shadow hover:bg-gray-900/90 transition-colors">
                                            <i class="fa-solid fa-flag text-xs mr-1"></i>
                                            Finish
                                        </button>

                                    </div>
                                    <div class="relative">
                                        <Menu as="div" class="relative inline-block text-left">
                                            <MenuButton class="inline-flex items-center justify-center w-full rounded-lg px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">
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
                                                <MenuItems class="origin-top-right absolute z-10 right-0 mt-2 w-36 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none">
                                                    <div class="py-1">
                                                    <MenuItem v-slot="{ active }">
                                                        <a href="#" :class="[active ? 'bg-gray-100 text-gray-900' : 'text-gray-700', 'block px-4 py-2 text-sm']">
                                                            Option 1
                                                        </a>
                                                    </MenuItem>
                                                    <MenuItem v-slot="{ active }">
                                                        <a href="#" :class="[active ? 'bg-gray-100 text-gray-900' : 'text-gray-700', 'block px-4 py-2 text-sm']">
                                                            Option 2
                                                        </a>
                                                    </MenuItem>
                                                    <MenuItem v-slot="{ active }">
                                                        <a href="#" :class="[active ? 'bg-gray-100 text-gray-900' : 'text-gray-700', 'block px-4 py-2 text-sm']">
                                                            Option 3
                                                        </a>
                                                    </MenuItem>
                                                    </div>
                                                </MenuItems>
                                            </transition>
                                        </Menu>
                                    </div>
                                </div>

                                <div class="mt-2 ">
                                    <div class="tournament-bracket p-4 rounded-xl">
                                        <h1 class="text-2xl font-bold text-gray-900 mb-6 text-center">Tournament Bracket</h1>
                                        <div class="flex flex-nowrap overflow-x-auto gap-8 pb-4">
                                        <div v-for="(round, roundIndex) in rounds" :key="roundIndex" class="flex-shrink-0 flex p-2 flex-col">
                                            <h2 class="text-lg font-semibold text-gray-800 mb-4">Round {{ roundIndex + 1 }}</h2>
                                            <div class="space-y-4 flex-grow flex flex-col justify-center">
                                            <div
                                                v-for="(game, gameIndex) in round"
                                                :key="gameIndex"
                                                class="game-card w-64 bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-lg"
                                            >
                                                <div class="bg-gray-900 text-white p-2 flex justify-between items-center">
                                                <h3 class="text-xs font-semibold">Game {{ game.gameNumber }}</h3>
                                                <div class="text-xs">
                                                    {{ game.day }} - {{ game.time }}
                                                    <button @click="openModal(roundIndex, gameIndex)" class="ml-1 mr-1 hover:text-indigo-200 transition-colors duration-200">
                                                        <i class="fas fa-external-link-alt"></i>
                                                    </button>
                                                    <Menu as="div" class="relative inline-block text-left">
                                                        <MenuButton class="inline-flex items-center justify-center px-2 w-full rounded-lgtext-sm font-medium text-white">
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
                                                            <MenuItems class="origin-top-right absolute z-10 right-0 mt-2 w-36 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none">
                                                                <div class="py-1">
                                                                <MenuItem v-slot="{ active }">
                                                                    <a href="#" :class="[active ? 'bg-gray-100 text-gray-900' : 'text-gray-700', 'block px-4 py-2 text-sm']">
                                                                        Option 1
                                                                    </a>
                                                                </MenuItem>
                                                                <MenuItem v-slot="{ active }">
                                                                    <a href="#" :class="[active ? 'bg-gray-100 text-gray-900' : 'text-gray-700', 'block px-4 py-2 text-sm']">
                                                                        Option 2
                                                                    </a>
                                                                </MenuItem>

                                                                </div>
                                                            </MenuItems>
                                                        </transition>
                                                    </Menu>
                                                </div>
                                                </div>
                                                <div class="p-3 space-y-2">
                                                <div
                                                    v-for="(team, teamIndex) in game.teams"
                                                    :key="teamIndex"
                                                    class="flex justify-between items-center p-1.5 rounded-md text-sm"
                                                    :class="teamIndex === 0 ? 'bg-blue-50' : 'bg-red-50'"
                                                >
                                                    <div class="flex items-center space-x-2">
                                                    <div class="w-2 h-2 rounded-full" :class="teamIndex === 0 ? 'bg-blue-500' : 'bg-red-500'"></div>
                                                    <p class="text-gray-800 font-medium">{{ team.name || '--' }}</p>
                                                    </div>
                                                    <span class="text-md font-semibold text-gray-900">{{ team.score }}</span>
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        </div>

                                        <!-- Modal -->
                                        <div v-if="showModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full flex items-center justify-center">
                                            <div class="bg-white p-5 rounded-lg shadow-xl w-96">
                                                <h3 class="text-lg font-semibold mb-4">Update Scores - Game {{ selectedGame.gameNumber }}</h3>
                                                <div v-for="(team, index) in selectedGame.teams" :key="index" class="mb-4">
                                                <label :for="'team' + index" class="block text-sm font-medium text-gray-700 mb-1">
                                                    {{ team.name || 'Team ' + (index + 1) }}
                                                </label>
                                                <input 
                                                    :id="'team' + index"
                                                    v-model="team.score"
                                                    type="number"
                                                    min="0"
                                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                                >
                                                </div>
                                                <div class="flex justify-end space-x-3">
                                                    <button @click="closeModal" class="px-4 py-2.5 text-sm bg-white text-gray-800 rounded-lg hover:bg-gray-400">Cancel</button>
                                                    <button @click="saveScores" class="px-4 py-2.5 text-sm bg-gray-900 text-white rounded-lg hover:bg-gray-900/90">Save</button>
                                                </div>
                                            </div>
                                        </div>
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
    </FacilitatorLayout>

</template>

<script setup>
import { Menu, MenuButton, MenuItem, MenuItems } from '@headlessui/vue'
import { ChevronDownIcon } from '@heroicons/vue/20/solid'
import { ref, reactive, onMounted } from 'vue';
import { router } from '@inertiajs/vue3';
import FacilitatorLayout from '@/Layouts/FacilitatorLayout.vue';
import Modal from '@/Components/Modal.vue';

const isVisible = ref(false);
const showModal = ref(false);
const selectedGame = ref(null);
const selectedRoundIndex = ref(null);
const selectedGameIndex = ref(null);

const rounds = reactive([
  [
    { gameNumber: 1, day: 'Mon', time: '8AM', teams: [{ name: 'Fenris', score: 0 }, { name: 'Griffins', score: 0 }] },
    { gameNumber: 2, day: 'Mon', time: '10AM', teams: [{ name: '--', score: 0 }, { name: '--', score: 0 }] },
  ],
  [
    { gameNumber: 3, day: 'Tue', time: '8AM', teams: [{ name: '--', score: 0 }, { name: '--', score: 0 }] },
    { gameNumber: 4, day: 'Tue', time: '10AM', teams: [{ name: '--', score: 0 }, { name: '--', score: 0 }] },
  ],
  [
    { gameNumber: 5, day: 'Wed', time: '8AM', teams: [{ name: '--', score: 0 }, { name: '--', score: 0 }] },
  ],
]);

const openModal = (roundIndex, gameIndex) => {
  selectedRoundIndex.value = roundIndex;
  selectedGameIndex.value = gameIndex;
  selectedGame.value = JSON.parse(JSON.stringify(rounds[roundIndex][gameIndex]));
  showModal.value = true;
};

const closeModal = () => {
  showModal.value = false;
  selectedGame.value = null;
};

const saveScores = () => {
  rounds[selectedRoundIndex.value][selectedGameIndex.value].teams = selectedGame.value.teams;
  closeModal();
};

onMounted(() => {
  isVisible.value = true;
});



const returnTo = () => {
  isVisible.value = false;
  requestAnimationFrame(() => router.visit('/games'));
};
</script>

<style scoped>
.tournament-bracket {
  scrollbar-width: thin;
  scrollbar-color: #4f46e5 #e5e7eb;
}

.tournament-bracket::-webkit-scrollbar {
  height: 8px;
}

.tournament-bracket::-webkit-scrollbar-track {
  background: #e5e7eb;
}

.tournament-bracket::-webkit-scrollbar-thumb {
  background-color: #4f46e5;
  border-radius: 20px;
  border: 2px solid #e5e7eb;
}
</style>
