<template>
    <div class="min-h-screen flex flex-col">
        
        <!-- Header -->
        <nav class="bg-gray-900 fixed top-0 left-0 right-0 z-50">
            <div class="px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex-shrink-0 flex items-center">
                        <!-- Add your logo or site name here -->
                        <span class="text-xl font-bold text-white">SPIS</span>
                    </div>
                    <div class="ml-3 relative flex items-center">
                        <img id="avatarButton" type="button" data-dropdown-toggle="userDropdown" data-dropdown-placement="bottom-start" class="w-10 h-10 rounded-full object-cover cursor-pointer" src="../assets/1c44db523f02877b62b1479213beaef0.jpg" alt="User dropdown">

                        <!-- Dropdown menu -->
                        <div id="userDropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                            <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
                                <div>Bonnie Green</div>
                                <div class="font-medium truncate">name@flowbite.com</div>
                            </div>
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="avatarButton">
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                                </li>
                            </ul>
                            <div class="py-1">
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <div class="flex flex-1 pt-16"> <!-- Added pt-16 to account for fixed header height -->
            <!-- Sidebar -->
            <aside id="default-sidebar" class="fixed left-0 top-16 bottom-0 w-64 bg-white shadow-lg dark:bg-gray-800" aria-label="Sidebar">
                <div class="h-full px-3 py-4 overflow-y-auto">
                    <h1 class="text-sm font-bold text-gray-900 dark:text-white mb-2">Menu</h1>
                    <ul class="space-y-2 font-medium">
                        <li>
                            <Link
                                href="/dashboard"
                                class="flex items-center p-2.5 rounded-lg group transition duration-75"
                                :class="{
                                    'bg-gray-900 dark:bg-gray-700 text-white dark:text-white': isActive('/dashboard'),
                                    'text-gray-600 dark:text-white hover:bg-gray-100 hover:text-gray-900': !isActive('/dashboard'),
                                }"
                            >
                                <svg class="w-5 h-5  transition duration-75 dark:text-gray-400  dark:group-hover:text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" fill="currentColor">
                                    <path d="M160 80c0-26.5 21.5-48 48-48l32 0c26.5 0 48 21.5 48 48l0 352c0 26.5-21.5 48-48 48l-32 0c-26.5 0-48-21.5-48-48l0-352zM0 272c0-26.5 21.5-48 48-48l32 0c26.5 0 48 21.5 48 48l0 160c0 26.5-21.5 48-48 48l-32 0c-26.5 0-48-21.5-48-48L0 272zM368 96l32 0c26.5 0 48 21.5 48 48l0 288c0 26.5-21.5 48-48 48l-32 0c-26.5 0-48-21.5-48-48l0-288c0-26.5 21.5-48 48-48z"/>
                                </svg>
                                <span class="ms-3">Dashboard</span>
                            </Link>
                        </li>

                        <li>
                            <button 
                                @click="toggleTournamentDropdown" 
                                type="button" 
                                class="flex items-center w-full p-2.5 rounded-lg group transition duration-75"
                                :class="{
                                    'bg-gray-900 dark:bg-gray-700 text-white dark:text-white': isActiveTournament,
                                    'text-gray-600 dark:text-white hover:bg-gray-100 hover:text-gray-900': !isActiveTournament,
                                }"
                                aria-controls="dropdown-tournament" 
                                data-collapse-toggle="dropdown-tournament"
                            >
                                <svg class="w-5 h-5 transition duration-75 dark:text-gray-400 dark:group-hover:text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" fill="currentColor">
                                    <path d="M400 0L176 0c-26.5 0-48.1 21.8-47.1 48.2c.2 5.3 .4 10.6 .7 15.8L24 64C10.7 64 0 74.7 0 88c0 92.6 33.5 157 78.5 200.7c44.3 43.1 98.3 64.8 138.1 75.8c23.4 6.5 39.4 26 39.4 45.6c0 20.9-17 37.9-37.9 37.9L192 448c-17.7 0-32 14.3-32 32s14.3 32 32 32l192 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-26.1 0C337 448 320 431 320 410.1c0-19.6 15.9-39.2 39.4-45.6c39.9-11 93.9-32.7 138.2-75.8C542.5 245 576 180.6 576 88c0-13.3-10.7-24-24-24L446.4 64c.3-5.2 .5-10.4 .7-15.8C448.1 21.8 426.5 0 400 0zM48.9 112l84.4 0c9.1 90.1 29.2 150.3 51.9 190.6c-24.9-11-50.8-26.5-73.2-48.3c-32-31.1-58-76-63-142.3zM464.1 254.3c-22.4 21.8-48.3 37.3-73.2 48.3c22.7-40.3 42.8-100.5 51.9-190.6l84.4 0c-5.1 66.3-31.1 111.2-63 142.3z"/>
                                </svg>
                                <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Tournament</span>
                                <svg :class="{ 'rotate-180': isTournamentDropdownOpen }" class="w-3 h-3 transition-transform duration-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                </svg>
                            </button>
                            <transition
                                enter-active-class="transition duration-100 ease-out"
                                enter-from-class="transform scale-95 opacity-0"
                                enter-to-class="transform scale-100 opacity-100"
                                leave-active-class="transition duration-75 ease-in"
                                leave-from-class="transform scale-100 opacity-100"
                                leave-to-class="transform scale-95 opacity-0"
                            >
                                <ul v-show="isTournamentDropdownOpen || isActiveTournament" class="py-2 px-2 space-y-2 bg-gray-100 rounded-xl mt-1">
                                    <li>
                                        <Link 
                                            href="/palakasan" 
                                            class="flex w-full p-2.5 transition duration-75 rounded-lg gap-3 group"
                                            :class="{
                                                'text-gray-900': isActive('/palakasan'),
                                                'text-gray-500 hover:bg-gray-200 hover:text-gray-700': !isActive('/palakasan'),
                                            }"
                                        >
                                        <svg class="w-5 h-5  transition duration-75 dark:text-gray-400  dark:group-hover:text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"  fill="currentColor">
                                            <path d="M192 0c17.7 0 32 14.3 32 32l0 112-64 0 0-112c0-17.7 14.3-32 32-32zM64 64c0-17.7 14.3-32 32-32s32 14.3 32 32l0 80-64 0 0-80zm192 0c0-17.7 14.3-32 32-32s32 14.3 32 32l0 96c0 17.7-14.3 32-32 32s-32-14.3-32-32l0-96zm96 64c0-17.7 14.3-32 32-32s32 14.3 32 32l0 64c0 17.7-14.3 32-32 32s-32-14.3-32-32l0-64zm-96 88l0-.6c9.4 5.4 20.3 8.6 32 8.6c13.2 0 25.4-4 35.6-10.8c8.7 24.9 32.5 42.8 60.4 42.8c11.7 0 22.6-3.1 32-8.6l0 8.6c0 52.3-25.1 98.8-64 128l0 96c0 17.7-14.3 32-32 32l-160 0c-17.7 0-32-14.3-32-32l0-78.4c-17.3-7.9-33.2-18.8-46.9-32.5L69.5 357.5C45.5 333.5 32 300.9 32 267l0-27c0-35.3 28.7-64 64-64l88 0c22.1 0 40 17.9 40 40s-17.9 40-40 40l-56 0c-8.8 0-16 7.2-16 16s7.2 16 16 16l56 0c39.8 0 72-32.2 72-72z"/>
                                        </svg>
                                        Palakasan</Link>
                                    </li>
                                    <li>
                                        <Link 
                                            href="/venue" 
                                            class="flex w-full p-2.5 transition duration-75 rounded-lg gap-3 group"
                                            :class="{
                                                'text-gray-900': isActive('/venue'),
                                                'text-gray-500 hover:bg-gray-200 hover:text-gray-700': !isActive('/venue'),
                                            }"
                                        >
                                        <svg class="w-5 h-5  transition duration-75 dark:text-gray-400  dark:group-hover:text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"  fill="currentColor">
                                            <path d="M408 120c0 54.6-73.1 151.9-105.2 192c-7.7 9.6-22 9.6-29.6 0C241.1 271.9 168 174.6 168 120C168 53.7 221.7 0 288 0s120 53.7 120 120zm8 80.4c3.5-6.9 6.7-13.8 9.6-20.6c.5-1.2 1-2.5 1.5-3.7l116-46.4C558.9 123.4 576 135 576 152l0 270.8c0 9.8-6 18.6-15.1 22.3L416 503l0-302.6zM137.6 138.3c2.4 14.1 7.2 28.3 12.8 41.5c2.9 6.8 6.1 13.7 9.6 20.6l0 251.4L32.9 502.7C17.1 509 0 497.4 0 480.4L0 209.6c0-9.8 6-18.6 15.1-22.3l122.6-49zM327.8 332c13.9-17.4 35.7-45.7 56.2-77l0 249.3L192 449.4 192 255c20.5 31.3 42.3 59.6 56.2 77c20.5 25.6 59.1 25.6 79.6 0zM288 152a40 40 0 1 0 0-80 40 40 0 1 0 0 80z"/>
                                        </svg>
                                        Venue</Link>
                                    </li>
                                    <li>
                                        <Link 
                                            href="/sports" 
                                            class="flex w-full p-2.5 transition duration-75 rounded-lg gap-3 group"
                                            :class="{
                                                'text-gray-900': isActive('/sports'),
                                                'text-gray-500 hover:bg-gray-200 hover:text-gray-700': !isActive('/sports'),
                                            }"
                                        >   
                                        <svg class="w-5 h-5  transition duration-75 dark:text-gray-400  dark:group-hover:text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"  fill="currentColor">
                                            <path d="M424 0c-12.4 0-24.2 4.9-33 13.7L233.5 171.2c-10.5 10.5-19.8 22.1-27.7 34.6L132.7 321.6c-7.3 11.5-15.8 22.2-25.5 31.9L69.9 390.7l51.3 51.3 37.3-37.3c9.6-9.6 20.3-18.2 31.9-25.5l115.8-73.1c12.5-7.9 24.1-17.2 34.6-27.7L498.3 121c8.7-8.7 13.7-20.6 13.7-33s-4.9-24.2-13.7-33L457 13.7C448.2 4.9 436.4 0 424 0zm88 432a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM15 399c-9.4 9.4-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9L49 399c-9.4-9.4-24.6-9.4-33.9 0z"/>
                                        </svg>
                                        Sports</Link>
                                    </li>
                                    <li>
                                        <Link 
                                            href="/points" 
                                            class="flex w-full p-2.5 transition duration-75 rounded-lg gap-3 group"
                                            :class="{
                                                'text-gray-900': isActive('/points'),
                                                'text-gray-500 hover:bg-gray-200 hover:text-gray-700': !isActive('/points'),
                                            }"
                                        >   
                                        <svg class="w-5 h-5  transition duration-75 dark:text-gray-400  dark:group-hover:text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" fill="currentColor">
                                            <path d="M353.8 54.1L330.2 6.3c-3.9-8.3-16.1-8.6-20.4 0L286.2 54.1l-52.3 7.5c-9.3 1.4-13.3 12.9-6.4 19.8l38 37-9 52.1c-1.4 9.3 8.2 16.5 16.8 12.2l46.9-24.8 46.6 24.4c8.6 4.3 18.3-2.9 16.8-12.2l-9-52.1 38-36.6c6.8-6.8 2.9-18.3-6.4-19.8l-52.3-7.5zM256 256c-17.7 0-32 14.3-32 32l0 192c0 17.7 14.3 32 32 32l128 0c17.7 0 32-14.3 32-32l0-192c0-17.7-14.3-32-32-32l-128 0zM32 320c-17.7 0-32 14.3-32 32L0 480c0 17.7 14.3 32 32 32l128 0c17.7 0 32-14.3 32-32l0-128c0-17.7-14.3-32-32-32L32 320zm416 96l0 64c0 17.7 14.3 32 32 32l128 0c17.7 0 32-14.3 32-32l0-64c0-17.7-14.3-32-32-32l-128 0c-17.7 0-32 14.3-32 32z"/>
                                        </svg>
                                        Points</Link>
                                    </li>
                                </ul>
                            </transition>
                        </li>
                        <li>
                            <Link
                                href="/college"
                                class="flex items-center p-2.5 rounded-lg group transition duration-75"
                                :class="{
                                    'bg-gray-900 dark:bg-gray-700 text-white dark:text-white': isActive('/college'),
                                    'text-gray-600 dark:text-white hover:bg-gray-100 hover:text-gray-900': !isActive('/college'),
                                }"
                            >

                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor"><path d="M243.4 2.6l-224 96c-14 6-21.8 21-18.7 35.8S16.8 160 32 160l0 8c0 13.3 10.7 24 24 24l400 0c13.3 0 24-10.7 24-24l0-8c15.2 0 28.3-10.7 31.3-25.6s-4.8-29.9-18.7-35.8l-224-96c-8-3.4-17.2-3.4-25.2 0zM128 224l-64 0 0 196.3c-.6 .3-1.2 .7-1.8 1.1l-48 32c-11.7 7.8-17 22.4-12.9 35.9S17.9 512 32 512l448 0c14.1 0 26.5-9.2 30.6-22.7s-1.1-28.1-12.9-35.9l-48-32c-.6-.4-1.2-.7-1.8-1.1L448 224l-64 0 0 192-40 0 0-192-64 0 0 192-48 0 0-192-64 0 0 192-40 0 0-192zM256 64a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"/></svg>
                                <span class="ms-3">College</span>
                            </Link>
                        </li>
                        <li>
                            <Link
                                href="/users"
                                class="flex items-center p-2.5 rounded-lg group transition duration-75"
                                :class="{
                                    'bg-gray-900 dark:bg-gray-700 text-white dark:text-white': isActive('/users'),
                                    'text-gray-600 dark:text-white hover:bg-gray-100 hover:text-gray-900': !isActive('/users'),
                                }"
                            >
                                <svg class="w-5 h-5  transition duration-75 dark:text-gray-400  dark:group-hover:text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" fill="currentColor">
                                    <path d="M96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM0 482.3C0 383.8 79.8 304 178.3 304l91.4 0C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7L29.7 512C13.3 512 0 498.7 0 482.3zM609.3 512l-137.8 0c5.4-9.4 8.6-20.3 8.6-32l0-8c0-60.7-27.1-115.2-69.8-151.8c2.4-.1 4.7-.2 7.1-.2l61.4 0C567.8 320 640 392.2 640 481.3c0 17-13.8 30.7-30.7 30.7zM432 256c-31 0-59-12.6-79.3-32.9C372.4 196.5 384 163.6 384 128c0-26.8-6.6-52.1-18.3-74.3C384.3 40.1 407.2 32 432 32c61.9 0 112 50.1 112 112s-50.1 112-112 112z"/>
                                </svg>
                                <span class="ms-3">Account</span>
                            </Link>
                        </li>
                    </ul>
                </div>
            </aside>

            <!-- Main Content -->
            <div class="flex-1 p-4 overflow-y-auto ml-64 relative">
                <div class="animated-background">
                    <div class="blob"></div>
                    <div class="blob"></div>
                    <div class="blob"></div>
                    <div class="small-blob top-left"></div>
                    <div class="small-blob top-right"></div>
                    <div class="small-blob bottom-left"></div>
                    <div class="small-blob bottom-right"></div>
                    <div class="blur"></div>
                </div>
                <div class="relative z-10">
                    <slot />
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { Link, usePage } from '@inertiajs/vue3';
import { ref, computed,watch } from 'vue';

