<?php
include('./components/head.php')
?>
<?php
include('./components/headDash.php')
?>

<body>
    <?php
    include('./sections/navigation.php')
    ?>

    <div class="bg-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-2xl mx-auto py-16 sm:py-24 lg:py-32 lg:max-w-none">
                <h2 class="text-2xl font-extrabold text-gray-900">Category: Business</h2>

                <div class="mt-6 space-y-12 lg:space-y-0 lg:grid lg:grid-cols-4 lg:gap-x-6">
                    <div class="group relative py-10">
                        <div class="relative w-full h-80 bg-white rounded-lg overflow-hidden group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-1 sm:h-64 lg:aspect-w-1 lg:aspect-h-1">
                            <img src="https://tailwindui.com/img/ecommerce-images/home-page-02-edition-01.jpg" alt="Desk with leather desk pad, walnut desk organizer, wireless keyboard and mouse, and porcelain mug." class="w-full h-full object-center object-cover">
                        </div>
                        <h3 class="mt-6 text-sm text-gray-500">
                            <a href="single.php">
                                <span class="absolute inset-0"></span>
                                Desk and Office
                            </a>
                        </h3>
                        <p class="text-base font-semibold text-gray-900">Work from home accessories</p>
                        <div class="flex items-center justify-between mt-4">
                            <div class="flex items-center"><img src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=731&amp;q=80" alt="avatar" class="object-cover w-8 h-8 rounded-full"><a href="#" class="mx-3 text-sm text-gray-700 hover:underline">Alex John</a></div><span class="text-sm font-light text-gray-600">Jun 1, 2020</span>
                        </div>
                        <!-- <div class="flex justify-between md:space-x-20 space-y-10 md:space-y-0 mt-5">
                            <button class="bg-red-300 px-5 py-3 text-sm shadow-sm font-medium tracking-wider  text-red-600 rounded-full hover:shadow-2xl hover:bg-red-400">Delete</button>
                            <a href="./dashboard/Edit.php"><button class="bg-yellow-300 px-5 py-3 text-sm shadow-sm font-medium tracking-wider  text-yellow-600 rounded-full hover:shadow-2xl hover:bg-yellow-400">Edit</button></a>
                        </div> -->
                    </div>

                    <div class="group relative py-10">
                        <div class="relative w-full h-80 bg-white rounded-lg overflow-hidden group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-1 sm:h-64 lg:aspect-w-1 lg:aspect-h-1">
                            <img src="https://tailwindui.com/img/ecommerce-images/home-page-02-edition-02.jpg" alt="Wood table with porcelain mug, leather journal, brass pen, leather key ring, and a houseplant." class="w-full h-full object-center object-cover">
                        </div>
                        <h3 class="mt-6 text-sm text-gray-500">
                            <a href="#">
                                <span class="absolute inset-0"></span>
                                Self-Improvement
                            </a>
                        </h3>
                        <p class="text-base font-semibold text-gray-900">Journals and note-taking</p>
                        <div class="flex items-center justify-between mt-4">
                            <div class="flex items-center"><img src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=731&amp;q=80" alt="avatar" class="object-cover w-8 h-8 rounded-full"><a href="#" class="mx-3 text-sm text-gray-700 hover:underline">Alex John</a></div><span class="text-sm font-light text-gray-600">Jun 1, 2020</span>
                        </div>
                        <!-- <div class="flex justify-between md:space-x-20 space-y-10 md:space-y-0 mt-5">
                            <button class="bg-red-300 px-5 py-3 text-sm shadow-sm font-medium tracking-wider  text-red-600 rounded-full hover:shadow-2xl hover:bg-red-400">Delete</button>
                            <button class="bg-yellow-300 px-5 py-3 text-sm shadow-sm font-medium tracking-wider  text-yellow-600 rounded-full hover:shadow-2xl hover:bg-yellow-400">Edit</button>
                        </div> -->
                    </div>

                    <div class="group relative py-10">
                        <div class="relative w-full h-80 bg-white rounded-lg overflow-hidden group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-1 sm:h-64 lg:aspect-w-1 lg:aspect-h-1">
                            <img src="https://tailwindui.com/img/ecommerce-images/home-page-02-edition-03.jpg" alt="Collection of four insulated travel bottles on wooden shelf." class="w-full h-full object-center object-cover">
                        </div>
                        <h3 class="mt-6 text-sm text-gray-500">
                            <a href="#">
                                <span class="absolute inset-0"></span>
                                Travel
                            </a>
                        </h3>
                        <p class="text-base font-semibold text-gray-900">Daily commute essentials</p>
                        <div class="flex items-center justify-between mt-4">
                            <div class="flex items-center"><img src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=731&amp;q=80" alt="avatar" class="object-cover w-8 h-8 rounded-full"><a href="#" class="mx-3 text-sm text-gray-700 hover:underline">Alex John</a></div><span class="text-sm font-light text-gray-600">Jun 1, 2020</span>
                        </div>
                        <!-- <div class="flex justify-between md:space-x-20 space-y-10 md:space-y-0 mt-5">
                            <button class="bg-red-300 px-5 py-3 text-sm shadow-sm font-medium tracking-wider  text-red-600 rounded-full hover:shadow-2xl hover:bg-red-400">Delete</button>
                            <button class="bg-yellow-300 px-5 py-3 text-sm shadow-sm font-medium tracking-wider  text-yellow-600 rounded-full hover:shadow-2xl hover:bg-yellow-400">Edit</button>
                        </div> -->
                    </div>

                    <div class="group relative py-10">
                        <div class="relative w-full h-80 bg-white rounded-lg overflow-hidden group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-1 sm:h-64 lg:aspect-w-1 lg:aspect-h-1">
                            <img src="https://tailwindui.com/img/ecommerce-images/home-page-02-edition-01.jpg" alt="Desk with leather desk pad, walnut desk organizer, wireless keyboard and mouse, and porcelain mug." class="w-full h-full object-center object-cover">
                        </div>
                        <h3 class="mt-6 text-sm text-gray-500">
                            <a href="#">
                                <span class="absolute inset-0"></span>
                                Desk and Office
                            </a>
                        </h3>
                        <p class="text-base font-semibold text-gray-900">Work from home accessories</p>
                        <div class="flex items-center justify-between mt-4">
                            <div class="flex items-center"><img src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=731&amp;q=80" alt="avatar" class="object-cover w-8 h-8 rounded-full"><a href="#" class="mx-3 text-sm text-gray-700 hover:underline">Alex John</a></div><span class="text-sm font-light text-gray-600">Jun 1, 2020</span>
                        </div>
                        <!-- <div class="flex justify-between md:space-x-20 space-y-10 md:space-y-0 mt-5">
                            <button class="bg-red-300 px-5 py-3 text-sm shadow-sm font-medium tracking-wider  text-red-600 rounded-full hover:shadow-2xl hover:bg-red-400">Delete</button>
                            <button class="bg-yellow-300 px-5 py-3 text-sm shadow-sm font-medium tracking-wider  text-yellow-600 rounded-full hover:shadow-2xl hover:bg-yellow-400">Edit</button>
                        </div> -->
                    </div>

                    <div class="group relative py-10">
                        <div class="relative w-full h-80 bg-white rounded-lg overflow-hidden group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-1 sm:h-64 lg:aspect-w-1 lg:aspect-h-1">
                            <img src="https://tailwindui.com/img/ecommerce-images/home-page-02-edition-01.jpg" alt="Desk with leather desk pad, walnut desk organizer, wireless keyboard and mouse, and porcelain mug." class="w-full h-full object-center object-cover">
                        </div>
                        <h3 class="mt-6 text-sm text-gray-500">
                            <a href="#">
                                <span class="absolute inset-0"></span>
                                Desk and Office
                            </a>
                        </h3>
                        <p class="text-base font-semibold text-gray-900">Work from home accessories</p>
                        <div class="flex items-center justify-between mt-4">
                            <div class="flex items-center"><img src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=731&amp;q=80" alt="avatar" class="object-cover w-8 h-8 rounded-full"><a href="#" class="mx-3 text-sm text-gray-700 hover:underline">Alex John</a></div><span class="text-sm font-light text-gray-600">Jun 1, 2020</span>
                        </div>
                        <!-- <div class="flex justify-between md:space-x-20 space-y-10 md:space-y-0 mt-5">
                            <button class="bg-red-300 px-5 py-3 text-sm shadow-sm font-medium tracking-wider  text-red-600 rounded-full hover:shadow-2xl hover:bg-red-400">Delete</button>
                            <button class="bg-yellow-300 px-5 py-3 text-sm shadow-sm font-medium tracking-wider  text-yellow-600 rounded-full hover:shadow-2xl hover:bg-yellow-400">Edit</button>
                        </div> -->
                    </div>

                    <div class="group relative py-10">
                        <div class="relative w-full h-80 bg-white rounded-lg overflow-hidden group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-1 sm:h-64 lg:aspect-w-1 lg:aspect-h-1">
                            <img src="https://tailwindui.com/img/ecommerce-images/home-page-02-edition-01.jpg" alt="Desk with leather desk pad, walnut desk organizer, wireless keyboard and mouse, and porcelain mug." class="w-full h-full object-center object-cover">
                        </div>
                        <h3 class="mt-6 text-sm text-gray-500">
                            <a href="#">
                                <span class="absolute inset-0"></span>
                                Desk and Office
                            </a>
                        </h3>
                        <p class="text-base font-semibold text-gray-900">Work from home accessories</p>
                        <div class="flex items-center justify-between mt-4">
                            <div class="flex items-center"><img src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=731&amp;q=80" alt="avatar" class="object-cover w-8 h-8 rounded-full"><a href="#" class="mx-3 text-sm text-gray-700 hover:underline">Alex John</a></div><span class="text-sm font-light text-gray-600">Jun 1, 2020</span>
                        </div>
                        <!-- <div class="flex justify-between md:space-x-20 space-y-10 md:space-y-0 mt-5">
                            <button class="bg-red-300 px-5 py-3 text-sm shadow-sm font-medium tracking-wider  text-red-600 rounded-full hover:shadow-2xl hover:bg-red-400">Delete</button>
                            <button class="bg-yellow-300 px-5 py-3 text-sm shadow-sm font-medium tracking-wider text-yellow-600 rounded-full hover:shadow-2xl hover:bg-yellow-400">Edit</button>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<?php
include('./sections/Footer.php')
?>