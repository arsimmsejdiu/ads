<?php
session_start();
if (!isset($_SESSION['user_email']))
    header('Location: ../index.php');
include('../components/head.php');
include('../components/headDash.php');
include('../db_connection.php');
?>

<?php
if (isset($_POST['submit'])) {
    //getting the post values
    $title = addslashes(htmlspecialchars($_POST['title']));
    $description = addslashes(htmlspecialchars($_POST['description']));
    $category = addslashes(htmlspecialchars($_POST['category']));
    $price = addslashes(htmlspecialchars($_POST['price']));
    $creation_date = addslashes(htmlspecialchars($_POST['creation_date']));
    $city = addslashes(htmlspecialchars($_POST['city']));
    $user_id = addslashes(htmlspecialchars($_POST['user_id']));

    // Query for data insertion
    $query = mysqli_query($db_connection, "INSERT INTO products(title, description, category, price, creation_date, city, user_id) VALUES('$title', '$description', '$category', '$price', '$creation_date', '$city', '$user_id')");
    if ($query) {
        echo "<script type='text/javascript'> document.location ='home.php'; </script>";
    } else {
        echo "<script>alert('Something Went Wrong. Please try again');</script>";
    }
}
?>

<body>
    <?php
    include('./TopNav.php')
    ?>

    <?php
    include('./SideNav.php')
    ?>


    <div class="flex bg-gray-100 items-center justify-center mt-32 mb-32">
        <div class="grid bg-gray-200 rounded-lg shadow-xl w-11/12 md:w-9/12 lg:w-1/2">
            <div class="flex justify-center py-4">
                <div class="flex bg-purple-200 rounded-full md:p-4 p-2 border-2 border-purple-300">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                    </svg>
                </div>
            </div>

            <div class="flex justify-center">
                <div class="flex">
                    <h1 class="text-gray-600 font-bold md:text-2xl text-xl">Crate Your Announcement</h1>
                </div>
            </div>

            <form enctype="multipart/form-data" method="POST">
                <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id'] ?>" required />
                <input type="hidden" name="creation_date" value="<?php echo date('d/m/Y'); ?>" required />

                <div class="grid grid-cols-1 mt-5 mx-7 hover:border-purple-300">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Title</label>
                    <input name="title" class="text-gray-500 py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 hover:border-purple-500 focus:border-transparent" type="text" placeholder="Write the title here ... " />
                </div>

                <div class="grid grid-cols-1 mt-5 mx-7">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Description</label>
                    <input name="description" class="text-gray-500 py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 hover:border-purple-300 focus:border-transparent" type="text" placeholder="Write the description here ... " />
                </div>

                <div class="grid grid-cols-1 mt-5 mx-7">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Choose a Category ... </label>
                    <select name="category" class="text-gray-500 py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 hover:border-purple-300 focus:border-transparent" placeholder="Choose ... " required>
                        <option>Business</option>
                        <option>Finance</option>
                        <option>Economics</option>
                        <option>Software Engineering</option>
                        <option>Web Development</option>
                        <option>Hardware</option>
                        <option>Phones</option>
                    </select>
                </div>

                <div class="grid grid-cols-1 mt-5 mx-7">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Place</label>
                    <input name="city" class="text-gray-500 py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 hover:border-purple-300 focus:border-transparent" type="text" placeholder="Place here ... " />
                </div>

                <div class="grid grid-cols-1 mt-5 mx-7">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Price</label>
                    <div class="flex flex-row">
                        <span class="flex items-center bg-grey-lighter rounded rounded-r-none px-3 font-bold text-gray-600">$</span>
                        <input name="price" type="number" placeholder="Give your price ... " class="text-gray-500 py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 hover:border-purple-300 focus:border-transparent">
                    </div>
                </div>

                <!-- <div class="grid grid-cols-1 mt-5 mx-7">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Select Date</label>
                    <input class="text-gray-500 py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 text-gray-400 focus:outline-none focus:ring-2 focus:ring-purple-600 hover:border-purple-300 focus:border-transparent" type="date" id="start" min='<?php echo date("Y-m-d"); ?>' value='<?php echo date("Y-m-d"); ?>' placeholder="Pick a Date ... " />
                </div> -->

                <div class="grid grid-cols-1 mt-5 mx-7">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold mb-1">Upload Photo</label>
                    <div class='flex items-center justify-center w-full'>
                        <label class='flex flex-col border-4 border-dashed w-full h-32 hover:bg-gray-100 hover:border-purple-300 group'>
                            <div class='flex flex-col items-center justify-center pt-7'>
                                <svg class="w-10 h-10 text-purple-400 group-hover:text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                                <p class='lowercase text-sm text-gray-400 group-hover:text-purple-600 pt-1 tracking-wider'>Select a photo</p>
                            </div>
                            <input type='file' name="image" class="hidden" />
                        </label>
                    </div>
                </div>

                <div class='flex items-center justify-center  md:gap-8 gap-4 pt-5 pb-5'>
                    <a href="MySpace.php"><button class='w-auto bg-gray-500 hover:bg-gray-700 rounded-lg shadow-xl font-medium text-white px-4 py-2'>Cancel</button></a>
                    <button type="submit" name="submit" class='w-auto bg-purple-500 hover:bg-purple-700 rounded-lg shadow-xl font-medium text-white px-4 py-2'>Create</button>
                </div>
            </form>


        </div>
    </div>

    <!-- <?php
            // echo "<script>console.log(' " . $_SESSION['user_email'] . "' );</script>";
            // echo "<script>console.log(' " . $_SESSION['user_id'] . "' );</script>";
            // echo "<script>console.log(' " . $_POST['title'] . "' );</script>";
            // echo "<script>console.log(' " . $_POST['description'] . "' );</script>";
            // echo "<script>console.log(' " . $_POST['category'] . "' );</script>";
            // echo "<script>console.log(' " . $_POST['city'] . "' );</script>";
            // echo "<script>console.log(' " . $_POST['price'] . "' );</script>";
            // echo "<script>console.log(' " . $_POST['image'] . "' );</script>";
            ?> -->


</body>