const page = usePage();
const isActive = (path) => {
    return page.url.startsWith(path);
};

const isActiveTournament = computed(() => {
    return isActive('/palakasan') || isActive('/venue') || isActive('/sports') || isActive('/points');
});

const isTournamentDropdownOpen = ref(false);

const toggleTournamentDropdown = () => {
    if (!isActiveTournament.value) {
        isTournamentDropdownOpen.value = !isTournamentDropdownOpen.value;
    }
};
// Watch for changes in the route
watch(() => page.url, (newUrl) => {
    if (!isActiveTournament.value) {
        isTournamentDropdownOpen.value = false;
    }
}, { immediate: true });


</script>

<style scoped>
.animated-background {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    overflow: hidden;
    display: flex;
    justify-content: center;
    align-items: center;
}


.blur {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    backdrop-filter: blur(80px);
}

@keyframes moveCenter {
    0%, 100% {
        transform: translate(0, 0) scale(1);
    }
    50% {
        transform: translate(50px, 50px) scale(1.1);
    }
}

@keyframes moveAround {
    0% {
        transform: translate(-50%, -50%) rotate(0deg);
    }
    25% {
        transform: translate(50%, -50%) rotate(90deg);
    }
    50% {
        transform: translate(50%, 50%) rotate(180deg);
    }
    75% {
        transform: translate(-50%, 50%) rotate(270deg);
    }
    100% {
        transform: translate(-50%, -50%) rotate(360deg);
    }
}.animated-background {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    overflow: hidden;
}
.blob {
    position: absolute;
    border-radius: 50%;
    filter: blur(60px);
}

