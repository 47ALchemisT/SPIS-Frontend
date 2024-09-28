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
        <div v-show="isVisible" class="palakasan-content p-4 md:p-6" key="palakasan">
          <div class="grid grid-cols-1 md:grid-cols-7 gap-4 mb-5">
            <div class="bg-image rounded-xl col-span-full md:col-span-5 shadow-lg p-6">
              <!--Breadcrumb-->
              <nav class="mb-4" aria-label="Breadcrumb">
                <ol class="flex flex-wrap items-center space-x-1 md:space-x-3 text-sm">
                  <li class="inline-flex items-center">
                    <Link href="/dashboard" class="inline-flex items-center text-white hover:text-blue-600 transition-colors">
                      <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
                      Dashboard
                    </Link>
                  </li>
                  <li>
                    <div class="flex items-center">
                      <svg class="w-5 h-5 text-white mx-1" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                      <Link href="/palakasan" class="text-white hover:text-blue-600 transition-colors">Tournaments</Link>
                    </div>
                  </li>
                  <li>
                    <div class="flex items-center">
                      <svg class="w-5 h-5 text-white mx-1" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                      <Link href="/palakasan/palakasanView" class="text-white hover:text-blue-600 transition-colors">Palakasan View</Link>
                    </div>
                  </li>
                  <li>
                    <div class="flex items-center">
                      <svg class="w-5 h-5 text-white mx-1" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                      <span class="text-white">Basketball</span>
                    </div>
                  </li>
                </ol>
              </nav>
              <div class="mt-20">
                <!--Title-->
                <div class="flex items-center gap-3">
                  <h1 class="text-4xl font-extrabold text-white">Palakasan 2025</h1>
                  <button
                    @click="returnTo"
                    class="bg-white/20 text-white py-2.5 px-4 rounded-lg font-bold text-sm hover:bg-gray-900 transition-colors"
                  >
                    <i class="fa-solid fa-right-from-bracket mr-2"></i>
                    Back
                  </button>
                </div>
                <h2 class="text-lg font-normal text-white/80">Theme: Fairytail 🔥</h2>
              </div>
            </div>
            <div class="col-span-full md:col-span-2 bg-gray-900 rounded-xl p-6 shadow-lg flex flex-col justify-between">
              <div class="flex items-center mb-4">
                <div class="p-4 bg-white/20 rounded-full shadow mr-4">
                  <i class="fa-solid fa-trophy text-white text-3xl"></i>
                </div>
                <div>
                  <h3 class="text-xl font-bold text-white">Tournament Progress</h3>
                  <p class="text-white/80 text-sm">Overall completion status</p>
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
  
          <div class="grid grid-cols-1 lg:grid-cols-8 gap-5">
            <!--Utility-->
            <div class="lg:col-span-8">
                <div class="flex justify-between items-center">
                    <div class="flex items-center space-x-4">
                    <h2 class="text-2xl font-bold text-gray-800">Sports List</h2>
                    <span>|</span>
                    <span class="text-sm font-medium text-gray-500px-3 py-1 rounded-full">Total: 10</span>
                </div>
                <div class="flex items-center space-x-2.5">
                    <button @click="openModal" class="bg-gray-900 text-white py-2 px-4 rounded-lg text-sm font-medium shadow hover:bg-gray-800 transition-colors">
                        Create
                    </button>
                    <button class="bg-white text-gray-800 text-sm py-2 px-2.5 rounded-lg shadow hover:bg-gray-100 transition-colors">
                        <i class="fa-solid fa-print"></i>
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
            <!--Side Utility-->
            <div class="lg:col-span-2 space-y-6">
              <div class="bg-white p-6 rounded-2xl shadow-md hover:shadow-md transition-all duration-300">
                <div class="space-y-3">
                  <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                      <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                      </svg>
                    </div>
                    <input
                      v-model="searchQuery"
                      type="text"
                      placeholder="Search sport..."
                      class="w-full pl-10 pr-4 py-2 bg-gray-50 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-gray-400 focus:border-transparent transition-all duration-300"
                    >
                  </div>
                  <div>
                    <div class="flex items-center gap-3 justify-between">
                        <p class="text-sm font-medium text-gray-600 mb-2">Filter: </p>
                        <hr class="w-full mb-[4px] border border-gray-300">
                    </div>
                    <button @click="toggleAccordion" class="flex justify-between items-center w-full py-2 px-4 bg-gray-100 rounded-lg text-sm font-medium text-gray-700 hover:bg-gray-200 transition-all duration-300">
                      <span>Categories</span>
                      <i :class="['fas', isOpen ? 'fa-chevron-up' : 'fa-chevron-down', 'transition-transform duration-300']"></i>
                    </button>
                    <div class="overflow-hidden transition-all duration-300" :style="{ maxHeight: isOpen ? accordionHeight + 'px' : '0px' }">
                      <div ref="accordionContent" class="space-y-2 p-2">
                        <button v-for="filter in ['Major', 'Minor', 'Men', 'Women', 'Mixed']" :key="filter"
                          class="block w-full text-left p-2 rounded-md text-sm text-gray-700 hover:bg-gray-200 transition-all duration-200">
                          {{ filter }}
                        </button>
                      </div>
                    </div>
                  </div>
                  <button class="w-full bg-gradient-to-r from-gray-800 to-gray-900 text-white py-2 px-4 rounded-lg text-sm font-medium hover:from-gray-700 hover:to-gray-800 transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 shadow-md hover:shadow-lg">
                    Activate
                  </button>
                </div>
              </div>
              <div class="bg-white p-6 rounded-2xl shadow-md">
                <h3 class="text-lg font-semibold text-gray-800 mb-4">Tournament Details</h3>
                <div class="space-y-4">
                  <img src="../assets/Fairytail.jpg" alt="Theme" class="w-full h-40 object-cover rounded-lg mb-4">
                  <div class="space-y-2">
                    <div v-for="team in ['Fenris X Tartaros', 'Krakens X Lamia Scale', 'Team 3', 'Team 4', 'Team 5']" :key="team"
                      class="py-2 px-3 bg-gray-100 rounded-md text-sm text-gray-800 shadow-sm hover:bg-gray-200 transition-all duration-300">
                      {{ team }}
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--Sports List Card-->
            <div class="lg:col-span-6">

              <div class="space-y-4">
                <div v-for="(sport, index) in ['Basketball', 'Swimming', 'Softball', 'Volleyball', 'Tennis']" :key="index" 
                  class="bg-white p-6 rounded-xl  shadow-md hover:shadow-lg transition-all duration-300">
                  <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-4">
                      <div class="w-16 h-16 bg-gray-200 rounded-lg overflow-hidden flex-shrink-0">
                        <img src="../assets/zoro.jpg" class="w-full h-full object-cover" :alt="sport">
                      </div>
                      <div>
                        <h3 class="text-xl font-bold text-gray-800">{{ sport }}</h3>
                        <div class="flex items-center space-x-2 mt-1">
                          <span class="px-2 py-1 bg-gray-100 rounded-full text-xs text-gray-600">{{ index % 2 === 0 ? 'Major' : 'Minor' }}</span>
                          <span class="px-2 py-1 bg-gray-100 rounded-full text-xs text-gray-600">{{ index % 2 === 0 ? 'Women' : 'Men' }}</span>
                          <span class="px-2 py-1 bg-gray-100 rounded-full text-xs text-gray-600">{{ ['Single Elimination', 'Double Elimination', 'Free for All'][index % 3] }}</span>
                        </div>
                      </div>
                    </div>
                    <div class="flex flex-col items-end space-y-2">
                      <button @click="navigateToSportView(sport, index)" class="bg-gray-900 text-white px-4 py-2 rounded-lg text-sm font-medium hover:bg-gray-900/90 transition-colors">
                        <span class="flex items-center">
                          <i class="fa-regular fa-eye mr-2"></i>
                          Details
                        </span>
                      </button>
                      <span class="text-yellow-500 text-xs font-semibold py-1 px-3 bg-yellow-100 rounded-lg">On-going</span>
                    </div>
                  </div>
                  <div class="mt-4">
                    <div class="w-full bg-gray-200 rounded-full h-2">
                      <div class="bg-gray-800 h-2 rounded-full" :style="`width: ${(index + 1) * 20}%`"></div>
                    </div>
                    <p class="text-xs text-gray-600 mt-1">Sport Progress: {{ (index + 1) * 20 }}%</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <!--Modal-->
          <Modal :isVisible="isModalVisible" title="Add Sport" @close="closeModal">
            <!-- Modal content here (unchanged) -->
          </Modal>
        </div>
      </transition>
    </dashboard-layout>
  </template>

