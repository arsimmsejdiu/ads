<?php
include('../components/head.php');
if (isset($_SESSION['user_email']) && !empty($_SESSION['user_email'])) {

    $user_email = $_SESSION['user_email'];
    $get_user_data = mysqli_query($db_connection, "SELECT * FROM `users` WHERE user_email = '$user_email'");
    $userData =  mysqli_fetch_assoc($get_user_data);
} else {
    header('Location: signin.php');
    exit;
}
?>

<header class="fixed-topbar">
    <div class="search-wrapper">
        <input class="search-input" placeholder="Search" />
        <button class="search-button uil uil-search"></button>
    </div>
</header>

<label for="global-input" class="fixed-burger">
    <input type="checkbox" id="global-input" name="global-input" />
    <div class="fixed-overlay"></div>
    <aside class="fixed-drawer">
        Sidebar
    </aside>
    <span class="author-block">
        <img class="author-img" src="../assets/images/hacker.png" />
        <span class="author-stack">
            <span class="author-title">
                <?php echo $userData['user_name']; ?>
            </span>
            <!-- <span class="author-subtitle">
            @frontendjoe
          </span> -->
        </span>
        <a href="../index.php"><span class="author-arrow-icon uil uil-angle-right"></span></a>
    </span>
</label>