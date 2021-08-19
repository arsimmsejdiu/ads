<?php
include('../components/head.php')
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
                Arsim Sejdiu
            </span>
            <!-- <span class="author-subtitle">
            @frontendjoe
          </span> -->
        </span>
        <a href="../index.php"><span class="author-arrow-icon uil uil-angle-right"></span></a>
    </span>
</label>