.blob:nth-child(1) {
    width: 600px;
    height: 600px;
    background: rgba(255, 107, 174, 0.3);
    animation: moveBlob1 30s infinite;
}

.blob:nth-child(2) {
    width: 400px;
    height: 400px;
    background: rgba(255, 0, 85, 0.3);
    animation: moveBlob2 20s infinite;
}

.blob:nth-child(3) {
    width: 300px;
    height: 300px;
    background: rgba(255, 54, 54, 0.3);
    animation: moveBlob3 10s infinite;
}

.small-blob {
    position: absolute;
    width: 150px;
    height: 150px;
    border-radius: 50%;
    filter: blur(40px);
    animation: moveSmallBlob 10s infinite;
}

@keyframes moveBlob1 {
    0%, 100% { transform: translate(0, 0) scale(1); }
    25% { transform: translate(50%, -30%) scale(1.1); }
    50% { transform: translate(-20%, 40%) scale(0.9); }
    75% { transform: translate(30%, 20%) scale(1.05); }
}

@keyframes moveBlob2 {
    0%, 100% { transform: translate(0, 0) rotate(0deg); }
    25% { transform: translate(-40%, 30%) rotate(120deg); }
    50% { transform: translate(30%, -40%) rotate(240deg); }
    75% { transform: translate(10%, 50%) rotate(360deg); }
}

