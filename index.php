<?php
include('./components/head.php')
?>

<body>
    <?php
    include('./sections/navigation.php')
    ?>
    <?php
    include('./sections/Banner.php')
    ?>
    <main class="max-w-7xl mx-auto px-8 sm:px-16">
        <?php
        include('./sections/SmallCard.php')
        ?>

        <?php
        include('./sections/MediumCard.php')
        ?>

        <div class="flex items-center justify-center">
            <ul class="flex">
                <li class="mx-1 px-3 py-2 bg-gray-200 text-gray-500 rounded-lg">
                    <a class="flex items-center font-bold" href="#">
                        <span class="mx-1">previous</span>
                    </a>
                </li>
                <li class="mx-1 px-3 py-2 bg-gray-200 text-gray-700 hover:bg-gray-700 hover:text-gray-200 rounded-lg">
                    <a class="font-bold" href="#">1</a>
                </li>
                <li class="mx-1 px-3 py-2 bg-gray-200 text-gray-700 hover:bg-gray-700 hover:text-gray-200 rounded-lg">
                    <a class="font-bold" href="#">2</a>
                </li>
                <li class="mx-1 px-3 py-2 bg-gray-200 text-gray-700 hover:bg-gray-700 hover:text-gray-200 rounded-lg">
                    <a class="font-bold" href="#">3</a>
                </li>
                <li class="mx-1 px-3 py-2 bg-gray-200 text-gray-700 hover:bg-gray-700 hover:text-gray-200 rounded-lg">
                    <a class="flex items-center font-bold" href="#">
                        <span class="mx-1">Next</span>
                    </a>
                </li>
            </ul>
        </div>

        <?php
        include('./sections/LargeCard.php')
        ?>

<div class="min-w-screen flex items-center justify-center py-1">
            <div class="w-full bg-white border-t border-b mb-10 border-gray-200 px-5 py-16 md:py-24 text-gray-800 font-light">
                <div class="w-full max-w-6xl mx-auto pb-5">
                    <div class="-mx-3 md:flex items-center">
                        <div class="px-3 md:w-2/3 mb-10 md:mb-0">
                            <h1 class="text-6xl md:text-8xl font-bold mb-5 leading-tight">Stay <br class="hidden md:block">updated.</h1>
                            <h3 class="text-gray-600 mb-7 leading-tight">Subscribe now and receive the latest updates.</h3>
                            <div>
                                <span class="inline-block w-40 h-1 rounded-full bg-indigo-500"></span>
                                <span class="inline-block w-3 h-1 rounded-full bg-indigo-500 ml-1"></span>
                                <span class="inline-block w-1 h-1 rounded-full bg-indigo-500 ml-1"></span>
                            </div>
                        </div>
                        <div class="px-3 md:w-1/3">
                            <form>
                                <div class="flex mb-3">
                                    <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-email-outline text-gray-400 text-lg"></i></div>
                                    <input type="email" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" placeholder="email@example.com">
                                </div>
                                <div>
                                    <button class="block w-full bg-indigo-500 hover:bg-indigo-700 focus:bg-indigo-700 transition-colors text-white rounded-lg px-3 py-2 font-semibold">Subscribe now.</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- BUY ME A BEER AND HELP SUPPORT OPEN-SOURCE RESOURCES -->
        <div class="flex items-end justify-end fixed bottom-0 right-0 mb-4 mr-4 z-10">
            <div>
                <a title="Buy me a beer" href="https://www.buymeacoffee.com/arsimsejdiu" target="_blank" class="block w-16 h-16 rounded-full transition-all shadow hover:shadow-lg transform hover:scale-110 hover:rotate-12">
                    <img class="object-cover object-center w-full h-full rounded-full" src="https://i.pinimg.com/originals/60/fd/e8/60fde811b6be57094e0abc69d9c2622a.jpg" />
                </a>
            </div>
        </div>
    </main>
</body>

<?php
include('./sections/Footer.php')
?>