<script setup>
import { Menu, MenuButton, MenuItem, MenuItems } from '@headlessui/vue'
import { ChevronDownIcon } from '@heroicons/vue/20/solid'
import { ref, onMounted, nextTick } from 'vue';
import { Head, router, Link } from '@inertiajs/vue3';
import DashboardLayout from '@/Layouts/DashboardLayout.vue';
import Modal from '@/Components/Modal.vue'; 

const searchQuery = ref('');

const clearSearch = () => {
    searchQuery.value = '';
};
//route to palakasan
const isVisible = ref(false);
onMounted(() => isVisible.value = true);

const returnTo = () => {
    isVisible.value = false;
    requestAnimationFrame(() => router.visit('/palakasan'));
};

const navigateToSportView = (sport, index) => {
    isVisible.value = false;
    const eliminationType = ['Single Elimination', 'Double Elimination', 'Free for All'][index % 3];
    let route = '';

    if (eliminationType === 'Single Elimination') {
        route = '/palakasan/palakasanView/sportSEView';
    } else if (eliminationType === 'Double Elimination') {
        route = '/palakasan/palakasanView/sportView';
    } else {
        route = '/palakasan/palakasanView/sportFOFView';
    }

    route += `?sport=${encodeURIComponent(sport)}`;

    requestAnimationFrame(() => router.visit(route));
};

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

