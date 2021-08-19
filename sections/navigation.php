<?php
include('./components/head.php')
?>

<header class="sticky top-0 z-50 grid grid-cols-3 bg-white shadow-md p-5 md:px-10">

    <div class="relative flex items-center h-10 cursor-pointer my-auto">
        <img src="assets/images/logo.png" alt="logo" />
    </div>

    <div class="flex items-center md:border-2 rounded-full py-2  md:shadow-sm">
        <input class="flex-grow pl-5 bg-transparent outline-none text-gray-400 placeholder-gray-400" type="text" placeholder="Start your search" />
        <!-- <img class="hidden md:inline-flex h-8 bg-red-400 text-white rounded-full p-2 cursor-pointer md:mx-2" src="assets/images/search.png" alt="logo" /> -->
        <div class="hidden md:inline-flex items-center h-8 bg-red-400 text-white rounded-full p-2 cursor-pointer md:mx-2">
            <i class="ri-search-eye-line"></i>
        </div>

    </div>

    <div class="flex space-x-4 items-center justify-end text-gray-500">
        <p className="hidden md:inline cursor-pointer">Hello, Arsim</p>
        <div class=" flex items-center border-2 rounded-full space-x-2 p-2">
            <a href="dashboard/MySpace.php"><i class="ri-menu-2-line h-6 cursor-pointer"></i></a>
            <i class="ri-user-line h-6 cursor-pointer"></i>
        </div>
    </div>

</header>