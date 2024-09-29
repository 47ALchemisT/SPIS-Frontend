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
                            <Link
                                href="/college"
                                class="flex items-center p-2.5 rounded-lg group transition duration-75"
                                :class="{
                                    'bg-gray-900 dark:bg-gray-700 text-white dark:text-white': isActive('/college'),
                                    'text-gray-600 dark:text-white hover:bg-gray-100 hover:text-gray-900': !isActive('/college'),
                                }"
                            >

                                <svg class="w-5 h-5"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" fill="currentColor"><path d="M96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM0 482.3C0 383.8 79.8 304 178.3 304l91.4 0C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7L29.7 512C13.3 512 0 498.7 0 482.3zM609.3 512l-137.8 0c5.4-9.4 8.6-20.3 8.6-32l0-8c0-60.7-27.1-115.2-69.8-151.8c2.4-.1 4.7-.2 7.1-.2l61.4 0C567.8 320 640 392.2 640 481.3c0 17-13.8 30.7-30.7 30.7zM432 256c-31 0-59-12.6-79.3-32.9C372.4 196.5 384 163.6 384 128c0-26.8-6.6-52.1-18.3-74.3C384.3 40.1 407.2 32 432 32c61.9 0 112 50.1 112 112s-50.1 112-112 112z"/></svg>
                                <span class="ms-3">Participants</span>
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

