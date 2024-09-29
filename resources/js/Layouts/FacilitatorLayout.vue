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
                                href="/facilitator"
                                class="flex items-center p-2.5 rounded-lg group transition duration-75"
                                :class="{
                                    'bg-gray-900 dark:bg-gray-700 text-white dark:text-white': isActive('/facilitator'),
                                    'text-gray-600 dark:text-white hover:bg-gray-100 hover:text-gray-900': !isActive('/facilitator'),
                                }"
                            >
                                <svg class="w-5 h-5  transition duration-75 dark:text-gray-400  dark:group-hover:text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" fill="currentColor">
                                    <path d="M160 80c0-26.5 21.5-48 48-48l32 0c26.5 0 48 21.5 48 48l0 352c0 26.5-21.5 48-48 48l-32 0c-26.5 0-48-21.5-48-48l0-352zM0 272c0-26.5 21.5-48 48-48l32 0c26.5 0 48 21.5 48 48l0 160c0 26.5-21.5 48-48 48l-32 0c-26.5 0-48-21.5-48-48L0 272zM368 96l32 0c26.5 0 48 21.5 48 48l0 288c0 26.5-21.5 48-48 48l-32 0c-26.5 0-48-21.5-48-48l0-288c0-26.5 21.5-48 48-48z"/>
                                </svg>
                                <span class="ms-3">Dashboard</span>
                            </Link>
                        </li>


                        <li>
                            <Link
                                href="/games"
                                class="flex items-center p-2.5 rounded-lg group transition duration-75"
                                :class="{
                                    'bg-gray-900 dark:bg-gray-700 text-white dark:text-white': isActive('/games'),
                                    'text-gray-600 dark:text-white hover:bg-gray-100 hover:text-gray-900': !isActive('/games'),
                                }"
                            >

                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor"><path d="M86.6 64l85.2 85.2C194.5 121.7 208 86.4 208 48c0-14.7-2-28.9-5.7-42.4C158.6 15 119 35.5 86.6 64zM64 86.6C35.5 119 15 158.6 5.6 202.3C19.1 206 33.3 208 48 208c38.4 0 73.7-13.5 101.3-36.1L64 86.6zM256 0c-7.3 0-14.6 .3-21.8 .9C238 16 240 31.8 240 48c0 47.3-17.1 90.5-45.4 124L256 233.4 425.4 64C380.2 24.2 320.9 0 256 0zM48 240c-16.2 0-32-2-47.1-5.8C.3 241.4 0 248.7 0 256c0 64.9 24.2 124.2 64 169.4L233.4 256 172 194.6C138.5 222.9 95.3 240 48 240zm463.1 37.8c.6-7.2 .9-14.5 .9-21.8c0-64.9-24.2-124.2-64-169.4L278.6 256 340 317.4c33.4-28.3 76.7-45.4 124-45.4c16.2 0 32 2 47.1 5.8zm-4.7 31.9C492.9 306 478.7 304 464 304c-38.4 0-73.7 13.5-101.3 36.1L448 425.4c28.5-32.3 49.1-71.9 58.4-115.7zM340.1 362.7C317.5 390.3 304 425.6 304 464c0 14.7 2 28.9 5.7 42.4C353.4 497 393 476.5 425.4 448l-85.2-85.2zM317.4 340L256 278.6 86.6 448c45.1 39.8 104.4 64 169.4 64c7.3 0 14.6-.3 21.8-.9C274 496 272 480.2 272 464c0-47.3 17.1-90.5 45.4-124z"/></svg>
                                <span class="ms-3">Sports</span>
                            </Link>
                        </li>
                        <li>
                            <Link
                                href="/players"
                                class="flex items-center p-2.5 rounded-lg group transition duration-75"
                                :class="{
                                    'bg-gray-900 dark:bg-gray-700 text-white dark:text-white': isActive('/players'),
                                    'text-gray-600 dark:text-white hover:bg-gray-100 hover:text-gray-900': !isActive('/players'),
                                }"
                            >

                                <svg class="w-5 h-5"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" fill="currentColor"><path d="M96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM0 482.3C0 383.8 79.8 304 178.3 304l91.4 0C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7L29.7 512C13.3 512 0 498.7 0 482.3zM609.3 512l-137.8 0c5.4-9.4 8.6-20.3 8.6-32l0-8c0-60.7-27.1-115.2-69.8-151.8c2.4-.1 4.7-.2 7.1-.2l61.4 0C567.8 320 640 392.2 640 481.3c0 17-13.8 30.7-30.7 30.7zM432 256c-31 0-59-12.6-79.3-32.9C372.4 196.5 384 163.6 384 128c0-26.8-6.6-52.1-18.3-74.3C384.3 40.1 407.2 32 432 32c61.9 0 112 50.1 112 112s-50.1 112-112 112z"/></svg>
                                <span class="ms-3">Players</span>
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


const isTournamentDropdownOpen = ref(false);


const isActiveTournament = ref(false); // Define the variable
// Example: Watch a reactive property
watch(isActiveTournament, (newValue) => {
  console.log('Active tournament state changed:', newValue);
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