const isOpen = ref(false);
const accordionContent = ref(null);
const accordionHeight = ref(0);

const toggleAccordion = () => {
    isOpen.value = !isOpen.value;
    nextTick(() => {
        if (isOpen.value) {
            accordionHeight.value = accordionContent.value.scrollHeight;
        } else {
            accordionHeight.value = 0;
        }
    });
};
</script>

<style scoped>
@keyframes sphere-fast {
  0% {
    transform: translate(0, 0);
  }
  25% {
    transform: translate(10px, 10px);
  }
  50% {
    transform: translate(0, 20px);
  }
  75% {
    transform: translate(-10px, 10px);
  }
  100% {
    transform: translate(0, 0);
  }
}

.animate-sphere-fast {
  animation: sphere-fast 3s infinite;
}

.glow-sphere {
    box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.7);
    animation: sphere-fast 3s infinite, glow 1.5s infinite alternate;
}

@keyframes glow {
    from {
        box-shadow: 0 0 5px 2px rgba(255, 255, 255, 0.7);
    }
    to {
        box-shadow: 0 0 20px 10px rgba(255, 255, 255, 0.7);
    }
}

.group:hover .glow-sphere {
    animation: sphere-fast 3s infinite, glow 1.5s infinite alternate;
}

.group:hover .glow-sphere {
    animation: sphere-fast 3s infinite, glow 1.5s infinite alternate;
}

.group:hover .glow-sphere {
    animation: sphere-fast 3s infinite, glow 1.5s infinite alternate;
}

.group:hover .glow-sphere {
    animation: sphere-fast 3s infinite, glow 1.5s infinite alternate;
}

.group:hover .glow-sphere {
    animation: sphere-fast 3s infinite, glow 1.5s infinite alternate;
}

.filter-content.overflow-hidden {
  max-height: 0;
  overflow: hidden;
}

.bg-image {
    background-image: 
        linear-gradient(to right, rgba(0,0,0,1), rgba(0,0,0,0)),
        url('../assets/Fairytail.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    padding: 20px;
}

</style>