@keyframes moveBlob3 {
    0%, 100% { transform: translate(0, 0) scale(1) rotate(0deg); }
    25% { transform: translate(-30%, -40%) scale(1.2) rotate(-120deg); }
    50% { transform: translate(40%, 20%) scale(0.8) rotate(-240deg); }
    75% { transform: translate(20%, 40%) scale(1.1) rotate(-360deg); }
}

@keyframes moveSmallBlob {
    0%, 100% { transform: translate(0, 0) scale(1); }
    20% { transform: translate(70%, -60%) scale(1.1); }
    40% { transform: translate(-50%, 70%) scale(0.9); }
    60% { transform: translate(60%, 50%) scale(1.05); }
    80% { transform: translate(-70%, -40%) scale(0.95); }
}

.small-blob.top-left {
    background: rgba(217, 0, 255, 1);
    top: 10%;
    left: 10%;
}

.small-blob.top-right {
    background: rgba(138, 43, 226, 1);
    top: 10%;
    right: 10%;
    animation-delay: 5s;
}

.small-blob.bottom-left {
    background: rgba(157, 0, 255, 1);
    bottom: 10%;
    left: 10%;
    animation-delay: 10s;
}

.small-blob.bottom-right {
    background: rgba(255, 105, 180, 1);
    bottom: 10%;
    right: 10%;
    animation-delay: 15s;
}
.blur {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    backdrop-filter: blur(100px);
}

@keyframes move {
    0% {
        transform: translate(0, 0) scale(2);
    }
    100% {
        transform: translate(100px, 50px) scale(2);
    }
}

@keyframes moveSmall {
    0% {
        transform: translate(0, 0) scale(2);
    }
    100% {
        transform: translate(50px, 25px) scale(2);
    }
}
</style>

