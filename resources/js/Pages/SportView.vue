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
                        <h1 class="text-3xl font-extrabold text-gray-900">Basketball</h1>

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
                                    <p class="text-gray-800 text-md font-semibold">Men's Basketball</p>
                                    <p class="text-gray-800 text-md font-bold">-</p>
                                    <p class="text-gray-800 text-md font-bold">Double Elimination</p>
                                </div>
                                <div >
                                    <!-- Add the progress bar here -->
                                    <div class="w-full bg-gray-200 rounded-full h-2.5 mt-1.5">
                                        <div class="bg-gray-900 h-2.5 rounded-full" style="width: 10%"></div>
                                    </div>
                                    <p class="text-xs text-gray-600 mt-0.5">Sport Progress: 10%</p>
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
                    <div class=" col-span-5 grid grid-cols-5 gap-3">
                        <div class="col-span-2 bg-white rounded-xl p-5 shadow-md">
                            <div>
                                <div class="flex justify-between items-center">
                                    <h1 class="text-gray-800 text-md font-bold">Matches</h1>
                                    <div class="flex items-center">
                                        <button class="group relative items-center text-gray-500 px-2.5 py-1.5 rounded-lg text-sm font-semibold overflow-hidden transition-all duration-300 hover:pr-[6.4rem] hover:text-gray-900  hover:border-gray-900">
                                            <i class="fa-solid fa-calendar-plus text-lg"></i>                                        
                                            <span class="absolute text-sm right-0 top-1/2 transform -translate-y-1/2 opacity-0 group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap pr-2.5">
                                                Set Schedule
                                            </span>
                                        </button>
                                        <button class="group relative items-center text-gray-500 px-2.5 py-1.5 rounded-lg text-sm font-semibold hover:text-gray-900 hover:border-gray-900">
                                            <i class="fa-solid fa-bars text-lg"></i>                                        
                                        </button>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <div class="flex flex-col gap-2">
                                        <div class="grid grid-cols-3 items-center p-3 bg-gray-50 rounded-xl">
                                            <div class="text-end">
                                                <p class="text-gray-800 text-md font-semibold">Team 1</p>
                                                <p class="text-gray-800 text-md font-semibold"></p>
                                            </div>
                                            <div class="text-center">                                                
                                                <h1 class="text-gray-800 text-xs font-normal">Game 1</h1>
                                                <h1 class="text-gray-900 text-sm font-bold">VS</h1>
                                                <h1 class="text-gray-800 text-xs font-normal">Qualifier</h1>
                                            </div>
                                            <div class="text-start">
                                                <p class="text-gray-800 text-md font-semibold">Team 2</p>
                                                <p class="text-gray-800 text-md font-semibold"></p>
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-3 items-center p-3 bg-gray-50 rounded-xl">
                                            <div class="text-end">
                                                <p class="text-gray-800 text-md font-semibold">Team 4</p>
                                                <p class="text-gray-800 text-md font-semibold"></p>
                                            </div>
                                            <div class="text-center">                                                
                                                <h1 class="text-gray-800 text-xs font-normal">Game 2</h1>
                                                <h1 class="text-gray-900 text-sm font-bold">VS</h1>
                                                <h1 class="text-gray-800 text-xs font-normal">Qualifier</h1>
                                            </div>
                                            <div class="text-start">
                                                <p class="text-gray-800 text-md font-semibold">Team 3</p>
                                                <p class="text-gray-800 text-md font-semibold"></p>
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-3 items-center p-3 bg-gray-50 rounded-xl">
                                            <div class="text-end">
                                                <p class="text-gray-800 text-md font-semibold">Team 5</p>
                                                <p class="text-gray-800 text-md font-semibold"></p>
                                            </div>
                                            <div class="text-center">                                                
                                                <h1 class="text-gray-800 text-xs font-normal">Game 3</h1>
                                                <h1 class="text-gray-900 text-sm font-bold">VS</h1>
                                                <h1 class="text-gray-800 text-xs font-normal">Qualifier</h1>
                                            </div>
                                            <div class="text-start">
                                                <p class="text-gray-800 text-md font-semibold">Team 6</p>
                                                <p class="text-gray-800 text-md font-semibold"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-3 bg-white rounded-xl p-5 shadow-md">
                            <div class=" ">
                                <div class="flex justify-between items-center">
                                    <h1 class="text-gray-800 text-md font-bold">Match History</h1>
                                    <div class="flex items-center">
                                        <button class="group relative items-center text-gray-500 px-2.5 py-1.5 rounded-lg text-sm font-semibold hover:text-gray-900 hover:border-gray-900">
                                            <i class="fa-solid fa-bars text-lg"></i>                                        
                                        </button>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <div class="flex flex-col gap-2">
                                        <div class="grid grid-cols-5 items-center p-3 border-2 border-gray-200 rounded-xl">
                                            <div class="px-2">
                                                <span class="text-green-600 text-sm font-semibold py-3 px-4 bg-green-100 rounded-lg">
                                                    Win
                                                    <i class="fa-solid fa-medal ml-2"></i>
                                                </span>
                                            </div>
                                            <div class="text-end">
                                                <p class="text-gray-800 text-md font-semibold">Team 1</p>
                                                <p class="text-gray-800 text-md font-semibold"></p>
                                            </div>
                                            <div class="text-center">                                                
                                                <h1 class="text-gray-800 text-xs font-normal">Game 1</h1>
                                                <h1 class="text-gray-900 text-sm font-bold">VS</h1>
                                                <h1 class="text-gray-800 text-xs font-normal">Qualifier</h1>
                                            </div>
                                            <div class="text-start">
                                                <p class="text-gray-800 text-md font-semibold">Team 2</p>
                                                <p class="text-gray-800 text-md font-semibold"></p>
                                            </div>
                                            <div class="px-2 text-end">
                                                <span class="text-red-600 text-sm font-semibold py-3 px-4 bg-red-100 rounded-lg">
                                                    <i class="fa-solid fa-skull mr-2"></i>
                                                    Lose
                                                </span>
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-5 items-center p-3 border-2 border-gray-200 rounded-xl">
                                            <div class="px-2">
                                                <span class="text-green-600 text-sm font-semibold py-3 px-4 bg-green-100 rounded-lg">
                                                    Win
                                                    <i class="fa-solid fa-medal ml-2"></i>
                                                </span>
                                            </div>
                                            <div class="text-end">
                                                <p class="text-gray-800 text-md font-semibold">Team 1</p>
                                                <p class="text-gray-800 text-md font-semibold"></p>
                                            </div>
                                            <div class="text-center">                                                
                                                <h1 class="text-gray-800 text-xs font-normal">Game 1</h1>
                                                <h1 class="text-gray-900 text-sm font-bold">VS</h1>
                                                <h1 class="text-gray-800 text-xs font-normal">Qualifier</h1>
                                            </div>
                                            <div class="text-start">
                                                <p class="text-gray-800 text-md font-semibold">Team 2</p>
                                                <p class="text-gray-800 text-md font-semibold"></p>
                                            </div>
                                            <div class="px-2 text-end">
                                                <span class="text-red-600 text-sm font-semibold py-3 px-4 bg-red-100 rounded-lg">
                                                    <i class="fa-solid fa-skull mr-2"></i>
                                                    Lose
                                                </span>
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-5 items-center p-3 border-2 border-gray-200 rounded-xl">
                                            <div class="px-2">
                                                <span class="text-green-600 text-sm font-semibold py-3 px-4 bg-green-100 rounded-lg">
                                                    Win
                                                    <i class="fa-solid fa-medal ml-2"></i>
                                                </span>
                                            </div>
                                            <div class="text-end">
                                                <p class="text-gray-800 text-md font-semibold">Team 1</p>
                                                <p class="text-gray-800 text-md font-semibold"></p>
                                            </div>
                                            <div class="text-center">                                                
                                                <h1 class="text-gray-800 text-xs font-normal">Game 1</h1>
                                                <h1 class="text-gray-900 text-sm font-bold">VS</h1>
                                                <h1 class="text-gray-800 text-xs font-normal">Qualifier</h1>
                                            </div>
                                            <div class="text-start">
                                                <p class="text-gray-800 text-md font-semibold">Team 2</p>
                                                <p class="text-gray-800 text-md font-semibold"></p>
                                            </div>
                                            <div class="px-2 text-end">
                                                <span class="text-red-600 text-sm font-semibold py-3 px-4 bg-red-100 rounded-lg">
                                                    <i class="fa-solid fa-skull mr-2"></i>
                                                    Lose
                                                </span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-span-5 bg-white rounded-xl p-5 shadow-md flex">
                            <div class="overflow-hidden overflow-x-auto">
                                <h1 class="text-gray-800 text-md font-bold">Bracket</h1>
                                <h1 class="text-gray-600 text-xs font-medium">Double Elimination</h1>
                                <div class="mt-2 ">
                                    <h1 class="text-gray-800 text-sm px-3 font-bold">Upper Bracket</h1>
                                    <div class="flex gap-3">
                                        <div class="flex flex-col items-center justify-center">
                                            <div class="p-3 w-56">
                                                <div class="flex justify-between items-center mb-1">
                                                    <h2 class="text-gray-900 text-sm font-bold">Qualifier</h2>
                                                    <p class="text-green-800 text-xs font-normal">Status: Finished</p>
                                                </div>
                                                <div class="bg-white rounded-lg overflow-hidden border-2 border-gray-200">
                                                    <div class="flex justify-between items-center p-1.5 border-b text-xs border-gray-300">
                                                        <p class="text-gray-800 font-medium">Fenris</p>
                                                        <span class="bg-red-100 text-red-800 font-semibold px-3 py-1.5 rounded-lg w-12">0</span>
                                                    </div>
                                                    <div class="flex justify-between items-center text-xs p-1.5">
                                                        <p class="text-gray-800 font-medium">Griffins</p>
                                                        <span class="bg-green-100 text-green-800 font-semibold px-3 py-1.5 rounded-lg w-12">100</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-3 w-56">
                                                <div class="flex justify-between items-center mb-1">
                                                    <h2 class="text-gray-900 text-sm font-bold">Qualifier</h2>
                                                    <p class="text-red-800 text-xs font-normal">Status: Live</p>
                                                </div>
                                                <div class="bg-white rounded-lg overflow-hidden border-2 border-gray-200">
                                                    <div class="flex justify-between items-center p-1.5 border-b text-xs border-gray-300">
                                                        <p class="text-gray-800 font-medium">Krakens</p>
                                                        <span class="bg-gray-100 text-gray-800 font-semibold px-3 py-1.5 rounded-lg w-12">-</span>
                                                    </div>
                                                    <div class="flex justify-between items-center text-xs p-1.5">
                                                        <p class="text-gray-800 font-medium">Raptors x Griffins</p>
                                                        <span class="bg-gray-100 text-gray-800 font-semibold px-3 py-1.5 rounded-lg w-12">-</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-3 w-56">
                                                <div class="flex justify-between items-center mb-1">
                                                    <h2 class="text-gray-900 text-sm font-bold">Qualifier</h2>
                                                    <p class="text-yellow-500 text-xs font-normal">Status: Pending</p>
                                                </div>
                                                <div class="bg-white rounded-lg overflow-hidden border-2 border-gray-200">
                                                    <div class="flex justify-between items-center p-1.5 border-b text-xs border-gray-300">
                                                        <p class="text-gray-800 font-medium">Centaurs</p>
                                                        <span class="bg-gray-100 text-gray-800 font-semibold px-3 py-1.5 rounded-lg w-12">0</span>
                                                    </div>
                                                    <div class="flex justify-between items-center text-xs p-1.5">
                                                        <p class="text-gray-800 font-medium">BYE</p>
                                                        <span class="bg-gray-100 text-gray-800 font-semibold px-3 py-1.5 rounded-lg w-12">0</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>  
                                        <div class="flex flex-col items-center justify-center">
                                            <div class="p-3 w-56">
                                                <div class="flex justify-between items-center mb-1">
                                                    <h2 class="text-gray-900 text-sm font-bold">Qualifier</h2>
                                                    <p class="text-yellow-500 text-xs font-normal">Status: Pending</p>
                                                </div>
                                                <div class="bg-white rounded-lg overflow-hidden border-2 border-gray-200">
                                                    <div class="flex justify-between items-center p-1.5 border-b text-xs border-gray-300">
                                                        <p class="text-gray-800 font-medium">--</p>
                                                        <span class="bg-gray-100 text-gray-800 font-semibold px-3 py-1.5 rounded-lg w-12">0</span>
                                                    </div>
                                                    <div class="flex justify-between items-center text-xs p-1.5">
                                                        <p class="text-gray-800 font-medium">--</p>
                                                        <span class="bg-gray-100 text-gray-800 font-semibold px-3 py-1.5 rounded-lg w-12">0</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-3 w-56">
                                                <div class="flex justify-between items-center mb-1">
                                                    <h2 class="text-gray-900 text-sm font-bold">Qualifier</h2>
                                                    <p class="text-yellow-500 text-xs font-normal">Status: Pending</p>
                                                </div>
                                                <div class="bg-white rounded-lg overflow-hidden border-2 border-gray-200">
                                                    <div class="flex justify-between items-center p-1.5 border-b text-xs border-gray-300">
                                                        <p class="text-gray-800 font-medium">--</p>
                                                        <span class="bg-gray-100 text-gray-800 font-semibold px-3 py-1.5 rounded-lg w-12">0</span>
                                                    </div>
                                                    <div class="flex justify-between items-center text-xs p-1.5">
                                                        <p class="text-gray-800 font-medium">Centaurs</p>
                                                        <span class="bg-gray-100 text-gray-800 font-semibold px-3 py-1.5 rounded-lg w-12">0</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>  
                                        <div class="flex flex-col items-center justify-center">
                                            <div class="p-3 w-56">
                                                <div class="flex justify-between items-center mb-1">
                                                    <h2 class="text-gray-900 text-sm font-bold">Semi Final</h2>
                                                    <p class="text-yellow-500 text-xs font-normal">Status: Pending</p>
                                                </div>
                                                <div class="bg-white rounded-lg overflow-hidden border-2 border-gray-200">
                                                    <div class="flex justify-between items-center p-1.5 border-b text-xs border-gray-300">
                                                        <p class="text-gray-800 font-medium">--</p>
                                                        <span class="bg-gray-100 text-gray-800 font-semibold px-3 py-1.5 rounded-lg w-12">0</span>
                                                    </div>
                                                    <div class="flex justify-between items-center text-xs p-1.5">
                                                        <p class="text-gray-800 font-medium">--</p>
                                                        <span class="bg-gray-100 text-gray-800 font-semibold px-3 py-1.5 rounded-lg w-12">0</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>  
                                        <div class="flex flex-col items-center justify-center">
                                            <div class="p-3 w-56">
                                                <div class="flex justify-between items-center mb-1">
                                                    <h2 class="text-gray-900 text-sm font-bold">Championship</h2>
                                                    <p class="text-yellow-500 text-xs font-normal">Status: Pending</p>
                                                </div>
                                                <div class="bg-white rounded-lg overflow-hidden border-2 border-gray-200">
                                                    <div class="flex justify-between items-center p-1.5 border-b text-xs border-gray-300">
                                                        <p class="text-gray-800 font-medium">--</p>
                                                        <span class="bg-gray-100 text-gray-800 font-semibold px-3 py-1.5 rounded-lg w-12">0</span>
                                                    </div>
                                                    <div class="flex justify-between items-center text-xs p-1.5">
                                                        <p class="text-gray-800 font-medium">--</p>
                                                        <span class="bg-gray-100 text-gray-800 font-semibold px-3 py-1.5 rounded-lg w-12">0</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>  
                                    </div>
                                </div>
                                <div class="mt-2">
                                    <h1 class="text-gray-800 text-sm px-3 font-bold">Lower Bracket</h1>
                                    <div class="flex gap-3">
                                        <div class="flex flex-col items-center justify-center">

                                            <div class="p-3 w-56">
                                                <div class="flex justify-between items-center mb-1">
                                                    <h2 class="text-gray-900 text-sm font-bold">Qualifier</h2>
                                                    <p class="text-yellow-500 text-xs font-normal">Status: Pending</p>
                                                </div>
                                                <div class="bg-white rounded-lg overflow-hidden border-2 border-gray-200">
                                                    <div class="flex justify-between items-center p-1.5 border-b text-xs border-gray-300">
                                                        <p class="text-gray-800 font-medium">Centaurs</p>
                                                        <span class="bg-gray-100 text-gray-800 font-semibold px-3 py-1.5 rounded-lg w-12">0</span>
                                                    </div>
                                                    <div class="flex justify-between items-center text-xs p-1.5">
                                                        <p class="text-gray-800 font-medium">BYE</p>
                                                        <span class="bg-gray-100 text-gray-800 font-semibold px-3 py-1.5 rounded-lg w-12">0</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>  
                                        <div class="flex flex-col items-center justify-center">
                                            <div class="p-3 w-56">
                                                <div class="flex justify-between items-center mb-1">
                                                    <h2 class="text-gray-900 text-sm font-bold">Qualifier</h2>
                                                    <p class="text-yellow-500 text-xs font-normal">Status: Pending</p>
                                                </div>
                                                <div class="bg-white rounded-lg overflow-hidden border-2 border-gray-200">
                                                    <div class="flex justify-between items-center p-1.5 border-b text-xs border-gray-300">
                                                        <p class="text-gray-800 font-medium">--</p>
                                                        <span class="bg-gray-100 text-gray-800 font-semibold px-3 py-1.5 rounded-lg w-12">0</span>
                                                    </div>
                                                    <div class="flex justify-between items-center text-xs p-1.5">
                                                        <p class="text-gray-800 font-medium">Centaurs</p>
                                                        <span class="bg-gray-100 text-gray-800 font-semibold px-3 py-1.5 rounded-lg w-12">0</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>  
                                        <div class="flex flex-col items-center justify-center">
                                            <div class="p-3 w-56">
                                                <div class="flex justify-between items-center mb-1">
                                                    <h2 class="text-gray-900 text-sm font-bold">Championship</h2>
                                                    <p class="text-yellow-500 text-xs font-normal">Status: Pending</p>
                                                </div>
                                                <div class="bg-white rounded-lg overflow-hidden border-2 border-gray-200">
                                                    <div class="flex justify-between items-center p-1.5 border-b text-xs border-gray-300">
                                                        <p class="text-gray-800 font-medium">--</p>
                                                        <span class="bg-gray-100 text-gray-800 font-semibold px-3 py-1.5 rounded-lg w-12">0</span>
                                                    </div>
                                                    <div class="flex justify-between items-center text-xs p-1.5">
                                                        <p class="text-gray-800 font-medium">--</p>
                                                        <span class="bg-gray-100 text-gray-800 font-semibold px-3 py-1.5 rounded-lg w-12">0</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>  
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-span-5">
                            <div class=" bg-white rounded-xl p-5 shadow-md">
                                <h1 class="text-gray-800 text-md font-bold">Team Standings</h1>
                            
                                <div class="relative overflow-x-auto mt-3">
                                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                            <tr>
                                                <th scope="col" class="px-6 py-3">
                                                    Rank
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    Teams
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    Matches
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    Points
                                                </th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    1st
                                                </th>
                                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    Fenris - Tartaros
                                                </th>
                                                <td class="px-6 py-2">
                                                    <div class="flex gap-2">
                                                        <div class="py-2 px-2.5 bg-green-100 rounded-lg">
                                                            <i class="fa-solid fa-medal text-green-500 text-sm"></i>
                                                        </div>
                                                        <div class="py-2 px-2.5 bg-green-100 rounded-lg">
                                                            <i class="fa-solid fa-medal text-green-500 text-sm"></i>
                                                        </div>
                                                        <div class="py-2 px-2.5 bg-green-100 rounded-lg">
                                                            <i class="fa-solid fa-medal text-green-500 text-sm"></i>
                                                        </div>
                                                        <div class="py-2 px-2.5 bg-red-100 rounded-lg">
                                                            <i class="fa-solid fa-skull text-red-500 text-sm"></i>
                                                        </div>
                                                        <div class="py-2 px-2.5 bg-red-100 rounded-lg">
                                                            <i class="fa-solid fa-skull text-red-500 text-sm"></i>
                                                        </div>
                                                        <div class="py-2 px-2.5 bg-gray-100 rounded-lg">
                                                            <i class="fa-solid fa-clock text-gray-500 text-sm"></i>
                                                        </div>
                                                        <div class="py-2 px-2.5 bg-gray-100 rounded-lg">
                                                            <i class="fa-solid fa-clock text-gray-500 text-sm"></i>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    45 Points
                                                </td>
                                            </tr>
                                            <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    2nd
                                                </th>
                                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    Krakens - Lamia Scale
                                                </th>
                                                <td class="px-6 py-2">
                                                    <div class="flex gap-2">
                                                        <div class="py-2 px-2.5 bg-green-100 rounded-lg">
                                                            <i class="fa-solid fa-medal text-green-500 text-sm"></i>
                                                        </div>
                                                        <div class="py-2 px-2.5 bg-gray-100 rounded-lg">
                                                            <i class="fa-solid fa-clock text-gray-500 text-sm"></i>
                                                        </div>
                                                        <div class="py-2 px-2.5 bg-gray-100 rounded-lg">
                                                            <i class="fa-solid fa-clock text-gray-500 text-sm"></i>
                                                        </div>
                                                        <div class="py-2 px-2.5 bg-gray-100 rounded-lg">
                                                            <i class="fa-solid fa-clock text-gray-500 text-sm"></i>
                                                        </div>
                                                        <div class="py-2 px-2.5 bg-gray-100 rounded-lg">
                                                            <i class="fa-solid fa-clock text-gray-500 text-sm"></i>
                                                        </div>
                                                        <div class="py-2 px-2.5 bg-gray-100 rounded-lg">
                                                            <i class="fa-solid fa-clock text-gray-500 text-sm"></i>
                                                        </div>
                                                        <div class="py-2 px-2.5 bg-gray-100 rounded-lg">
                                                            <i class="fa-solid fa-clock text-gray-500 text-sm"></i>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    40 Points
                                                </td>
                                            </tr>
                                            <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    3rd
                                                </th>
                                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    Centaurs - Fairytail
                                                </th>
                                                <td class="px-6 py-2">
                                                    <div class="flex gap-2">
                                                        <div class="py-2 px-2.5 bg-gray-100 rounded-lg">
                                                            <i class="fa-solid fa-clock text-gray-500 text-sm"></i>
                                                        </div>
                                                        <div class="py-2 px-2.5 bg-gray-100 rounded-lg">
                                                            <i class="fa-solid fa-clock text-gray-500 text-sm"></i>
                                                        </div>
                                                        <div class="py-2 px-2.5 bg-gray-100 rounded-lg">
                                                            <i class="fa-solid fa-clock text-gray-500 text-sm"></i>
                                                        </div>
                                                        <div class="py-2 px-2.5 bg-gray-100 rounded-lg">
                                                            <i class="fa-solid fa-clock text-gray-500 text-sm"></i>
                                                        </div>
                                                        <div class="py-2 px-2.5 bg-gray-100 rounded-lg">
                                                            <i class="fa-solid fa-clock text-gray-500 text-sm"></i>
                                                        </div>
                                                        <div class="py-2 px-2.5 bg-gray-100 rounded-lg">
                                                            <i class="fa-solid fa-clock text-gray-500 text-sm"></i>
                                                        </div>
                                                        <div class="py-2 px-2.5 bg-gray-100 rounded-lg">
                                                            <i class="fa-solid fa-clock text-gray-500 text-sm"></i>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    35 Points
                                                </td>
                                            </tr>
                                            <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    4th
                                                </th>
                                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    Griffins - Lamia Scale
                                                </th>
                                                <td class="px-6 py-2">
                                                    <div class="flex gap-2">
                                                        <div class="py-2 px-2.5 bg-gray-100 rounded-lg">
                                                            <i class="fa-solid fa-clock text-gray-500 text-sm"></i>
                                                        </div>
                                                        <div class="py-2 px-2.5 bg-gray-100 rounded-lg">
                                                            <i class="fa-solid fa-clock text-gray-500 text-sm"></i>
                                                        </div>
                                                        <div class="py-2 px-2.5 bg-gray-100 rounded-lg">
                                                            <i class="fa-solid fa-clock text-gray-500 text-sm"></i>
                                                        </div>
                                                        <div class="py-2 px-2.5 bg-gray-100 rounded-lg">
                                                            <i class="fa-solid fa-clock text-gray-500 text-sm"></i>
                                                        </div>
                                                        <div class="py-2 px-2.5 bg-gray-100 rounded-lg">
                                                            <i class="fa-solid fa-clock text-gray-500 text-sm"></i>
                                                        </div>
                                                        <div class="py-2 px-2.5 bg-gray-100 rounded-lg">
                                                            <i class="fa-solid fa-clock text-gray-500 text-sm"></i>
                                                        </div>
                                                        <div class="py-2 px-2.5 bg-gray-100 rounded-lg">
                                                            <i class="fa-solid fa-clock text-gray-500 text-sm"></i>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    30 Points
                                                </td>
                                            </tr>
                                            <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    5th
                                                </th>
                                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    Raptors x Phoenix - Lamia Scale
                                                </th>
                                                <td class="px-6 py-2">
                                                    <div class="flex gap-2">
                                                        <div class="py-2 px-2.5 bg-gray-100 rounded-lg">
                                                            <i class="fa-solid fa-clock text-gray-500 text-sm"></i>
                                                        </div>
                                                        <div class="py-2 px-2.5 bg-gray-100 rounded-lg">
                                                            <i class="fa-solid fa-clock text-gray-500 text-sm"></i>
                                                        </div>
                                                        <div class="py-2 px-2.5 bg-gray-100 rounded-lg">
                                                            <i class="fa-solid fa-clock text-gray-500 text-sm"></i>
                                                        </div>
                                                        <div class="py-2 px-2.5 bg-gray-100 rounded-lg">
                                                            <i class="fa-solid fa-clock text-gray-500 text-sm"></i>
                                                        </div>
                                                        <div class="py-2 px-2.5 bg-gray-100 rounded-lg">
                                                            <i class="fa-solid fa-clock text-gray-500 text-sm"></i>
                                                        </div>
                                                        <div class="py-2 px-2.5 bg-gray-100 rounded-lg">
                                                            <i class="fa-solid fa-clock text-gray-500 text-sm"></i>
                                                        </div>
                                                        <div class="py-2 px-2.5 bg-gray-100 rounded-lg">
                                                            <i class="fa-solid fa-clock text-gray-500 text-sm"></i>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    25 Points
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
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
const statusFilter = ref('');
const isDropdownOpen = ref(false);

const eventTypeFilter = reactive({
  all: true,
  major: false,
  minor: false
});

const selectedEventType = ref('all');

const toggleDropdown = () => {
  isDropdownOpen.value = !isDropdownOpen.value;
};

const updateFilters = (filter) => {
  Object.keys(eventTypeFilter).forEach(key => {
    eventTypeFilter[key] = key === filter;
  });
  selectedEventType.value = filter;
};

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




</script>


