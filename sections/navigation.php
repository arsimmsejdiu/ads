<?php
session_start();
include('./components/head.php');
require './db_connection.php';
if (isset($_SESSION['user_email']) && !empty($_SESSION['user_email'])) {
    $user_email = $_SESSION['user_email'];
    $get_user_data = mysqli_query($db_connection, "SELECT * FROM `users` WHERE user_email = '$user_email'");
    $userData =  mysqli_fetch_assoc($get_user_data);
}
?>

<header class="sticky top-0 z-50 grid grid-cols-3 bg-white shadow-md p-5 md:px-10">

    <div class="relative flex items-center w-20 h-10 cursor-pointer my-auto">
        <a href="index.php"><img src="images/logo.png" alt="logo" /></a>
    </div>

    <div class="flex items-center md:border-2 rounded-full py-2 md:shadow-sm">
        <input class="flex-grow pl-5 bg-transparent outline-none text-gray-400 placeholder-gray-400" type="text" placeholder="Start your search" />
        <!-- <img class="hidden md:inline-flex h-8 bg-red-400 text-white rounded-full p-2 cursor-pointer md:mx-2" src="assets/images/search.png" alt="logo" /> -->
        <div class="hidden md:inline-flex items-center h-8 bg-red-400 text-white rounded-full p-2 cursor-pointer md:mx-2">
            <i class="ri-search-eye-line"></i>
        </div>

    </div>

    <div class="flex space-x-3 items-center justify-end text-gray-500 hover:text-gray-400">
        <div class='flex space-x-7 items-center justify-end text-gray-500 hover:text-gray-400 cursor-pointer md:w-120 '>
            <?php
            if (isset($_SESSION['user_email'])) {
                echo "<p className='hidden sm:hidden md:inline cursor-pointer font-bold'>Favorites <i class='ri-heart-line'></i></p>";
                echo "<a href='dashboard/MySpace.php' class='flex items-center justify-center px-4 py-2 bg-blue-300 rounded-lg shadow-xs cursor-pointer hover:bg-blue-500 hover:text-gray-100'>";
                echo "<div>";
                echo "<button class='text-sm font-medium ml-2 '>";
                echo "Dashboard";
                echo "</button>";
                echo "</div>";
                echo "</a>";
            }
            ?>
            <?php
            if (isset($_SESSION['user_email'])) {

                echo "<div>";
                echo "<h4 class='flex items-center justify-center text-sm font-bold text-indigo-600'>Hi " . $userData['user_name'] . ",";
                echo "<a href='logout.php'>";
                echo "<button class='text-sm font-semibold text-red-300 hover:text-red-500 flex items-center text-xs font-medium ml-2 '>";
                echo "Signout";
                echo "</button>";
                echo "</a>";
                echo "</h4>";
                echo "<h1 class='text-md font-bold text-indigo-900 mt-'>Welcome back!!!</h1>";
                echo "</div>";
            } else {
                echo "<a href='signin.php' class='border-2 border-green-600 rounded-lg px-5 py-2 text-green-700 cursor-pointer hover:bg-green-600 hover:text-green-200'>";
                echo "<div class='flex justify-center items-center'>";
                echo "<i class='ri-user-line h-6 cursor-pointer'></i>";
                echo "<button class='text-sm font-medium ml-2 '>";
                echo "Signin";
                echo "</button>";
                echo "</div>";
                echo "</a>";
            }
            ?>
        </div>
    </div>

</header>