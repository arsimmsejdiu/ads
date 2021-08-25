<?php
include('./components/head.php')
?>

<header class="sticky top-0 z-50 grid grid-cols-3 bg-white shadow-md p-5 md:px-10">

    <div class="relative flex items-center h-10 cursor-pointer my-auto">
        <a href="index.php"><img src="assets/images/logo.png" alt="logo" /></a>
    </div>

    <div class="flex items-center md:border-2 rounded-full py-2  md:shadow-sm">
        <input class="flex-grow pl-5 bg-transparent outline-none text-gray-400 placeholder-gray-400" type="text" placeholder="Start your search" />
        <!-- <img class="hidden md:inline-flex h-8 bg-red-400 text-white rounded-full p-2 cursor-pointer md:mx-2" src="assets/images/search.png" alt="logo" /> -->
        <div class="hidden md:inline-flex items-center h-8 bg-red-400 text-white rounded-full p-2 cursor-pointer md:mx-2">
            <i class="ri-search-eye-line"></i>
        </div>

    </div>

    <div class="flex space-x-1 items-center justify-end text-gray-500 hover:text-gray-400 cursor-pointer">
        <p className="hidden sm:hidden md:inline cursor-pointer font-bold">Favorites <i class="ri-heart-line"></i></p>
        <div class="py-2 bg-gray-50 text-right sm:px-6">
            <a href="dashboard/MySpace.php"><button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    My Dashboard
                </button>
            </a>
        </div>
        <div class="flex items-center border-2 rounded-full px-4 py-3 text-white bg-green-600 hover:bg-green-500">
            <!-- <i class="ri-menu-2-line h-6 cursor-pointer"></i> -->
            <a href="signin.php"><i class="ri-user-line h-6 cursor-pointer"></i></a>
        </div>
    </div>

</header>